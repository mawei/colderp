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
 * 项目名称：用户金额明细 MODEL
 * 版本号：1 
 * 最后生成时间：2018-03-28 15:14:15 
 */
class Pocket_model extends Base_Model {
	
    var $page_size = 10;
    function __construct()
	{
    	$this->db_tablepre = 't_aci_';
    	$this->table_name = 'pocket';
		parent::__construct();
	}
    
    /**
     * 初始化默认值
     * @return array
     */
    function default_info()
    {
    	return array(
		'pocket_id'=>0,
		'createtime'=>'',
		'source'=>'',
		'customer_id'=>'',
		'amount'=>'',
		);
    }
    
    /**
     * 安装SQL表
     * @return void
     */
    function init()
    {
    	$this->query("CREATE TABLE  IF NOT EXISTS `t_aci_pocket`
(
`createtime` varchar(250) DEFAULT NULL COMMENT '时间',
`source` varchar(250) DEFAULT NULL COMMENT '类型',
`customer_id` varchar(250) DEFAULT NULL COMMENT '用户',
`amount` varchar(250) DEFAULT NULL COMMENT '金额',
`pocket_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
PRIMARY KEY (`pocket_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
");
    }
    
        }

// END pocket_model class

/* End of file pocket_model.php */
/* Location: ./pocket_model.php */
?>