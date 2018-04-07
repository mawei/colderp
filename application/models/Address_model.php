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
 * 项目名称：收货地址 MODEL
 * 版本号：1 
 * 最后生成时间：2018-03-25 16:17:26 
 */
class Address_model extends Base_Model {
	
    var $page_size = 10;
    function __construct()
	{
    	$this->db_tablepre = 't_aci_';
    	$this->table_name = 'address';
		parent::__construct();
	}
    
    /**
     * 初始化默认值
     * @return array
     */
    function default_info()
    {
    	return array(
		'address_id'=>0,
		'customer_id'=>'',
		'name'=>'',
		'telephone'=>'',
		'address'=>'',
		'area'=>'',
		'is_moren'=>'',
		'is_delete'=>'0',
		);
    }
    
    /**
     * 安装SQL表
     * @return void
     */
    function init()
    {
    	$this->query("CREATE TABLE  IF NOT EXISTS `t_aci_address`
(
`customer_id` varchar(250) DEFAULT NULL COMMENT '客户',
`name` varchar(250) DEFAULT NULL COMMENT '姓名',
`telephone` varchar(250) DEFAULT NULL COMMENT '电话',
`address` varchar(250) DEFAULT NULL COMMENT '地址',
`area` varchar(250) DEFAULT NULL COMMENT '区域',
`is_moren` char(2) DEFAULT NULL COMMENT '是否默认',
`is_delete` varchar(250) DEFAULT NULL COMMENT '是否删除',
`address_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
PRIMARY KEY (`address_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
");
    }
    
        }

// END address_model class

/* End of file address_model.php */
/* Location: ./address_model.php */
?>