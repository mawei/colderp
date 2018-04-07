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
            <h3 class="box-flex">注册</h3>
            <p><a href="index.html"><i class="iconfont icon-home" style="color: white;"></i></i></a></p>
        </header>
        <div class="padding-all b-color-f">
            <form name="formLogin" action="<?=base_url('welcome/login')?>" method="post" class="validforms">
                <div class="ect-bg-colorf">
                    <section>
                        <ul class="register-list-box">
                            <li class="dis-box user-register-box">
                                <div class="box-flex reg-left-input">
                                    <input placeholder="请输入手机号" name="telephone" type="text" id="telephone" maxlength="20">
                                    <input name="invite_person" type="hidden" id="invite_person" value="<?php echo $invite_person;?>" maxlength="20">
                                </div>
                            </li>
                            <li class="dis-box user-register-box input-text item-password">
                                <input class="txt-password" type="password" name="password" id="password" autocomplete="off" placeholder="请输入密码">
                                <b class="tp-btn btn-off"></b>
                            </li>
                        </ul>
                    </section>
                </div>
                <!-- <p class="ect-checkbox ect-padding-tb ect-margin-tb ect-margin-bottom0">
            <input type="checkbox" value="1" name="remember" id="remember" class="l-checkbox">
            <label for="remember"><i></i></label>
        </p> -->
            <div class=" ect-padding-tb">
                <button type="button"  href="javascript:;" class="btn-submit" value="" id="regbtn">注册</button>
            </div>
            </form>
            <p class="text-right ect-margin-bottom0 n-login-x">
                <!-- <a href="<?=base_url('welcome/register')?>">忘记密码</a> -->
                <a href="<?=base_url('welcome/login')?>">登陆</a>
            </p>

        </div>
        <script type="text/javascript">
        // 注册登录页面密码样式开关
        $('.btn-off').on('click', function() {
            if ($(this).hasClass('btn-on')) {
                $(this).removeClass('btn-on');
                $(this).prev().attr('type', 'password');
            } else {
                $(this).addClass('btn-on');
                $(this).prev().attr('type', 'text');
            }
        });
        function verifyfrom(){
            return true;
        }
        var islogin = false;
        $('#regbtn').bind('click',function(){
            if(islogin) return false;
            if(verifyfrom()){
                var telephone = $('#telephone').val();
                var password = $('#password').val();
                var invite_person = $('#invite_person').val();

                islogin = true;
                var loginurl = "<?=base_url('welcome/register')?>";
                var postdata = {'telephone':telephone,'password':password,'invite_person':invite_person};
                $(this).val('Logining...');
                $.ajax({
                    url:loginurl,
                    dataType:'text',
                    type:'post',
                    data:postdata,
                    error:function(){
                        alert('网络错误,请检查网络是否正常');
                        $(this).val('Login');
                        islogin = false;
                    },
                    success:function(data){ 
                        if(data == 'success'){
                            $(this).val('注册成功，正在载入');
                            window.location.href = "<?=base_url('welcome/login')?>";
                        }else{
                            islogin = false;
                            alert(data);
                            $(this).val('Login');
                        }
                    }
                });
            }
            
        });

        $(function() {
            var err = '' || 'unset';
            if ('unset' != err) {
                alert('用户名或密码错误');
            }
        })

        function getQueryString(key) {
            let reg = new RegExp("(^|&)" + key + "=([^&]*)(&|$)");
            let result = window.location.search.substr(1).match(reg);
            return result ? decodeURIComponent(result[2]) : null;
        }
        </script>
    </div>

    <?php $this->load->view('public/footer.php') ?>
