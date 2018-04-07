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
 * 项目名称：客户 MODEL
 * 版本号：1 
 * 最后生成时间：2018-03-12 12:13:38 
 */
class Customer_model extends Base_Model {
	
    var $page_size = 10;
    function __construct()
	{
    	$this->db_tablepre = 't_aci_';
    	$this->table_name = 'customer';
		parent::__construct();
	}
    
    /**
     * 初始化默认值
     * @return array
     */
    function default_info()
    {
    	return array(
		'customer_id'=>0,
		'customer_type'=>'',
		'name'=>'',
		'telephone'=>'',
		'code'=>'',
		'amount'=>'',
		'address'=>'',
		'invite_person'=>'',
		'account'=>'',
		'wechat'=>'',
		'freezer_model'=>'',
		'freezer_type'=>'',
		'yajin'=>'',
		'freezer_number'=>'',
		'discount'=>'',
		'sitefee'=>'',
		'password'=>'',
		'business_man'=>'',
		'business_bonus'=>'',
		);
    }
    
    /**
     * 安装SQL表
     * @return void
     */
    function init()
    {
    	$this->query("CREATE TABLE  IF NOT EXISTS `t_aci_customer`
(
`customer_type` varchar(250) DEFAULT NULL COMMENT '客户类型',
`name` varchar(250) DEFAULT NULL COMMENT '姓名',
`telephone` varchar(250) DEFAULT NULL COMMENT '联系电话',
`code` varchar(250) DEFAULT NULL COMMENT '商户二维码',
`amount` varchar(250) DEFAULT NULL COMMENT '余额',
`address` varchar(250) DEFAULT NULL COMMENT '地址',
`invite_person` varchar(250) DEFAULT NULL COMMENT '邀请人',
`account` varchar(250) DEFAULT NULL COMMENT '开户行账号',
`wechat` varchar(250) DEFAULT NULL COMMENT '微信号',
`freezer_model` varchar(250) DEFAULT NULL COMMENT '冰柜规格',
`freezer_type` varchar(250) DEFAULT NULL COMMENT '冰柜类型',
`yajin` varchar(250) DEFAULT NULL COMMENT '冰柜押金（类型为店供时填写）',
`freezer_number` int(11) DEFAULT '0' COMMENT '冰柜数量',
`discount` decimal(10,2) DEFAULT '0.00' COMMENT '商户折扣(填入百分比，如10)',
`sitefee` varchar(250) DEFAULT NULL COMMENT '场地费',
`password` varchar(50) DEFAULT NULL COMMENT '密码',
`business_man` varchar(250) DEFAULT NULL COMMENT '业务员',
`business_bonus` decimal(10,2) DEFAULT '0.00' COMMENT '业务员佣金百分比(填入百分比，如10)',
`customer_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
PRIMARY KEY (`customer_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
");
    }
    
        
    /**
     * 下单客户     * @return array
     */
    function coldcustomer_datasource($where='',$limit = '', $order = '', $group = '', $key='')
    {
    	$datalist = $this->select($where,'customer_id,telephone,customer_type,name',$limit,$order,$group,$key);
        return $datalist;
    }
    
    /**
     * 下单客户选择中项值     * @return array
     */
    function coldcustomer_value($id=0)
    {
    	$data_info = $this->get_one(array('customer_id'=>$id),'telephone,customer_type,name');
        if($data_info)
        {
        	return  implode("-",$data_info);
        }
        return NULL;
    }
        }

// END customer_model class

/* End of file customer_model.php */
/* Location: ./customer_model.php */
?>