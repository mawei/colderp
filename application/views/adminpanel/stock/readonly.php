<?php defined('BASEPATH') or exit('No direct script access allowed.'); ?><?php defined('BASEPATH') or exit('No permission resources.'); ?>
<div class='panel panel-default '>
    <div class='panel-heading'>
        <i class='fa fa-table'></i> 库存 查看信息 
        <div class='panel-tools'>
            <div class='btn-group'>
            	<a class="btn " href="<?php echo base_url('adminpanel/stock')?>"><span class="glyphicon glyphicon-arrow-left"></span> 返回 </a>
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
				<label for="price" class="col-sm-2 control-label form-control-static">价格</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['price'])?$data_info['price']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="model" class="col-sm-2 control-label form-control-static">规格型号</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['model'])?$data_info['model']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="unit" class="col-sm-2 control-label form-control-static">单位</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['unit'])?$data_info['unit']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="number_per_package" class="col-sm-2 control-label form-control-static">一箱含支数</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['number_per_package'])?$data_info['number_per_package']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="number" class="col-sm-2 control-label form-control-static">箱数</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['number'])?$data_info['number']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="zhi_number" class="col-sm-2 control-label form-control-static">支数</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['zhi_number'])?$data_info['zhi_number']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="rebate_percent" class="col-sm-2 control-label form-control-static">返点</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['rebate_percent'])?$data_info['rebate_percent']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="is_on" class="col-sm-2 control-label form-control-static">是否上架</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['is_on'])?$data_info['is_on']:'' ?>
				</div>
			</div>
	    </fieldset>
	</div>
</div>
</div>
