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
 * 项目名称：供应商管理 MODEL
 * 版本号：1 
 * 最后生成时间：2018-03-12 12:01:12 
 */
class Vendor_model extends Base_Model {
	
    var $page_size = 10;
    function __construct()
	{
    	$this->db_tablepre = 't_aci_';
    	$this->table_name = 'vendor';
		parent::__construct();
	}
    
    /**
     * 初始化默认值
     * @return array
     */
    function default_info()
    {
    	return array(
		'vendor_id'=>0,
		'name'=>'',
		'brand'=>'',
		'business_people'=>'',
		'phone'=>'',
		'bank_name'=>'',
		'bank_account'=>'',
		);
    }
    
    /**
     * 安装SQL表
     * @return void
     */
    function init()
    {
    	$this->query("CREATE TABLE  IF NOT EXISTS `t_aci_vendor`
(
`name` varchar(250) DEFAULT NULL COMMENT '供应商名字',
`brand` varchar(250) DEFAULT NULL COMMENT '品牌',
`business_people` varchar(250) DEFAULT NULL COMMENT '业务员',
`phone` varchar(250) DEFAULT NULL COMMENT '电话',
`bank_name` varchar(250) DEFAULT NULL COMMENT '开户行',
`bank_account` varchar(250) DEFAULT NULL COMMENT '账号',
`vendor_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
PRIMARY KEY (`vendor_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
");
    }
    
        
    /**
     * 供应商     * @return array
     */
    function vendor_datasource($where='',$limit = '', $order = '', $group = '', $key='')
    {
    	$datalist = $this->select($where,'vendor_id,name',$limit,$order,$group,$key);
        return $datalist;
    }
    
    /**
     * 供应商选择中项值     * @return array
     */
    function vendor_value($id=0)
    {
    	$data_info = $this->get_one(array('vendor_id'=>$id),'name');
        if($data_info)
        {
        	return  implode("-",$data_info);
        }
        return NULL;
    }
        }

// END vendor_model class

/* End of file vendor_model.php */
/* Location: ./vendor_model.php */
?>