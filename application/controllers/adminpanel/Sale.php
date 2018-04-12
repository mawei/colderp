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
 * 项目名称：销售 
 * 版本号：1 
 * 最后生成时间：2018-03-12 13:58:19 
 */
class Sale extends Admin_Controller {
	
    var $method_config;
    function __construct()
	{
		parent::__construct();
		$this->load->model(array('Customer_model','sale_model','saledetail_model','vendor_model','Product_model'));
        $this->load->helper(array('auto_codeIgniter_helper','array'));
  
	 	$this->method_config['coldcustomer_datasource'] = $this->Customer_model->coldcustomer_datasource();
	}
    
    /**
     * 默认首页列表
     * @param int $pageno 当前页码
     * @return void
     */
    function index($page_no=0,$sort_id=0)
    {
    	$page_no = max(intval($page_no),1);
        
        $orderby = "sale_id desc";
        $dir = $order=  NULL;
		        
        $where ="";
        $_arr = NULL;//从URL GET
        	$data_list = $this->sale_model->listinfo($where,'*',$orderby , $page_no, $this->sale_model->page_size,'',$this->sale_model->page_size,page_list_url('adminpanel/sale/index',true));
        if($data_list)
        {
            	foreach($data_list as $k=>$v)
            	{
					$data_list[$k] = $this->_process_datacorce_value($v);
            	}
        }
    	$this->view('lists',array('require_js'=>true,'data_info'=>$_arr,'order'=>$order,'dir'=>$dir,'data_list'=>$data_list,'pages'=>$this->sale_model->pages));
    }
    
    /**
     * 处理数据源结
     * @param array v 
     * @return array
     */
    function _process_datacorce_value($v,$is_edit_model=false)
    {
			if(isset($v['customer_id']))
            {
            	//如果编辑模式
            	if($is_edit_model)
            		$v['customer_id_text'] = $this->Customer_model->coldcustomer_value($v["customer_id"]);                    
                else
                	$v['customer_id'] = $this->Customer_model->coldcustomer_value($v["customer_id"]);                    
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
			$_arr['customer_id'] = isset($_POST["customer_id"])?trim(safe_replace($_POST["customer_id"])):'';
			$_arr['address_id'] = isset($_POST["address_id"])?trim(safe_replace($_POST["address_id"])):'';
			$_arr['status'] = isset($_POST["status"])?trim(safe_replace($_POST["status"])):'';
			$_arr['time'] = date('Y-m-d H:i:s');

			
            $new_id = $this->sale_model->insert($_arr);
            if($new_id)
            {
				exit(json_encode(array('status'=>true,'tips'=>'信息新增成功','new_id'=>$new_id)));
            }else
            {
            	exit(json_encode(array('status'=>false,'tips'=>'信息新增失败','new_id'=>0)));
            }
        }else
        {
        	$this->view('edit',array('require_js'=>true,'is_edit'=>false,'id'=>0,'data_info'=>$this->sale_model->default_info()));
        }
    }
     /**
     * 删除单个数据
     * @param int id 
     * @return void
     */
    function delete_one($id=0)
    {
    	$id = intval($id);
        $data_info =$this->sale_model->get_one(array('sale_id'=>$id));
        if(!$data_info)$this->showmessage('信息不存在');
        $status = $this->sale_model->delete(array('sale_id'=>$id));
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
			$where = $this->sale_model->to_sqls($pidarr, '', 'sale_id');
			$status = $this->sale_model->delete($where);
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
        
        $data_info =$this->sale_model->get_one(array('sale_id'=>$id));
    	//如果是AJAX请求
    	if($this->input->is_ajax_request())
		{
        	if(!$data_info)exit(json_encode(array('status'=>false,'tips'=>'信息不存在')));
        	//接收POST参数
			$_arr['customer_id'] = isset($_POST["customer_id"])?trim(safe_replace($_POST["customer_id"])):'';
			$_arr['address_id'] = isset($_POST["address_id"])?trim(safe_replace($_POST["address_id"])):'';
			$_arr['status'] = isset($_POST["status"])?trim(safe_replace($_POST["status"])):'';
			$_arr['time'] = date('Y-m-d H:i:s');
			
            $status = $this->sale_model->update($_arr,array('sale_id'=>$id));
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
        	$this->view('edit',array('require_js'=>true,'data_info'=>$data_info,'is_edit'=>true,'id'=>$id));
        }
    }

    function adddetail()
    {
        //接收POST参数


        $_arr['brand'] = isset($_POST["brand"])?trim(safe_replace($_POST["brand"])):'';
        $_arr['series'] = isset($_POST["series"])?trim(safe_replace($_POST["series"])):'';
        $_arr['vendor_id'] = isset($_POST["vendor_id"])?trim(safe_replace($_POST["vendor_id"])):'';
        $_arr['stock_id'] = isset($_POST["stock_id"])?trim(safe_replace($_POST["stock_id"])):'';
        $_arr['price'] = isset($_POST["price"])?trim(safe_replace($_POST["price"])):'';
        $_arr['unit'] = isset($_POST["unit"])?trim(safe_replace($_POST["unit"])):'';
        $_arr['number'] = isset($_POST["number"])?trim(safe_replace($_POST["number"])):'';
        $_arr['product_id'] = isset($_POST["product_id"])?trim(safe_replace($_POST["product_id"])):'';
        $_arr['sale_id'] = isset($_POST["sale_id"])?trim(safe_replace($_POST["sale_id"])):'';
        $_arr['sale_type'] = isset($_POST["sale_type"])?trim(safe_replace($_POST["sale_type"])):'';

        // print($_arr);die();

        $new_id = $this->saledetail_model->insert($_arr);
        if($_arr['sale_type'] == '销售')
        {
            $this->db->query("update t_aci_stock set number=number-{$_arr['number']} where order_number={$_arr['stock_id']} and product_id={$_arr['product_id']}");
        }else if($_arr['sale_type'] == '销售退货'){
            $this->db->query("update t_aci_stock set number=number+{$_arr['number']} where order_number={$_arr['stock_id']} and product_id={$_arr['product_id']}");

        }
        

        if($new_id)
        {
            exit(json_encode(array('status'=>true,'tips'=>'信息新增成功','new_id'=>$new_id)));
        }else
        {
            exit(json_encode(array('status'=>false,'tips'=>'信息新增失败','new_id'=>0)));
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
        $data_info =$this->sale_model->get_one(array('sale_id'=>$id));
        if(!$data_info)$this->showmessage('信息不存在');
		$data_info = $this->_process_datacorce_value($data_info);
        // $saledetails = $this->saledetail_model->select(array('sale_id'=>$data_info['sale_id']));
        $saledetails = $this->db->query("select t1.*,t2.name as vendor_name,t3.name as product_name from t_aci_saledetail t1 left join t_aci_vendor t2 on t1.vendor_id=t2.vendor_id left join t_aci_product t3 on t1.product_id = t3.product_id where t1.sale_id={$data_info['sale_id']}")->result_array();

        $stock_id = $this->session->userdata('stock_id');
        $vendors = $this->vendor_model->select();
        $products = $this->Product_model->select();
        // $this->view('edit',array('require_js'=>true,'is_edit'=>false,'vendors'=>$vendors,'id'=>0,'stock_id'=>$stock_id,'products'=>$products));
        $this->view('readonly',array('require_js'=>true,'data_info'=>$data_info,'saledetails'=>$saledetails,'vendors'=>$vendors,'stock_id'=>$stock_id,'products'=>$products,'id'=>$id));
    }

}

// END sale class

/* End of file sale.php */
/* Location: ./sale.php */
?>