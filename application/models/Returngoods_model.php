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
 * 项目名称：退货 MODEL
 * 版本号：1 
 * 最后生成时间：2018-03-12 12:47:31 
 */
class Returngoods_model extends Base_Model {
	
    var $page_size = 10;
    function __construct()
	{
    	$this->db_tablepre = 't_aci_';
    	$this->table_name = 'returngoods';
		parent::__construct();
	}
    
    /**
     * 初始化默认值
     * @return array
     */
    function default_info()
    {
    	return array(
		'returngoods_id'=>0,
		'createtime'=>'',
		'product_id'=>'',
		'stock_id'=>'',
		'unit'=>'',
		'number'=>'',
		);
    }
    
    /**
     * 安装SQL表
     * @return void
     */
    function init()
    {
    	$this->query("CREATE TABLE  IF NOT EXISTS `t_aci_returngoods`
(
`createtime` varchar(50) DEFAULT NULL COMMENT '创建时间',
`product_id` varchar(250) DEFAULT NULL COMMENT '产品',
`stock_id` varchar(250) DEFAULT NULL COMMENT '入库单号',
`unit` varchar(250) DEFAULT NULL COMMENT '单位',
`number` int(11) DEFAULT '0' COMMENT '数量',
`returngoods_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
PRIMARY KEY (`returngoods_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
");
    }
    
        }

// END returngoods_model class

/* End of file returngoods_model.php */
/* Location: ./returngoods_model.php */
?>