<?php defined('BASEPATH') or exit('No direct script access allowed.'); ?><?php defined('BASEPATH') or exit('No permission resources.'); ?>
<div class='panel panel-default grid'>
  <div class='panel-heading'>
    <i class='fa fa-table'></i> 销售详情列表
    <div class='panel-tools'>
      <div class='btn-group'>
       <a class="btn " href="<?php echo base_url('adminpanel/saledetail/add')?>"><span class="glyphicon glyphicon-plus"></span> 添加 </a>             </div>
       <div class='badge'><?php echo count($data_list)?></div>
     </div>
   </div>
   <form method="post" id="form_list"  action="<?php echo base_url('adminpanel/saledetail/delete_all')?>"  > 
    <div class='panel-body '>
      <?php if($data_list):?>
        <table class="table table-hover dataTable" id="checkAll">
          <thead>
            <tr>
              <th>#</th>
              <?php $css=""; $next_url = base_url('adminpanel/saledetail?order=sale_id&dir=desc'); ?>
              <?php if(($order=='sale_id'&&$dir=='desc')) { ?>
              <?php $css="sorting_desc";$next_url = base_url('adminpanel/saledetail?order=sale_id&dir=asc'); ?>
              <?php } elseif (($order=='sale_id'&&$dir=='asc')) { ?>
              <?php $css="sorting_asc";?>
              <?php } ?><th class="sorting <?php echo $css;?>"   onclick="window.location.href='<?php echo $next_url;?>'"   nowrap="nowrap">销售订单id</th>
              <?php $css=""; $next_url = base_url('adminpanel/saledetail?order=product_id&dir=desc'); ?>
              <?php if(($order=='product_id'&&$dir=='desc')) { ?>
              <?php $css="sorting_desc";$next_url = base_url('adminpanel/saledetail?order=product_id&dir=asc'); ?>
              <?php } elseif (($order=='product_id'&&$dir=='asc')) { ?>
              <?php $css="sorting_asc";?>
              <?php } ?><th class="sorting <?php echo $css;?>"   onclick="window.location.href='<?php echo $next_url;?>'"   nowrap="nowrap">产品</th>
              <?php $css=""; $next_url = base_url('adminpanel/saledetail?order=number&dir=desc'); ?>
              <?php if(($order=='number'&&$dir=='desc')) { ?>
              <?php $css="sorting_desc";$next_url = base_url('adminpanel/saledetail?order=number&dir=asc'); ?>
              <?php } elseif (($order=='number'&&$dir=='asc')) { ?>
              <?php $css="sorting_asc";?>
              <?php } ?><th class="sorting <?php echo $css;?>"   onclick="window.location.href='<?php echo $next_url;?>'"   nowrap="nowrap">数量</th>
              <th   nowrap="nowrap">单位</th>
              <th   nowrap="nowrap">价格</th>
              <th   nowrap="nowrap">入库单号</th>
              <th>操作</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($data_list as $k=>$v):?>
              <tr>
                <td><input type="checkbox" name="pid[]" value="<?php echo $v['saledetail_id']?>" /></td>
                <td><?php echo $v['sale_id']?></td>
                <td><?php echo $v['product_id']?></td>
                <td><?php echo $v['number']?></td>
                <td><?php echo $v['unit']?></td>
                <td><?php echo $v['price']?></td>
                <td><?php echo $v['stock_id']?></td>
                <td>
                 <a href="<?php echo base_url('adminpanel/saledetail/readonly/'.$v['saledetail_id'])?>"  class="btn btn-default btn-xs"><span class="glyphicon glyphicon-share-alt"></span> 查看</a>
                 <a href="<?php echo base_url('adminpanel/saledetail/edit/'.$v['saledetail_id'])?>"  class="btn btn-default btn-xs"><span class="glyphicon glyphicon-edit"></span> 修改</a>
                 <button type="button" class="btn btn-default btn-xs delete-btn" value="<?php echo $v['saledetail_id'];?>"><span class="glyphicon glyphicon-remove"></span> 删除</button>
                 
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
    require(['<?php echo SITE_URL?>scripts/adminpanel/saledetail/lists.js']);
  });
</script>
