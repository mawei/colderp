<?php defined('BASEPATH') or exit('No direct script access allowed.'); ?><?php defined('BASEPATH') or exit('No permission resources.'); ?>
<div class='panel panel-default grid'>
    <div class='panel-heading'>
        <i class='fa fa-table'></i> 客户列表
        <div class='panel-tools'>
            <div class='btn-group'>
                 <a class="btn " href="<?php echo base_url('adminpanel/customer/add')?>"><span class="glyphicon glyphicon-plus"></span> 添加 </a>             </div>
            <div class='badge'><?php echo count($data_list)?></div>
        </div>
    </div>
        <div class='panel-filter '>
      <div class='row'>
        <div class='col-md-12'>
        <form class="form-inline" role="form" method="get">
          
<div class="form-group">
<label for="keyword" class="control-label form-control-static">关键词</label>
<input class="form-control" type="text" name="keyword"  value="<?php echo isset($data_info['keyword'])? $data_info['keyword']:"";?>" id="keyword" placeholder="请输入关键词"/></div>

	<div class="form-group">
				<label for="customer_type" class="col-sm-5 control-label form-control-static">客户类型</label>
				<div class="col-sm-7 ">
					<select class="form-control "  name="customer_type"  id="customer_type">
				<option value="">==不限==</option>
								<option value='协议客户' <?php if(isset($data_info['customer_type'])&&($data_info['customer_type']=='协议客户')) { ?> selected="selected" <?php } ?>            >协议客户</option>
				<option value='普通客户' <?php if(isset($data_info['customer_type'])&&($data_info['customer_type']=='普通客户')) { ?> selected="selected" <?php } ?>            >普通客户</option>
        <option value='个人客户' <?php if(isset($data_info['customer_type'])&&($data_info['customer_type']=='个人客户')) { ?> selected="selected" <?php } ?>            >个人客户</option>
        <option value='业务员' <?php if(isset($data_info['customer_type'])&&($data_info['customer_type']=='业务员')) { ?> selected="selected" <?php } ?>            >业务员</option>
</select>
				</div>
			</div>
<button type="submit" name="dosubmit" value="搜索" class="btn btn-success"><i class='glyphicon glyphicon-search'></i></button>        </form>
        </div>
      </div> 
    </div>
          <form method="post" id="form_list"  action="<?php echo base_url('adminpanel/customer/delete_all')?>"  > 
    <div class='panel-body '>
    <?php if($data_list):?>
        <table class="table table-hover dataTable" id="checkAll">
          <thead>
            <tr>
              <th>#</th>
                            <?php $css=""; $next_url = base_url('adminpanel/customer?order=customer_type&dir=desc'); ?>
              <?php if(($order=='customer_type'&&$dir=='desc')) { ?>
              <?php $css="sorting_desc";$next_url = base_url('adminpanel/customer?order=customer_type&dir=asc'); ?>
              <?php } elseif (($order=='customer_type'&&$dir=='asc')) { ?>
              <?php $css="sorting_asc";?>
              <?php } ?><th class="sorting <?php echo $css;?>"   onclick="window.location.href='<?php echo $next_url;?>'"   nowrap="nowrap">客户类型</th>
                            <?php $css=""; $next_url = base_url('adminpanel/customer?order=name&dir=desc'); ?>
              <?php if(($order=='name'&&$dir=='desc')) { ?>
              <?php $css="sorting_desc";$next_url = base_url('adminpanel/customer?order=name&dir=asc'); ?>
              <?php } elseif (($order=='name'&&$dir=='asc')) { ?>
              <?php $css="sorting_asc";?>
              <?php } ?><th class="sorting <?php echo $css;?>"   onclick="window.location.href='<?php echo $next_url;?>'"   nowrap="nowrap">姓名</th>
                            <?php $css=""; $next_url = base_url('adminpanel/customer?order=code&dir=desc'); ?>
              <?php if(($order=='code'&&$dir=='desc')) { ?>
              <?php $css="sorting_desc";$next_url = base_url('adminpanel/customer?order=code&dir=asc'); ?>
              <?php } elseif (($order=='code'&&$dir=='asc')) { ?>
              <?php $css="sorting_asc";?>
              <?php } ?><th class="sorting <?php echo $css;?>"   onclick="window.location.href='<?php echo $next_url;?>'"   nowrap="nowrap">商户二维码</th>
                            <?php $css=""; $next_url = base_url('adminpanel/customer?order=account&dir=desc'); ?>
              <?php if(($order=='account'&&$dir=='desc')) { ?>
              <?php $css="sorting_desc";$next_url = base_url('adminpanel/customer?order=account&dir=asc'); ?>
              <?php } elseif (($order=='account'&&$dir=='asc')) { ?>
              <?php $css="sorting_asc";?>
              <?php } ?><th class="sorting <?php echo $css;?>"   onclick="window.location.href='<?php echo $next_url;?>'"   nowrap="nowrap">开户行账号</th>
                            <?php $css=""; $next_url = base_url('adminpanel/customer?order=freezer_number&dir=desc'); ?>
              <?php if(($order=='freezer_number'&&$dir=='desc')) { ?>
              <?php $css="sorting_desc";$next_url = base_url('adminpanel/customer?order=freezer_number&dir=asc'); ?>
              <?php } elseif (($order=='freezer_number'&&$dir=='asc')) { ?>
              <?php $css="sorting_asc";?>
              <?php } ?><th class="sorting <?php echo $css;?>"   onclick="window.location.href='<?php echo $next_url;?>'"   nowrap="nowrap">冰柜数量</th>
                            <?php $css=""; $next_url = base_url('adminpanel/customer?order=discount&dir=desc'); ?>
              <?php if(($order=='discount'&&$dir=='desc')) { ?>
              <?php $css="sorting_desc";$next_url = base_url('adminpanel/customer?order=discount&dir=asc'); ?>
              <?php } elseif (($order=='discount'&&$dir=='asc')) { ?>
              <?php $css="sorting_asc";?>
              <?php } ?><th class="sorting <?php echo $css;?>"   onclick="window.location.href='<?php echo $next_url;?>'"   nowrap="nowrap">商户折扣(填入百分比，如10)</th>
              <th>操作</th>
            </tr>
          </thead>
          <tbody>
          <?php foreach($data_list as $k=>$v):?>
            <tr>
              <td><input type="checkbox" name="pid[]" value="<?php echo $v['customer_id']?>" /></td>
                             <td><?php echo $v['customer_type']?></td>
                            <td><?php echo $v['name']?></td>
                            <td><?php echo $v['code']?></td>
                            <td><?php echo $v['account']?></td>
                            <td><?php echo $v['freezer_number']?></td>
                            <td><?php echo $v['discount']?></td>
              <td>
                            	<a href="<?php echo base_url('adminpanel/customer/readonly/'.$v['customer_id'])?>"  class="btn btn-default btn-xs"><span class="glyphicon glyphicon-share-alt"></span> 查看</a>
                                            <a href="<?php echo base_url('adminpanel/customer/edit/'.$v['customer_id'])?>"  class="btn btn-default btn-xs"><span class="glyphicon glyphicon-edit"></span> 修改</a>
                                            <button type="button" class="btn btn-default btn-xs delete-btn" value="<?php echo $v['customer_id'];?>"><span class="glyphicon glyphicon-remove"></span> 删除</button>
                
              </td>
            </tr>
            <?php endforeach;?>
            
          </tbody>
        </table> 
    	</div>
      <div class="panel-footer">
        <div class="pull-left">
          <div class="btn-group">
                  <button type="button" class="btn btn-default" id="reverseBtn"><span class="glyphicon glyphicon-ok"></span> 反选</button>
            <button type="button" id="deleteBtn"  class="btn btn-default"><span class="glyphicon glyphicon-remove"></span> 删除勾选</button>
                 </div>
      </div>
        <div class="pull-right">
        <?php echo $pages;?>
        </div>
      </div> 
      </form>  
  </div>
<?php else:?>
    <div class="no-result">-- 暂无数据 -- </div>
<?php endif;?>

	    <script language="javascript" type="text/javascript">
    require(['<?php echo SITE_URL?>scripts/common.js'], function (common) {
        require(['<?php echo SITE_URL?>scripts/adminpanel/customer/lists.js']);
    });
</script>
    