<?php defined('BASEPATH') or exit('No direct script access allowed.'); ?><?php defined('BASEPATH') or exit('No permission resources.'); ?>
<form class="form-horizontal" role="form" id="validateform" name="validateform" action="<?php echo base_url('adminpanel/customer/edit')?>" >
	<div class='panel panel-default '>
		<div class='panel-heading'>
			<i class='fa fa-table'></i> 客户 修改信息
			<div class='panel-tools'>
				<div class='btn-group'>
					<a class="btn " href="<?php echo base_url('adminpanel/customer')?>"><span class="glyphicon glyphicon-arrow-left"></span> 返回 </a>
				</div>
			</div>
		</div>
		<div class='panel-body '>
								<fieldset>
						<legend>基本信息</legend>
													
	<div class="form-group">
				<label for="customer_type" class="col-sm-2 control-label form-control-static">客户类型</label>
				<div class="col-sm-9 ">
					<select class="form-control  validate[required]"  name="customer_type"  id="customer_type">
				<option value="">==请选择==</option>
								<option value='协议客户' <?php if(isset($data_info['customer_type'])&&($data_info['customer_type']=='协议客户')) { ?> selected="selected" <?php } ?>            >协议客户</option>
				<option value='普通客户' <?php if(isset($data_info['customer_type'])&&($data_info['customer_type']=='普通客户')) { ?> selected="selected" <?php } ?>            >普通客户</option>
				<option value='个人客户' <?php if(isset($data_info['customer_type'])&&($data_info['customer_type']=='个人客户')) { ?> selected="selected" <?php } ?>            >个人客户</option>
				<option value='业务员' <?php if(isset($data_info['customer_type'])&&($data_info['customer_type']=='业务员')) { ?> selected="selected" <?php } ?>            >业务员</option>
</select>
				</div>
			</div>
													
	<div class="form-group">
				<label for="name" class="col-sm-2 control-label form-control-static">姓名</label>
				<div class="col-sm-9 ">
					<input type="text" name="name"  id="name"  value='<?php echo isset($data_info['name'])?$data_info['name']:'' ?>'  class="form-control validate[required]"  placeholder="请输入姓名" >
				</div>
			</div>
													
	<div class="form-group">
				<label for="telephone" class="col-sm-2 control-label form-control-static">联系电话</label>
				<div class="col-sm-9 ">
					<input type="text" name="telephone"  id="telephone"  value='<?php echo isset($data_info['telephone'])?$data_info['telephone']:'' ?>'  class="form-control validate[required]"  placeholder="请输入联系电话" >
				</div>
			</div>
													
	<div class="form-group">
				<label for="code" class="col-sm-2 control-label form-control-static">商户二维码</label>
				<div class="col-sm-9 ">
					<a id="code_a"  ><img  width="100" id="code_SRC" border="1" src="<?php echo SITE_URL?><?php echo isset($data_info["code"])?"customer".$data_info["code"]:"images/nopic.gif" ?>"/></a>
<input type="hidden" id="code" name="code" value="<?php echo isset($data_info["code"])?$data_info["code"]:"" ?>" /> <a id="code_b" class="btn btn-default btn-sm" > 选择图片 ...</a><span class="help-block">只支持图片上传.</span>
				</div>
			</div>
													
	<div class="form-group">
				<label for="amount" class="col-sm-2 control-label form-control-static">余额</label>
				<div class="col-sm-9 ">
					<input type="text" name="amount"  id="amount"  value='<?php echo isset($data_info['amount'])?$data_info['amount']:'' ?>'  class="form-control validate[required]"  placeholder="请输入余额" >
				</div>
			</div>
													
	<div class="form-group">
				<label for="address" class="col-sm-2 control-label form-control-static">地址</label>
				<div class="col-sm-9 ">
					<input type="text" name="address"  id="address"  value='<?php echo isset($data_info['address'])?$data_info['address']:'' ?>'  class="form-control validate[required]"  placeholder="请输入地址" >
				</div>
			</div>
													
	<div class="form-group">
				<label for="invite_person" class="col-sm-2 control-label form-control-static">邀请人</label>
				<div class="col-sm-9 ">
					<input type="text" name="invite_person"  id="invite_person"  value='<?php echo isset($data_info['invite_person'])?$data_info['invite_person']:'' ?>'  class="form-control validate[required]"  placeholder="请输入邀请人" >
				</div>
			</div>
													
	<div class="form-group">
				<label for="account" class="col-sm-2 control-label form-control-static">开户行账号</label>
				<div class="col-sm-9 ">
					<input type="text" name="account"  id="account"  value='<?php echo isset($data_info['account'])?$data_info['account']:'' ?>'  class="form-control validate[required]"  placeholder="请输入开户行账号" >
				</div>
			</div>
													
	<div class="form-group">
				<label for="wechat" class="col-sm-2 control-label form-control-static">微信号</label>
				<div class="col-sm-9 ">
					<input type="text" name="wechat"  id="wechat"  value='<?php echo isset($data_info['wechat'])?$data_info['wechat']:'' ?>'  class="form-control validate[required]"  placeholder="请输入微信号" >
				</div>
			</div>
													
	<div class="form-group">
				<label for="freezer_model" class="col-sm-2 control-label form-control-static">冰柜规格</label>
				<div class="col-sm-9 ">
					<input type="text" name="freezer_model"  id="freezer_model"  value='<?php echo isset($data_info['freezer_model'])?$data_info['freezer_model']:'' ?>'  class="form-control validate[required]"  placeholder="请输入冰柜规格" >
				</div>
			</div>
													
	<div class="form-group">
				<label for="freezer_type" class="col-sm-2 control-label form-control-static">冰柜类型</label>
				<div class="col-sm-9 ">
					<select class="form-control "  name="freezer_type"  id="freezer_type">
				<option value="">==请选择==</option>
								<option value='店供' <?php if(isset($data_info['freezer_type'])&&($data_info['freezer_type']=='店供')) { ?> selected="selected" <?php } ?>            >店供</option>
				<option value='自购' <?php if(isset($data_info['freezer_type'])&&($data_info['freezer_type']=='自购')) { ?> selected="selected" <?php } ?>            >自购</option>
</select>
				</div>
			</div>
													
	<div class="form-group">
				<label for="yajin" class="col-sm-2 control-label form-control-static">冰柜押金（类型为店供时填写）</label>
				<div class="col-sm-9 ">
					<input type="text" name="yajin"  id="yajin"  value='<?php echo isset($data_info['yajin'])?$data_info['yajin']:'' ?>'  class="form-control validate[required]"  placeholder="请输入冰柜押金（类型为店供时填写）" >
				</div>
			</div>
													
	<div class="form-group">
				<label for="freezer_number" class="col-sm-2 control-label form-control-static">冰柜数量</label>
				<div class="col-sm-9 ">
					<input type="number" name="freezer_number"  id="freezer_number"  value='<?php echo isset($data_info['freezer_number'])?$data_info['freezer_number']:'' ?>'   class="form-control validate[custom[integer]]" placeholder="请输入冰柜数量" >
				</div>
			</div>
													
	<div class="form-group">
				<label for="discount" class="col-sm-2 control-label form-control-static">商户折扣(填入百分比，如10)</label>
				<div class="col-sm-9 ">
					<input type="number" name="discount"  id="discount"   value='<?php echo isset($data_info['discount'])?$data_info['discount']:'' ?>'   class="form-control validate[custom[price]]" placeholder="请输入商户折扣(填入百分比，如10)" >
				</div>
			</div>
													
	<div class="form-group">
				<label for="sitefee" class="col-sm-2 control-label form-control-static">场地费</label>
				<div class="col-sm-9 ">
					<input type="text" name="sitefee"  id="sitefee"  value='<?php echo isset($data_info['sitefee'])?$data_info['sitefee']:'' ?>'  class="form-control validate[required]"  placeholder="请输入场地费" >
				</div>
			</div>
													
	<div class="form-group">
				<label for="password" class="col-sm-2 control-label form-control-static">密码</label>
				<div class="col-sm-9 ">
					<input type="password" name="o_password"  id="o_password"    autocomplete="off"  class="form-control password "  placeholder="请输入密码" >
				</div>
			</div>

	<div class="form-group">
				<label for="password" class="col-sm-2 control-label form-control-static">确认密码</label>
				<div class="col-sm-9 ">
					<input type="password" name="password"  id="password"    autocomplete="off" class="form-control  "  placeholder="请再次输入密码" >
				</div>
			</div>
													
	<div class="form-group">
				<label for="business_man" class="col-sm-2 control-label form-control-static">业务员</label>
				<div class="col-sm-9 ">
					<input type="text" name="business_man"  id="business_man"  value='<?php echo isset($data_info['business_man'])?$data_info['business_man']:'' ?>'  class="form-control validate[required]"  placeholder="请输入业务员" >
				</div>
			</div>
													
	<div class="form-group">
				<label for="business_bonus" class="col-sm-2 control-label form-control-static">业务员佣金百分比(填入百分比，如10)</label>
				<div class="col-sm-9 ">
					<input type="number" name="business_bonus"  id="business_bonus"   value='<?php echo isset($data_info['business_bonus'])?$data_info['business_bonus']:'' ?>'   class="form-control validate[custom[price]]" placeholder="请输入业务员佣金百分比(填入百分比，如10)" >
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
		        require(['<?php echo SITE_URL?>scripts/adminpanel/customer/edit.js']);
		    });
		</script>
	
	