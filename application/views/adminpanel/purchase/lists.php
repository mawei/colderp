<?php defined('BASEPATH') or exit('No direct script access allowed.'); ?><?php defined('BASEPATH') or exit('No permission resources.'); ?>
<div class='panel panel-default grid'>
  <div class='panel-heading'>
    <i class='fa fa-table'></i> 进货列表
    <div class='panel-tools'>
      <div class='btn-group'>
       <a class="btn " href="<?php echo base_url('adminpanel/purchase/add')?>"><span class="glyphicon glyphicon-plus"></span> 添加 </a>             </div>
       <div class='badge'><?php echo count($data_list)?></div>
     </div>
   </div>
   <div class='panel-filter '>
    <div class='row'>
      <div class='col-md-12'>
<!--         <form class="form-inline" role="form" method="get">

         <div class="form-group">
          <label for="product_id" class="col-sm-5 control-label form-control-static">产品</label>
          <div class="col-sm-7 ">
           <?php $options = process_datasource($this->method_config['cold_product_datasource'])?>
           <select class="form-control "  name="product_id"  id="product_id">
            <option value="">==不限==</option>
            <?php if($options)foreach($options as $option):?>
              <option value='<?php echo $option['val'];?>' <?php if(isset($data_info['product_id'])&&($data_info['product_id']==$option['val'])) { ?> selected="selected" <?php } ?>            ><?php echo $option['text'];?></option>
            <?php endforeach;?>
          </select>

        </div>
      </div>
      <button type="submit" name="dosubmit" value="搜索" class="btn btn-success"><i class='glyphicon glyphicon-search'></i></button>        </form> -->
    </div>
  </div> 
</div>
<form method="post" id="validateform"  action="<?php echo base_url('adminpanel/purchase/delete_all')?>"  > 
  <div class='panel-body '>
    <?php if($data_list):?>
      <table class="table table-hover dataTable" id="checkAll">
        <thead>
          <tr>
            <th width="10%" nowrap="nowrap">供应商</th>
            <th width="8%" nowrap="nowrap">品牌</th>
            <th width="8%" nowrap="nowrap">系列</th>
            <th width="8%" nowrap="nowrap">产品</th>
            <th width="8%" nowrap="nowrap">入库单号</th>
            <th width="5%" nowrap="nowrap">单价</th>
            <th width="5%" nowrap="nowrap">数量</th>
            <th width="5%" nowrap="nowrap">单位</th>
            <th width="5%" nowrap="nowrap">规格</th>
            <th width="8%" nowrap="nowrap">返点类型</th>
            <th width="5%" nowrap="nowrap">返点百分比</th>
            <th>操作</th>
          </tr>
        </thead>
        <tbody>
              <tr>
                  <form class="form-horizontal" role="form" id="" name="" method="post" action="<?php echo base_url('adminpanel/sale/adddetail')?>" >

                  <td>
                    <select class="form-control "  name="vendor_id"  id="vendor_id">
                      <option value="">==请选择==</option>
                      <?php if($vendors)foreach($vendors as $vendor):?>
                    <option value='<?php echo $vendor['vendor_id'];?>' <?php if(isset($data_info['vendor_id'])&&($data_info['vendor_id']==$vendor['val'])) { ?> selected="selected" <?php } ?>            ><?php echo $vendor['name'];?></option>
                    <?php endforeach;?>
                    </select>  
                  </td>            
                  <td>
                    <select class="form-control "  name="brand"  id="brand">
                      <option value="">==请选择==</option>
                    </select>
                  </td>
                  <td>
                    <select class="form-control "  name="series"  id="series">
                      <option value="">==请选择==</option>
                    </select>
                  </td>
                  <td>
                    <select class="form-control "  name="product_id"  id="product_id">
                      <option value="">==请选择==</option>
                    </select>
                  </td>
                  <td><input type="text" name="stock_id" value="<?php echo $stock_id;?>"  style="width: 80%" /></td>
                  <td><input type="text" name="price" value="" style="width: 80%"/></td>
                  <td><input type="text" name="number" value="0" style="width: 80%"/></td>
                  <td><input type="text" name="unit" value="箱" style="width: 80%"/></td>
                  <td><input type="text" name="number_per_package" value="" style="width: 80%"/></td>
                  <td>
                    <select class="form-control "  name="rebate_type"  id="rebate_type">
                      <option value="">==请选择==</option>
                      <option value='年返' <?php if(isset($data_info['rebate_type'])&&($data_info['rebate_type']=='年返')) { ?> selected="selected" <?php } ?>            >年返</option>
                      <option value='月返' <?php if(isset($data_info['rebate_type'])&&($data_info['rebate_type']=='月返')) { ?> selected="selected" <?php } ?>            >月返</option>
                      <option value='件返' <?php if(isset($data_info['rebate_type'])&&($data_info['rebate_type']=='件返')) { ?> selected="selected" <?php } ?>            >件返</option>
                    </select>
                  </td>
                  <td>            
                      <input type="number" name="rebate_percent"  id="rebate_percent"   value='<?php echo isset($data_info['rebate_percent'])?$data_info['rebate_percent']:'' ?>'   class="form-control validate[custom[price]]" placeholder="请输入返点百分比（填入百分比，如10）" >
                  </td>
                  
                  <!-- <td><input type="text" name="time" value="<?php echo date('Y-m-d H:i:s');?>" /></td> -->
                  <td> 
                    <input type="submit" name="" value="保存" />
                  </td>
                </form>
            </tr>
          <?php foreach($data_list as $k=>$v):?>
            <tr>
              <td></td>
              <td></td>
              <td></td>
<!--               <td><input type="checkbox" name="pid[]" value="<?php echo $v['purchase_id']?>" /></td>
 -->              
              <td><?php echo $v['product_id']?></td>
              <td><?php echo $v['stock_id']?></td>
              <td><?php echo $v['price']?></td>
              <td><?php echo $v['number']?></td>
              <td><?php echo $v['unit']?></td>
              <td><?php echo $v['number_per_package']?></td>
              <td><?php echo $v['rebate_type']?></td>
              <td><?php echo $v['rebate_percent']?></td>
              <td>
               <a href="<?php echo base_url('adminpanel/purchase/readonly/'.$v['purchase_id'])?>"  class="btn btn-default btn-xs"><span class="glyphicon glyphicon-share-alt"></span> 查看</a>
               <a href="<?php echo base_url('adminpanel/purchase/edit/'.$v['purchase_id'])?>"  class="btn btn-default btn-xs"><span class="glyphicon glyphicon-edit"></span> 修改</a>
               <button type="button" class="btn btn-default btn-xs delete-btn" value="<?php echo $v['purchase_id'];?>"><span class="glyphicon glyphicon-remove"></span> 删除</button>

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
    require(['<?php echo SITE_URL?>scripts/adminpanel/purchase/lists.js']);
  });
</script>
