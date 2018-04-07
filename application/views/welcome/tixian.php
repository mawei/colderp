<?php $this->load->view('public/header.php') ?>


<body style="max-width:640px;">
    <div id="pjax-container" style="padding-bottom: 60px">
        <style type="text/css">
        .header-menu h3 {
            margin-right: 0px;
        }
        </style>
        <header class="dis-box header-menu b-color color-whie">
            <a class="" href="javascript:history.go(-1)">
                <i class="iconfont icon-jiantou" style="color: white;"></i></i>
            </a>
            <h3 class="box-flex">提现</h3>
            <p><a href="index.html"><i class="iconfont icon-home" style="color: white;"></i></i></a></p>
        </header>
        <div class="padding-all b-color-f">
            <form name="formLogin" action="<?=base_url('welcome/login')?>" method="post" class="validforms">
                <div class="ect-bg-colorf">
                    <section>
                        <ul class="register-list-box">
                            <li class="dis-box user-register-box">
                                <div class="box-flex reg-left-input">
                                    <input placeholder="请输入金额" name="amount" type="text" id="amount" maxlength="20">
                                </div>
                            </li>
                        </ul>
                    </section>
                </div>
                <!-- <p class="ect-checkbox ect-padding-tb ect-margin-tb ect-margin-bottom0">
            <input type="checkbox" value="1" name="remember" id="remember" class="l-checkbox">
            <label for="remember"><i></i></label>
        </p> -->
            <div class=" ect-padding-tb">
                <button type="button"  href="javascript:;" class="btn-submit" value="" id="regbtn">提现</button>
            </div>
            </form>

        </div>
        <script type="text/javascript">
        // 注册登录页面密码样式开关

        $('#regbtn').bind('click',function(){
                var amount = $('#amount').val();
                var loginurl = "<?=base_url('welcome/tixian')?>";
                var postdata = {'amount':amount};
                $.ajax({
                    url:loginurl,
                    dataType:'text',
                    type:'post',
                    data:postdata,
                    error:function(){
                        alert('网络错误,请检查网络是否正常');
                    },
                    success:function(data){ 
                        if(data == 'success'){
                            $(this).val('申请成功，正在载入');
                            window.location.href = "<?=base_url('welcome/pocket')?>";
                        }else{
                            alert(data);
                        }
                    }
                });
            
        });

        </script>
    </div>

    <?php $this->load->view('public/footer.php') ?>
