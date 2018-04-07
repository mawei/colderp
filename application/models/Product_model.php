<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * AutoCodeIgniter.com
 *
 * 基于CodeIgniter核心模块自动生成程序
 *
 * 源项目		AutoCodeIgniter
 * 作者：		AutoCodeIgniter.com Dev Team
 * 版权：		Copyright (c) 2015 , AutoCodeIgniter com.
 * 项目名称：产品 MODEL
 * 版本号：1 
 * 最后生成时间：2018-03-12 12:08:33 
 */
class Product_model extends Base_Model {
	
    var $page_size = 10;
    function __construct()
	{
    	$this->db_tablepre = 't_aci_';
    	$this->table_name = 'product';
		parent::__construct();
	}
    
    /**
     * 初始化默认值
     * @return array
     */
    function default_info()
    {
    	return array(
		'product_id'=>0,
		'category'=>'',
		'brand'=>'',
		'vendor_id'=>'',
		'series'=>'',
		'name'=>'',
		'image'=>'',
		'code'=>'',
		'model'=>'',
		);
    }
    
    /**
     * 安装SQL表
     * @return void
     */
    function init()
    {
    	$this->query("CREATE TABLE  IF NOT EXISTS `t_aci_product`
(
`category` varchar(250) DEFAULT NULL COMMENT '大类',
`brand` varchar(250) DEFAULT NULL COMMENT '品牌',
`vendor_id` varchar(250) DEFAULT NULL COMMENT '供应商',
`series` varchar(250) DEFAULT NULL COMMENT '产品系列',
`name` varchar(250) DEFAULT NULL COMMENT '产品名称',
`image` varchar(250) DEFAULT NULL COMMENT '图样',
`code` varchar(250) DEFAULT NULL COMMENT '条码',
`model` varchar(250) DEFAULT NULL COMMENT '规格型号',
`product_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
PRIMARY KEY (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
");
    }
    
        
    /**
     * 产品数据源     * @return array
     */
    function cold_product_datasource($where='',$limit = '', $order = '', $group = '', $key='')
    {
    	$datalist = $this->select($where,'product_id,series,name',$limit,$order,$group,$key);
        return $datalist;
    }
    
    /**
     * 产品数据源选择中项值     * @return array
     */
    function cold_product_value($id=0)
    {
    	$data_info = $this->get_one(array('product_id'=>$id),'series,name');
        if($data_info)
        {
        	return  implode("-",$data_info);
        }
        return NULL;
    }
        }

// END product_model class

/* End of file product_model.php */
/* Location: ./product_model.php */
?>