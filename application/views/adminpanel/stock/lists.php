<?php defined('BASEPATH') or exit('No direct script access allowed.'); ?><?php defined('BASEPATH') or exit('No permission resources.'); ?>
<div class='panel panel-default grid'>
    <div class='panel-heading'>
        <i class='fa fa-table'></i> 库存列表
        <div class='panel-tools'>
            <div class='btn-group'>
                 <a class="btn " href="<?php echo base_url('adminpanel/stock/add')?>"><span class="glyphicon glyphicon-plus"></span> 添加 </a>             </div>
            <div class='badge'><?php echo count($data_list)?></div>
        </div>
    </div>
        <form method="post" id="form_list"  action="<?php echo base_url('adminpanel/stock/delete_all')?>"  > 
    <div class='panel-body '>
    <?php if($data_list):?>
        <table class="table table-hover dataTable" id="checkAll">
          <thead>
            <tr>
              <th>#</th>
              <th   nowrap="nowrap">产品</th>
              <th   nowrap="nowrap">入库单号</th>
              <th   nowrap="nowrap">价格</th>
              <th   nowrap="nowrap">单位</th>
              <th   nowrap="nowrap">一箱含支数</th>
              <th   nowrap="nowrap">箱数</th>
              <th   nowrap="nowrap">支数</th>
              <th   nowrap="nowrap">是否上架</th>
              <th>操作</th>
            </tr>
          </thead>
          <tbody>
          <?php foreach($data_list as $k=>$v):?>
            <tr>
              <td><input type="checkbox" name="pid[]" value="<?php echo $v['stock_id']?>" /></td>
                             <td><?php echo $v['product_id']?></td>
                             <td><?php echo $v['order_number']?></td>
                            <td><?php echo $v['price']?></td>
                            <td><?php echo $v['unit']?></td>
                            <td><?php echo $v['number_per_package']?></td>
                            <td><?php echo $v['number']?></td>
                            <td><?php echo $v['zhi_number']?></td>
                            <td><?php echo $v['is_on']?></td>
              <td>
                            	<a href="<?php echo base_url('adminpanel/stock/readonly/'.$v['stock_id'])?>"  class="btn btn-default btn-xs"><span class="glyphicon glyphicon-share-alt"></span> 查看</a>
                                            <a href="<?php echo base_url('adminpanel/stock/edit/'.$v['stock_id'])?>"  class="btn btn-default btn-xs"><span class="glyphicon glyphicon-edit"></span> 修改</a>
                                            <button type="button" class="btn btn-default btn-xs delete-btn" value="<?php echo $v['stock_id'];?>"><span class="glyphicon glyphicon-remove"></span> 删除</button>
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
        require(['<?php echo SITE_URL?>scripts/adminpanel/stock/lists.js']);
    });
</script>
    