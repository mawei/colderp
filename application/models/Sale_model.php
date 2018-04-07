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
 * 项目名称：销售 MODEL
 * 版本号：1 
 * 最后生成时间：2018-03-12 13:58:19 
 */
class Sale_model extends Base_Model {
	
    var $page_size = 10;
    function __construct()
	{
    	$this->db_tablepre = 't_aci_';
    	$this->table_name = 'sale';
		parent::__construct();
	}
    
    /**
     * 初始化默认值
     * @return array
     */
    function default_info()
    {
    	return array(
		'sale_id'=>0,
		'customer_id'=>'',
		'address_id'=>'',
		'status'=>'',
		'time'=>'',
		);
    }
    
    /**
     * 安装SQL表
     * @return void
     */
    function init()
    {
    	$this->query("CREATE TABLE  IF NOT EXISTS `t_aci_sale`
(
`customer_id` varchar(250) DEFAULT NULL COMMENT '客户',
`address_id` varchar(250) DEFAULT NULL COMMENT '地址',
`status` varchar(250) DEFAULT NULL COMMENT '状态',
`time` datetime DEFAULT NULL COMMENT '时间',
`sale_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
PRIMARY KEY (`sale_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
");
    }
    
        }

// END sale_model class

/* End of file sale_model.php */
/* Location: ./sale_model.php */
?>