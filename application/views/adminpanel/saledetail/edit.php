<?php defined('BASEPATH') or exit('No direct script access allowed.'); ?><?php defined('BASEPATH') or exit('No permission resources.'); ?>
<form class="form-horizontal" role="form" id="validateform" name="validateform" action="<?php echo base_url('adminpanel/saledetail/edit')?>" >
	<div class='panel panel-default '>
		<div class='panel-heading'>
			<i class='fa fa-table'></i> 销售详情 修改信息
			<div class='panel-tools'>
				<div class='btn-group'>
					<a class="btn " href="<?php echo base_url('adminpanel/saledetail')?>"><span class="glyphicon glyphicon-arrow-left"></span> 返回 </a>
				</div>
			</div>
		</div>
		<div class='panel-body '>
								<fieldset>
						<legend>基本信息</legend>
													
	<div class="form-group">
				<label for="sale_id" class="col-sm-2 control-label form-control-static">销售订单id</label>
				<div class="col-sm-9 ">
					<input type="text" name="sale_id"  id="sale_id"  value='<?php echo isset($data_info['sale_id'])?$data_info['sale_id']:'' ?>'  class="form-control validate[required]"  placeholder="请输入销售订单id" >
				</div>
			</div>
													
	<div class="form-group">
				<label for="product_id" class="col-sm-2 control-label form-control-static">产品</label>
				<div class="col-sm-9 ">
					<?php $options = process_datasource($this->method_config['cold_product_datasource'])?>
					<select class="form-control  validate[required]"  name="product_id"  id="product_id">
						<option value="">==请选择==</option>
<?php if($options)foreach($options as $option):?>
						<option value='<?php echo $option['val'];?>' <?php if(isset($data_info['product_id'])&&($data_info['product_id']==$option['val'])) { ?> selected="selected" <?php } ?>            ><?php echo $option['text'];?></option>
<?php endforeach;?>
					</select>

				</div>
			</div>
													
	<div class="form-group">
				<label for="number" class="col-sm-2 control-label form-control-static">数量</label>
				<div class="col-sm-9 ">
					<input type="text" name="number"  id="number"  value='<?php echo isset($data_info['number'])?$data_info['number']:'' ?>'  class="form-control validate[required]"  placeholder="请输入数量" >
				</div>
			</div>
													
	<div class="form-group">
				<label for="unit" class="col-sm-2 control-label form-control-static">单位</label>
				<div class="col-sm-9 ">
					<input type="text" name="unit"  id="unit"  value='<?php echo isset($data_info['unit'])?$data_info['unit']:'' ?>'  class="form-control validate[required]"  placeholder="请输入单位" >
				</div>
			</div>
													
	<div class="form-group">
				<label for="price" class="col-sm-2 control-label form-control-static">价格</label>
				<div class="col-sm-9 ">
					<input type="text" name="price"  id="price"  value='<?php echo isset($data_info['price'])?$data_info['price']:'' ?>'  class="form-control validate[required]"  placeholder="请输入价格" >
				</div>
			</div>
													
	<div class="form-group">
				<label for="stock_id" class="col-sm-2 control-label form-control-static">入库单号</label>
				<div class="col-sm-9 ">
					<input type="text" name="stock_id"  id="stock_id"  value='<?php echo isset($data_info['stock_id'])?$data_info['stock_id']:'' ?>'  class="form-control validate[required]"  placeholder="请输入入库单号" >
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
			var sale_id =<?php echo $sale_id;?>;

			require(['<?php echo SITE_URL?>scripts/common.js'], function (common) {
		        require(['<?php echo SITE_URL?>scripts/adminpanel/saledetail/edit.js']);
		    });
		</script>
	
	