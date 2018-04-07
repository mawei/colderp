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
 * 项目名称：报损 MODEL
 * 版本号：1 
 * 最后生成时间：2018-03-12 13:02:36 
 */
class Loss_model extends Base_Model {
	
    var $page_size = 10;
    function __construct()
	{
    	$this->db_tablepre = 't_aci_';
    	$this->table_name = 'loss';
		parent::__construct();
	}
    
    /**
     * 初始化默认值
     * @return array
     */
    function default_info()
    {
    	return array(
		'loss_id'=>0,
		'order_number'=>'',
		'brand'=>'',
		'series'=>'',
		'name'=>'',
		'code'=>'',
		'unit'=>'',
		'number'=>'',
		'model'=>'',
		);
    }
    
    /**
     * 安装SQL表
     * @return void
     */
    function init()
    {
    	$this->query("CREATE TABLE  IF NOT EXISTS `t_aci_loss`
(
`order_number` varchar(250) DEFAULT NULL COMMENT '入库单号',
`brand` varchar(250) DEFAULT NULL COMMENT '品牌',
`series` varchar(250) DEFAULT NULL COMMENT '系列',
`name` varchar(250) DEFAULT NULL COMMENT '商品名称',
`code` varchar(250) DEFAULT NULL COMMENT '条码',
`unit` varchar(250) DEFAULT NULL COMMENT '单位',
`number` int(11) DEFAULT '0' COMMENT '数量',
`model` varchar(250) DEFAULT NULL COMMENT '规格型号',
`loss_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
PRIMARY KEY (`loss_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
");
    }
    
        }

// END loss_model class

/* End of file loss_model.php */
/* Location: ./loss_model.php */
?>