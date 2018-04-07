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
 * 项目名称：库存 MODEL
 * 版本号：1 
 * 最后生成时间：2018-03-12 13:15:29 
 */
class Stock_model extends Base_Model {
	
    var $page_size = 10;
    function __construct()
	{
    	$this->db_tablepre = 't_aci_';
    	$this->table_name = 'stock';
		parent::__construct();
	}
    
    /**
     * 初始化默认值
     * @return array
     */
    function default_info()
    {
    	return array(
		'stock_id'=>0,
		'product_id'=>'',
		'price'=>'',
		'model'=>'',
		'unit'=>'',
		'number_per_package'=>'',
		'number'=>'',
		'zhi_number'=>'',
		'rebate_percent'=>'',
		'is_on'=>'',
		);
    }
    
    /**
     * 安装SQL表
     * @return void
     */
    function init()
    {
    	$this->query("CREATE TABLE  IF NOT EXISTS `t_aci_stock`
(
`product_id` varchar(250) DEFAULT NULL COMMENT '产品',
`price` varchar(250) DEFAULT NULL COMMENT '价格',
`model` varchar(250) DEFAULT NULL COMMENT '规格型号',
`unit` varchar(250) DEFAULT NULL COMMENT '单位',
`number_per_package` int(11) DEFAULT '0' COMMENT '一箱含支数',
`number` int(11) DEFAULT '0' COMMENT '箱数',
`zhi_number` int(11) DEFAULT '0' COMMENT '支数',
`rebate_percent` varchar(250) DEFAULT NULL COMMENT '返点',
`is_on` char(2) DEFAULT NULL COMMENT '是否上架',
`stock_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
PRIMARY KEY (`stock_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
");
    }
    
        
    /**
     * 库存     * @return array
     */
    function stock_datasource($where='',$limit = '', $order = '', $group = '', $key='')
    {
    	$datalist = $this->select($where,'stock_id,product_id,stock_id',$limit,$order,$group,$key);
        return $datalist;
    }
    
    /**
     * 库存选择中项值     * @return array
     */
    function stock_value($id=0)
    {
    	$data_info = $this->get_one(array('stock_id'=>$id),'product_id,stock_id');
        if($data_info)
        {
        	return  implode("-",$data_info);
        }
        return NULL;
    }
        }

// END stock_model class

/* End of file stock_model.php */
/* Location: ./stock_model.php */
?>