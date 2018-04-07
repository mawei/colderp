<?php defined('BASEPATH') or exit('No direct script access allowed.'); ?><?php defined('BASEPATH') or exit('No permission resources.'); ?>
<div class='panel panel-default '>
    <div class='panel-heading'>
        <i class='fa fa-table'></i> 用户金额明细 查看信息 
        <div class='panel-tools'>
            <div class='btn-group'>
            	<a class="btn " href="<?php echo base_url('adminpanel/pocket')?>"><span class="glyphicon glyphicon-arrow-left"></span> 返回 </a>
            </div>
        </div>
    </div>
    <div class='panel-body '>
<div class="form-horizontal"  >
	<fieldset>
        <legend>基本信息</legend>
     
  	  	
	<div class="form-group">
				<label for="createtime" class="col-sm-2 control-label form-control-static">时间</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['createtime'])?$data_info['createtime']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="source" class="col-sm-2 control-label form-control-static">类型</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['source'])?$data_info['source']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="customer_id" class="col-sm-2 control-label form-control-static">用户</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['customer_id'])?$data_info['customer_id']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="amount" class="col-sm-2 control-label form-control-static">金额</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['amount'])?$data_info['amount']:'' ?>
				</div>
			</div>
	    </fieldset>
	</div>
</div>
</div>
