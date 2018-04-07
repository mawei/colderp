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
 * 项目名称：收货地址 
 * 版本号：1 
 * 最后生成时间：2018-03-25 16:17:26 
 */
class Address extends Admin_Controller {
	
    var $method_config;
    function __construct()
	{
		parent::__construct();
		$this->load->model(array('address_model'));
        $this->load->helper(array('auto_codeIgniter_helper','array'));
  
  
        //保证排序安全性
        $this->method_config['sort_field'] = array(
										'customer_id'=>'customer_id',
										'name'=>'name',
										);
	}
    
    /**
     * 默认首页列表
     * @param int $pageno 当前页码
     * @return void
     */
    function index($page_no=0,$sort_id=0)
    {
    	$page_no = max(intval($page_no),1);
        
        $orderby = "address_id desc";
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
			$_arr['keyword'] =isset($_GET['keyword'])?safe_replace(trim($_GET['keyword'])):'';
			if($_arr['keyword']!="") $where_arr[] = "concat(customer_id,name,telephone) like '%{$_arr['keyword']}%'";
                
		        
        
		        
        	if($where_arr)$where = implode(" and ",$where_arr);
        }

        	$data_list = $this->address_model->listinfo($where,'*',$orderby , $page_no, $this->address_model->page_size,'',$this->address_model->page_size,page_list_url('adminpanel/address/index',true));
        if($data_list)
        {
            	foreach($data_list as $k=>$v)
            	{
					$data_list[$k] = $this->_process_datacorce_value($v);
            	}
        }
    	$this->view('lists',array('require_js'=>true,'data_info'=>$_arr,'order'=>$order,'dir'=>$dir,'data_list'=>$data_list,'pages'=>$this->address_model->pages));
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
			$_arr['customer_id'] = isset($_POST["customer_id"])?trim(safe_replace($_POST["customer_id"])):exit(json_encode(array('status'=>false,'tips'=>'客户必填')));
			if($_arr['customer_id']=='')exit(json_encode(array('status'=>false,'tips'=>'客户必填')));
			$_arr['name'] = isset($_POST["name"])?trim(safe_replace($_POST["name"])):exit(json_encode(array('status'=>false,'tips'=>'姓名必填')));
			if($_arr['name']=='')exit(json_encode(array('status'=>false,'tips'=>'姓名必填')));
			$_arr['telephone'] = isset($_POST["telephone"])?trim(safe_replace($_POST["telephone"])):exit(json_encode(array('status'=>false,'tips'=>'电话必填')));
			if($_arr['telephone']=='')exit(json_encode(array('status'=>false,'tips'=>'电话必填')));
			$_arr['address'] = isset($_POST["address"])?trim(safe_replace($_POST["address"])):exit(json_encode(array('status'=>false,'tips'=>'地址必填')));
			if($_arr['address']=='')exit(json_encode(array('status'=>false,'tips'=>'地址必填')));
			$_arr['area'] = isset($_POST["area"])?trim(safe_replace($_POST["area"])):'';
			$_arr['is_moren'] = isset($_POST["is_moren"])?trim(safe_replace($_POST["is_moren"])):'';
			$_arr['is_delete'] = isset($_POST["is_delete"])?trim(safe_replace($_POST["is_delete"])):'';
			
            $new_id = $this->address_model->insert($_arr);
            if($new_id)
            {
				exit(json_encode(array('status'=>true,'tips'=>'信息新增成功','new_id'=>$new_id)));
            }else
            {
            	exit(json_encode(array('status'=>false,'tips'=>'信息新增失败','new_id'=>0)));
            }
        }else
        {
        	$this->view('edit',array('require_js'=>true,'is_edit'=>false,'id'=>0,'data_info'=>$this->address_model->default_info()));
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
        $data_info =$this->address_model->get_one(array('address_id'=>$id));
        if(!$data_info)$this->showmessage('信息不存在');
        $status = $this->address_model->delete(array('address_id'=>$id));
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
			$where = $this->address_model->to_sqls($pidarr, '', 'address_id');
			$status = $this->address_model->delete($where);
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
        
        $data_info =$this->address_model->get_one(array('address_id'=>$id));
    	//如果是AJAX请求
    	if($this->input->is_ajax_request())
		{
        	if(!$data_info)exit(json_encode(array('status'=>false,'tips'=>'信息不存在')));
        	//接收POST参数
			$_arr['customer_id'] = isset($_POST["customer_id"])?trim(safe_replace($_POST["customer_id"])):exit(json_encode(array('status'=>false,'tips'=>'客户必填')));
			if($_arr['customer_id']=='')exit(json_encode(array('status'=>false,'tips'=>'客户必填')));
			$_arr['name'] = isset($_POST["name"])?trim(safe_replace($_POST["name"])):exit(json_encode(array('status'=>false,'tips'=>'姓名必填')));
			if($_arr['name']=='')exit(json_encode(array('status'=>false,'tips'=>'姓名必填')));
			$_arr['telephone'] = isset($_POST["telephone"])?trim(safe_replace($_POST["telephone"])):exit(json_encode(array('status'=>false,'tips'=>'电话必填')));
			if($_arr['telephone']=='')exit(json_encode(array('status'=>false,'tips'=>'电话必填')));
			$_arr['address'] = isset($_POST["address"])?trim(safe_replace($_POST["address"])):exit(json_encode(array('status'=>false,'tips'=>'地址必填')));
			if($_arr['address']=='')exit(json_encode(array('status'=>false,'tips'=>'地址必填')));
			$_arr['area'] = isset($_POST["area"])?trim(safe_replace($_POST["area"])):'';
			$_arr['is_moren'] = isset($_POST["is_moren"])?trim(safe_replace($_POST["is_moren"])):'';
			$_arr['is_delete'] = isset($_POST["is_delete"])?trim(safe_replace($_POST["is_delete"])):'';
			
            $status = $this->address_model->update($_arr,array('address_id'=>$id));
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
        $data_info =$this->address_model->get_one(array('address_id'=>$id));
        if(!$data_info)$this->showmessage('信息不存在');
		$data_info = $this->_process_datacorce_value($data_info);
        
        $this->view('readonly',array('require_js'=>true,'data_info'=>$data_info));
    }

}

// END address class

/* End of file address.php */
/* Location: ./address.php */
?>