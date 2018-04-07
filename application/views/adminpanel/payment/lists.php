<?php defined('BASEPATH') or exit('No direct script access allowed.'); ?><?php defined('BASEPATH') or exit('No permission resources.'); ?>
<div class='panel panel-default grid'>
    <div class='panel-heading'>
        <i class='fa fa-table'></i> 付款单列表
        <div class='panel-tools'>
            <div class='btn-group'>
                 <a class="btn " href="<?php echo base_url('adminpanel/payment/add')?>"><span class="glyphicon glyphicon-plus"></span> 添加 </a>             </div>
            <div class='badge'><?php echo count($data_list)?></div>
        </div>
    </div>
        <div class='panel-filter '>
      <div class='row'>
        <div class='col-md-12'>
        <form class="form-inline" role="form" method="get">
          
	<div class="form-group">
				<label for="method" class="col-sm-5 control-label form-control-static">付款方式</label>
				<div class="col-sm-7 ">
					<select class="form-control "  name="method"  id="method">
				<option value="">==不限==</option>
								<option value='现金' <?php if(isset($data_info['method'])&&($data_info['method']=='现金')) { ?> selected="selected" <?php } ?>            >现金</option>
				<option value='微信' <?php if(isset($data_info['method'])&&($data_info['method']=='微信')) { ?> selected="selected" <?php } ?>            >微信</option>
				<option value='转账' <?php if(isset($data_info['method'])&&($data_info['method']=='转账')) { ?> selected="selected" <?php } ?>            >转账</option>
</select>
				</div>
			</div>

<div class="form-group">
<label >付款时间</label>
<input class="form-control datepicker" type="text" value="<?php echo isset($data_info['time_1'])?$data_info['time_1']:'' ?> " name="time_1"  id="timetime1"  placeholder="开始时间"/> - 
<input class="form-control datepicker" type="text" value="<?php echo isset($data_info['time_2'])?$data_info['time_2']:'' ?> " name="time_2"  id="timetime2"  placeholder="结束时间"/>
</div>
<button type="submit" name="dosubmit" value="搜索" class="btn btn-success"><i class='glyphicon glyphicon-search'></i></button>        </form>
        </div>
      </div> 
    </div>
          <form method="post" id="form_list"  action="<?php echo base_url('adminpanel/payment/delete_all')?>"  > 
    <div class='panel-body '>
    <?php if($data_list):?>
        <table class="table table-hover dataTable" id="checkAll">
          <thead>
            <tr>
              <th>#</th>
                            <?php $css=""; $next_url = base_url('adminpanel/payment?order=method&dir=desc'); ?>
              <?php if(($order=='method'&&$dir=='desc')) { ?>
              <?php $css="sorting_desc";$next_url = base_url('adminpanel/payment?order=method&dir=asc'); ?>
              <?php } elseif (($order=='method'&&$dir=='asc')) { ?>
              <?php $css="sorting_asc";?>
              <?php } ?><th class="sorting <?php echo $css;?>"   onclick="window.location.href='<?php echo $next_url;?>'"   nowrap="nowrap">付款方式</th>
                            <?php $css=""; $next_url = base_url('adminpanel/payment?order=time&dir=desc'); ?>
              <?php if(($order=='time'&&$dir=='desc')) { ?>
              <?php $css="sorting_desc";$next_url = base_url('adminpanel/payment?order=time&dir=asc'); ?>
              <?php } elseif (($order=='time'&&$dir=='asc')) { ?>
              <?php $css="sorting_asc";?>
              <?php } ?><th class="sorting <?php echo $css;?>"   onclick="window.location.href='<?php echo $next_url;?>'"   nowrap="nowrap">付款时间</th>
              <th   nowrap="nowrap">款项说明</th>
              <th   nowrap="nowrap">经手人</th>
              <th>操作</th>
            </tr>
          </thead>
          <tbody>
          <?php foreach($data_list as $k=>$v):?>
            <tr>
              <td><input type="checkbox" name="pid[]" value="<?php echo $v['payment_id']?>" /></td>
                             <td><?php echo $v['method']?></td>
                            <td><?php echo $v['time']?></td>
                            <td><?php echo $v['source']?></td>
                            <td><?php echo $v['operateman']?></td>
              <td>
                            	<a href="<?php echo base_url('adminpanel/payment/readonly/'.$v['payment_id'])?>"  class="btn btn-default btn-xs"><span class="glyphicon glyphicon-share-alt"></span> 查看</a>
                                            <a href="<?php echo base_url('adminpanel/payment/edit/'.$v['payment_id'])?>"  class="btn btn-default btn-xs"><span class="glyphicon glyphicon-edit"></span> 修改</a>
                                            <button type="button" class="btn btn-default btn-xs delete-btn" value="<?php echo $v['payment_id'];?>"><span class="glyphicon glyphicon-remove"></span> 删除</button>
                
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
        require(['<?php echo SITE_URL?>scripts/adminpanel/payment/lists.js']);
    });
</script>
    