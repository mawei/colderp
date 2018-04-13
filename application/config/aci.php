<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
$config['aci_status'] = array (
  'systemVersion' => '1.2.0',
  'installED' => true,
);
$config['aci_module'] = array (
  'welcome' => 
  array (
    'version' => '1',
    'charset' => 'utf-8',
    'lastUpdate' => '2015-10-09 20:10:10',
    'moduleName' => 'welcome',
    'modulePath' => '',
    'moduleCaption' => '首页',
    'description' => '由autoCodeigniter 系统的模块',
    'fileList' => NULL,
    'works' => true,
    'moduleUrl' => '',
    'system' => true,
    'coder' => '胡子锅',
    'website' => 'http://',
    'moduleDetails' => 
    array (
      0 => 
      array (
        'folder' => '',
        'controller' => 'welcome',
        'method' => '',
        'caption' => '欢迎界面',
      ),
    ),
  ),
  'adminpanel' => 
  array (
    'version' => '1',
    'charset' => 'utf-8',
    'lastUpdate' => '2015-10-09 20:10:10',
    'moduleName' => 'user',
    'modulePath' => 'adminpanel',
    'moduleCaption' => '后台管理中心',
    'description' => '由autoCodeigniter 系统的模块',
    'fileList' => NULL,
    'works' => true,
    'moduleUrl' => 'adminpanel/user',
    'system' => true,
    'coder' => '胡子锅',
    'website' => 'http://',
    'moduleDetails' => 
    array (
      0 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'manage',
        'method' => 'index',
        'caption' => '管理中心-首页',
      ),
      1 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'manage',
        'method' => 'login',
        'caption' => '管理中心-登录',
      ),
      2 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'manage',
        'method' => 'logout',
        'caption' => '管理中心-注销',
      ),
      3 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'profile',
        'method' => 'change_pwd',
        'caption' => '管理中心-修改密码',
      ),
      4 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'manage',
        'method' => 'login',
        'caption' => '管理中心-登录',
      ),
      5 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'manage',
        'method' => 'go',
        'caption' => '管理中心-URL转向',
      ),
      6 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'manage',
        'method' => 'cache',
        'caption' => '管理中心-全局缓存',
      ),
    ),
  ),
  'user' => 
  array (
    'version' => '1',
    'charset' => 'utf-8',
    'lastUpdate' => '2015-10-09 20:10:10',
    'moduleName' => 'user',
    'modulePath' => 'adminpanel',
    'moduleCaption' => '用户 / 用户组管理',
    'description' => '由autoCodeigniter 系统的模块',
    'fileList' => NULL,
    'works' => true,
    'moduleUrl' => 'adminpanel/user',
    'system' => true,
    'coder' => '胡子锅',
    'website' => 'http://',
    'moduleDetails' => 
    array (
      0 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'user',
        'method' => 'index',
        'caption' => '用户管理-列表',
      ),
      1 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'user',
        'method' => 'check_username',
        'caption' => '用户管理-检测用户名',
      ),
      2 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'user',
        'method' => 'delete',
        'caption' => '用户管理-删除',
      ),
      3 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'user',
        'method' => 'lock',
        'caption' => '用户管理-锁定',
      ),
      4 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'user',
        'method' => 'edit',
        'caption' => '用户管理-编辑',
      ),
      5 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'user',
        'method' => 'add',
        'caption' => '用户管理-新增',
      ),
      6 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'user',
        'method' => 'upload',
        'caption' => '用户管理-上传图像',
      ),
      7 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'role',
        'method' => 'index',
        'caption' => '用户组管理-列表',
      ),
      8 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'role',
        'method' => 'setting',
        'caption' => '用户组管理-权限设置',
      ),
      9 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'role',
        'method' => 'add',
        'caption' => '用户组管理-新增',
      ),
      10 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'role',
        'method' => 'edit',
        'caption' => '用户组管理-编辑',
      ),
      11 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'role',
        'method' => 'delete_one',
        'caption' => '用户组管理-删除',
      ),
      12 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'user',
        'method' => 'user_window',
        'caption' => '用户-弹窗',
      ),
      13 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'role',
        'method' => 'group_window',
        'caption' => '用户组-弹窗',
      ),
    ),
  ),
  'moduleMenu' => 
  array (
    'version' => '1',
    'charset' => 'utf-8',
    'lastUpdate' => '2015-10-09 20:10:10',
    'moduleName' => 'moduleMenu',
    'modulePath' => 'adminpanel',
    'moduleCaption' => '菜单管理',
    'description' => '由autoCodeigniter 系统的模块',
    'fileList' => NULL,
    'works' => true,
    'moduleUrl' => 'adminpanel/moduleMenu',
    'system' => true,
    'coder' => '胡子锅',
    'website' => 'http://',
    'moduleDetails' => 
    array (
      0 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'moduleMenu',
        'method' => 'index',
        'caption' => '菜单管理-列表',
      ),
      1 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'moduleMenu',
        'method' => 'add',
        'caption' => '菜单管理-新增',
      ),
      2 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'moduleMenu',
        'method' => 'edit',
        'caption' => '菜单管理-编辑',
      ),
      3 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'moduleMenu',
        'method' => 'delete',
        'caption' => '菜单管理-删除',
      ),
      4 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'moduleMenu',
        'method' => 'set_menu',
        'caption' => '菜单管理-设置菜单',
      ),
    ),
  ),
  'moduleManage' => 
  array (
    'version' => '1',
    'charset' => 'utf-8',
    'lastUpdate' => '2015-10-09 20:10:10',
    'moduleName' => 'module',
    'modulePath' => 'adminpanel',
    'moduleCaption' => '模块安装管理',
    'description' => '由autoCodeigniter 系统的模块',
    'fileList' => NULL,
    'works' => true,
    'moduleUrl' => 'adminpanel/moduleManage',
    'system' => true,
    'coder' => '胡子锅',
    'website' => 'http://',
    'moduleDetails' => 
    array (
      0 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'moduleManage',
        'method' => 'index',
        'caption' => '模块管理',
      ),
      1 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'moduleInstall',
        'method' => 'index',
        'caption' => '模块管理-开始',
      ),
      2 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'moduleInstall',
        'method' => 'check',
        'caption' => '模块管理-检查',
      ),
      3 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'moduleInstall',
        'method' => 'setup',
        'caption' => '模块管理-安装',
      ),
      4 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'moduleInstall',
        'method' => 'uninstall',
        'caption' => '模块管理-卸载',
      ),
      5 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'moduleInstall',
        'method' => 'reinstall',
        'caption' => '模块管理-重新安装',
      ),
      6 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'moduleInstall',
        'method' => 'delete',
        'caption' => '模块管理-删除',
      ),
    ),
  ),
  'helloWorld' => 
  array (
    'version' => '1',
    'charset' => 'utf-8',
    'lastUpdate' => '2015-10-09 20:10:10',
    'moduleName' => 'helloWorld',
    'modulePath' => 'adminpanel',
    'moduleCaption' => 'Hello World',
    'description' => '这里一个演示模块，来自于吸心大法第三章',
    'fileList' => NULL,
    'works' => true,
    'moduleUrl' => 'adminpanel/helloWorld',
    'system' => false,
    'coder' => '胡子锅',
    'website' => 'http://',
    'moduleDetails' => 
    array (
      0 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'helloWorld',
        'method' => 'index',
        'menu_name' => NULL,
        'caption' => NULL,
      ),
    ),
  ),
  'loss' => 
  array (
    'version' => '1',
    'charset' => 'utf-8',
    'lastUpdate' => '2018-03-12 13:02:36',
    'moduleName' => 'loss',
    'modulePath' => 'adminpanel',
    'moduleCaption' => '报损',
    'description' => '由autoCodeigniter 自动生成的模块',
    'fileList' => 
    array (
      0 => 'application/views/adminpanel/loss/edit.php',
      1 => 'scripts/adminpanel/loss/edit.js',
      2 => 'application/views/adminpanel/loss/readonly.php',
      3 => 'application/views/adminpanel/loss/lists.php',
      4 => 'scripts/adminpanel/loss/lists.js',
      5 => 'application/views/adminpanel/loss/choose.php',
      6 => 'application/controllers/adminpanel/Loss.php',
      7 => 'application/models/Loss_model.php',
    ),
    'works' => true,
    'moduleUrl' => 'adminpanel/loss',
    'system' => false,
    'coder' => '胡子锅',
    'website' => 'http://',
    'moduleDetails' => 
    array (
      0 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'loss',
        'method' => 'index',
        'menu_name' => '管理报损',
        'caption' => '管理报损',
      ),
      1 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'loss',
        'method' => 'index',
        'menu_name' => '报损列表',
        'caption' => '报损列表',
      ),
      2 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'loss',
        'method' => 'add',
        'menu_name' => '新增',
        'caption' => '新增',
      ),
      3 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'loss',
        'method' => 'edit',
        'menu_name' => '修改',
        'caption' => '修改',
      ),
      4 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'loss',
        'method' => 'choose',
        'menu_name' => '选择弹窗',
        'caption' => '选择弹窗',
      ),
      5 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'loss',
        'method' => 'delete_one',
        'menu_name' => '删除单个',
        'caption' => '删除单个',
      ),
      6 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'loss',
        'method' => 'delete_all',
        'menu_name' => '删除多个',
        'caption' => '删除多个',
      ),
      7 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'loss',
        'method' => 'readonly',
        'menu_name' => '查看',
        'caption' => '查看',
      ),
      8 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'loss',
        'method' => 'upload',
        'menu_name' => '上传',
        'caption' => '上传',
      ),
    ),
  ),
  'buy' => 
  array (
    'version' => '1',
    'charset' => 'utf-8',
    'lastUpdate' => '2018-03-12 14:10:25',
    'moduleName' => 'buy',
    'modulePath' => 'adminpanel',
    'moduleCaption' => '采购',
    'description' => '由autoCodeigniter 自动生成的模块',
    'fileList' => 
    array (
      0 => 'application/views/adminpanel/buy/edit.php',
      1 => 'scripts/adminpanel/buy/edit.js',
      2 => 'application/views/adminpanel/buy/readonly.php',
      3 => 'application/views/adminpanel/buy/lists.php',
      4 => 'scripts/adminpanel/buy/lists.js',
      5 => 'application/views/adminpanel/buy/choose.php',
      6 => 'application/controllers/adminpanel/Buy.php',
      7 => 'application/models/Buy_model.php',
    ),
    'works' => true,
    'moduleUrl' => 'adminpanel/buy',
    'system' => false,
    'coder' => '胡子锅',
    'website' => 'http://',
    'moduleDetails' => 
    array (
      0 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'buy',
        'method' => 'index',
        'menu_name' => '管理采购',
        'caption' => '管理采购',
      ),
      1 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'buy',
        'method' => 'index',
        'menu_name' => '采购列表',
        'caption' => '采购列表',
      ),
      2 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'buy',
        'method' => 'add',
        'menu_name' => '新增',
        'caption' => '新增',
      ),
      3 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'buy',
        'method' => 'edit',
        'menu_name' => '修改',
        'caption' => '修改',
      ),
      4 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'buy',
        'method' => 'choose',
        'menu_name' => '选择弹窗',
        'caption' => '选择弹窗',
      ),
      5 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'buy',
        'method' => 'delete_one',
        'menu_name' => '删除单个',
        'caption' => '删除单个',
      ),
      6 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'buy',
        'method' => 'delete_all',
        'menu_name' => '删除多个',
        'caption' => '删除多个',
      ),
      7 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'buy',
        'method' => 'readonly',
        'menu_name' => '查看',
        'caption' => '查看',
      ),
      8 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'buy',
        'method' => 'upload',
        'menu_name' => '上传',
        'caption' => '上传',
      ),
    ),
  ),
  'vendor' => 
  array (
    'version' => '1',
    'charset' => 'utf-8',
    'lastUpdate' => '2018-03-20 16:01:20',
    'moduleName' => 'vendor',
    'modulePath' => 'adminpanel',
    'moduleCaption' => '供应商管理',
    'description' => '由autoCodeigniter 自动生成的模块',
    'fileList' => 
    array (
      0 => 'application/views/adminpanel/vendor/edit.php',
      1 => 'scripts/adminpanel/vendor/edit.js',
      2 => 'application/views/adminpanel/vendor/readonly.php',
      3 => 'application/views/adminpanel/vendor/lists.php',
      4 => 'scripts/adminpanel/vendor/lists.js',
      5 => 'application/views/adminpanel/vendor/choose.php',
      6 => 'application/controllers/adminpanel/Vendor.php',
      7 => 'application/models/Vendor_model.php',
      8 => 'application/views/adminpanel/vendor/add_product.php',
    ),
    'works' => true,
    'moduleUrl' => 'adminpanel/vendor',
    'system' => false,
    'coder' => '胡子锅',
    'website' => 'http://',
    'moduleDetails' => 
    array (
      0 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'vendor',
        'method' => 'index',
        'menu_name' => '管理供应商管理',
        'caption' => '管理供应商管理',
      ),
      1 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'vendor',
        'method' => 'index',
        'menu_name' => '供应商管理列表',
        'caption' => '供应商管理列表',
      ),
      2 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'vendor',
        'method' => 'add',
        'menu_name' => '新增',
        'caption' => '新增',
      ),
      3 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'vendor',
        'method' => 'edit',
        'menu_name' => '修改',
        'caption' => '修改',
      ),
      4 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'vendor',
        'method' => 'choose',
        'menu_name' => '选择弹窗',
        'caption' => '选择弹窗',
      ),
      5 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'vendor',
        'method' => 'delete_one',
        'menu_name' => '删除单个',
        'caption' => '删除单个',
      ),
      6 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'vendor',
        'method' => 'delete_all',
        'menu_name' => '删除多个',
        'caption' => '删除多个',
      ),
      7 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'vendor',
        'method' => 'readonly',
        'menu_name' => '查看',
        'caption' => '查看',
      ),
      8 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'vendor',
        'method' => 'upload',
        'menu_name' => '上传',
        'caption' => '上传',
      ),
      9 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'vendor',
        'method' => 'add_product',
        'menu_name' => '',
        'caption' => '',
      ),
    ),
  ),
  'address' => 
  array (
    'version' => '1',
    'charset' => 'utf-8',
    'lastUpdate' => '2018-03-25 16:28:52',
    'moduleName' => 'address',
    'modulePath' => 'adminpanel',
    'moduleCaption' => '收货地址',
    'description' => '由autoCodeigniter 自动生成的模块',
    'fileList' => 
    array (
      0 => 'application/views/adminpanel/address/edit.php',
      1 => 'scripts/adminpanel/address/edit.js',
      2 => 'application/views/adminpanel/address/readonly.php',
      3 => 'application/views/adminpanel/address/lists.php',
      4 => 'scripts/adminpanel/address/lists.js',
      5 => 'application/views/adminpanel/address/choose.php',
      6 => 'application/controllers/adminpanel/Address.php',
      7 => 'application/models/Address_model.php',
    ),
    'works' => true,
    'moduleUrl' => 'adminpanel/address',
    'system' => false,
    'coder' => '胡子锅',
    'website' => 'http://',
    'moduleDetails' => 
    array (
      0 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'address',
        'method' => 'index',
        'menu_name' => '管理收货地址',
        'caption' => '管理收货地址',
      ),
      1 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'address',
        'method' => 'index',
        'menu_name' => '收货地址列表',
        'caption' => '收货地址列表',
      ),
      2 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'address',
        'method' => 'add',
        'menu_name' => '新增',
        'caption' => '新增',
      ),
      3 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'address',
        'method' => 'edit',
        'menu_name' => '修改',
        'caption' => '修改',
      ),
      4 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'address',
        'method' => 'choose',
        'menu_name' => '选择弹窗',
        'caption' => '选择弹窗',
      ),
      5 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'address',
        'method' => 'delete_one',
        'menu_name' => '删除单个',
        'caption' => '删除单个',
      ),
      6 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'address',
        'method' => 'delete_all',
        'menu_name' => '删除多个',
        'caption' => '删除多个',
      ),
      7 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'address',
        'method' => 'readonly',
        'menu_name' => '查看',
        'caption' => '查看',
      ),
      8 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'address',
        'method' => 'upload',
        'menu_name' => '上传',
        'caption' => '上传',
      ),
    ),
  ),
  'pocket' => 
  array (
    'version' => '1',
    'charset' => 'utf-8',
    'lastUpdate' => '2018-03-28 15:14:15',
    'moduleName' => 'pocket',
    'modulePath' => 'adminpanel',
    'moduleCaption' => '用户金额明细',
    'description' => '由autoCodeigniter 自动生成的模块',
    'fileList' => 
    array (
      0 => 'application/views/adminpanel/pocket/edit.php',
      1 => 'scripts/adminpanel/pocket/edit.js',
      2 => 'application/views/adminpanel/pocket/readonly.php',
      3 => 'application/views/adminpanel/pocket/lists.php',
      4 => 'scripts/adminpanel/pocket/lists.js',
      5 => 'application/views/adminpanel/pocket/choose.php',
      6 => 'application/controllers/adminpanel/Pocket.php',
      7 => 'application/models/Pocket_model.php',
    ),
    'works' => true,
    'moduleUrl' => 'adminpanel/pocket',
    'system' => false,
    'coder' => '胡子锅',
    'website' => 'http://',
    'moduleDetails' => 
    array (
      0 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'pocket',
        'method' => 'index',
        'menu_name' => '管理用户金额明细',
        'caption' => '管理用户金额明细',
      ),
      1 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'pocket',
        'method' => 'index',
        'menu_name' => '用户金额明细列表',
        'caption' => '用户金额明细列表',
      ),
      2 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'pocket',
        'method' => 'add',
        'menu_name' => '新增',
        'caption' => '新增',
      ),
      3 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'pocket',
        'method' => 'edit',
        'menu_name' => '修改',
        'caption' => '修改',
      ),
      4 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'pocket',
        'method' => 'choose',
        'menu_name' => '选择弹窗',
        'caption' => '选择弹窗',
      ),
      5 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'pocket',
        'method' => 'delete_one',
        'menu_name' => '删除单个',
        'caption' => '删除单个',
      ),
      6 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'pocket',
        'method' => 'delete_all',
        'menu_name' => '删除多个',
        'caption' => '删除多个',
      ),
      7 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'pocket',
        'method' => 'readonly',
        'menu_name' => '查看',
        'caption' => '查看',
      ),
      8 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'pocket',
        'method' => 'upload',
        'menu_name' => '上传',
        'caption' => '上传',
      ),
    ),
  ),
  'returngoods' => 
  array (
    'version' => '1',
    'charset' => 'utf-8',
    'lastUpdate' => '2018-03-12 12:47:31',
    'moduleName' => 'returngoods',
    'modulePath' => 'adminpanel',
    'moduleCaption' => '退货',
    'description' => '由autoCodeigniter 自动生成的模块',
    'fileList' => 
    array (
      0 => 'application/views/adminpanel/returngoods/edit.php',
      1 => 'scripts/adminpanel/returngoods/edit.js',
      2 => 'application/views/adminpanel/returngoods/readonly.php',
      3 => 'application/views/adminpanel/returngoods/lists.php',
      4 => 'scripts/adminpanel/returngoods/lists.js',
      5 => 'application/views/adminpanel/returngoods/choose.php',
      6 => 'application/controllers/adminpanel/Returngoods.php',
      7 => 'application/models/Returngoods_model.php',
    ),
    'works' => true,
    'moduleUrl' => 'adminpanel/returngoods',
    'system' => false,
    'coder' => '胡子锅',
    'website' => 'http://',
    'moduleDetails' => 
    array (
      0 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'returngoods',
        'method' => 'index',
        'menu_name' => '管理退货',
        'caption' => '管理退货',
      ),
      1 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'returngoods',
        'method' => 'index',
        'menu_name' => '退货列表',
        'caption' => '退货列表',
      ),
      2 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'returngoods',
        'method' => 'add',
        'menu_name' => '新增',
        'caption' => '新增',
      ),
      3 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'returngoods',
        'method' => 'edit',
        'menu_name' => '修改',
        'caption' => '修改',
      ),
      4 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'returngoods',
        'method' => 'choose',
        'menu_name' => '选择弹窗',
        'caption' => '选择弹窗',
      ),
      5 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'returngoods',
        'method' => 'delete_one',
        'menu_name' => '删除单个',
        'caption' => '删除单个',
      ),
      6 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'returngoods',
        'method' => 'delete_all',
        'menu_name' => '删除多个',
        'caption' => '删除多个',
      ),
      7 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'returngoods',
        'method' => 'readonly',
        'menu_name' => '查看',
        'caption' => '查看',
      ),
      8 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'returngoods',
        'method' => 'upload',
        'menu_name' => '上传',
        'caption' => '上传',
      ),
    ),
  ),
  'purchase' => 
  array (
    'version' => '1',
    'charset' => 'utf-8',
    'lastUpdate' => '2018-03-12 12:27:42',
    'moduleName' => 'purchase',
    'modulePath' => 'adminpanel',
    'moduleCaption' => '进货',
    'description' => '由autoCodeigniter 自动生成的模块',
    'fileList' => 
    array (
      0 => 'application/views/adminpanel/purchase/edit.php',
      1 => 'scripts/adminpanel/purchase/edit.js',
      2 => 'application/views/adminpanel/purchase/readonly.php',
      3 => 'application/views/adminpanel/purchase/lists.php',
      4 => 'scripts/adminpanel/purchase/lists.js',
      5 => 'application/views/adminpanel/purchase/choose.php',
      6 => 'application/controllers/adminpanel/Purchase.php',
      7 => 'application/models/Purchase_model.php',
    ),
    'works' => true,
    'moduleUrl' => 'adminpanel/purchase',
    'system' => false,
    'coder' => '胡子锅',
    'website' => 'http://',
    'moduleDetails' => 
    array (
      0 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'purchase',
        'method' => 'index',
        'menu_name' => '管理进货',
        'caption' => '管理进货',
      ),
      1 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'purchase',
        'method' => 'index',
        'menu_name' => '进货列表',
        'caption' => '进货列表',
      ),
      2 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'purchase',
        'method' => 'add',
        'menu_name' => '新增',
        'caption' => '新增',
      ),
      3 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'purchase',
        'method' => 'edit',
        'menu_name' => '修改',
        'caption' => '修改',
      ),
      4 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'purchase',
        'method' => 'choose',
        'menu_name' => '选择弹窗',
        'caption' => '选择弹窗',
      ),
      5 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'purchase',
        'method' => 'delete_one',
        'menu_name' => '删除单个',
        'caption' => '删除单个',
      ),
      6 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'purchase',
        'method' => 'delete_all',
        'menu_name' => '删除多个',
        'caption' => '删除多个',
      ),
      7 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'purchase',
        'method' => 'readonly',
        'menu_name' => '查看',
        'caption' => '查看',
      ),
      8 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'purchase',
        'method' => 'upload',
        'menu_name' => '上传',
        'caption' => '上传',
      ),
      9 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'purchase',
        'method' => 'get_options',
        'menu_name' => '',
        'caption' => '',
      ),
    ),
  ),
  'receivables' => 
  array (
    'version' => '1',
    'charset' => 'utf-8',
    'lastUpdate' => '2018-03-12 13:24:04',
    'moduleName' => 'receivables',
    'modulePath' => 'adminpanel',
    'moduleCaption' => '收款单',
    'description' => '由autoCodeigniter 自动生成的模块',
    'fileList' => 
    array (
      0 => 'application/views/adminpanel/receivables/edit.php',
      1 => 'scripts/adminpanel/receivables/edit.js',
      2 => 'application/views/adminpanel/receivables/readonly.php',
      3 => 'application/views/adminpanel/receivables/lists.php',
      4 => 'scripts/adminpanel/receivables/lists.js',
      5 => 'application/views/adminpanel/receivables/choose.php',
      6 => 'application/controllers/adminpanel/Receivables.php',
      7 => 'application/models/Receivables_model.php',
    ),
    'works' => true,
    'moduleUrl' => 'adminpanel/receivables',
    'system' => false,
    'coder' => '胡子锅',
    'website' => 'http://',
    'moduleDetails' => 
    array (
      0 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'receivables',
        'method' => 'index',
        'menu_name' => '管理收款单',
        'caption' => '管理收款单',
      ),
      1 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'receivables',
        'method' => 'index',
        'menu_name' => '收款单列表',
        'caption' => '收款单列表',
      ),
      2 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'receivables',
        'method' => 'add',
        'menu_name' => '新增',
        'caption' => '新增',
      ),
      3 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'receivables',
        'method' => 'edit',
        'menu_name' => '修改',
        'caption' => '修改',
      ),
      4 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'receivables',
        'method' => 'choose',
        'menu_name' => '选择弹窗',
        'caption' => '选择弹窗',
      ),
      5 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'receivables',
        'method' => 'delete_one',
        'menu_name' => '删除单个',
        'caption' => '删除单个',
      ),
      6 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'receivables',
        'method' => 'delete_all',
        'menu_name' => '删除多个',
        'caption' => '删除多个',
      ),
      7 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'receivables',
        'method' => 'readonly',
        'menu_name' => '查看',
        'caption' => '查看',
      ),
      8 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'receivables',
        'method' => 'upload',
        'menu_name' => '上传',
        'caption' => '上传',
      ),
    ),
  ),
  'stock' => 
  array (
    'version' => '1',
    'charset' => 'utf-8',
    'lastUpdate' => '2018-03-12 13:15:29',
    'moduleName' => 'stock',
    'modulePath' => 'adminpanel',
    'moduleCaption' => '库存',
    'description' => '由autoCodeigniter 自动生成的模块',
    'fileList' => 
    array (
      0 => 'application/views/adminpanel/stock/edit.php',
      1 => 'scripts/adminpanel/stock/edit.js',
      2 => 'application/views/adminpanel/stock/readonly.php',
      3 => 'application/views/adminpanel/stock/lists.php',
      4 => 'scripts/adminpanel/stock/lists.js',
      5 => 'application/views/adminpanel/stock/choose.php',
      6 => 'application/controllers/adminpanel/Stock.php',
      7 => 'application/models/Stock_model.php',
    ),
    'works' => true,
    'moduleUrl' => 'adminpanel/stock',
    'system' => false,
    'coder' => '胡子锅',
    'website' => 'http://',
    'moduleDetails' => 
    array (
      0 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'stock',
        'method' => 'index',
        'menu_name' => '管理库存',
        'caption' => '管理库存',
      ),
      1 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'stock',
        'method' => 'index',
        'menu_name' => '库存列表',
        'caption' => '库存列表',
      ),
      2 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'stock',
        'method' => 'add',
        'menu_name' => '新增',
        'caption' => '新增',
      ),
      3 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'stock',
        'method' => 'edit',
        'menu_name' => '修改',
        'caption' => '修改',
      ),
      4 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'stock',
        'method' => 'choose',
        'menu_name' => '选择弹窗',
        'caption' => '选择弹窗',
      ),
      5 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'stock',
        'method' => 'delete_one',
        'menu_name' => '删除单个',
        'caption' => '删除单个',
      ),
      6 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'stock',
        'method' => 'delete_all',
        'menu_name' => '删除多个',
        'caption' => '删除多个',
      ),
      7 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'stock',
        'method' => 'readonly',
        'menu_name' => '查看',
        'caption' => '查看',
      ),
      8 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'stock',
        'method' => 'upload',
        'menu_name' => '上传',
        'caption' => '上传',
      ),
    ),
  ),
  'product' => 
  array (
    'version' => '1',
    'charset' => 'utf-8',
    'lastUpdate' => '2018-03-12 12:08:33',
    'moduleName' => 'product',
    'modulePath' => 'adminpanel',
    'moduleCaption' => '产品',
    'description' => '由autoCodeigniter 自动生成的模块',
    'fileList' => 
    array (
      0 => 'application/views/adminpanel/product/edit.php',
      1 => 'scripts/adminpanel/product/edit.js',
      2 => 'application/views/adminpanel/product/readonly.php',
      3 => 'application/views/adminpanel/product/lists.php',
      4 => 'scripts/adminpanel/product/lists.js',
      5 => 'application/views/adminpanel/product/choose.php',
      6 => 'application/views/adminpanel/product/upload.php',
      7 => 'application/controllers/adminpanel/Product.php',
      8 => 'application/models/Product_model.php',
    ),
    'works' => true,
    'moduleUrl' => 'adminpanel/product',
    'system' => false,
    'coder' => '胡子锅',
    'website' => 'http://',
    'moduleDetails' => 
    array (
      0 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'product',
        'method' => 'index',
        'menu_name' => '管理产品',
        'caption' => '管理产品',
      ),
      1 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'product',
        'method' => 'index',
        'menu_name' => '产品列表',
        'caption' => '产品列表',
      ),
      2 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'product',
        'method' => 'add',
        'menu_name' => '新增',
        'caption' => '新增',
      ),
      3 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'product',
        'method' => 'edit',
        'menu_name' => '修改',
        'caption' => '修改',
      ),
      4 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'product',
        'method' => 'choose',
        'menu_name' => '选择弹窗',
        'caption' => '选择弹窗',
      ),
      5 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'product',
        'method' => 'delete_one',
        'menu_name' => '删除单个',
        'caption' => '删除单个',
      ),
      6 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'product',
        'method' => 'delete_all',
        'menu_name' => '删除多个',
        'caption' => '删除多个',
      ),
      7 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'product',
        'method' => 'readonly',
        'menu_name' => '查看',
        'caption' => '查看',
      ),
      8 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'product',
        'method' => 'upload',
        'menu_name' => '上传',
        'caption' => '上传',
      ),
    ),
  ),
  'customer' => 
  array (
    'version' => '1',
    'charset' => 'utf-8',
    'lastUpdate' => '2018-03-12 12:13:38',
    'moduleName' => 'customer',
    'modulePath' => 'adminpanel',
    'moduleCaption' => '客户',
    'description' => '由autoCodeigniter 自动生成的模块',
    'fileList' => 
    array (
      0 => 'application/views/adminpanel/customer/edit.php',
      1 => 'scripts/adminpanel/customer/edit.js',
      2 => 'application/views/adminpanel/customer/readonly.php',
      3 => 'application/views/adminpanel/customer/lists.php',
      4 => 'scripts/adminpanel/customer/lists.js',
      5 => 'application/views/adminpanel/customer/choose.php',
      6 => 'application/views/adminpanel/customer/upload.php',
      7 => 'application/controllers/adminpanel/Customer.php',
      8 => 'application/models/Customer_model.php',
    ),
    'works' => true,
    'moduleUrl' => 'adminpanel/customer',
    'system' => false,
    'coder' => '胡子锅',
    'website' => 'http://',
    'moduleDetails' => 
    array (
      0 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'customer',
        'method' => 'index',
        'menu_name' => '管理客户',
        'caption' => '管理客户',
      ),
      1 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'customer',
        'method' => 'index',
        'menu_name' => '客户列表',
        'caption' => '客户列表',
      ),
      2 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'customer',
        'method' => 'add',
        'menu_name' => '新增',
        'caption' => '新增',
      ),
      3 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'customer',
        'method' => 'edit',
        'menu_name' => '修改',
        'caption' => '修改',
      ),
      4 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'customer',
        'method' => 'choose',
        'menu_name' => '选择弹窗',
        'caption' => '选择弹窗',
      ),
      5 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'customer',
        'method' => 'delete_one',
        'menu_name' => '删除单个',
        'caption' => '删除单个',
      ),
      6 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'customer',
        'method' => 'delete_all',
        'menu_name' => '删除多个',
        'caption' => '删除多个',
      ),
      7 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'customer',
        'method' => 'readonly',
        'menu_name' => '查看',
        'caption' => '查看',
      ),
      8 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'customer',
        'method' => 'upload',
        'menu_name' => '上传',
        'caption' => '上传',
      ),
    ),
  ),
  'sale' => 
  array (
    'version' => '1',
    'charset' => 'utf-8',
    'lastUpdate' => '2018-03-12 13:58:19',
    'moduleName' => 'sale',
    'modulePath' => 'adminpanel',
    'moduleCaption' => '销售',
    'description' => '由autoCodeigniter 自动生成的模块',
    'fileList' => 
    array (
      0 => 'application/views/adminpanel/sale/edit.php',
      1 => 'scripts/adminpanel/sale/edit.js',
      2 => 'application/views/adminpanel/sale/readonly.php',
      3 => 'application/views/adminpanel/sale/lists.php',
      4 => 'scripts/adminpanel/sale/lists.js',
      5 => 'application/views/adminpanel/sale/choose.php',
      6 => 'application/controllers/adminpanel/Sale.php',
      7 => 'application/models/Sale_model.php',
    ),
    'works' => true,
    'moduleUrl' => 'adminpanel/sale',
    'system' => false,
    'coder' => '胡子锅',
    'website' => 'http://',
    'moduleDetails' => 
    array (
      0 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'sale',
        'method' => 'index',
        'menu_name' => '管理销售',
        'caption' => '管理销售',
      ),
      1 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'sale',
        'method' => 'index',
        'menu_name' => '销售列表',
        'caption' => '销售列表',
      ),
      2 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'sale',
        'method' => 'add',
        'menu_name' => '新增',
        'caption' => '新增',
      ),
      3 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'sale',
        'method' => 'edit',
        'menu_name' => '修改',
        'caption' => '修改',
      ),
      4 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'sale',
        'method' => 'choose',
        'menu_name' => '选择弹窗',
        'caption' => '选择弹窗',
      ),
      5 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'sale',
        'method' => 'delete_one',
        'menu_name' => '删除单个',
        'caption' => '删除单个',
      ),
      6 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'sale',
        'method' => 'delete_all',
        'menu_name' => '删除多个',
        'caption' => '删除多个',
      ),
      7 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'sale',
        'method' => 'readonly',
        'menu_name' => '查看',
        'caption' => '查看',
      ),
      8 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'sale',
        'method' => 'upload',
        'menu_name' => '上传',
        'caption' => '上传',
      ),
      9 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'sale',
        'method' => 'get_stocks',
        'menu_name' => '',
        'caption' => '',
      ),
      10 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'sale',
        'method' => 'get_saleprice',
        'menu_name' => '',
        'caption' => '',
      ),
    ),
  ),
  'saledetail' => 
  array (
    'version' => '1',
    'charset' => 'utf-8',
    'lastUpdate' => '2018-04-07 08:58:09',
    'moduleName' => 'saledetail',
    'modulePath' => 'adminpanel',
    'moduleCaption' => '销售详情',
    'description' => '由autoCodeigniter 自动生成的模块',
    'fileList' => 
    array (
      0 => 'application/views/adminpanel/saledetail/edit.php',
      1 => 'scripts/adminpanel/saledetail/edit.js',
      2 => 'application/views/adminpanel/saledetail/readonly.php',
      3 => 'application/views/adminpanel/saledetail/lists.php',
      4 => 'scripts/adminpanel/saledetail/lists.js',
      5 => 'application/views/adminpanel/saledetail/choose.php',
      6 => 'application/controllers/adminpanel/Saledetail.php',
      7 => 'application/models/Saledetail_model.php',
    ),
    'works' => true,
    'moduleUrl' => 'adminpanel/saledetail',
    'system' => false,
    'coder' => '胡子锅',
    'website' => 'http://',
    'moduleDetails' => 
    array (
      0 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'saledetail',
        'method' => 'index',
        'menu_name' => '管理销售详情',
        'caption' => '管理销售详情',
      ),
      1 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'saledetail',
        'method' => 'index',
        'menu_name' => '销售详情列表',
        'caption' => '销售详情列表',
      ),
      2 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'saledetail',
        'method' => 'add',
        'menu_name' => '新增',
        'caption' => '新增',
      ),
      3 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'saledetail',
        'method' => 'edit',
        'menu_name' => '修改',
        'caption' => '修改',
      ),
      4 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'saledetail',
        'method' => 'choose',
        'menu_name' => '选择弹窗',
        'caption' => '选择弹窗',
      ),
      5 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'saledetail',
        'method' => 'delete_one',
        'menu_name' => '删除单个',
        'caption' => '删除单个',
      ),
      6 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'saledetail',
        'method' => 'delete_all',
        'menu_name' => '删除多个',
        'caption' => '删除多个',
      ),
      7 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'saledetail',
        'method' => 'readonly',
        'menu_name' => '查看',
        'caption' => '查看',
      ),
      8 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'saledetail',
        'method' => 'upload',
        'menu_name' => '上传',
        'caption' => '上传',
      ),
    ),
  ),
  'payment' => 
  array (
    'version' => '1',
    'charset' => 'utf-8',
    'lastUpdate' => '2018-03-12 13:34:38',
    'moduleName' => 'payment',
    'modulePath' => 'adminpanel',
    'moduleCaption' => '付款单',
    'description' => '由autoCodeigniter 自动生成的模块',
    'fileList' => 
    array (
      0 => 'application/views/adminpanel/payment/edit.php',
      1 => 'scripts/adminpanel/payment/edit.js',
      2 => 'application/views/adminpanel/payment/readonly.php',
      3 => 'application/views/adminpanel/payment/lists.php',
      4 => 'scripts/adminpanel/payment/lists.js',
      5 => 'application/views/adminpanel/payment/choose.php',
      6 => 'application/controllers/adminpanel/Payment.php',
      7 => 'application/models/Payment_model.php',
    ),
    'works' => true,
    'moduleUrl' => 'adminpanel/payment',
    'system' => false,
    'coder' => '胡子锅',
    'website' => 'http://',
    'moduleDetails' => 
    array (
      0 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'payment',
        'method' => 'index',
        'menu_name' => '管理付款单',
        'caption' => '管理付款单',
      ),
      1 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'payment',
        'method' => 'index',
        'menu_name' => '付款单列表',
        'caption' => '付款单列表',
      ),
      2 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'payment',
        'method' => 'add',
        'menu_name' => '新增',
        'caption' => '新增',
      ),
      3 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'payment',
        'method' => 'edit',
        'menu_name' => '修改',
        'caption' => '修改',
      ),
      4 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'payment',
        'method' => 'choose',
        'menu_name' => '选择弹窗',
        'caption' => '选择弹窗',
      ),
      5 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'payment',
        'method' => 'delete_one',
        'menu_name' => '删除单个',
        'caption' => '删除单个',
      ),
      6 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'payment',
        'method' => 'delete_all',
        'menu_name' => '删除多个',
        'caption' => '删除多个',
      ),
      7 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'payment',
        'method' => 'readonly',
        'menu_name' => '查看',
        'caption' => '查看',
      ),
      8 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'payment',
        'method' => 'upload',
        'menu_name' => '上传',
        'caption' => '上传',
      ),
    ),
  ),
);

/* End of file aci.php */
/* Location: ./application/config/aci.php */
