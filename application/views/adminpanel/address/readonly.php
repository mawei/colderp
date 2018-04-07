<?php defined('BASEPATH') or exit('No direct script access allowed.'); ?><?php defined('BASEPATH') or exit('No permission resources.'); ?>
<div class='panel panel-default '>
    <div class='panel-heading'>
        <i class='fa fa-table'></i> 收货地址 查看信息 
        <div class='panel-tools'>
            <div class='btn-group'>
            	<a class="btn " href="<?php echo base_url('adminpanel/address')?>"><span class="glyphicon glyphicon-arrow-left"></span> 返回 </a>
            </div>
        </div>
    </div>
    <div class='panel-body '>
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
				<label for="name" class="col-sm-2 control-label form-control-static">姓名</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['name'])?$data_info['name']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="telephone" class="col-sm-2 control-label form-control-static">电话</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['telephone'])?$data_info['telephone']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="address" class="col-sm-2 control-label form-control-static">地址</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['address'])?$data_info['address']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="area" class="col-sm-2 control-label form-control-static">区域</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['area'])?$data_info['area']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="is_moren" class="col-sm-2 control-label form-control-static">是否默认</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['is_moren'])?$data_info['is_moren']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="is_delete" class="col-sm-2 control-label form-control-static">是否删除</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['is_delete'])?$data_info['is_delete']:'' ?>
				</div>
			</div>
	    </fieldset>
	</div>
</div>
</div>
