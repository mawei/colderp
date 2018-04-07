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
 * 项目名称：销售详情 MODEL
 * 版本号：1 
 * 最后生成时间：2018-04-07 08:58:09 
 */
class Saledetail_model extends Base_Model {
	
    var $page_size = 10;
    function __construct()
	{
    	$this->db_tablepre = 't_aci_';
    	$this->table_name = 'saledetail';
		parent::__construct();
	}
    
    /**
     * 初始化默认值
     * @return array
     */
    function default_info()
    {
    	return array(
		'saledetail_id'=>0,
		'sale_id'=>'',
		'product_id'=>'',
		'number'=>'',
		'unit'=>'',
		'price'=>'',
		'stock_id'=>'',
		);
    }
    
    /**
     * 安装SQL表
     * @return void
     */
    function init()
    {
    	$this->query("CREATE TABLE  IF NOT EXISTS `t_aci_saledetail`
(
`sale_id` varchar(250) DEFAULT NULL COMMENT '销售订单id',
`product_id` varchar(250) DEFAULT NULL COMMENT '产品',
`number` varchar(250) DEFAULT NULL COMMENT '数量',
`unit` varchar(250) DEFAULT NULL COMMENT '单位',
`price` varchar(250) DEFAULT NULL COMMENT '价格',
`stock_id` varchar(250) DEFAULT NULL COMMENT '入库单号',
`saledetail_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
PRIMARY KEY (`saledetail_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
");
    }
    
        }

// END saledetail_model class

/* End of file saledetail_model.php */
/* Location: ./saledetail_model.php */
?>