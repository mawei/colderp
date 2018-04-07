<?php defined('BASEPATH') or exit('No direct script access allowed.'); ?><?php defined('BASEPATH') or exit('No permission resources.'); ?>
<div class='panel panel-default '>
    <div class='panel-heading'>
        <i class='fa fa-table'></i> 客户 查看信息 
        <div class='panel-tools'>
            <div class='btn-group'>
            	<a class="btn " href="<?php echo base_url('adminpanel/customer')?>"><span class="glyphicon glyphicon-arrow-left"></span> 返回 </a>
            </div>
        </div>
    </div>
    <div class='panel-body '>
<div class="form-horizontal"  >
	<fieldset>
        <legend>基本信息</legend>
     
  	  	
	<div class="form-group">
				<label for="customer_type" class="col-sm-2 control-label form-control-static">客户类型</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['customer_type'])?$data_info['customer_type']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="name" class="col-sm-2 control-label form-control-static">姓名</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['name'])?$data_info['name']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="telephone" class="col-sm-2 control-label form-control-static">联系电话</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['telephone'])?$data_info['telephone']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="code" class="col-sm-2 control-label form-control-static">商户二维码</label>
				<div class="col-sm-9 ">
					<img src='<?php echo SITE_URL;?><?php echo  isset($data_info['code'])?('customer/'.$data_info['code']):'' ?>' width="100" />
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="amount" class="col-sm-2 control-label form-control-static">余额</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['amount'])?$data_info['amount']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="address" class="col-sm-2 control-label form-control-static">地址</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['address'])?$data_info['address']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="invite_person" class="col-sm-2 control-label form-control-static">邀请人</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['invite_person'])?$data_info['invite_person']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="account" class="col-sm-2 control-label form-control-static">开户行账号</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['account'])?$data_info['account']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="wechat" class="col-sm-2 control-label form-control-static">微信号</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['wechat'])?$data_info['wechat']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="freezer_model" class="col-sm-2 control-label form-control-static">冰柜规格</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['freezer_model'])?$data_info['freezer_model']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="freezer_type" class="col-sm-2 control-label form-control-static">冰柜类型</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['freezer_type'])?$data_info['freezer_type']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="yajin" class="col-sm-2 control-label form-control-static">冰柜押金（类型为店供时填写）</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['yajin'])?$data_info['yajin']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="freezer_number" class="col-sm-2 control-label form-control-static">冰柜数量</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['freezer_number'])?$data_info['freezer_number']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="discount" class="col-sm-2 control-label form-control-static">商户折扣(填入百分比，如10)</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['discount'])?$data_info['discount']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="sitefee" class="col-sm-2 control-label form-control-static">场地费</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['sitefee'])?$data_info['sitefee']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="business_man" class="col-sm-2 control-label form-control-static">业务员</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['business_man'])?$data_info['business_man']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="business_bonus" class="col-sm-2 control-label form-control-static">业务员佣金百分比(填入百分比，如10)</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['business_bonus'])?$data_info['business_bonus']:'' ?>
				</div>
			</div>
	    </fieldset>
	</div>
</div>
</div>
