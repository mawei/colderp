<?php defined('BASEPATH') or exit('No direct script access allowed.'); ?><?php defined('BASEPATH') or exit('No permission resources.'); ?>
<div class='panel panel-default '>
    <div class='panel-heading'>
        <i class='fa fa-table'></i> 采购 查看信息 
        <div class='panel-tools'>
            <div class='btn-group'>
            	<a class="btn " href="<?php echo base_url('adminpanel/buy')?>"><span class="glyphicon glyphicon-arrow-left"></span> 返回 </a>
            </div>
        </div>
    </div>
    <div class='panel-body '>
<div class="form-horizontal"  >
	<fieldset>
        <legend>基本信息</legend>
     
  	  	
	<div class="form-group">
				<label for="cost" class="col-sm-2 control-label form-control-static">成本</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['cost'])?$data_info['cost']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="profit" class="col-sm-2 control-label form-control-static">销售毛利</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['profit'])?$data_info['profit']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="amount" class="col-sm-2 control-label form-control-static">销售收入</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['amount'])?$data_info['amount']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="discount" class="col-sm-2 control-label form-control-static">销售折扣</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['discount'])?$data_info['discount']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="time" class="col-sm-2 control-label form-control-static">时间</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['time'])?$data_info['time']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="sales_order" class="col-sm-2 control-label form-control-static">销售单号</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['sales_order'])?$data_info['sales_order']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="return_order" class="col-sm-2 control-label form-control-static">退货单号</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['return_order'])?$data_info['return_order']:'' ?>
				</div>
			</div>
	    </fieldset>
	</div>
</div>
</div>
