<?php defined('BASEPATH') or exit('No direct script access allowed.'); ?><?php defined('BASEPATH') or exit('No permission resources.'); ?>
<form class="form-horizontal" role="form" id="validateform" name="validateform" action="<?php echo base_url('adminpanel/sale/edit')?>" >
	<div class='panel panel-default '>
		<div class='panel-heading'>
			<i class='fa fa-table'></i> 销售 修改信息
			<div class='panel-tools'>
				<div class='btn-group'>
					<a class="btn " href="<?php echo base_url('adminpanel/sale')?>"><span class="glyphicon glyphicon-arrow-left"></span> 返回 </a>
				</div>
			</div>
		</div>
		<div class='panel-body '>
								<fieldset>
						<legend>基本信息</legend>
													
	<div class="form-group">
				<label for="customer_id" class="col-sm-2 control-label form-control-static">客户</label>
				<div class="col-sm-9 ">
					<?php $options = process_datasource($this->method_config['coldcustomer_datasource'])?>
					<select class="form-control "  name="customer_id"  id="customer_id">
						<option value="">==请选择==</option>
<?php if($options)foreach($options as $option):?>
						<option value='<?php echo $option['val'];?>' <?php if(isset($data_info['customer_id'])&&($data_info['customer_id']==$option['val'])) { ?> selected="selected" <?php } ?>            ><?php echo $option['text'];?></option>
<?php endforeach;?>
					</select>

				</div>
			</div>
													
	<div class="form-group">
				<label for="address_id" class="col-sm-2 control-label form-control-static">地址</label>
				<div class="col-sm-9 ">
					<input type="text" name="address_id"  id="address_id"  value='<?php echo isset($data_info['address_id'])?$data_info['address_id']:'' ?>'  class="form-control validate[required]"  placeholder="请输入地址" >
				</div>
			</div>
													
	<div class="form-group">
				<label for="status" class="col-sm-2 control-label form-control-static">状态</label>
				<div class="col-sm-9 ">
					<input type="text" name="status"  id="status"  value='<?php echo isset($data_info['status'])?$data_info['status']:'' ?>'  class="form-control validate[required]"  placeholder="请输入状态" >
				</div>
			</div>
													
	<div class="form-group">
				<label for="time" class="col-sm-2 control-label form-control-static">时间</label>
				<div class="col-sm-9 ">
					<input type="text" name="time"  id="time"   value='<?php echo isset($data_info['time'])?$data_info['time']:'' ?>'  class="form-control datetimepicker  validate[required,custom[datetime]]"  placeholder="请输入时间" >
				</div>
			</div>
											</fieldset>
							<div class='form-actions'>
				<button class='btn btn-primary ' type='submit' id="dosubmit">保存</button>
			</div>
</form>
			<script language="javascript" type="text/javascript">
			var is_edit =<?php echo ($is_edit)?"true":"false" ?>;
			var id =<?php echo $id;?>;

			require(['<?php echo SITE_URL?>scripts/common.js'], function (common) {
		        require(['<?php echo SITE_URL?>scripts/adminpanel/sale/edit.js']);
		    });
		</script>
	
	