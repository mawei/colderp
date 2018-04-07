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
 * 项目名称：报损 
 * 版本号：1 
 * 最后生成时间：2018-03-12 13:02:36 
 */
class Loss extends Admin_Controller {
	
    var $method_config;
    function __construct()
	{
		parent::__construct();
		$this->load->model(array('loss_model','vendor_model','Product_model'));
        $this->load->helper(array('auto_codeIgniter_helper','array'));
  
  
        //保证排序安全性
        $this->method_config['sort_field'] = array(
										'order_number'=>'order_number',
										'brand'=>'brand',
										'name'=>'name',
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
        
        $orderby = "loss_id desc";
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
        	$data_list = $this->loss_model->listinfo($where,'*',$orderby , $page_no, $this->loss_model->page_size,'',$this->loss_model->page_size,page_list_url('adminpanel/loss/index',true));
        if($data_list)
        {
            	foreach($data_list as $k=>$v)
            	{
					$data_list[$k] = $this->_process_datacorce_value($v);
            	}
        }
    	$this->view('lists',array('require_js'=>true,'data_info'=>$_arr,'order'=>$order,'dir'=>$dir,'data_list'=>$data_list,'pages'=>$this->loss_model->pages));
    }
    
    /**
     * 处理数据源结
     * @param array v 
     * @return array
     */
    function _process_datacorce_value($v,$is_edit_model=false)
    {
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
			$_arr['order_number'] = isset($_POST["order_number"])?trim(safe_replace($_POST["order_number"])):exit(json_encode(array('status'=>false,'tips'=>'入库单号必填')));
			if($_arr['order_number']=='')exit(json_encode(array('status'=>false,'tips'=>'入库单号必填')));
			// $_arr['brand'] = isset($_POST["brand"])?trim(safe_replace($_POST["brand"])):'';
			// $_arr['series'] = isset($_POST["series"])?trim(safe_replace($_POST["series"])):'';
			// $_arr['name'] = isset($_POST["name"])?trim(safe_replace($_POST["name"])):'';
            // $_arr['code'] = isset($_POST["code"])?trim(safe_replace($_POST["code"])):'';
            $_arr['product_id'] = isset($_POST["product_id"])?trim(safe_replace($_POST["product_id"])):'';
			$_arr['unit'] = isset($_POST["unit"])?trim(safe_replace($_POST["unit"])):exit(json_encode(array('status'=>false,'tips'=>'单位必填')));
			if($_arr['unit']=='')exit(json_encode(array('status'=>false,'tips'=>'单位必填')));
			$_arr['number'] = isset($_POST["number"])?trim(safe_replace($_POST["number"])):exit(json_encode(array('status'=>false,'tips'=>'数量必填')));
			if($_arr['number']=='')exit(json_encode(array('status'=>false,'tips'=>'数量必填')));
			if($_arr['number']!=''){
			if(!is_number($_arr['number']))exit(json_encode(array('status'=>false,'tips'=>'数量不符合格式要求')));
			}
			$_arr['model'] = isset($_POST["model"])?trim(safe_replace($_POST["model"])):'';
			
            $new_id = $this->loss_model->insert($_arr);
            $this->db->query("update t_aci_stock set number=number-{$_arr['number']} where order_number={$_arr['order_number']} and product_id={$_arr['product_id']}");
            if($new_id)
            {
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
        	$this->view('edit',array('require_js'=>true,'is_edit'=>false,'id'=>0,'vendors'=>$vendors,'data_info'=>$this->loss_model->default_info()));
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
        $data_info =$this->loss_model->get_one(array('loss_id'=>$id));
        if(!$data_info)$this->showmessage('信息不存在');
        $status = $this->loss_model->delete(array('loss_id'=>$id));
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
			$where = $this->loss_model->to_sqls($pidarr, '', 'loss_id');
			$status = $this->loss_model->delete($where);
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
        
        $data_info =$this->loss_model->get_one(array('loss_id'=>$id));
    	//如果是AJAX请求
    	if($this->input->is_ajax_request())
		{
        	if(!$data_info)exit(json_encode(array('status'=>false,'tips'=>'信息不存在')));
        	//接收POST参数
			$_arr['order_number'] = isset($_POST["order_number"])?trim(safe_replace($_POST["order_number"])):exit(json_encode(array('status'=>false,'tips'=>'入库单号必填')));
			if($_arr['order_number']=='')exit(json_encode(array('status'=>false,'tips'=>'入库单号必填')));
			$_arr['brand'] = isset($_POST["brand"])?trim(safe_replace($_POST["brand"])):'';
			$_arr['series'] = isset($_POST["series"])?trim(safe_replace($_POST["series"])):'';
			$_arr['name'] = isset($_POST["name"])?trim(safe_replace($_POST["name"])):'';
			$_arr['code'] = isset($_POST["code"])?trim(safe_replace($_POST["code"])):'';
			$_arr['unit'] = isset($_POST["unit"])?trim(safe_replace($_POST["unit"])):exit(json_encode(array('status'=>false,'tips'=>'单位必填')));
			if($_arr['unit']=='')exit(json_encode(array('status'=>false,'tips'=>'单位必填')));
			$_arr['number'] = isset($_POST["number"])?trim(safe_replace($_POST["number"])):exit(json_encode(array('status'=>false,'tips'=>'数量必填')));
			if($_arr['number']=='')exit(json_encode(array('status'=>false,'tips'=>'数量必填')));
			if($_arr['number']!=''){
			if(!is_number($_arr['number']))exit(json_encode(array('status'=>false,'tips'=>'数量不符合格式要求')));
			}
			$_arr['model'] = isset($_POST["model"])?trim(safe_replace($_POST["model"])):'';
			
            $status = $this->loss_model->update($_arr,array('loss_id'=>$id));
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
 
  
     /**
     * 只读查看数据
     * @param int id 
     * @return void
     */
    function readonly($id=0)
    {
    	$id = intval($id);
        $data_info =$this->loss_model->get_one(array('loss_id'=>$id));
        if(!$data_info)$this->showmessage('信息不存在');
		$data_info = $this->_process_datacorce_value($data_info);
        
        $this->view('readonly',array('require_js'=>true,'data_info'=>$data_info));
    }

}

// END loss class

/* End of file loss.php */
/* Location: ./loss.php */
?>