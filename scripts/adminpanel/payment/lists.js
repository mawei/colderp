	define(function (require) {
	    var $ = require('jquery');
	    var aci = require('aci');
	    require('bootstrap');
	    require('bootstrapValidator');

		$(function () {
			$("#reverseBtn").click(function(){
				aci.ReverseChecked('pid[]')
			});

			$("#deleteBtn").click(function(){
				var _arr = aci.GetCheckboxValue("pid[]");
				if(_arr.length==0)
				{
					alert("请先勾选明细");
					return false;
				}
				if(confirm('确定要删除吗?'))
				{
					$("#form_list").submit();
				}
			});
        
			 $(".delete-btn").click(function(){
				var v = $(this).val();
				if(confirm('确定要删除吗?'))
				{
					window.location.href= SITE_URL+ "adminpanel/payment/delete_one/"+v;
				}
			});
            
		$(".datetimepicker").datetimepicker({lang:'ch'});
		$(".datetimepicker").datepicker();
            $('#validateform').bootstrapValidator({
				message: '输入框不能为空',
				feedbackIcons: {
					valid: 'glyphicon glyphicon-ok',
					invalid: 'glyphicon glyphicon-remove',
					validating: 'glyphicon glyphicon-refresh'
				},
				fields: {
					 vendor_id: {
						 validators: {
							notEmpty: {
								message: '收款人不符合格式要求'
							}
						 }
					 },
					 method: {
						 validators: {
							notEmpty: {
								message: '付款方式不符合格式要求'
							}
						 }
					 },
					 amount: {
						 validators: {
							notEmpty: {
								message: '金额不符合格式要求'
							}
						 }
					 },
					 time: {
						 validators: {
							notEmpty: {
								message: '付款时间不符合格式要求'
							}
						 }
					 },
					 source: {
						 validators: {
							notEmpty: {
								message: '款项说明不符合格式要求'
							}
						 }
					 },
					 operateman: {
						 validators: {
							notEmpty: {
								message: '经手人不符合格式要求'
							}
						 }
					 },
					 memo: {
						 validators: {
							notEmpty: {
								message: '备注不符合格式要求'
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
					url: edit?SITE_URL+"adminpanel/payment/edit/"+id:SITE_URL+"adminpanel/payment/add/",
					data:  $("#validateform").serialize(),
					success:function(response){
						var dataObj=jQuery.parseJSON(response);
						if(dataObj.status)
						{
							$.scojs_message('操作成功,3秒后将返回列表页...', $.scojs_message.TYPE_OK);
							aci.GoUrl(SITE_URL+'adminpanel/payment/',1);
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
