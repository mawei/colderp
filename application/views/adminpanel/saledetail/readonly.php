<?php defined('BASEPATH') or exit('No direct script access allowed.'); ?><?php defined('BASEPATH') or exit('No permission resources.'); ?>
<div class='panel panel-default '>
    <div class='panel-heading'>
        <i class='fa fa-table'></i> 销售详情 查看信息 
        <div class='panel-tools'>
            <div class='btn-group'>
            	<a class="btn " href="<?php echo base_url('adminpanel/saledetail')?>"><span class="glyphicon glyphicon-arrow-left"></span> 返回 </a>
            </div>
        </div>
    </div>
    <div class='panel-body '>
<div class="form-horizontal"  >
	<fieldset>
        <legend>基本信息</legend>
     
  	  	
	<div class="form-group">
				<label for="sale_id" class="col-sm-2 control-label form-control-static">销售订单id</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['sale_id'])?$data_info['sale_id']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="product_id" class="col-sm-2 control-label form-control-static">产品</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['product_id'])?$data_info['product_id']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="number" class="col-sm-2 control-label form-control-static">数量</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['number'])?$data_info['number']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="unit" class="col-sm-2 control-label form-control-static">单位</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['unit'])?$data_info['unit']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="price" class="col-sm-2 control-label form-control-static">价格</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['price'])?$data_info['price']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="stock_id" class="col-sm-2 control-label form-control-static">入库单号</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['stock_id'])?$data_info['stock_id']:'' ?>
				</div>
			</div>
	    </fieldset>
	</div>
</div>
</div>
