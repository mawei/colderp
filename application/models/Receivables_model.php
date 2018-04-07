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
 * 项目名称：收款单 MODEL
 * 版本号：1 
 * 最后生成时间：2018-03-12 13:22:56 
 */
class Receivables_model extends Base_Model {
	
    var $page_size = 10;
    function __construct()
	{
    	$this->db_tablepre = 't_aci_';
    	$this->table_name = 'receivables';
		parent::__construct();
	}
    
    /**
     * 初始化默认值
     * @return array
     */
    function default_info()
    {
    	return array(
		'receivables_id'=>0,
		'payman'=>'',
		'source'=>'',
		'method'=>'',
		'time'=>'',
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
    	$this->query("CREATE TABLE  IF NOT EXISTS `t_aci_receivables`
(
`payman` varchar(250) DEFAULT NULL COMMENT '付款人',
`source` varchar(250) DEFAULT NULL COMMENT '款项来源',
`method` varchar(250) DEFAULT NULL COMMENT '收款方式',
`time` datetime DEFAULT NULL COMMENT '收款时间',
`operateman` varchar(250) DEFAULT NULL COMMENT '经手人',
`memo` varchar(250) DEFAULT NULL COMMENT '备注',
`receivables_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
PRIMARY KEY (`receivables_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
");
    }
    
        }

// END receivables_model class

/* End of file receivables_model.php */
/* Location: ./receivables_model.php */
?>