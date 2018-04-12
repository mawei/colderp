<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Welcome extends Front_Controller {
	
	function __construct()
	{
		date_default_timezone_set("Asia/Shanghai");

		parent::__construct();
		$this->load->model(array('stock_model'));
		$this->load->model(array('address_model'));
		$this->load->model(array('customer_model'));
		$this->load->model(array('sale_model'));
		$this->load->model(array('saledetail_model'));
		$this->load->model(array('pocket_model'));
		$this->load->model(array('product_model'));


		$this->customer = null;
	}
	
	function index($brand='',$series='')
	{

		$this->is_login();
		if($this->customer['customer_type'] == '普通客户')
		{
			$query = "select t2.*,t1.stock_id,t1.small_price as price,t1.number,t1.zhi_number,t1.number_per_package from `t_aci_stock` t1 left join `t_aci_product` t2 on t1.product_id=t2.product_id where t1.is_on_small = '是'";
			if($brand != ''){
				$query .= " and brand='{$brand}'";
			}
			if($series != ''){
				$query .= " and series='{$series}'";
			}
			$data = $this->db->query($query)->result_array();
			// $data = $this->stock_model->select($q);
			$all_brand = $this->db->query("select distinct t2.brand from `t_aci_stock` t1 left join `t_aci_product` t2 on t1.product_id=t2.product_id  where t1.is_on_small = '是' group by t2.brand")->result_array();
			$all_series = $this->db->query("select distinct t2.series from `t_aci_stock` t1 left join `t_aci_product` t2 on t1.product_id=t2.product_id  where t1.is_on_small = '是' and brand='{$brand}' group by t2.series")->result_array();
			$cart = $this->session->userdata('cart');
			if($cart == null)
			{
				$cart = array();
			}
			foreach ($data as $key => $value) {
				$data[$key]['number'] = $data[$key]['number']*$data[$key]['number_per_package'] + $data[$key]['zhi_number'];
				$data[$key]['unit'] = "支";
			}
		}else{
			$query = "select t2.*,t1.stock_id,t1.big_price as price,t1.number,t1.zhi_number,t1.number_per_package from `t_aci_stock` t1 left join `t_aci_product` t2 on t1.product_id=t2.product_id where t1.is_on_big= '是'";
			if($brand != ''){
				$query .= " and brand='{$brand}'";
			}
			if($series != ''){
				$query .= " and series='{$series}'";
			}
			$data = $this->db->query($query)->result_array();
			// $data = $this->stock_model->select($q);
			$all_brand = $this->db->query("select distinct t2.brand from `t_aci_stock` t1 left join `t_aci_product` t2 on t1.product_id=t2.product_id  where t1.is_on = '是' group by t2.brand")->result_array();
			$all_series = $this->db->query("select distinct t2.series from `t_aci_stock` t1 left join `t_aci_product` t2 on t1.product_id=t2.product_id  where t1.is_on = '是' and brand='{$brand}' group by t2.series")->result_array();
			$cart = $this->session->userdata('cart');
			if($cart == null)
			{
				$cart = array();
			}
			foreach ($data as $key => $value) {
				$data[$key]['number'] = $data[$key]['number']*$data[$key]['number_per_package'] + $data[$key]['zhi_number'];
				$data[$key]['unit'] = "支";
			}
		}


		$this->view('index',array('data'=>$data,'cart'=>$cart,'all_brand'=>$all_brand,'all_series'=>$all_series,'brand'=>$brand,'series'=>$series));
	}
	
	function user()
	{
		$this->is_login();
		$this->view('user',array('user'=>$this->customer));
	}


	function addcart(){
		$cart = $this->session->userdata('cart');
		$stock_id = $this->input->post("stock_id");
		$number = $this->input->post("number");
		// if($cart != null && array_key_exists($stock_id,$cart))
		// {
		// 	$cart[$stock_id] = $number + $cart[$stock_id];
		// }else{
		// 	$cart[$stock_id] = $number;
		// }
		$cart[$stock_id] = $number;
		$this->session->set_userdata('cart',$cart);
	}

	function buy(){
		$this->is_login();
		

	}

	function address()
	{
		$this->is_login();
		$q['customer_id'] = $this->customer['customer_id'];
		$q['is_delete'] = 0;
		$address = $this->address_model->select($q);
		$this->view('address',array('address'=>$address));
	}

	function choose_address()
	{
		$this->is_login();
		$cart = $this->session->userdata('cart');

		$q['customer_id'] = $this->customer['customer_id'];
		$q['is_delete'] = 0;
		$address = $this->address_model->select($q);


		$this->view('choose_address',array('address'=>$address));
	}

	function select_address()
	{
		$this->is_login();
		$address_id = $this->input->get("address_id");

		$cart = $this->session->userdata('cart');
		// $data['order_id'] = date('YmdHis').rand(100,999);
		$data['customer_id'] = $this->customer['customer_id'];
		$data['time'] = date('Y-m-d H:i:s');
		$data['address_id'] = $address_id;
		$sale_id = $this->sale_model->insert($data);

		if($cart != null)
		{
			$this->session->set_userdata('sale_id',$sale_id);

			foreach ($cart as $stock_id => $number) {
				if($number > 0){
					$data2['stock_id'] = $stock_id;
					$data2['number'] = $number;
					$data2['price'] = $this->stock_model->select(array('order_number'=>$data['stock_id']))[0]['price'];
					$data2['sale_id'] = $sale_id;
					$data2['unit'] = $this->customer['customer_type'] == '普通客户' ? '支':'箱';
					$this->saledetail_model->insert($data2);
			
					if($this->customer['customer_type'] == '普通客户')
					{
						$this->reduce_stock_by_small($stock_id,$number);
					}else{
						$this->reduce_stock($stock_id,$number);
					}
				}
			}
		}
		$this->session->unset_userdata('cart');
		redirect("welcome/orderdetail?sale_id=".$this->session->userdata('sale_id'));
	}

	function add_address()
	{
		$this->is_login();
		if(IS_POST)
		{
			$data['customer_id'] = $this->customer['customer_id'];
			$data['name'] = $this->input->post("name");
			$data['telephone'] = $this->input->post("telephone");
			$data['address'] = $this->input->post("address");
			$data['area'] = $this->input->post("area");
			$data['is_delete'] = 0;
			$this->address_model->insert($data);
			redirect("welcome/address");
		}else{
			$this->view('add_address',array());
		}
	}

	function delete_address()
	{
		$this->is_login();
		$customer_id = $this->customer['customer_id'];
		$address_id = $this->input->get("address_id");
		$this->db->query("update `t_aci_address` set is_delete='1' where address_id={$address_id} and customer_id={$customer_id}");
		redirect("welcome/address");
	}



	function cart()
	{
		$this->is_login();


		// $data = $this->db->query("select t2.*,t1.stock_id,t1.price,t1.number,t1.zhi_number,t1.number_per_package from `t_aci_stock` t1 left join `t_aci_product` t2 on t1.product_id=t2.product_id where t1.is_on = '是'")->result_array();
		// $data = $this->stock_model->select($q);
		$cart = $this->session->userdata('cart');
		if($cart == null)
		{
			$cart = array();
		}else{
			foreach ($cart as $stock_id => $number) {
				if($number > 0){
					$stock = $this->stock_model->select(array('stock_id'=>$stock_id))[0];
					$product = $this->product_model->select(array('product_id'=>$stock['product_id']))[0];
					$data2['number'] = $number;
					$data2['image'] = $product['image'];
					$data2['stock_id'] = $stock_id;
					$data2['price'] = $stock['price'];
					$data2['name'] = $product['name'];

					// $data2['product_id'] = $product_id;
					$data2['unit'] = $this->customer['customer_type'] == '普通客户' ? '支':'箱';
					// $this->saledetail_model->insert($data2);
			
					if($this->customer['customer_type'] == '普通客户')
					{
						$this->reduce_stock_by_small($stock_id,$number);
					}else{
						$this->reduce_stock($stock_id,$number);
					}
					$cart2[$stock_id] = $data2;

				}
			}
		}

		$this->view('cart',array('data'=>$cart2,'cart'=>$cart));

	}

	function ordersuccess()
	{
		$sale_id = $this->input->get("sale_id");
		$this->view('ordersuccess',array('sale_id'=>$sale_id));
	}


	function order()
	{
		$this->is_login();
		$q['customer_id'] = $this->customer['customer_id'];
		$order = $this->db->query("select distinct sale_id,time from `t_aci_sale` where customer_id={$q['customer_id']}")->result_array();
		$data = $this->sale_model->select($q);
		$this->view('order',array('order'=>$order));
	}

	function output()
	{
		$q['sale_id'] = $this->input->get('sale_id');
		// $order = $this->db->select($q);
		$order = $this->db->query("select t4.name,t1.product_id,t1.stock_id,t1.price,t1.number,t2.address_id,t2.time,t1.sale_id,t1.unit,t4.name as customer_name 
									from t_aci_saledetail t1
									left join t_aci_sale t2 on t1.sale_id=t2.sale_id
									left join t_aci_stock t3 on t1.stock_id=t3.stock_id
									left join t_aci_product t4 on t1.product_id = t4.product_id
									left join t_aci_customer t5 on t2.customer_id = t5.customer_id
									 where t1.sale_id={$q['sale_id']}")->result_array();

		// $this->view('order',array('order'=>$order));
		// print_r($q['order_id']);

		redirect('/phpspreadsheet/phpoffice/phpspreadsheet/samples/colderp/sale.php?order='.json_encode($order));
		// print_r($result);
	}

	public static function post($url, $post_data = '', $timeout = 5){//curl  
        $ch = curl_init();  
        curl_setopt ($ch, CURLOPT_URL, $url);  
        curl_setopt ($ch, CURLOPT_POST, 1);  
        if($post_data != ''){  
            curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);  
        }  
        curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);   
        curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);  
        curl_setopt($ch, CURLOPT_HEADER, false);  
        $file_contents = curl_exec($ch);  
        curl_close($ch);  
        return $file_contents;  
    }  


	function orderdetail()
	{

		$this->is_login();
		$q['sale_id'] = $this->input->get("sale_id");

		$q['customer_id'] = $this->customer['customer_id'];
		$order = $this->db->query("select t3.*,t1.stock_id,t2.price,t1.number,t5.address_id,t5.time,t5.sale_id from `t_aci_sale` t5 left join t_aci_saledetail t1 on t1.sale_id=t5.sale_id left join  `t_aci_stock` t2 on t1.stock_id=t2.stock_id left join  `t_aci_product` t3 on t2.product_id=t3.product_id where t5.sale_id={$q['sale_id']} and t5.customer_id={$q['customer_id']}")->result_array();
		$address = $this->address_model->select(array('address_id'=>$order[0]['address_id']))[0];
		$this->view('orderdetail',array('order'=>$order,'customer'=>$this->customer,'address'=>$address));
	}



	function category()
	{
		
		$this->view('category',array());
	}

	function collection()
	{
		
		$this->view('collection',array());
	}


	function message()
	{
		
		$this->view('message',array());
	}

	function mycountapply()
	{
		
		$this->view('mycountapply',array());
	}

	function mycountdetail()
	{
		
		$this->view('mycountdetail',array());
	}

	function mywallet()
	{
		
		$this->view('mywallet',array());
	}


	function password()
	{
		
		$this->view('password',array());
	}

	function product()
	{
		
		$this->view('product',array());
	}

	function product_detail()
	{
		
		$this->view('product_detail',array());
	}

	function user_info()
	{
		$this->is_login();
		$this->view('user_info',array('customer'=>$this->customer));
	}

	function pay()
	{
		$this->is_login();
		$this->view('pay',array('customer'=>$this->customer));
	}


	function pocket()
	{
		$this->is_login();
		$this->view('pocket',array('customer'=>$this->customer));
	}

	function pocketlist()
	{
		$this->is_login();
		$pocklist = $this->pocket_model->select(array("customer_id"=>$this->customer['customer_id']));
		$this->view('pocketlist',array('pocklist'=>$pocklist));
	}


	function invite()
	{
		include("phpqrcode.php");
		$this->is_login();

		$value = base_url('welcome/register?invite='.$this->customer['telephone']); //二维码内容 
		$errorCorrectionLevel = 'L';//容错级别 
		$matrixPointSize = 11;//生成图片大小 
		$path='images/';//图片位置
		$name=md5($this->customer['telephone']).'.png';//图片名
		$file=$path.'/'.$name;
		//生成二维码图片 
		QRcode::png($value,$file, $errorCorrectionLevel, $matrixPointSize, 2); 

		$this->view('invite',array('file'=>$file));
	}


	function login(){
		if(IS_POST){
			$data['telephone'] = $this->input->post('telephone');
			$data['password'] = md5(md5($this->input->post('password')));
			$customer = $this->customer_model->select($data);
			// print_r($data);die();
			if(count($customer) == 1) {
		        $this->session->set_userdata('customer_id', $customer[0]['customer_id']);
		        // $this->customer = customer;
		        // $this->customer_id = $customer[0]['customer_id'];
		        echo 'success';
				// redirect("welcome/user");
			}else{
				// $this->cocuser_model->insert($data);
				echo '用户名或密码错误';
			}
		}else{
			$this->view('login');
		}
	}

	function register(){
		if(IS_POST){
			$data['telephone'] = $this->input->post('telephone');
			$data['invite_person'] = $this->input->post('invite_person');
			$customer = $this->customer_model->select($data);
			// print_r($data);die();
			if(count($customer) == 0) {
				$data['password'] = md5(md5($this->input->post('password')));
				$data['customer_type'] = '普通客户';
				$customer = $this->customer_model->insert($data);
		        // $this->session->set_userdata('customer_id', insert_id);
		        echo 'success';
				// redirect("welcome/user");
			}else{
				// $this->cocuser_model->insert($data);
				echo '该用户已注册';
			}
		}else{
			$invite_person = $this->input->get('invite_person');
			$this->view('register',array('invite_person'=>$invite_person));
		}
	}

	function tixian(){
		$this->is_login();
		if(IS_POST){
			$data['amount'] = '-' . $this->input->post('amount');
			if($this->customer['amount'] < $this->input->post('amount'))
			{
				echo '余额不足';
			}else{
				// print_r($data);die();
				$data['customer_id'] = $this->customer['customer_id'];
				$data['createtime'] = date('Y-m-d H:i:s');
				$data['source'] = "提现";
				$customer = $this->pocket_model->insert($data);
		        echo 'success';
			}
			
		}else{
			$this->view('tixian');
		}
	}


	function is_login()
	{	
		// var_dump($this->session->userdata('customer_id'));die();
		if(count($this->session->userdata('customer_id')) == 0)
		{
			redirect('welcome/login');
		}else{
			$data['customer_id'] = $this->session->userdata('customer_id');
			$this->customer = $this->customer_model->select($data)[0];
		}
	}
	function logout(){
		$this->session->unset_userdata('userid');
		$this->session->unset_userdata('cart');
		redirect('welcome/login');
	}


	function increase_stock($stock_id,$number){
		$this->db->query("update `t_aci_stock` set number=number+{$number} where stock_id={$stock_id}");
	}


	function reduce_stock($stock_id,$number){
		$this->db->query("update `t_aci_stock` set number=number-{$number} where stock_id={$stock_id}");
	}



	function increase_stock_small($stock_id,$number){
		$this->db->query("update `t_aci_stock` set number=number+{$number} where stock_id={$stock_id}");
	}


	function reduce_stock_by_small($stock_id,$number){
		$stock = $this->stock_model->select(array('stock_id'=>$stock_id))[0];
		$number_per_package = $stock["number_per_package"];
		if($number > $stock["zhi_number"])
		{
			$xiang_number = $stock["number"] - ceil($number/$number_per_package);
			$zhi_number = ($stock["number"] - ceil($number/$number_per_package)) * $number_per_package + $stock["zhi_number"];
		}else{
			$xiang_number = $stock["number"];
			$zhi_number = $stock["zhi_number"] - $number;
		}
		$this->db->query("update `t_aci_stock` set number={$xiang_number},zhi_number={$zhi_number} where stock_id={$stock_id}");
	}


}