	define(function (require) {
	    var $ = require('jquery');
	    var aci = require('aci');
	    require('bootstrap');
	    require('bootstrapValidator');

		$(function () {
			$("#vendor_id").on("change",function(e) {  
	        var vendor_id = $("#vendor_id").val();  
	        $("#brand").empty();  
	        // $("#brand").append('<option value="">请选择</option>');  
	        var url = SITE_URL + "adminpanel/purchase/get_options/vendor_id/brand/" + vendor_id;  
	        $.ajax({  
	           url: url,  
	           type: "get",  
	           datatype:"json",  
	           contentType: "application/json; charset=utf-8",   
	           success : function(data, status){  
	               if(status == "success"){ 
	               	   var dataObj = eval("("+data+")");
	                   $.each(dataObj,function(i,item){  
	                       $("#brand").append(" <option value='" + item + "'>" + item + "</option>");  
	                   });  
	               }  
	           },  
	            error : function() {    
	                 alert("error");  
	           }  
	        });  
	        $("#series").empty();  
	        $("#series").append('<option value="">请选择</option>');  

	        var url = SITE_URL + "adminpanel/purchase/get_options/vendor_id/series/" + vendor_id;  
	        $.ajax({  
	           url: url,  
	           type: "get",  
	           datatype:"json",  
	           contentType: "application/json; charset=utf-8",   
	           success : function(data, status){  
	               if(status == "success"){ 
	               	   var dataObj = eval("("+data+")");
	                   $.each(dataObj,function(i,item){  
	                       $("#series").append(" <option value='" + item + "'>" + item + "</option>");  
	                   });  
	               }  
	           },  
	            error : function() {    
	                 alert("error");  
	           }  
	        }); 
	    }); 

		$("#brand").on("change",function(e) {  
	        var brand = $("#brand").val();  
	        $("#series").empty();  
	        $("#series").append('<option value="">请选择</option>');  
	        var url = SITE_URL + "adminpanel/purchase/get_options/brand/series/" + brand;  
	        $.ajax({  
	           url: url,  
	           type: "get",  
	           datatype:"json",  
	           contentType: "application/json; charset=utf-8",   
	           success : function(data, status){  
	               if(status == "success"){ 
	               	   var dataObj = eval("("+data+")");
	                   $.each(dataObj,function(i,item){  
	                       $("#series").append(" <option value='" + item + "'>" + item + "</option>");  
	                   });  
	               }  
	           },  
	            error : function() {    
	                 alert("error");  
	           }  
	        });  
	    }); 

		$("#series").on("change",function(e) {  
	        var series = $("#series").val();  
	        $("#product_id").empty();  
	        $("#product_id").append('<option value="">请选择</option>');  
	        var url = SITE_URL + "adminpanel/purchase/get_options/series/product_id/" + series;  

	        $.ajax({  
	           url: url,  
	           type: "get",  
	           datatype:"json",  
	           contentType: "application/json; charset=utf-8",   
	           success : function(data, status){  
	               if(status == "success"){ 
	               	   var dataObj = eval("("+data+")");
	               	   // alert(dataObj);
	                   $.each(dataObj,function(i,item){  
	                       $("#product_id").append(" <option value='" + i + "'>" + item + "</option>");  
	                   });  
	               }  
	           },  
	            error : function() {    
	                 alert("error");  
	           }  
	        });  
	    }); 


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
					window.location.href= SITE_URL+ "adminpanel/purchase/delete_one/"+v;
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
					 product_id: {
						 validators: {
							notEmpty: {
								message: '产品不符合格式要求'
							}
						 }
					 },
					 
				}
			}).on('success.form.bv', function(e) {
				
				e.preventDefault();
				$("#dosubmit").attr("disabled","disabled");
				
				// $.scojs_message("正在保存，请稍等...", $.scojs_message.TYPE_ERROR);
				$.ajax({
					type: "POST",
					url: SITE_URL+"adminpanel/purchase/add/",
					data:  $("#validateform").serialize(),
					success:function(response){
						var dataObj=jQuery.parseJSON(response);
						if(dataObj.status)
						{
							alert("添加成功");
							// $.scojs_message('操作成功,3秒后将返回列表页...', $.scojs_message.TYPE_OK);
							aci.GoUrl(SITE_URL+'adminpanel/purchase/',1);
						}else
						{
							// $.scojs_message(dataObj.tips, $.scojs_message.TYPE_ERROR);
							$("#dosubmit").removeAttr("disabled");
						}
					},
					error: function (request, status, error) {
						// $.scojs_message(request.responseText, $.scojs_message.TYPE_ERROR);
						$("#dosubmit").removeAttr("disabled");
					}                  
				});
			
			}).on('error.form.bv',function(e){ $.scojs_message('带*号不能为空', $.scojs_message.TYPE_ERROR);$("#dosubmit").removeAttr("disabled");});
            
        });
});
