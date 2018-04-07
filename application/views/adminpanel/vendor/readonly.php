<?php defined('BASEPATH') or exit('No direct script access allowed.'); ?><?php defined('BASEPATH') or exit('No permission resources.'); ?>
<div class='panel panel-default '>
	<div class='panel-heading'>
		<i class='fa fa-table'></i> 供应商管理 查看信息 
		<div class='panel-tools'>
			<div class='btn-group'>
				<a class="btn " href="<?php echo base_url('adminpanel/vendor')?>"><span class="glyphicon glyphicon-arrow-left"></span> 返回 </a>
			</div>
		</div>
	</div>

	<div class='panel panel-default grid'>
		<div class='panel-heading'>

				<div class='panel-body '>
					<?php if($data_list):?>
						<table class="table table-hover dataTable" id="checkAll">
							<thead>
								<tr>
									<th>#</th>
									<th   nowrap="nowrap">产品系列</th>
									<th   nowrap="nowrap">产品名称</th>
									<th   nowrap="nowrap">图样</th>
									<th   nowrap="nowrap">条码</th>
									<th   nowrap="nowrap">规格型号</th>
									<th>操作</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($data_list as $k=>$v):?>
									<tr>
										<td><!-- <input type="checkbox" name="pid[]" value="<?php echo $v['product_id']?>" /> --></td>
										<td><?php echo $v['series']?></td>
										<td><?php echo $v['name']?></td>
										<td><?php echo $v['image']?></td>
										<td><?php echo $v['code']?></td>
										<td><?php echo $v['model']?></td>
										<td>
											<a href="<?php echo base_url('adminpanel/product/readonly/'.$v['product_id'])?>"  class="btn btn-default btn-xs"><span class="glyphicon glyphicon-share-alt"></span> 查看</a>
											<a href="<?php echo base_url('adminpanel/product/edit/'.$v['product_id'])?>"  class="btn btn-default btn-xs"><span class="glyphicon glyphicon-edit"></span> 修改</a>
											<!-- <button type="button" class="btn btn-default btn-xs delete-btn" value="<?php echo $v['product_id'];?>"><span class="glyphicon glyphicon-remove"></span> 删除</button> -->

										</td>
									</tr>
								<?php endforeach;?>

							</tbody>
						</table> 
					</div>

			</div>
		<?php else:?>
			<div class="no-result">-- 暂无产品 -- </div>
		<?php endif;?>


		<div class='panel-body '>
			<div class="form-horizontal"  >
				<fieldset>
					<legend>基本信息</legend>


					<div class="form-group">
						<label for="name" class="col-sm-2 control-label form-control-static">供应商名字</label>
						<div class="col-sm-9 form-control-static ">
							<?php echo isset($data_info['name'])?$data_info['name']:'' ?>
						</div>
					</div>

					<div class="form-group">
						<label for="brand" class="col-sm-2 control-label form-control-static">品牌</label>
						<div class="col-sm-9 form-control-static ">
							<?php echo isset($data_info['brand'])?$data_info['brand']:'' ?>
						</div>
					</div>

					<div class="form-group">
						<label for="business_people" class="col-sm-2 control-label form-control-static">业务员</label>
						<div class="col-sm-9 form-control-static ">
							<?php echo isset($data_info['business_people'])?$data_info['business_people']:'' ?>
						</div>
					</div>

					<div class="form-group">
						<label for="phone" class="col-sm-2 control-label form-control-static">电话</label>
						<div class="col-sm-9 form-control-static ">
							<?php echo isset($data_info['phone'])?$data_info['phone']:'' ?>
						</div>
					</div>

					<div class="form-group">
						<label for="bank_name" class="col-sm-2 control-label form-control-static">开户行</label>
						<div class="col-sm-9 form-control-static ">
							<?php echo isset($data_info['bank_name'])?$data_info['bank_name']:'' ?>
						</div>
					</div>

					<div class="form-group">
						<label for="bank_account" class="col-sm-2 control-label form-control-static">账号</label>
						<div class="col-sm-9 form-control-static ">
							<?php echo isset($data_info['bank_account'])?$data_info['bank_account']:'' ?>
						</div>
					</div>
					<div class="form-group">
						<label for="amount" class="col-sm-2 control-label form-control-static">余额</label>
						<div class="col-sm-9 form-control-static ">
							<?php echo isset($data_info['amount'])?$data_info['amount']:'' ?>
						</div>
					</div>
					
				</fieldset>
			</div>
		</div>
	</div>
