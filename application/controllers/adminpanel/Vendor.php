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
 * 项目名称：供应商管理 
 * 版本号：1 
 * 最后生成时间：2018-03-12 12:01:12 
 */
class Vendor extends Admin_Controller {
	
    var $method_config;
    function __construct()
	{
		parent::__construct();
        $this->load->model(array('vendor_model'));
        $this->load->model(array('product_model'));
        $this->load->helper(array('auto_codeIgniter_helper','array'));
  
  
        //保证排序安全性
        $this->method_config['sort_field'] = array(
										'name'=>'name',
										'brand'=>'brand',
										'phone'=>'phone',
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
        
        $orderby = "vendor_id desc";
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
			if($_arr['keyword']!="") $where_arr[] = "concat(name,brand,phone) like '%{$_arr['keyword']}%'";
                
		        
        
		        
        	if($where_arr)$where = implode(" and ",$where_arr);
        }

        	$data_list = $this->vendor_model->listinfo($where,'*',$orderby , $page_no, $this->vendor_model->page_size,'',$this->vendor_model->page_size,page_list_url('adminpanel/vendor/index',true));
        if($data_list)
        {
            	foreach($data_list as $k=>$v)
            	{
					$data_list[$k] = $this->_process_datacorce_value($v);
            	}
        }
    	$this->view('lists',array('require_js'=>true,'data_info'=>$_arr,'order'=>$order,'dir'=>$dir,'data_list'=>$data_list,'pages'=>$this->vendor_model->pages));
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
			$_arr['name'] = isset($_POST["name"])?trim(safe_replace($_POST["name"])):exit(json_encode(array('status'=>false,'tips'=>'供应商名字必填')));
			if($_arr['name']=='')exit(json_encode(array('status'=>false,'tips'=>'供应商名字必填')));
			$_arr['brand'] = isset($_POST["brand"])?trim(safe_replace($_POST["brand"])):'';
			$_arr['business_people'] = isset($_POST["business_people"])?trim(safe_replace($_POST["business_people"])):'';
			$_arr['phone'] = isset($_POST["phone"])?trim(safe_replace($_POST["phone"])):'';
			$_arr['bank_name'] = isset($_POST["bank_name"])?trim(safe_replace($_POST["bank_name"])):'';
			$_arr['bank_account'] = isset($_POST["bank_account"])?trim(safe_replace($_POST["bank_account"])):'';
			
            $new_id = $this->vendor_model->insert($_arr);
            if($new_id)
            {
				exit(json_encode(array('status'=>true,'tips'=>'信息新增成功','new_id'=>$new_id)));
            }else
            {
            	exit(json_encode(array('status'=>false,'tips'=>'信息新增失败','new_id'=>0)));
            }
        }else
        {
        	$this->view('edit',array('require_js'=>true,'is_edit'=>false,'id'=>0,'data_info'=>$this->vendor_model->default_info()));
        }
    }

     /**
     * 新增数据
     * @param AJAX POST 
     * @return void
     */
    function add_product($vendor_id)
    {
        //如果是AJAX请求
        if($this->input->is_ajax_request())
        {
            //接收POST参数
            $_arr['category'] = isset($_POST["category"])?trim(safe_replace($_POST["category"])):'';
            $_arr['brand'] = isset($_POST["brand"])?trim(safe_replace($_POST["brand"])):'';
            $_arr['vendor_id'] = isset($_POST["vendor_id"])?trim(safe_replace($_POST["vendor_id"])):exit(json_encode(array('status'=>false,'tips'=>'供应商必填')));
            if($_arr['vendor_id']=='')exit(json_encode(array('status'=>false,'tips'=>'供应商必填')));
            $_arr['series'] = isset($_POST["series"])?trim(safe_replace($_POST["series"])):'';
            $_arr['name'] = isset($_POST["name"])?trim(safe_replace($_POST["name"])):exit(json_encode(array('status'=>false,'tips'=>'产品名称必填')));
            if($_arr['name']=='')exit(json_encode(array('status'=>false,'tips'=>'产品名称必填')));
            $_arr['image'] = isset($_POST["image"])?trim(safe_replace($_POST["image"])):'';
            $_arr['code'] = isset($_POST["code"])?trim(safe_replace($_POST["code"])):'';
            $_arr['model'] = isset($_POST["model"])?trim(safe_replace($_POST["model"])):'';
            
            $new_id = $this->product_model->insert($_arr);
            if($new_id)
            {
                exit(json_encode(array('status'=>true,'tips'=>'信息新增成功','new_id'=>$new_id)));
            }else
            {
                exit(json_encode(array('status'=>false,'tips'=>'信息新增失败','new_id'=>0)));
            }
        }else
        {
            $vendor_id = intval($vendor_id);
            $data_info =$this->vendor_model->get_one(array('vendor_id'=>$vendor_id));
            if(!$data_info)$this->showmessage('信息不存在');
            $data_info = $this->_process_datacorce_value($data_info);
            // $this->view('readonly',array('require_js'=>true,'data_info'=>$data_info));
            $this->view('add_product',array('require_js'=>true,'is_edit'=>false,'vendor_id'=>$vendor_id,'id'=>0,'data_info'=>$data_info));
        }
    }

         /**
     * 新增数据
     * @param AJAX POST 
     * @return void
     */
    function edit_product($product_id)
    {
        //如果是AJAX请求
        if($this->input->is_ajax_request())
        {
            //接收POST参数
            $_arr['category'] = isset($_POST["category"])?trim(safe_replace($_POST["category"])):'';
            $_arr['brand'] = isset($_POST["brand"])?trim(safe_replace($_POST["brand"])):'';
            $_arr['vendor_id'] = isset($_POST["vendor_id"])?trim(safe_replace($_POST["vendor_id"])):exit(json_encode(array('status'=>false,'tips'=>'供应商必填')));
            if($_arr['vendor_id']=='')exit(json_encode(array('status'=>false,'tips'=>'供应商必填')));
            $_arr['series'] = isset($_POST["series"])?trim(safe_replace($_POST["series"])):'';
            $_arr['name'] = isset($_POST["name"])?trim(safe_replace($_POST["name"])):exit(json_encode(array('status'=>false,'tips'=>'产品名称必填')));
            if($_arr['name']=='')exit(json_encode(array('status'=>false,'tips'=>'产品名称必填')));
            $_arr['image'] = isset($_POST["image"])?trim(safe_replace($_POST["image"])):'';
            $_arr['code'] = isset($_POST["code"])?trim(safe_replace($_POST["code"])):'';
            $_arr['model'] = isset($_POST["model"])?trim(safe_replace($_POST["model"])):'';
            
            $new_id = $this->product_model->insert($_arr);
            if($new_id)
            {
                exit(json_encode(array('status'=>true,'tips'=>'信息新增成功','new_id'=>$new_id)));
            }else
            {
                exit(json_encode(array('status'=>false,'tips'=>'信息新增失败','new_id'=>0)));
            }
        }else
        {
            $product_id = intval($product_id);
            $product =$this->product_model->get_one(array('product_id'=>$product_id));
            $data_info =$this->vendor_model->get_one(array('vendor_id'=>$product['vendor_id']));
            if(!$data_info)$this->showmessage('信息不存在');
            $data_info = $this->_process_datacorce_value($data_info);
            // $this->view('readonly',array('require_js'=>true,'data_info'=>$data_info));
            $this->view('add_product',array('require_js'=>true,'is_edit'=>true,'product_id'=>$product_id,'data_info'=>$data_info,'product'=>$product));
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
        $data_info =$this->vendor_model->get_one(array('vendor_id'=>$id));
        if(!$data_info)$this->showmessage('信息不存在');
        $status = $this->vendor_model->delete(array('vendor_id'=>$id));
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
			$where = $this->vendor_model->to_sqls($pidarr, '', 'vendor_id');
			$status = $this->vendor_model->delete($where);
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
        
        $data_info =$this->vendor_model->get_one(array('vendor_id'=>$id));
    	//如果是AJAX请求
    	if($this->input->is_ajax_request())
		{
        	if(!$data_info)exit(json_encode(array('status'=>false,'tips'=>'信息不存在')));
        	//接收POST参数
			$_arr['name'] = isset($_POST["name"])?trim(safe_replace($_POST["name"])):exit(json_encode(array('status'=>false,'tips'=>'供应商名字必填')));
			if($_arr['name']=='')exit(json_encode(array('status'=>false,'tips'=>'供应商名字必填')));
			$_arr['brand'] = isset($_POST["brand"])?trim(safe_replace($_POST["brand"])):'';
			$_arr['business_people'] = isset($_POST["business_people"])?trim(safe_replace($_POST["business_people"])):'';
			$_arr['phone'] = isset($_POST["phone"])?trim(safe_replace($_POST["phone"])):'';
			$_arr['bank_name'] = isset($_POST["bank_name"])?trim(safe_replace($_POST["bank_name"])):'';
			$_arr['bank_account'] = isset($_POST["bank_account"])?trim(safe_replace($_POST["bank_account"])):'';
			
            $status = $this->vendor_model->update($_arr,array('vendor_id'=>$id));
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
        $data_info =$this->vendor_model->get_one(array('vendor_id'=>$id));
        $data_list =$this->product_model->select(array('vendor_id'=>$id));
        if(!$data_info)$this->showmessage('信息不存在');
		$data_info = $this->_process_datacorce_value($data_info);
        
        $this->view('readonly',array('require_js'=>true,'data_info'=>$data_info,'data_list'=>$data_list));
    }

}

// END vendor class

/* End of file vendor.php */
/* Location: ./vendor.php */
?>