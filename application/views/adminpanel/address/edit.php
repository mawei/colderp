<?php defined('BASEPATH') or exit('No direct script access allowed.'); ?><?php defined('BASEPATH') or exit('No permission resources.'); ?>
<form class="form-horizontal" role="form" id="validateform" name="validateform" action="<?php echo base_url('adminpanel/address/edit')?>" >
	<div class='panel panel-default '>
		<div class='panel-heading'>
			<i class='fa fa-table'></i> 收货地址 修改信息
			<div class='panel-tools'>
				<div class='btn-group'>
					<a class="btn " href="<?php echo base_url('adminpanel/address')?>"><span class="glyphicon glyphicon-arrow-left"></span> 返回 </a>
				</div>
			</div>
		</div>
		<div class='panel-body '>
								<fieldset>
						<legend>基本信息</legend>
													
	<div class="form-group">
				<label for="customer_id" class="col-sm-2 control-label form-control-static">客户</label>
				<div class="col-sm-9 ">
					<input type="text" name="customer_id"  id="customer_id"  value='<?php echo isset($data_info['customer_id'])?$data_info['customer_id']:'' ?>'  class="form-control validate[required]"  placeholder="请输入客户" >
				</div>
			</div>
													
	<div class="form-group">
				<label for="name" class="col-sm-2 control-label form-control-static">姓名</label>
				<div class="col-sm-9 ">
					<input type="text" name="name"  id="name"  value='<?php echo isset($data_info['name'])?$data_info['name']:'' ?>'  class="form-control validate[required]"  placeholder="请输入姓名" >
				</div>
			</div>
													
	<div class="form-group">
				<label for="telephone" class="col-sm-2 control-label form-control-static">电话</label>
				<div class="col-sm-9 ">
					<input type="text" name="telephone"  id="telephone"  value='<?php echo isset($data_info['telephone'])?$data_info['telephone']:'' ?>'  class="form-control validate[required]"  placeholder="请输入电话" >
				</div>
			</div>
													
	<div class="form-group">
				<label for="address" class="col-sm-2 control-label form-control-static">地址</label>
				<div class="col-sm-9 ">
					<input type="text" name="address"  id="address"  value='<?php echo isset($data_info['address'])?$data_info['address']:'' ?>'  class="form-control validate[required]"  placeholder="请输入地址" >
				</div>
			</div>
													
	<div class="form-group">
				<label for="area" class="col-sm-2 control-label form-control-static">区域</label>
				<div class="col-sm-9 ">
					<input type="text" name="area"  id="area"  value='<?php echo isset($data_info['area'])?$data_info['area']:'' ?>'  class="form-control validate[required]"  placeholder="请输入区域" >
				</div>
			</div>
													
	<div class="form-group">
				<label for="is_moren" class="col-sm-2 control-label form-control-static">是否默认</label>
				<div class="col-sm-9 ">
					<select class="form-control "  name="is_moren"  id="is_moren"><option value="是" <?php if(isset($data_info['is_moren'])&&($data_info['is_moren']=='是')) { ?> 'selected="selected"' <?php } ?>            >是</option><option value="否" <?php if(isset($data_info['is_moren'])&&($data_info['is_moren']=='否')) { ?> 'selected="selected"' <?php } ?>            >否</option></select>
				</div>
			</div>
													
	<div class="form-group">
				<label for="is_delete" class="col-sm-2 control-label form-control-static">是否删除</label>
				<div class="col-sm-9 ">
					<input type="text" name="is_delete"  id="is_delete"  value='<?php echo isset($data_info['is_delete'])?$data_info['is_delete']:'' ?>'  class="form-control validate[required]"  placeholder="请输入是否删除" >
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
		        require(['<?php echo SITE_URL?>scripts/adminpanel/address/edit.js']);
		    });
		</script>
	
	