<?php defined('BASEPATH') or exit('No direct script access allowed.'); ?><?php defined('BASEPATH') or exit('No permission resources.'); ?>
<div class='panel panel-default '>
    <div class='panel-heading'>
        <i class='fa fa-table'></i> 产品 查看信息 
        <div class='panel-tools'>
            <div class='btn-group'>
            	<a class="btn " href="<?php echo base_url('adminpanel/product')?>"><span class="glyphicon glyphicon-arrow-left"></span> 返回 </a>
            </div>
        </div>
    </div>
    <div class='panel-body '>
<div class="form-horizontal"  >
	<fieldset>
        <legend>基本信息</legend>
     
  	  	
	<div class="form-group">
				<label for="category" class="col-sm-2 control-label form-control-static">大类</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['category'])?$data_info['category']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="brand" class="col-sm-2 control-label form-control-static">品牌</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['brand'])?$data_info['brand']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="vendor_id" class="col-sm-2 control-label form-control-static">供应商</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['vendor_id'])?$data_info['vendor_id']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="series" class="col-sm-2 control-label form-control-static">产品系列</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['series'])?$data_info['series']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="name" class="col-sm-2 control-label form-control-static">产品名称</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['name'])?$data_info['name']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="image" class="col-sm-2 control-label form-control-static">图样</label>
				<div class="col-sm-9 ">
					<img src='<?php echo SITE_URL;?><?php echo  isset($data_info['image'])?('images/'.$data_info['image']):'' ?>' width="100" />
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="code" class="col-sm-2 control-label form-control-static">条码</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['code'])?$data_info['code']:'' ?>
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
