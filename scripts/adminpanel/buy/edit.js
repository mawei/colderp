
	define(function (require) {
	var $ = require('jquery');
	var aci = require('aci');
	require('bootstrap');
	require('bootstrapValidator');
	require('message');
	require('jquery-ui');
	require('jquery-ui-dialog-extend');
	require('datetimepicker');

		$(function () {


            $('#validateform').bootstrapValidator({
				message: '输入框不能为空',
				feedbackIcons: {
					valid: 'glyphicon glyphicon-ok',
					invalid: 'glyphicon glyphicon-remove',
					validating: 'glyphicon glyphicon-refresh'
				},
				fields: {
					 cost: {
						 validators: {
							notEmpty: {
								message: '成本不符合格式要求'
							}
						 }
					 },

					 profit: {
						 validators: {
							notEmpty: {
								message: '销售毛利不符合格式要求'
							}
						 }
					 },

					 amount: {
						 validators: {
							notEmpty: {
								message: '销售收入不符合格式要求'
							}
						 }
					 },

					 discount: {
						 validators: {
							notEmpty: {
								message: '销售折扣不符合格式要求'
							}
						 }
					 },

					 time: {
						 validators: {
							notEmpty: {
								message: '时间不符合格式要求'
							}
						 }
					 },

					 sales_order: {
						 validators: {
							notEmpty: {
								message: '销售单号不符合格式要求'
							}
						 }
					 },

					 return_order: {
						 validators: {
							notEmpty: {
								message: '退货单号不符合格式要求'
							}
						 }
					 },

				}
			}).on('success.form.bv', function(e) {

				e.preventDefault();
				$("#dosubmit").attr("disabled","disabled");

				$.scojs_message("正在保存，请稍等...", $.scojs_message.TYPE_ERROR);
				$.ajax({
					type: "POST",
					url: is_edit?SITE_URL+"adminpanel/buy/edit/"+id:SITE_URL+"adminpanel/buy/add/",
					data:  $("#validateform").serialize(),
					success:function(response){
						var dataObj=jQuery.parseJSON(response);
						if(dataObj.status)
						{
							$.scojs_message('操作成功,3秒后将返回列表页...', $.scojs_message.TYPE_OK);
							aci.GoUrl(SITE_URL+'adminpanel/buy/',1);
						}else
						{
							$.scojs_message(dataObj.tips, $.scojs_message.TYPE_ERROR);
							$("#dosubmit").removeAttr("disabled");
						}
					},
					error: function (request, status, error) {
						$.scojs_message(request.responseText, $.scojs_message.TYPE_ERROR);
						$("#dosubmit").removeAttr("disabled");
					}
				});

			}).on('error.form.bv',function(e){ $.scojs_message('带*号不能为空', $.scojs_message.TYPE_ERROR);$("#dosubmit").removeAttr("disabled");});

        });
});
