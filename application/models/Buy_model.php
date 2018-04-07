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
 * 项目名称：采购 MODEL
 * 版本号：1 
 * 最后生成时间：2018-03-12 14:10:25 
 */
class Buy_model extends Base_Model {
	
    var $page_size = 10;
    function __construct()
	{
    	$this->db_tablepre = 't_aci_';
    	$this->table_name = 'buy';
		parent::__construct();
	}
    
    /**
     * 初始化默认值
     * @return array
     */
    function default_info()
    {
    	return array(
		'buy_id'=>0,
		'cost'=>'',
		'profit'=>'',
		'amount'=>'',
		'discount'=>'',
		'time'=>'',
		'sales_order'=>'',
		'return_order'=>'',
		);
    }
    
    /**
     * 安装SQL表
     * @return void
     */
    function init()
    {
    	$this->query("CREATE TABLE  IF NOT EXISTS `t_aci_buy`
(
`cost` varchar(250) DEFAULT NULL COMMENT '成本',
`profit` varchar(250) DEFAULT NULL COMMENT '销售毛利',
`amount` varchar(250) DEFAULT NULL COMMENT '销售收入',
`discount` varchar(250) DEFAULT NULL COMMENT '销售折扣',
`time` varchar(250) DEFAULT NULL COMMENT '时间',
`sales_order` varchar(250) DEFAULT NULL COMMENT '销售单号',
`return_order` varchar(250) DEFAULT NULL COMMENT '退货单号',
`buy_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
PRIMARY KEY (`buy_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
");
    }
    
        }

// END buy_model class

/* End of file buy_model.php */
/* Location: ./buy_model.php */
?>