<?php defined('BASEPATH') or exit('No direct script access allowed.'); ?><?php defined('BASEPATH') or exit('No permission resources.'); ?>
<form class="form-horizontal" role="form" id="validateform" name="validateform" action="<?php echo base_url('adminpanel/buy/edit')?>" >
	<div class='panel panel-default '>
		<div class='panel-heading'>
			<i class='fa fa-table'></i> 采购 修改信息
			<div class='panel-tools'>
				<div class='btn-group'>
					<a class="btn " href="<?php echo base_url('adminpanel/buy')?>"><span class="glyphicon glyphicon-arrow-left"></span> 返回 </a>
				</div>
			</div>
		</div>
		<div class='panel-body '>
								<fieldset>
						<legend>基本信息</legend>
													
	<div class="form-group">
				<label for="cost" class="col-sm-2 control-label form-control-static">成本</label>
				<div class="col-sm-9 ">
					<input type="text" name="cost"  id="cost"  value='<?php echo isset($data_info['cost'])?$data_info['cost']:'' ?>'  class="form-control validate[required]"  placeholder="请输入成本" >
				</div>
			</div>
													
	<div class="form-group">
				<label for="profit" class="col-sm-2 control-label form-control-static">销售毛利</label>
				<div class="col-sm-9 ">
					<input type="text" name="profit"  id="profit"  value='<?php echo isset($data_info['profit'])?$data_info['profit']:'' ?>'  class="form-control validate[required]"  placeholder="请输入销售毛利" >
				</div>
			</div>
													
	<div class="form-group">
				<label for="amount" class="col-sm-2 control-label form-control-static">销售收入</label>
				<div class="col-sm-9 ">
					<input type="text" name="amount"  id="amount"  value='<?php echo isset($data_info['amount'])?$data_info['amount']:'' ?>'  class="form-control validate[required]"  placeholder="请输入销售收入" >
				</div>
			</div>
													
	<div class="form-group">
				<label for="discount" class="col-sm-2 control-label form-control-static">销售折扣</label>
				<div class="col-sm-9 ">
					<input type="text" name="discount"  id="discount"  value='<?php echo isset($data_info['discount'])?$data_info['discount']:'' ?>'  class="form-control validate[required]"  placeholder="请输入销售折扣" >
				</div>
			</div>
													
	<div class="form-group">
				<label for="time" class="col-sm-2 control-label form-control-static">时间</label>
				<div class="col-sm-9 ">
					<input type="text" name="time"  id="time"  value='<?php echo isset($data_info['time'])?$data_info['time']:'' ?>'  class="form-control validate[required]"  placeholder="请输入时间" >
				</div>
			</div>
													
	<div class="form-group">
				<label for="sales_order" class="col-sm-2 control-label form-control-static">销售单号</label>
				<div class="col-sm-9 ">
					<input type="text" name="sales_order"  id="sales_order"  value='<?php echo isset($data_info['sales_order'])?$data_info['sales_order']:'' ?>'  class="form-control validate[required]"  placeholder="请输入销售单号" >
				</div>
			</div>
													
	<div class="form-group">
				<label for="return_order" class="col-sm-2 control-label form-control-static">退货单号</label>
				<div class="col-sm-9 ">
					<input type="text" name="return_order"  id="return_order"  value='<?php echo isset($data_info['return_order'])?$data_info['return_order']:'' ?>'  class="form-control validate[required]"  placeholder="请输入退货单号" >
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
		        require(['<?php echo SITE_URL?>scripts/adminpanel/buy/edit.js']);
		    });
		</script>
	
	