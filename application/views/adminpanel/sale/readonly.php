<?php defined('BASEPATH') or exit('No direct script access allowed.'); ?><?php defined('BASEPATH') or exit('No permission resources.'); ?>
<div class='panel panel-default '>
  <div class='panel-heading'>
    <i class='fa fa-table'></i> 销售 查看信息 
    <div class='panel-tools'>
      <div class='btn-group'>
       <a class="btn " href="<?php echo base_url('adminpanel/sale')?>"><span class="glyphicon glyphicon-arrow-left"></span> 返回 </a>
     </div>
     <div class='btn-group'>
     </div>

   </div>
 </div>
 <div class='panel-body '>
   <div class='panel panel-default grid'>
    <div class='panel-heading'>
      <i class='fa fa-table'></i> 销售详情列表
      <div class='panel-tools'>
        <div class='btn-group'>
<!--          <a class="btn " href="<?php echo base_url('adminpanel/saledetail/add')?>"><span class="glyphicon glyphicon-plus"></span> 添加 </a>             </div>
 -->         <div class='badge'><?php echo count($saledetails)?></div>
       </div>
     </div>
     
<form class="form-horizontal" role="form" id="validateform" name="validateform" action="<?php echo base_url('adminpanel/sale/adddetail')?>" >
      <div class='panel-body '>

        <table class="table table-hover dataTable" id="checkAll">
          <thead>
            <tr>
              <!-- <th nowrap="nowrap">销售订单id</th> -->
              <!-- <th width="14%" nowrap="nowrap">供应商</th> -->
              <th width="14%" nowrap="nowrap">品牌</th>
              <th width="14%" nowrap="nowrap">大类</th>
              <th width="14%" nowrap="nowrap">系列</th>
              <th width="14%" nowrap="nowrap">产品</th>
              <th width="8%" nowrap="nowrap">数量</th>
              <th width="8%" nowrap="nowrap">价格</th>
              <th width="5%" nowrap="nowrap">单位</th>
              <th width="8%" nowrap="nowrap">入库单号</th>
              <th width="8%" nowrap="nowrap">类型</th>
              <th width="8%">操作</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <form class="form-horizontal" role="form" id="" name="" method="post" action="<?php echo base_url('adminpanel/sale/adddetail')?>" >

              <input type="hidden" name="sale_id"  value="<?php echo $data_info['sale_id']?>" />
              <input type="hidden" name="customer_id" id ="customer_id"  value="<?php echo $customer_id?>" />
<!--               <td>
                <select class="form-control "  name="vendor_id"  id="vendor_id">
                  <option value="">==请选择==</option>
                  <?php if($vendors)foreach($vendors as $vendor):?>
                <option value='<?php echo $vendor['vendor_id'];?>' <?php if(isset($data_info['vendor_id'])&&($data_info['vendor_id']==$vendor['val'])) { ?> selected="selected" <?php } ?>            ><?php echo $vendor['name'];?></option>
                <?php endforeach;?>
                </select>  
              </td>  -->           
              <td>
                <select class="form-control "  name="brand"  id="brand">
                  <option value="">==请选择==</option>
                  <?php if($brands)foreach($brands as $brand):?>
                <option value='<?php echo $brand['brand'];?>' <?php if(isset($data_info['brand'])&&($data_info['brand']==$brand['brand'])) { ?> selected="selected" <?php } ?>            ><?php echo $brand['brand'];?></option>
                <?php endforeach;?>
                </select>  
              </td>
              <td>
                <select class="form-control "  name="category"  id="category">
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
              <td><input type="text" name="number" value="0" style="width: 80%"/></td>
              <td><input type="text" name="price" id="price" value="" style="width: 80%"/></td>
              <td><input type="text" name="unit" value="箱" style="width: 80%"/></td>
              
              <td>
                <select class="form-control "  name="stock_id"  id="stock_id">
                  <option value="">==请选择==</option>
                </select>
              </td>
              <td>
                <select class="form-control "  name="sale_type"  id="sale_type">
                  <option value="销售">销售</option>
                  <option value="销售退货">销售退货</option>
                </select>
              </td>
              <td> 
                <input type="submit" name="" value="保存" />
              </td>
            </form>
            </tr>
            <?php foreach($saledetails as $k=>$v):?>
              <tr>
                <!-- <td><?php echo $v['sale_id']?></td> -->
                <!-- <td><?php echo $v['vendor_name']?></td> -->
                <td><?php echo $v['brand']?></td>
                <td><?php echo $v['category']?></td>
                <td><?php echo $v['series']?></td>
                <td><?php echo $v['product_name']?></td>
                <td><?php echo $v['number']?></td>
                <td><?php echo $v['price']?></td>
                <td><?php echo $v['unit']?></td>
                
                <td><?php echo $v['stock_id']?></td>
                <td><?php echo $v['sale_type']?></td>
                <td>
                <a href="<?php echo base_url('adminpanel/saledetail/edit/'.$v['saledetail_id'])?>"  class="btn btn-default btn-xs"><span class="glyphicon glyphicon-edit"></span> 修改</a>
              </td>
                <td>
<!--                  <a href="<?php echo base_url('adminpanel/saledetail/readonly/'.$v['saledetail_id'])?>"  class="btn btn-default btn-xs"><span class="glyphicon glyphicon-share-alt"></span> 查看</a>
                 <a href="<?php echo base_url('adminpanel/saledetail/edit/'.$v['saledetail_id'])?>"  class="btn btn-default btn-xs"><span class="glyphicon glyphicon-edit"></span> 修改</a>
                 <button type="button" class="btn btn-default btn-xs delete-btn" value="<?php echo $v['saledetail_id'];?>"><span class="glyphicon glyphicon-remove"></span> 删除</button> -->
                 
               </td>
             </tr>
           <?php endforeach;?>
           
         </tbody>
       </table> 
     </div>
     <div class="panel-footer">
<!--       <div class="pull-left">
        <div class="btn-group">
          <button type="button" class="btn btn-default" id="reverseBtn"><span class="glyphicon glyphicon-ok"></span> 反选</button>
          <button type="button" id="deleteBtn"  class="btn btn-default"><span class="glyphicon glyphicon-remove"></span> 删除勾选</button>
        </div>
      </div> -->
<!--       <div class="pull-right">
        <?php echo $pages;?>
      </div> -->
    </div> 
  </form>  
</div>

<div class="form-horizontal"  >
	<fieldset>
    <legend>基本信息</legend>


    <div class="form-group">
      <label for="customer_id" class="col-sm-2 control-label form-control-static">客户</label>
      <div class="col-sm-9 form-control-static ">
       <?php echo isset($data_info['customer_id'])?$data_info['customer_id']:'' ?>
     </div>
   </div>

   <div class="form-group">
    <label for="address_id" class="col-sm-2 control-label form-control-static">地址</label>
    <div class="col-sm-9 form-control-static ">
     <?php echo isset($data_info['address_id'])?$data_info['address_id']:'' ?>
   </div>
 </div>

 <div class="form-group">
  <label for="status" class="col-sm-2 control-label form-control-static">状态</label>
  <div class="col-sm-9 form-control-static ">
   <?php echo isset($data_info['status'])?$data_info['status']:'' ?>
 </div>
</div>

<div class="form-group">
  <label for="time" class="col-sm-2 control-label form-control-static">时间</label>
  <div class="col-sm-9 form-control-static ">
   <?php echo isset($data_info['time'])?$data_info['time']:'' ?>
 </div>
</div>
</fieldset>
</div>
</div>
</div>
<script language="javascript" type="text/javascript">

      var id = <?php echo $id;?>;
      require(['<?php echo SITE_URL?>scripts/common.js'], function (common) {
            require(['<?php echo SITE_URL?>scripts/adminpanel/sale/readonly.js']);
        });
</script>

