<?php defined('BASEPATH') or exit('No direct script access allowed.'); ?><?php defined('BASEPATH') or exit('No permission resources.'); ?>
<div class='panel panel-default '>
    <div class='panel-heading'>
        <i class='fa fa-table'></i> 进货 查看信息 
        <div class='panel-tools'>
            <div class='btn-group'>
            	<a class="btn " href="<?php echo base_url('adminpanel/purchase')?>"><span class="glyphicon glyphicon-arrow-left"></span> 返回 </a>
            </div>
        </div>
    </div>
    <div class='panel-body '>
<div class="form-horizontal"  >
	<fieldset>
        <legend>基本信息</legend>
     
  	  	
	<div class="form-group">
				<label for="product_id" class="col-sm-2 control-label form-control-static">产品</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['product_id'])?$data_info['product_id']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="stock_id" class="col-sm-2 control-label form-control-static">入库单号</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['stock_id'])?$data_info['stock_id']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="price" class="col-sm-2 control-label form-control-static">单价</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['price'])?$data_info['price']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="time" class="col-sm-2 control-label form-control-static">入库时间</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['time'])?$data_info['time']:'' ?>
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
				<label for="rebate_percent" class="col-sm-2 control-label form-control-static">返点百分比（填入百分比，如10）</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['rebate_percent'])?$data_info['rebate_percent']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="rebate_type" class="col-sm-2 control-label form-control-static">返点类型</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['rebate_type'])?$data_info['rebate_type']:'' ?>
				</div>
			</div>
	    </fieldset>
	</div>
</div>
</div>

