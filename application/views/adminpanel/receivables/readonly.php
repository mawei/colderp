<?php defined('BASEPATH') or exit('No direct script access allowed.'); ?><?php defined('BASEPATH') or exit('No permission resources.'); ?>
<div class='panel panel-default '>
    <div class='panel-heading'>
        <i class='fa fa-table'></i> 收款单 查看信息 
        <div class='panel-tools'>
            <div class='btn-group'>
            	<a class="btn " href="<?php echo base_url('adminpanel/receivables')?>"><span class="glyphicon glyphicon-arrow-left"></span> 返回 </a>
            </div>
        </div>
    </div>
    <div class='panel-body '>
<div class="form-horizontal"  >
	<fieldset>
        <legend>基本信息</legend>
     
  	  	
	<div class="form-group">
				<label for="payman" class="col-sm-2 control-label form-control-static">付款人</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['payman'])?$data_info['payman']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="source" class="col-sm-2 control-label form-control-static">款项来源</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['source'])?$data_info['source']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="method" class="col-sm-2 control-label form-control-static">收款方式</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['method'])?$data_info['method']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="time" class="col-sm-2 control-label form-control-static">收款时间</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['time'])?$data_info['time']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="operateman" class="col-sm-2 control-label form-control-static">经手人</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['operateman'])?$data_info['operateman']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="memo" class="col-sm-2 control-label form-control-static">备注</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['memo'])?$data_info['memo']:'' ?>
				</div>
			</div>
	    </fieldset>
	</div>
</div>
</div>
