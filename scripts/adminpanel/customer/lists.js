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
					window.location.href= SITE_URL+ "adminpanel/customer/delete_one/"+v;
				}
			});
            
            $('#validateform').bootstrapValidator({
				message: '输入框不能为空',
				feedbackIcons: {
					valid: 'glyphicon glyphicon-ok',
					invalid: 'glyphicon glyphicon-remove',
					validating: 'glyphicon glyphicon-refresh'
				},
				fields: {
					 customer_type: {
						 validators: {
							notEmpty: {
								message: '客户类型不符合格式要求'
							}
						 }
					 },
					 name: {
						 validators: {
							notEmpty: {
								message: '姓名不符合格式要求'
							}
						 }
					 },
					 telephone: {
						 validators: {
							notEmpty: {
								message: '联系电话不符合格式要求'
							}
						 }
					 },
					 code: {
						 validators: {
							notEmpty: {
								message: '商户二维码不符合格式要求'
							}
						 }
					 },
					 amount: {
						 validators: {
							notEmpty: {
								message: '余额不符合格式要求'
							}
						 }
					 },
					 address: {
						 validators: {
							notEmpty: {
								message: '地址不符合格式要求'
							}
						 }
					 },
					 invite_person: {
						 validators: {
							notEmpty: {
								message: '邀请人不符合格式要求'
							}
						 }
					 },
					 account: {
						 validators: {
							notEmpty: {
								message: '开户行账号不符合格式要求'
							}
						 }
					 },
					 wechat: {
						 validators: {
							notEmpty: {
								message: '微信号不符合格式要求'
							}
						 }
					 },
					 freezer_model: {
						 validators: {
							notEmpty: {
								message: '冰柜规格不符合格式要求'
							}
						 }
					 },
					 freezer_type: {
						 validators: {
							notEmpty: {
								message: '冰柜类型不符合格式要求'
							}
						 }
					 },
					 yajin: {
						 validators: {
							notEmpty: {
								message: '冰柜押金（类型为店供时填写）不符合格式要求'
							}
						 }
					 },
					 freezer_number: {
						 validators: {
							notEmpty: {
								message: '冰柜数量不符合格式要求'
							}
						 }
					 },
					 discount: {
						 validators: {
							notEmpty: {
								message: '商户折扣(填入百分比，如10)不符合格式要求'
							}
						 }
					 },
					 sitefee: {
						 validators: {
							notEmpty: {
								message: '场地费不符合格式要求'
							}
						 }
					 },
					 password: {
						 validators: {
							notEmpty: {
								message: '密码不符合格式要求'
							}
						 }
					 },
					 business_man: {
						 validators: {
							notEmpty: {
								message: '业务员不符合格式要求'
							}
						 }
					 },
					 business_bonus: {
						 validators: {
							notEmpty: {
								message: '业务员佣金百分比(填入百分比，如10)不符合格式要求'
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
					url: edit?SITE_URL+"adminpanel/customer/edit/"+id:SITE_URL+"adminpanel/customer/add/",
					data:  $("#validateform").serialize(),
					success:function(response){
						var dataObj=jQuery.parseJSON(response);
						if(dataObj.status)
						{
							$.scojs_message('操作成功,3秒后将返回列表页...', $.scojs_message.TYPE_OK);
							aci.GoUrl(SITE_URL+'adminpanel/customer/',1);
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
