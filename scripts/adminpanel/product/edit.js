	function uploadOneFile(inputId,w,h,iscallback){
		if(!w) w=screen.width-4;
		if(!h) h=screen.height-95;
		if(!iscallback)iscallback=0;
		var window_url = SITE_URL+'adminpanel//product/upload/';
		$.extDialogFrame(window_url+'1/image/'+inputId+'/'+iscallback,{model:true,width:w,height:h,title:'请上传...',buttons:null});
	}
	function getImage(v,s,w,h){
		$("#image").val(v);
		$("#image_SRC").attr("src",SITE_URL+"images/"+v);
		$("#dialog" ).dialog();$("#dialog" ).dialog("close");
	}


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


		$("#category").on("change",function(e) {  
			$("#series").empty();
	        if($("#category").val()=='冷饮'){
	        	$("#series").append('<option value="杯装">杯装</option>');   
	        	$("#series").append('<option value="盒装">盒装</option>');   
	        	$("#series").append('<option value="棒装">棒装</option>');   
	        	$("#series").append('<option value="甜筒">甜筒</option>');   
	        	$("#series").append('<option value="组合装">组合装</option>');   
	        }
	        if($("#category").val() == '速冻'){
	        	$("#series").append('<option value="面点">面点</option>');   
	        	$("#series").append('<option value="水饺">水饺</option>');   
	        	$("#series").append('<option value="汤圆">汤圆</option>');   
	        	$("#series").append('<option value="火锅料">火锅料</option>');   
	        	$("#series").append('<option value="肉类">肉类</option>');   
	        	$("#series").append('<option value="其他">其他</option>');   
	        }
	    }); 


		$("#image_a").click(function(){
			uploadOneFile('image',550,350,1)
		});
		$("#image_b").click(function(){
			uploadOneFile('image',550,350,1)
		});
            $('#validateform').bootstrapValidator({
				message: '输入框不能为空',
				feedbackIcons: {
					valid: 'glyphicon glyphicon-ok',
					invalid: 'glyphicon glyphicon-remove',
					validating: 'glyphicon glyphicon-refresh'
				},
				fields: {
					 name: {
						 validators: {
							notEmpty: {
								message: '产品名称不符合格式要求'
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
					url: is_edit?SITE_URL+"adminpanel/product/edit/"+id:SITE_URL+"adminpanel/product/add/"+vendor_id,
					data:  $("#validateform").serialize(),
					success:function(response){
						var dataObj=jQuery.parseJSON(response);
						if(dataObj.status)
						{
							if(is_edit){
								$.scojs_message('操作成功', $.scojs_message.TYPE_OK);
								aci.GoUrl(SITE_URL+'adminpanel/vendor/readonly/' + vendor_id,1);
							}else{
								$.scojs_message('操作成功,2秒后可继续添加', $.scojs_message.TYPE_OK);
								setTimeout(function(){
								      location.reload();
								},2000);
							}
							
							
							// aci.GoUrl(SITE_URL+'adminpanel/vendor/',1);
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
