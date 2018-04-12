<?php defined('BASEPATH') or exit('No direct script access allowed.'); ?><?php defined('BASEPATH') or exit('No permission resources.'); ?>
<form class="form-horizontal" role="form" id="validateform" name="validateform" action="<?php echo base_url('adminpanel/stock/edit')?>" >
	<div class='panel panel-default '>
		<div class='panel-heading'>
			<i class='fa fa-table'></i> 库存 修改信息
			<div class='panel-tools'>
				<div class='btn-group'>
					<a class="btn " href="<?php echo base_url('adminpanel/stock')?>"><span class="glyphicon glyphicon-arrow-left"></span> 返回 </a>
				</div>
			</div>
		</div>
		<div class='panel-body '>
			<fieldset>
				<legend>基本信息</legend>

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
					<label for="price" class="col-sm-2 control-label form-control-static">价格</label>
					<div class="col-sm-9 ">
						<input type="text" name="price"  id="price"  value='<?php echo isset($data_info['price'])?$data_info['price']:'' ?>'  class="form-control validate[required]"  placeholder="请输入价格" >
					</div>
				</div>

				<div class="form-group">
					<label for="model" class="col-sm-2 control-label form-control-static">规格型号</label>
					<div class="col-sm-9 ">
						<input type="text" name="model"  id="model"  value='<?php echo isset($data_info['model'])?$data_info['model']:'' ?>'  class="form-control validate[required]"  placeholder="请输入规格型号" >
					</div>
				</div>

				<div class="form-group">
					<label for="unit" class="col-sm-2 control-label form-control-static">单位</label>
					<div class="col-sm-9 ">
						<input type="text" name="unit"  id="unit"  value='<?php echo isset($data_info['unit'])?$data_info['unit']:'' ?>'  class="form-control validate[required]"  placeholder="请输入单位" >
					</div>
				</div>

				<div class="form-group">
					<label for="number_per_package" class="col-sm-2 control-label form-control-static">一箱含支数</label>
					<div class="col-sm-9 ">
						<input type="number" name="number_per_package"  id="number_per_package"  value='<?php echo isset($data_info['number_per_package'])?$data_info['number_per_package']:'' ?>'   class="form-control validate[custom[integer]]" placeholder="请输入一箱含支数" >
					</div>
				</div>

				<div class="form-group">
					<label for="number" class="col-sm-2 control-label form-control-static">箱数</label>
					<div class="col-sm-9 ">
						<input type="number" name="number"  id="number"  value='<?php echo isset($data_info['number'])?$data_info['number']:'' ?>'   class="form-control validate[custom[integer]]" placeholder="请输入箱数" >
					</div>
				</div>

				<div class="form-group">
					<label for="zhi_number" class="col-sm-2 control-label form-control-static">支数</label>
					<div class="col-sm-9 ">
						<input type="number" name="zhi_number"  id="zhi_number"  value='<?php echo isset($data_info['zhi_number'])?$data_info['zhi_number']:'' ?>'   class="form-control validate[custom[integer]]" placeholder="请输入支数" >
					</div>
				</div>

				<div class="form-group">
					<label for="rebate_percent" class="col-sm-2 control-label form-control-static">返点</label>
					<div class="col-sm-9 ">
						<input type="text" name="rebate_percent"  id="rebate_percent"  value='<?php echo isset($data_info['rebate_percent'])?$data_info['rebate_percent']:'' ?>'  class="form-control validate[required]"  placeholder="请输入返点" >
					</div>
				</div>



				<div class="form-group">
					<label for="is_on_big" class="col-sm-2 control-label form-control-static">是否上架(普通／协议商户)</label>
					<div class="col-sm-9 ">
						<label class="radio-inline">  <input type="radio" class="" name="is_on_big"  id="is_on1" value="是" <?php if(isset($data_info['is_on_big'])&&(trim($data_info['is_on_big'])=='是')) { ?> checked="checked" <?php } ?>            > 是</label><label class="radio-inline">  <input type="radio"  class="" name="is_on_big"  id="is_on2" value="否"<?php if(isset($data_info['is_on_big'])&&(trim($data_info['is_on_big'])=='否')) { ?> checked="checked" <?php } ?>            > 否</label>
					</div>
				</div>

				<div class="form-group">
					<label for="big_price" class="col-sm-2 control-label form-control-static">价格(普通／协议商户)</label>
					<div class="col-sm-9 ">
						<input type="text" name="big_price"  id="big_price"  value='<?php echo isset($data_info['big_price'])?$data_info['big_price']:'' ?>'  class="form-control validate[required]"  placeholder="请输入价格" >
					</div>
				</div>

				<div class="form-group">
					<label for="is_on_small" class="col-sm-2 control-label form-control-static">是否上架(个人商户)</label>
					<div class="col-sm-9 ">
						<label class="radio-inline">  <input type="radio" class="" name="is_on_small"  id="is_on1" value="是" <?php if(isset($data_info['is_on_small'])&&(trim($data_info['is_on_small'])=='是')) { ?> checked="checked" <?php } ?>            > 是</label><label class="radio-inline">  <input type="radio"  class="" name="is_on_small"  id="is_on2" value="否"<?php if(isset($data_info['is_on_small'])&&(trim($data_info['is_on_small'])=='否')) { ?> checked="checked" <?php } ?>            > 否</label>
					</div>
				</div>

				<div class="form-group">
					<label for="small_price" class="col-sm-2 control-label form-control-static">价格(个人商户)</label>
					<div class="col-sm-9 ">
						<input type="text" name="small_price"  id="small_price"  value='<?php echo isset($data_info['small_price'])?$data_info['small_price']:'' ?>'  class="form-control validate[required]"  placeholder="请输入价格" >
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
				require(['<?php echo SITE_URL?>scripts/adminpanel/stock/edit.js']);
			});
		</script>

