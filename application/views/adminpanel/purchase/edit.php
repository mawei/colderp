<?php defined('BASEPATH') or exit('No direct script access allowed.'); ?><?php defined('BASEPATH') or exit('No permission resources.'); ?>
<form class="form-horizontal" role="form" id="validateform" name="validateform" action="<?php echo base_url('adminpanel/purchase/edit')?>" >
	<div class='panel panel-default '>
		<div class='panel-heading'>
			<i class='fa fa-table'></i> 进货 修改信息
			<div class='panel-tools'>
				<div class='btn-group'>
					<a class="btn " href="<?php echo base_url('adminpanel/purchase')?>"><span class="glyphicon glyphicon-arrow-left"></span> 返回 </a>
				</div>
			</div>
		</div>
		<div class='panel-body '>
			<fieldset>
				<legend>基本信息</legend>

				<div class="form-group">
					<label for="product_id" class="col-sm-2 control-label form-control-static">供应商</label>
					<div class="col-sm-9 ">
						<select class="form-control "  name="vendor_id"  id="vendor_id">
							<option value="">==请选择==</option>
							<?php if($vendors)foreach($vendors as $vendor):?>
								<option value='<?php echo $vendor['vendor_id'];?>' <?php if(isset($data_info['vendor_id'])&&($data_info['vendor_id']==$vendor['val'])) { ?> selected="selected" <?php } ?>            ><?php echo $vendor['name'];?></option>
							<?php endforeach;?>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label for="product_id" class="col-sm-2 control-label form-control-static">品牌</label>
					<div class="col-sm-9 ">
						<select class="form-control "  name="brand"  id="brand">
							<option value="">==请选择==</option>
							
						</select>
					</div>
				</div>

				

				<div class="form-group">
					<label for="product_id" class="col-sm-2 control-label form-control-static">系列</label>
					<div class="col-sm-9 ">
						<select class="form-control "  name="series"  id="series">
							<option value="">==请选择==</option>
							
						</select>
					</div>
				</div>

				<div class="form-group">
					<label for="product_id" class="col-sm-2 control-label form-control-static">产品</label>
					<div class="col-sm-9 ">
						<?php $options = process_datasource($this->method_config['cold_product_datasource'])?>
						<select class="form-control "  name="product_id"  id="product_id">
							<option value="">==请选择==</option>
							<?php if($options)foreach($options as $option):?>
								<option value='<?php echo $option['val'];?>' <?php if(isset($data_info['product_id'])&&($data_info['product_id']==$option['val'])) { ?> selected="selected" <?php } ?>            ><?php echo $option['text'];?></option>
							<?php endforeach;?>
						</select>

					</div>
				</div>

				<div class="form-group">
					<label for="stock_id" class="col-sm-2 control-label form-control-static">入库单号</label>
					<div class="col-sm-9 ">
						<input type="text" name="stock_id"  id="stock_id"  value='<?php echo isset($data_info['stock_id'])?$data_info['stock_id']:$stock_id ?>'  class="form-control validate[required]"  placeholder="请输入入库单号" >
					</div>
				</div>

				<div class="form-group">
					<label for="price" class="col-sm-2 control-label form-control-static">单价</label>
					<div class="col-sm-9 ">
						<input type="number" name="price"  id="price"   value='<?php echo isset($data_info['price'])?$data_info['price']:'' ?>'   class="form-control validate[custom[price]]" placeholder="请输入单价" >
					</div>
				</div>

				<div class="form-group">
					<label for="number" class="col-sm-2 control-label form-control-static">数量</label>
					<div class="col-sm-9 ">
						<input type="number" name="number"  id="number"  value='<?php echo isset($data_info['number'])?$data_info['number']:'' ?>'   class="form-control  validate[required,custom[integer]]" placeholder="请输入数量" >
					</div>
				</div>

				<div class="form-group">
					<label for="unit" class="col-sm-2 control-label form-control-static">单位</label>
					<div class="col-sm-9 ">
						<input type="text" name="unit"  id="unit"  value='<?php echo isset($data_info['unit'])?$data_info['unit']:'' ?>'  class="form-control validate[required]"  placeholder="请输入单位" >
					</div>
				</div>

				<div class="form-group">
					<label for="number" class="col-sm-2 control-label form-control-static">规格</label>
					<div class="col-sm-9 ">
						<input type="text" name="number_per_package"  id="number_per_package"  value='<?php echo isset($data_info['number_per_package'])?$data_info['number_per_package']:'' ?>'   class="form-control  validate[required,custom[integer]]" placeholder="请输入规格" >
					</div>
				</div>

				<div class="form-group">
					<label for="rebate_percent" class="col-sm-2 control-label form-control-static">返点百分比（填入百分比，如10）</label>
					<div class="col-sm-9 ">
						<input type="number" name="rebate_percent"  id="rebate_percent"   value='<?php echo isset($data_info['rebate_percent'])?$data_info['rebate_percent']:'' ?>'   class="form-control validate[custom[price]]" placeholder="请输入返点百分比（填入百分比，如10）" >
					</div>
				</div>

				<div class="form-group">
					<label for="rebate_type" class="col-sm-2 control-label form-control-static">返点类型</label>
					<div class="col-sm-9 ">
						<select class="form-control "  name="rebate_type"  id="rebate_type">
							<option value="">==请选择==</option>
							<option value='年返' <?php if(isset($data_info['rebate_type'])&&($data_info['rebate_type']=='年返')) { ?> selected="selected" <?php } ?>            >年返</option>
							<option value='月返' <?php if(isset($data_info['rebate_type'])&&($data_info['rebate_type']=='月返')) { ?> selected="selected" <?php } ?>            >月返</option>
							<option value='件返' <?php if(isset($data_info['rebate_type'])&&($data_info['rebate_type']=='件返')) { ?> selected="selected" <?php } ?>            >件返</option>
						</select>
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
				require(['<?php echo SITE_URL?>scripts/adminpanel/purchase/edit.js']);
			});
		</script>

