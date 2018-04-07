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
 * 项目名称：库存 
 * 版本号：1 
 * 最后生成时间：2018-03-12 13:15:29 
 */
class Stock extends Admin_Controller {
	
    var $method_config;
    function __construct()
	{
		parent::__construct();
		$this->load->model(array('Product_model','stock_model'));
        $this->load->helper(array('auto_codeIgniter_helper','array'));
  
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
        
        $orderby = "stock_id desc";
        $dir = $order=  NULL;
		        
        $where ="";
        $_arr = NULL;//从URL GET
        	$data_list = $this->stock_model->listinfo($where,'*',$orderby , $page_no, $this->stock_model->page_size,'',$this->stock_model->page_size,page_list_url('adminpanel/stock/index',true));
        if($data_list)
        {
            	foreach($data_list as $k=>$v)
            	{
					$data_list[$k] = $this->_process_datacorce_value($v);
            	}
        }
    	$this->view('lists',array('require_js'=>true,'data_info'=>$_arr,'order'=>$order,'dir'=>$dir,'data_list'=>$data_list,'pages'=>$this->stock_model->pages));
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
			$_arr['price'] = isset($_POST["price"])?trim(safe_replace($_POST["price"])):'';
			$_arr['model'] = isset($_POST["model"])?trim(safe_replace($_POST["model"])):'';
			$_arr['unit'] = isset($_POST["unit"])?trim(safe_replace($_POST["unit"])):exit(json_encode(array('status'=>false,'tips'=>'单位必填')));
			if($_arr['unit']=='')exit(json_encode(array('status'=>false,'tips'=>'单位必填')));
			$_arr['number_per_package'] = isset($_POST["number_per_package"])?trim(safe_replace($_POST["number_per_package"])):'';
			if($_arr['number_per_package']!=''){
			if(!is_number($_arr['number_per_package']))exit(json_encode(array('status'=>false,'tips'=>'一箱含支数不符合格式要求')));
			}
			$_arr['number'] = isset($_POST["number"])?trim(safe_replace($_POST["number"])):'';
			if($_arr['number']!=''){
			if(!is_number($_arr['number']))exit(json_encode(array('status'=>false,'tips'=>'箱数不符合格式要求')));
			}
			$_arr['zhi_number'] = isset($_POST["zhi_number"])?trim(safe_replace($_POST["zhi_number"])):'';
			if($_arr['zhi_number']!=''){
			if(!is_number($_arr['zhi_number']))exit(json_encode(array('status'=>false,'tips'=>'支数不符合格式要求')));
			}
			$_arr['rebate_percent'] = isset($_POST["rebate_percent"])?trim(safe_replace($_POST["rebate_percent"])):'';
			$_arr['is_on'] = isset($_POST["is_on"])?trim(safe_replace($_POST["is_on"])):'';
			
            $new_id = $this->stock_model->insert($_arr);
            if($new_id)
            {
				exit(json_encode(array('status'=>true,'tips'=>'信息新增成功','new_id'=>$new_id)));
            }else
            {
            	exit(json_encode(array('status'=>false,'tips'=>'信息新增失败','new_id'=>0)));
            }
        }else
        {
        	$this->view('edit',array('require_js'=>true,'is_edit'=>false,'id'=>0,'data_info'=>$this->stock_model->default_info()));
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
        $data_info =$this->stock_model->get_one(array('stock_id'=>$id));
        if(!$data_info)$this->showmessage('信息不存在');
        $status = $this->stock_model->delete(array('stock_id'=>$id));
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
			$where = $this->stock_model->to_sqls($pidarr, '', 'stock_id');
			$status = $this->stock_model->delete($where);
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
        
        $data_info =$this->stock_model->get_one(array('stock_id'=>$id));
    	//如果是AJAX请求
    	if($this->input->is_ajax_request())
		{
        	if(!$data_info)exit(json_encode(array('status'=>false,'tips'=>'信息不存在')));
        	//接收POST参数
			$_arr['product_id'] = isset($_POST["product_id"])?trim(safe_replace($_POST["product_id"])):'';
			$_arr['price'] = isset($_POST["price"])?trim(safe_replace($_POST["price"])):'';
			$_arr['model'] = isset($_POST["model"])?trim(safe_replace($_POST["model"])):'';
			$_arr['unit'] = isset($_POST["unit"])?trim(safe_replace($_POST["unit"])):exit(json_encode(array('status'=>false,'tips'=>'单位必填')));
			if($_arr['unit']=='')exit(json_encode(array('status'=>false,'tips'=>'单位必填')));
			$_arr['number_per_package'] = isset($_POST["number_per_package"])?trim(safe_replace($_POST["number_per_package"])):'';
			if($_arr['number_per_package']!=''){
			if(!is_number($_arr['number_per_package']))exit(json_encode(array('status'=>false,'tips'=>'一箱含支数不符合格式要求')));
			}
			$_arr['number'] = isset($_POST["number"])?trim(safe_replace($_POST["number"])):'';
			if($_arr['number']!=''){
			if(!is_number($_arr['number']))exit(json_encode(array('status'=>false,'tips'=>'箱数不符合格式要求')));
			}
			$_arr['zhi_number'] = isset($_POST["zhi_number"])?trim(safe_replace($_POST["zhi_number"])):'';
			if($_arr['zhi_number']!=''){
			if(!is_number($_arr['zhi_number']))exit(json_encode(array('status'=>false,'tips'=>'支数不符合格式要求')));
			}
			$_arr['rebate_percent'] = isset($_POST["rebate_percent"])?trim(safe_replace($_POST["rebate_percent"])):'';
			$_arr['is_on'] = isset($_POST["is_on"])?trim(safe_replace($_POST["is_on"])):'';
			
            $status = $this->stock_model->update($_arr,array('stock_id'=>$id));
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
        $data_info =$this->stock_model->get_one(array('stock_id'=>$id));
        if(!$data_info)$this->showmessage('信息不存在');
		$data_info = $this->_process_datacorce_value($data_info);
        
        $this->view('readonly',array('require_js'=>true,'data_info'=>$data_info));
    }

}

// END stock class

/* End of file stock.php */
/* Location: ./stock.php */
?>