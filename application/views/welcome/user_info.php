<?php $this->load->view('public/header.php') ?>

<body style="max-width:640px;">
    <div id="pjax-container" style="padding-bottom: 60px">
        <header class="dis-box header-menu b-color color-whie">
            <a class="" href="javascript:history.go(-1)">
                <i class="iconfont icon-jiantou icon-write" style="color: white;"></i>
            </a>
            <h3 class="box-flex">个人资料</h3>
        </header>
        <form id="formEdit" name="formEdit" onsubmit="return editUser()">
            <section class="flow-consignee ect-bg-colorf s-user-top onclik-admin">
                <ul>
                    <li class="dis-box s-xian-box s-user-top-1">
                        <h3 class="profile-left-name text-all-span my-u-title-size">用户名：</h3>
                        <div class="box-flex t-goods1  onelist-hidden">
                            <input type="text" readonly="readonly" value="<?php echo $customer['name'];  ?>">
                        </div>
                    </li>
                    <li class="dis-box s-xian-box s-user-top-1">
                        <h3 class="profile-left-name text-all-span my-u-title-size">手机号：</h3>
                        <div class="box-flex t-goods1 onelist-hidden ">
                            <input type="text" readonly="readonly" name="phone" placeholder="" value="<?php echo $customer['telephone'];  ?>" required>
                        </div>
                    </li>
                </ul>
            </section>
            <!--<div class=" ect-padding-tb padding-all">-->
            <!--<button type="submit" class="btn-submit">确认修改</button>-->
            <!--</div>-->
        </form>
        <section class="b-color-f my-nav-box m-top10">
<!--             <a href="/app/user/modifypassword">
                <div class="s-user-top">
                    <div class="dis-box s-xian-box s-user-top-1">
                        <h3 class="box-flex text-all-span my-u-title-size">修改密码</h3>
                        <span class="t-jiantou"><i class="iconfont icon-jiantou tf-180 jian-top"></i></span>
                    </div>
                </div>
            </a> -->
            <a href="<?=base_url('welcome/address')?>">
                <div class="s-user-top">
                    <div class="dis-box s-xian-box s-user-top-1">
                        <h3 class="box-flex text-all-span my-u-title-size">收货地址</h3>
                        <span class="t-jiantou"><i class="iconfont icon-jiantou tf-180 jian-top"></i></span>
                    </div>
                </div>
            </a>
            <a href="<?=base_url('welcome/logout')?>">
                <div class="s-user-top">
                    <div class="dis-box s-user-top-1">
                        <h3 class="box-flex text-all-span my-u-title-size">退出</h3>
                        <span class="t-jiantou"><i class="iconfont icon-jiantou tf-180 jian-top"></i></span>
                    </div>
                </div>
            </a>
        </section>
        <script type="text/javascript">
        // function editUser() {
        //     $.post('/app/user/personaldata', {
        //         phone: $("input[name='phone']").val()
        //     }, function() {
        //         alert('修改成功');
        //     });
        // }

        //ajax提交form表单的方式
        function editUser() {
            var AjaxURL = "/app/user/personaldata";
            $.ajax({
                type: "POST",
                url: AjaxURL,
                data: $('#formEdit').serialize(),
                success: function(data) {
                    alert('修改成功');
                },
                error: function(data) {
                    alert("error:" + data.responseText);
                }
            });
            return false;
        };
        </script>
    </div>
    
<?php $this->load->view('public/footer.php') ?>
