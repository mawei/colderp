<?php defined('BASEPATH') or exit('No direct script access allowed.'); ?><?php defined('BASEPATH') or exit('No permission resources.'); ?>
<form class="form-horizontal" role="form" id="validateform" name="validateform" action="<?php echo base_url('adminpanel/vendor/edit')?>" >
	<div class='panel panel-default '>
		<div class='panel-heading'>
			<i class='fa fa-table'></i> 供应商管理 修改信息
			<div class='panel-tools'>
				<div class='btn-group'>
					<a class="btn " href="<?php echo base_url('adminpanel/vendor')?>"><span class="glyphicon glyphicon-arrow-left"></span> 返回 </a>
				</div>
			</div>
		</div>
		<div class='panel-body '>
								<fieldset>
						<legend>基本信息</legend>
													
	<div class="form-group">
				<label for="name" class="col-sm-2 control-label form-control-static">供应商名字</label>
				<div class="col-sm-9 ">
					<input type="text" name="name"  id="name"  value='<?php echo isset($data_info['name'])?$data_info['name']:'' ?>'  class="form-control validate[required]"  placeholder="请输入供应商名字" >
				</div>
			</div>
													
	<div class="form-group">
				<label for="brand" class="col-sm-2 control-label form-control-static">品牌</label>
				<div class="col-sm-9 ">
					<input type="text" name="brand"  id="brand"  value='<?php echo isset($data_info['brand'])?$data_info['brand']:'' ?>'  class="form-control validate[required]"  placeholder="请输入品牌" >
				</div>
			</div>
													
	<div class="form-group">
				<label for="business_people" class="col-sm-2 control-label form-control-static">业务员</label>
				<div class="col-sm-9 ">
					<input type="text" name="business_people"  id="business_people"  value='<?php echo isset($data_info['business_people'])?$data_info['business_people']:'' ?>'  class="form-control validate[required]"  placeholder="请输入业务员" >
				</div>
			</div>
													
	<div class="form-group">
				<label for="phone" class="col-sm-2 control-label form-control-static">电话</label>
				<div class="col-sm-9 ">
					<input type="text" name="phone"  id="phone"  value='<?php echo isset($data_info['phone'])?$data_info['phone']:'' ?>'  class="form-control validate[required]"  placeholder="请输入电话" >
				</div>
			</div>
													
	<div class="form-group">
				<label for="bank_name" class="col-sm-2 control-label form-control-static">开户行</label>
				<div class="col-sm-9 ">
					<input type="text" name="bank_name"  id="bank_name"  value='<?php echo isset($data_info['bank_name'])?$data_info['bank_name']:'' ?>'  class="form-control validate[required]"  placeholder="请输入开户行" >
				</div>
			</div>
													
	<div class="form-group">
				<label for="bank_account" class="col-sm-2 control-label form-control-static">账号</label>
				<div class="col-sm-9 ">
					<input type="text" name="bank_account"  id="bank_account"  value='<?php echo isset($data_info['bank_account'])?$data_info['bank_account']:'' ?>'  class="form-control validate[required]"  placeholder="请输入账号" >
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
		        require(['<?php echo SITE_URL?>scripts/adminpanel/vendor/edit.js']);
		    });
		</script>
	
	