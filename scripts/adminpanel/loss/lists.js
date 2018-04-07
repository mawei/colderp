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
					window.location.href= SITE_URL+ "adminpanel/loss/delete_one/"+v;
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
					 order_number: {
						 validators: {
							notEmpty: {
								message: '入库单号不符合格式要求'
							}
						 }
					 },
					 brand: {
						 validators: {
							notEmpty: {
								message: '品牌不符合格式要求'
							}
						 }
					 },
					 series: {
						 validators: {
							notEmpty: {
								message: '系列不符合格式要求'
							}
						 }
					 },
					 name: {
						 validators: {
							notEmpty: {
								message: '商品名称不符合格式要求'
							}
						 }
					 },
					 code: {
						 validators: {
							notEmpty: {
								message: '条码不符合格式要求'
							}
						 }
					 },
					 unit: {
						 validators: {
							notEmpty: {
								message: '单位不符合格式要求'
							}
						 }
					 },
					 number: {
						 validators: {
							notEmpty: {
								message: '数量不符合格式要求'
							}
						 }
					 },
					 model: {
						 validators: {
							notEmpty: {
								message: '规格型号不符合格式要求'
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
					url: edit?SITE_URL+"adminpanel/loss/edit/"+id:SITE_URL+"adminpanel/loss/add/",
					data:  $("#validateform").serialize(),
					success:function(response){
						var dataObj=jQuery.parseJSON(response);
						if(dataObj.status)
						{
							$.scojs_message('操作成功,3秒后将返回列表页...', $.scojs_message.TYPE_OK);
							aci.GoUrl(SITE_URL+'adminpanel/loss/',1);
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
