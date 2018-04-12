<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * AutoCodeIgniter.com
 *
 * 基于CodeIgniter核心模块自动生成程序
 *
 * 源项目		AutoCodeIgniter
 * 作者：		AutoCodeIgniter.com Dev Team EMAIL:hubinjie@outlook.com QQ:5516448
 * 版权：		Copyright (c) 2015 , AutoCodeIgniter com.
 * 项目名称：进货 
 * 版本号：1 
 * 最后生成时间：2018-03-12 12:27:42 
 */
class Purchase extends Admin_Controller {
	
    var $method_config;
    function __construct()
	{
		parent::__construct();
        $this->load->library('session');

		$this->load->model(array('Product_model','purchase_model','vendor_model','stock_model'));
        $this->load->helper(array('auto_codeIgniter_helper','array'));
  
  
        //保证排序安全性
        $this->method_config['sort_field'] = array(
										'product_id'=>'product_id',
										'price'=>'price',
										'time'=>'time',
										'number'=>'number',
										'unit'=>'unit',
										);
	 	$this->method_config['cold_product_datasource'] = $this->Product_model->cold_product_datasource();
	}
    
    /**
     * 默认首页列表
     * @param int $pageno 当前页码
     * @return void
     */
    function index($page_no=0,$sort_id=0)
    {
    	$page_no = max(intval($page_no),1);
        
        $orderby = "purchase_id desc";
        $dir = $order=  NULL;
		$order=isset($_GET['order'])?safe_replace(trim($_GET['order'])):'';
		$dir=isset($_GET['dir'])?safe_replace(trim($_GET['dir'])):'asc';
        
        if(trim($order)!="")
        {
        	//如果找到得
        	if(isset($this->method_config['sort_field'][strtolower($order)]))
            {
            	if(strtolower($dir)=="asc")
            		$orderby = $this->method_config['sort_field'][strtolower($order)]." asc," .$orderby;
                 else
            		$orderby = $this->method_config['sort_field'][strtolower($order)]." desc," .$orderby;
            }
        }
                
        $where ="";
        $_arr = NULL;//从URL GET
        if (isset($_GET['dosubmit'])) {
        	$where_arr = NULL;
		        
			$_arr['product_id'] = isset($_GET["product_id"])?trim(safe_replace($_GET["product_id"])):'';
        	if($_arr['product_id']!="") $where_arr[] = "product_id = '".$_arr['product_id']."'";
   
        	if($where_arr)$where = implode(" and ",$where_arr);
        }

        	$data_list = $this->purchase_model->listinfo($where,'*',$orderby , $page_no, $this->purchase_model->page_size,'',$this->purchase_model->page_size,page_list_url('adminpanel/purchase/index',true));
        if($data_list)
        {
            	foreach($data_list as $k=>$v)
            	{
					$data_list[$k] = $this->_process_datacorce_value($v);
            	}
        }

        $vendors = $this->vendor_model->select();
        $vendor_id = $this->session->userdata('vendor_id');
        $stock_id = $this->session->userdata('stock_id');

        // $this->view('edit',array('require_js'=>true,'is_edit'=>false,'vendors'=>$vendors,'id'=>0,'stock_id'=>$stock_id,'products'=>$products));

    	$this->view('lists',array('require_js'=>true,'data_info'=>$_arr,'vendor_id'=>$vendor_id,'vendors'=>$vendors,'order'=>$order,'dir'=>$dir,'data_list'=>$data_list,'stock_id'=>$stock_id,'pages'=>$this->purchase_model->pages));
    }
    
    /**
     * 处理数据源结
     * @param array v 
     * @return array
     */
    function _process_datacorce_value($v,$is_edit_model=false)
    {
			if(isset($v['product_id']))
            {
            	//如果编辑模式
            	if($is_edit_model)
            		$v['product_id_text'] = $this->Product_model->cold_product_value($v["product_id"]);                    
                else
                	$v['product_id'] = $this->Product_model->cold_product_value($v["product_id"]);                    
             }
                    
         return $v;
    }
     /**
     * 新增数据
     * @param AJAX POST 
     * @return void
     */
    function add()
    {
    	//如果是AJAX请求
    	if($this->input->is_ajax_request())
		{
        	//接收POST参数
            $_arr['product_id'] = isset($_POST["product_id"])?trim(safe_replace($_POST["product_id"])):'';
            $_arr['vendor_id'] = isset($_POST["vendor_id"])?trim(safe_replace($_POST["vendor_id"])):'';
			$_arr['stock_id'] = isset($_POST["stock_id"])?trim(safe_replace($_POST["stock_id"])):'';

            $_arr['price'] = isset($_POST["price"])?trim(safe_replace($_POST["price"])):'';
            $_arr['number_per_package'] = isset($_POST["number_per_package"])?trim(safe_replace($_POST["number_per_package"])):'';
			if($_arr['price']!=''){
			if(!is_price($_arr['price']))exit(json_encode(array('status'=>false,'tips'=>'单价不符合格式要求')));
			}
			$_arr['time'] = date('Y-m-d H:i:s');
			$_arr['number'] = isset($_POST["number"])?trim(safe_replace($_POST["number"])):exit(json_encode(array('status'=>false,'tips'=>'数量必填')));
			if($_arr['number']=='')exit(json_encode(array('status'=>false,'tips'=>'数量必填')));
			if($_arr['number']!=''){
			if(!is_number($_arr['number']))exit(json_encode(array('status'=>false,'tips'=>'数量不符合格式要求')));
			}
			$_arr['unit'] = isset($_POST["unit"])?trim(safe_replace($_POST["unit"])):'';
			$_arr['rebate_percent'] = isset($_POST["rebate_percent"])?trim(safe_replace($_POST["rebate_percent"])):'';
			if($_arr['rebate_percent']!=''){
			if(!is_price($_arr['rebate_percent']))exit(json_encode(array('status'=>false,'tips'=>'返点百分比（填入百分比，如10）不符合格式要求')));
			}
			$_arr['rebate_type'] = isset($_POST["rebate_type"])?trim(safe_replace($_POST["rebate_type"])):'';
			
            $new_id = $this->purchase_model->insert($_arr);
            $stock['order_number'] = $_arr['stock_id'];
            $stock['product_id'] = $_arr['product_id'];
            $stock['price'] = $_arr['price'];
            $stock['number_per_package'] = $_arr['number_per_package'];
            $stock['number'] = $_arr['number'];
            $stock['unit'] = $_arr['unit'];
            $stock['rebate_percent'] = $_arr['rebate_percent'];
            $stock['zhi_number'] = 0;
            $stock['is_on_big'] = '否';
            $stock['is_on_small'] = '否';
            $stock['big_price'] = 0;
            $stock['small_price'] = 0;

            $this->stock_model->insert($stock);




            $amount = $_arr['price']*$_arr['number'];
            $this->db->query("update t_aci_vendor set amount=amount-{$amount} where vendor_id={$_arr['vendor_id']}");

            if($new_id)
            {
                $this->session->set_userdata('stock_id',$_arr['stock_id']);
                $this->session->set_userdata('vendor_id',$_arr['vendor_id']);

				exit(json_encode(array('status'=>true,'tips'=>'信息新增成功','new_id'=>$new_id)));
            }else
            {
            	exit(json_encode(array('status'=>false,'tips'=>'信息新增失败','new_id'=>0)));
            }
        }else
        {
            $stock_id = $this->session->userdata('stock_id');
            $vendors = $this->vendor_model->select();
            $products = $this->Product_model->select();
        	$this->view('edit',array('require_js'=>true,'is_edit'=>false,'vendors'=>$vendors,'id'=>0,'stock_id'=>$stock_id,'products'=>$products));
        }
    }

    function get_options($type,$result_type,$key)
    {
        $key = urldecode($key);
        $products = $this->Product_model->select(array($type=>$key));
        $result = array();
        foreach ($products as $key => $value) {
            # code...
            if($result_type == 'product_id')
            {
                $result[$value[$result_type]] = $value['name'];
            }else{
                $result[$value[$result_type]] = $value[$result_type];
            }
            
        }
        echo json_encode($result);
    }

     /**
     * 删除单个数据
     * @param int id 
     * @return void
     */
    function delete_one($id=0)
    {
    	$id = intval($id);
        $data_info =$this->purchase_model->get_one(array('purchase_id'=>$id));
        if(!$data_info)$this->showmessage('信息不存在');
        $status = $this->purchase_model->delete(array('purchase_id'=>$id));
        if($status)
        {
        	$this->showmessage('删除成功');
        }else
        	$this->showmessage('删除失败');
    }

    /**
     * 删除选中数据
     * @param post pid 
     * @return void
     */
    function delete_all()
    {
        if(isset($_POST))
		{
			$pidarr = isset($_POST['pid']) ? $_POST['pid'] : $this->showmessage('无效参数', HTTP_REFERER);
			$where = $this->purchase_model->to_sqls($pidarr, '', 'purchase_id');
			$status = $this->purchase_model->delete($where);
			if($status)
			{
				$this->showmessage('操作成功', HTTP_REFERER);
			}else 
			{
				$this->showmessage('操作失败');
			}
		}
    }
     /**
     * 修改数据
     * @param int id 
     * @return void
     */
    function edit($id=0)
    {
    	$id = intval($id);
        
        $data_info =$this->purchase_model->get_one(array('purchase_id'=>$id));
    	//如果是AJAX请求
    	if($this->input->is_ajax_request())
		{
        	if(!$data_info)exit(json_encode(array('status'=>false,'tips'=>'信息不存在')));
        	//接收POST参数
			$_arr['product_id'] = isset($_POST["product_id"])?trim(safe_replace($_POST["product_id"])):'';
			$_arr['stock_id'] = isset($_POST["stock_id"])?trim(safe_replace($_POST["stock_id"])):'';
            $this->session->set_userdata('stock_id',$_arr['stock_id']);

			$_arr['price'] = isset($_POST["price"])?trim(safe_replace($_POST["price"])):'';
			if($_arr['price']!=''){
			if(!is_price($_arr['price']))exit(json_encode(array('status'=>false,'tips'=>'单价不符合格式要求')));
			}
			$_arr['time'] = date('Y-m-d H:i:s');
			$_arr['number'] = isset($_POST["number"])?trim(safe_replace($_POST["number"])):exit(json_encode(array('status'=>false,'tips'=>'数量必填')));
			if($_arr['number']=='')exit(json_encode(array('status'=>false,'tips'=>'数量必填')));
			if($_arr['number']!=''){
			if(!is_number($_arr['number']))exit(json_encode(array('status'=>false,'tips'=>'数量不符合格式要求')));
			}
			$_arr['unit'] = isset($_POST["unit"])?trim(safe_replace($_POST["unit"])):'';
			$_arr['rebate_percent'] = isset($_POST["rebate_percent"])?trim(safe_replace($_POST["rebate_percent"])):'';
			if($_arr['rebate_percent']!=''){
			if(!is_price($_arr['rebate_percent']))exit(json_encode(array('status'=>false,'tips'=>'返点百分比（填入百分比，如10）不符合格式要求')));
			}
			$_arr['rebate_type'] = isset($_POST["rebate_type"])?trim(safe_replace($_POST["rebate_type"])):'';
			
            $status = $this->purchase_model->update($_arr,array('purchase_id'=>$id));
            if($status)
            {
				exit(json_encode(array('status'=>true,'tips'=>'信息修改成功')));
            }else
            {
            	exit(json_encode(array('status'=>false,'tips'=>'信息修改失败')));
            }
        }else
        {
        	if(!$data_info)$this->showmessage('信息不存在');
            $data_info = $this->_process_datacorce_value($data_info,true);
            $stock_id = $this->session->userdata('stock_id');

            $vendors = $this->vendor_model->select();
            $products = $this->Product_model->select();
        	$this->view('edit',array('require_js'=>true,'data_info'=>$data_info,'vendors'=>$vendors,'is_edit'=>true,'id'=>$id));
        }
    }
 
  
     /**
     * 只读查看数据
     * @param int id 
     * @return void
     */
    function readonly($id=0)
    {
    	$id = intval($id);
        $data_info =$this->purchase_model->get_one(array('purchase_id'=>$id));
        if(!$data_info)$this->showmessage('信息不存在');
		$data_info = $this->_process_datacorce_value($data_info);
        
        $this->view('readonly',array('require_js'=>true,'data_info'=>$data_info));
    }

}

// END purchase class

/* End of file purchase.php */
/* Location: ./purchase.php */
?>