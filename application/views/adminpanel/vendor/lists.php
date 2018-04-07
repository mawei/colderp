<?php defined('BASEPATH') or exit('No direct script access allowed.'); ?><?php defined('BASEPATH') or exit('No permission resources.'); ?>
<div class='panel panel-default grid'>
  <div class='panel-heading'>
    <i class='fa fa-table'></i> 供应商管理列表
    <div class='panel-tools'>
      <div class='btn-group'>
       <a class="btn " href="<?php echo base_url('adminpanel/vendor/add')?>"><span class="glyphicon glyphicon-plus"></span> 添加 </a>             </div>
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
            <button type="submit" name="dosubmit" value="搜索" class="btn btn-success"><i class='glyphicon glyphicon-search'></i></button>        </form>
          </div>
        </div> 
      </div>
      <form method="post" id="form_list"  action="<?php echo base_url('adminpanel/vendor/delete_all')?>"  > 
        <div class='panel-body '>
          <?php if($data_list):?>
            <table class="table table-hover dataTable" id="checkAll">
              <thead>
                <tr>
                  <th>#</th>
                  <?php $css=""; $next_url = base_url('adminpanel/vendor?order=name&dir=desc'); ?>
                  <?php if(($order=='name'&&$dir=='desc')) { ?>
                  <?php $css="sorting_desc";$next_url = base_url('adminpanel/vendor?order=name&dir=asc'); ?>
                  <?php } elseif (($order=='name'&&$dir=='asc')) { ?>
                  <?php $css="sorting_asc";?>
                  <?php } ?><th class="sorting <?php echo $css;?>"   onclick="window.location.href='<?php echo $next_url;?>'"   nowrap="nowrap">供应商名字</th>
                  <?php $css=""; $next_url = base_url('adminpanel/vendor?order=brand&dir=desc'); ?>
                  <?php if(($order=='brand'&&$dir=='desc')) { ?>
                  <?php $css="sorting_desc";$next_url = base_url('adminpanel/vendor?order=brand&dir=asc'); ?>
                  <?php } elseif (($order=='brand'&&$dir=='asc')) { ?>
                  <?php $css="sorting_asc";?>
                  <?php } ?><th class="sorting <?php echo $css;?>"   onclick="window.location.href='<?php echo $next_url;?>'"   nowrap="nowrap">品牌</th>
                  <th   nowrap="nowrap">业务员</th>
                  <?php $css=""; $next_url = base_url('adminpanel/vendor?order=phone&dir=desc'); ?>
                  <?php if(($order=='phone'&&$dir=='desc')) { ?>
                  <?php $css="sorting_desc";$next_url = base_url('adminpanel/vendor?order=phone&dir=asc'); ?>
                  <?php } elseif (($order=='phone'&&$dir=='asc')) { ?>
                  <?php $css="sorting_asc";?>
                  <?php } ?><th class="sorting <?php echo $css;?>"   onclick="window.location.href='<?php echo $next_url;?>'"   nowrap="nowrap">电话</th>
                  <th>操作</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($data_list as $k=>$v):?>
                  <tr>
                    <td><input type="checkbox" name="pid[]" value="<?php echo $v['vendor_id']?>" /></td>
                    <td><?php echo $v['name']?></td>
                    <td><?php echo $v['brand']?></td>
                    <td><?php echo $v['business_people']?></td>
                    <td><?php echo $v['phone']?></td>
                    <td>
                     <a href="<?php echo base_url('adminpanel/product/add/'.$v['vendor_id'])?>"  class="btn btn-default btn-xs"><span class="glyphicon glyphicon-share-alt"></span>添加商品</a>
                     <a href="<?php echo base_url('adminpanel/vendor/readonly/'.$v['vendor_id'])?>"  class="btn btn-default btn-xs"><span class="glyphicon glyphicon-share-alt"></span> 查看</a>
                     <a href="<?php echo base_url('adminpanel/vendor/edit/'.$v['vendor_id'])?>"  class="btn btn-default btn-xs"><span class="glyphicon glyphicon-edit"></span> 修改</a>
                     <button type="button" class="btn btn-default btn-xs delete-btn" value="<?php echo $v['vendor_id'];?>"><span class="glyphicon glyphicon-remove"></span> 删除</button>

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
      require(['<?php echo SITE_URL?>scripts/adminpanel/vendor/lists.js']);
    });
  </script>
