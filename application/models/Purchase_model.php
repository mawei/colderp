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
 * 项目名称：进货 MODEL
 * 版本号：1 
 * 最后生成时间：2018-03-12 12:27:42 
 */
class Purchase_model extends Base_Model {
	
    var $page_size = 10;
    function __construct()
	{
    	$this->db_tablepre = 't_aci_';
    	$this->table_name = 'purchase';
		parent::__construct();
	}
    
    /**
     * 初始化默认值
     * @return array
     */
    function default_info()
    {
    	return array(
		'purchase_id'=>0,
		'product_id'=>'',
		'stock_id'=>'',
		'price'=>'',
		'time'=>'',
		'number'=>'',
		'unit'=>'箱',
		'rebate_percent'=>'',
		'rebate_type'=>'',
		);
    }
    
    /**
     * 安装SQL表
     * @return void
     */
    function init()
    {
    	$this->query("CREATE TABLE  IF NOT EXISTS `t_aci_purchase`
(
`product_id` varchar(250) DEFAULT NULL COMMENT '产品',
`stock_id` varchar(250) DEFAULT NULL COMMENT '入库单号',
`price` decimal(10,2) DEFAULT '0.00' COMMENT '单价',
`time` varchar(50) DEFAULT NULL COMMENT '入库时间',
`number` int(11) DEFAULT '0' COMMENT '数量',
`unit` varchar(250) DEFAULT NULL COMMENT '单位',
`rebate_percent` decimal(10,2) DEFAULT '0.00' COMMENT '返点百分比（填入百分比，如10）',
`rebate_type` varchar(250) DEFAULT NULL COMMENT '返点类型',
`purchase_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
PRIMARY KEY (`purchase_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
");
    }
    
        }

// END purchase_model class

/* End of file purchase_model.php */
/* Location: ./purchase_model.php */
?>