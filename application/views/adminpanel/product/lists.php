<?php defined('BASEPATH') or exit('No direct script access allowed.'); ?><?php defined('BASEPATH') or exit('No permission resources.'); ?>
<div class='panel panel-default grid'>
  <div class='panel-heading'>
    <i class='fa fa-table'></i> 产品列表
    <div class='panel-tools'>
      <div class='btn-group'>
       <a class="btn " href="<?php echo base_url('adminpanel/product/add')?>"><span class="glyphicon glyphicon-plus"></span> 添加 </a>             </div>
       <div class='badge'><?php echo count($data_list)?></div>
     </div>
   </div>
   <form method="post" id="form_list"  action="<?php echo base_url('adminpanel/product/delete_all')?>"  > 
    <div class='panel-body '>
      <?php if($data_list):?>
        <table class="table table-hover dataTable" id="checkAll">
          <thead>
            <tr>
              <th>#</th>
              <th   nowrap="nowrap">产品系列</th>
              <?php $css=""; $next_url = base_url('adminpanel/product?order=name&dir=desc'); ?>
              <?php if(($order=='name'&&$dir=='desc')) { ?>
              <?php $css="sorting_desc";$next_url = base_url('adminpanel/product?order=name&dir=asc'); ?>
              <?php } elseif (($order=='name'&&$dir=='asc')) { ?>
              <?php $css="sorting_asc";?>
              <?php } ?><th class="sorting <?php echo $css;?>"   onclick="window.location.href='<?php echo $next_url;?>'"   nowrap="nowrap">产品名称</th>
              <th   nowrap="nowrap">图样</th>
              <th   nowrap="nowrap">条码</th>
              <th   nowrap="nowrap">规格型号</th>
              <th>操作</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($data_list as $k=>$v):?>
              <tr>
                <td><input type="checkbox" name="pid[]" value="<?php echo $v['product_id']?>" /></td>
                <td><?php echo $v['series']?></td>
                <td><?php echo $v['name']?></td>
                <td><?php echo $v['image']?></td>
                <td><?php echo $v['code']?></td>
                <td><?php echo $v['model']?></td>
                <td>
                 <a href="<?php echo base_url('adminpanel/product/readonly/'.$v['product_id'])?>"  class="btn btn-default btn-xs"><span class="glyphicon glyphicon-share-alt"></span> 查看</a>
                 <a href="<?php echo base_url('adminpanel/product/edit/'.$v['product_id'])?>"  class="btn btn-default btn-xs"><span class="glyphicon glyphicon-edit"></span> 修改</a>
                 <button type="button" class="btn btn-default btn-xs delete-btn" value="<?php echo $v['product_id'];?>"><span class="glyphicon glyphicon-remove"></span> 删除</button>
                 
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
    require(['<?php echo SITE_URL?>scripts/adminpanel/product/lists.js']);
  });
</script>
