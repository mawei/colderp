<?php defined('BASEPATH') or exit('No direct script access allowed.'); ?><?php defined('BASEPATH') or exit('No permission resources.'); ?>
<form class="form-horizontal" role="form" id="validateform" name="validateform" action="<?php echo base_url('adminpanel/payment/edit')?>" >
	<div class='panel panel-default '>
		<div class='panel-heading'>
			<i class='fa fa-table'></i> 付款单 修改信息
			<div class='panel-tools'>
				<div class='btn-group'>
					<a class="btn " href="<?php echo base_url('adminpanel/payment')?>"><span class="glyphicon glyphicon-arrow-left"></span> 返回 </a>
				</div>
			</div>
		</div>
		<div class='panel-body '>
								<fieldset>
						<legend>基本信息</legend>
													
	<div class="form-group">
				<label for="vendor_id" class="col-sm-2 control-label form-control-static">收款人</label>
				<div class="col-sm-9 ">
					<?php $options = process_datasource($this->method_config['vendor_datasource'])?>
					<select class="form-control "  name="vendor_id"  id="vendor_id">
						<option value="">==请选择==</option>
<?php if($options)foreach($options as $option):?>
						<option value='<?php echo $option['val'];?>' <?php if(isset($data_info['vendor_id'])&&($data_info['vendor_id']==$option['val'])) { ?> selected="selected" <?php } ?>            ><?php echo $option['text'];?></option>
<?php endforeach;?>
					</select>

				</div>
			</div>
													
	<div class="form-group">
				<label for="method" class="col-sm-2 control-label form-control-static">付款方式</label>
				<div class="col-sm-9 ">
					<select class="form-control  validate[required]"  name="method"  id="method">
				<option value="">==请选择==</option>
								<option value='现金' <?php if(isset($data_info['method'])&&($data_info['method']=='现金')) { ?> selected="selected" <?php } ?>            >现金</option>
				<option value='微信' <?php if(isset($data_info['method'])&&($data_info['method']=='微信')) { ?> selected="selected" <?php } ?>            >微信</option>
				<option value='转账' <?php if(isset($data_info['method'])&&($data_info['method']=='转账')) { ?> selected="selected" <?php } ?>            >转账</option>
</select>
				</div>
			</div>
													
	<div class="form-group">
				<label for="amount" class="col-sm-2 control-label form-control-static">金额</label>
				<div class="col-sm-9 ">
					<input type="text" name="amount"  id="amount"  value='<?php echo isset($data_info['amount'])?$data_info['amount']:'' ?>'  class="form-control validate[required]"  placeholder="请输入金额" >
				</div>
			</div>
													
	<div class="form-group">
				<label for="time" class="col-sm-2 control-label form-control-static">付款时间</label>
				<div class="col-sm-9 ">
					<input type="text" name="time"  id="time"   value='<?php echo isset($data_info['time'])?$data_info['time']:'' ?>'  class="form-control datetimepicker  validate[required,custom[datetime]]"  placeholder="请输入付款时间" >
				</div>
			</div>
													
	<div class="form-group">
				<label for="source" class="col-sm-2 control-label form-control-static">款项说明</label>
				<div class="col-sm-9 ">
					<select class="form-control "  name="source"  id="source">
				<option value="">==请选择==</option>
								<option value='进货款' <?php if(isset($data_info['source'])&&($data_info['source']=='进货款')) { ?> selected="selected" <?php } ?>            >进货款</option>
				<option value='冰箱款' <?php if(isset($data_info['source'])&&($data_info['source']=='冰箱款')) { ?> selected="selected" <?php } ?>            >冰箱款</option>
				<option value='工资' <?php if(isset($data_info['source'])&&($data_info['source']=='工资')) { ?> selected="selected" <?php } ?>            >工资</option>
				<option value='水电' <?php if(isset($data_info['source'])&&($data_info['source']=='水电')) { ?> selected="selected" <?php } ?>            >水电</option>
				<option value='房租' <?php if(isset($data_info['source'])&&($data_info['source']=='房租')) { ?> selected="selected" <?php } ?>            >房租</option>
				<option value='其他' <?php if(isset($data_info['source'])&&($data_info['source']=='其他')) { ?> selected="selected" <?php } ?>            >其他</option>
</select>
				</div>
			</div>
													
	<div class="form-group">
				<label for="operateman" class="col-sm-2 control-label form-control-static">经手人</label>
				<div class="col-sm-9 ">
					<input type="text" name="operateman"  id="operateman"  value='<?php echo isset($data_info['operateman'])?$data_info['operateman']:'' ?>'  class="form-control validate[required]"  placeholder="请输入经手人" >
				</div>
			</div>
													
	<div class="form-group">
				<label for="memo" class="col-sm-2 control-label form-control-static">备注</label>
				<div class="col-sm-9 ">
					<input type="text" name="memo"  id="memo"  value='<?php echo isset($data_info['memo'])?$data_info['memo']:'' ?>'  class="form-control validate[required]"  placeholder="请输入备注" >
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
		        require(['<?php echo SITE_URL?>scripts/adminpanel/payment/edit.js']);
		    });
		</script>
	
	