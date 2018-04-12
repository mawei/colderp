<?php defined('BASEPATH') or exit('No direct script access allowed.'); ?><?php defined('BASEPATH') or exit('No permission resources.'); ?>
<form class="form-horizontal" role="form" id="validateform" name="validateform" action="<?php echo base_url('adminpanel/product/edit')?>" >
	<div class='panel panel-default '>
		<div class='panel-heading'>
			<i class='fa fa-table'></i> 产品 修改信息
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
					<label for="business_id" class="col-sm-2 control-label form-control-static">供应商</label>
					<div class="col-sm-9 ">
							<input type="text" name="vendor_name"  id="vendor_name"  value='<?php echo isset($vendor['name'])?$vendor['name']:'' ?>'  class="form-control validate[required]"  placeholder="" readonly >
							<input type="hidden" name="vendor_id"  id="vendor_id"  value='<?php echo isset($vendor['vendor_id'])?$vendor['vendor_id']:'' ?>'  class="form-control validate[required]"  placeholder="" >

					</div>
				</div>				


				<div class="form-group">
					<label for="brand" class="col-sm-2 control-label form-control-static">品牌</label>
					<div class="col-sm-9 ">
						<input type="text" name="brand"  id="brand"  value='<?php echo isset($data_info['brand']) && $data_info['brand']!=''?$data_info['brand']:$vendor['brand'] ?>'  class="form-control validate[required]"  placeholder="请输入品牌" >
					</div>
				</div>

				<div class="form-group">
					<label for="category" class="col-sm-2 control-label form-control-static">大类</label>
					<div class="col-sm-9 ">
<!-- 						<input type="text" name="category"  id="category"  value='<?php echo isset($data_info['category'])?$data_info['category']:'' ?>'  class="form-control validate[required]"  placeholder="请输入大类" > -->
						<select class="form-control "  name="category"  id="category">
							<option value="">请选择大类</option>
							<option value="冷饮" <?php if(isset($data_info['category'])&&($data_info['category']=='冷饮')) { ?> selected="selected" <?php } ?>>冷饮</option>
							<option value="速冻" <?php if(isset($data_info['category'])&&($data_info['category']=='速冻')) { ?> selected="selected" <?php } ?>>速冻</option>
						</select>
					</div>
				</div>


				<div class="form-group">
					<label for="series" class="col-sm-2 control-label form-control-static">产品系列</label>
					<div class="col-sm-9 ">
						<select class="form-control "  name="series"  id="series">
							<option value="<?php echo isset($data_info['series'])?$data_info['series']:'' ?>"><?php echo isset($data_info['series'])?$data_info['series']:'' ?></option>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label for="name" class="col-sm-2 control-label form-control-static">产品名称</label>
					<div class="col-sm-9 ">
						<input type="text" name="name"  id="name"  value='<?php echo isset($data_info['name'])?$data_info['name']:'' ?>'  class="form-control validate[required]"  placeholder="请输入产品名称" >
					</div>
				</div>

				<div class="form-group">
					<label for="image" class="col-sm-2 control-label form-control-static">图样</label>
					<div class="col-sm-9 ">
						<a id="image_a"  ><img  width="100" id="image_SRC" border="1" src="<?php echo SITE_URL?><?php echo isset($data_info["image"])?"images/".$data_info["image"]:"images/nopic.gif" ?>"/></a>
						<input type="hidden" id="image" name="image" value="<?php echo isset($data_info["image"])?$data_info["image"]:"" ?>" /> <a id="image_b" class="btn btn-default btn-sm" > 选择图片 ...</a><span class="help-block">只支持图片上传.</span>
					</div>
				</div>

				<div class="form-group">
					<label for="code" class="col-sm-2 control-label form-control-static">条码</label>
					<div class="col-sm-9 ">
						<input type="text" name="code"  id="code"  value='<?php echo isset($data_info['code'])?$data_info['code']:'' ?>'  class="form-control validate[required]"  placeholder="请输入条码" >
					</div>
				</div>

				<div class="form-group">
					<label for="model" class="col-sm-2 control-label form-control-static">规格型号</label>
					<div class="col-sm-9 ">
						<input type="text" name="model"  id="model"  value='<?php echo isset($data_info['model'])?$data_info['model']:'' ?>'  class="form-control validate[required]"  placeholder="请输入规格型号" >
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
			var vendor_id =<?php echo $vendor_id;?>;

			

			require(['<?php echo SITE_URL?>scripts/common.js'], function (common) {
				require(['<?php echo SITE_URL?>scripts/adminpanel/product/edit.js']);
			});


		</script>

