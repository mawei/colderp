<?php defined('BASEPATH') or exit('No direct script access allowed.'); ?><?php defined('BASEPATH') or exit('No permission resources.'); ?>
<div class='panel panel-default '>
    <div class='panel-heading'>
        <i class='fa fa-table'></i> 报损 查看信息 
        <div class='panel-tools'>
            <div class='btn-group'>
            	<a class="btn " href="<?php echo base_url('adminpanel/loss')?>"><span class="glyphicon glyphicon-arrow-left"></span> 返回 </a>
            </div>
        </div>
    </div>
    <div class='panel-body '>
<div class="form-horizontal"  >
	<fieldset>
        <legend>基本信息</legend>
     
  	  	
	<div class="form-group">
				<label for="order_number" class="col-sm-2 control-label form-control-static">入库单号</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['order_number'])?$data_info['order_number']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="brand" class="col-sm-2 control-label form-control-static">品牌</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['brand'])?$data_info['brand']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="series" class="col-sm-2 control-label form-control-static">系列</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['series'])?$data_info['series']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="name" class="col-sm-2 control-label form-control-static">商品名称</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['name'])?$data_info['name']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="code" class="col-sm-2 control-label form-control-static">条码</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['code'])?$data_info['code']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="unit" class="col-sm-2 control-label form-control-static">单位</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['unit'])?$data_info['unit']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="number" class="col-sm-2 control-label form-control-static">数量</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['number'])?$data_info['number']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="model" class="col-sm-2 control-label form-control-static">规格型号</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['model'])?$data_info['model']:'' ?>
				</div>
			</div>
	    </fieldset>
	</div>
</div>
</div>
