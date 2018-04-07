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
 * 项目名称：付款单 MODEL
 * 版本号：1 
 * 最后生成时间：2018-03-12 13:34:38 
 */
class Payment_model extends Base_Model {
	
    var $page_size = 10;
    function __construct()
	{
    	$this->db_tablepre = 't_aci_';
    	$this->table_name = 'payment';
		parent::__construct();
	}
    
    /**
     * 初始化默认值
     * @return array
     */
    function default_info()
    {
    	return array(
		'payment_id'=>0,
		'vendor_id'=>'',
		'method'=>'',
		'amount'=>'',
		'time'=>'',
		'source'=>'',
		'operateman'=>'',
		'memo'=>'',
		);
    }
    
    /**
     * 安装SQL表
     * @return void
     */
    function init()
    {
    	$this->query("CREATE TABLE  IF NOT EXISTS `t_aci_payment`
(
`vendor_id` varchar(250) DEFAULT NULL COMMENT '收款人',
`method` varchar(250) DEFAULT NULL COMMENT '付款方式',
`amount` varchar(250) DEFAULT NULL COMMENT '金额',
`time` datetime DEFAULT NULL COMMENT '付款时间',
`source` varchar(250) DEFAULT NULL COMMENT '款项说明',
`operateman` varchar(250) DEFAULT NULL COMMENT '经手人',
`memo` varchar(250) DEFAULT NULL COMMENT '备注',
`payment_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
PRIMARY KEY (`payment_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
");
    }
    
        }

// END payment_model class

/* End of file payment_model.php */
/* Location: ./payment_model.php */
?>