<?php $this->load->view('public/header.php') ?>

<body style="max-width:640px;">
    <div id="pjax-container" style="padding-bottom: 60px">

        <body class="b-color-f">
            <header class="dis-box header-menu b-color color-whie">
                <a class="" href="javascript:history.go(-1)">
                    <i class="iconfont icon-jiantou icon-write" style="color: white;"></i>
                </a>
                <h3 class="box-flex">修改密码</h3>
            </header>
            <form name="formPassword" onsubmit="return editPassword()">
                <section class="user-center user-forget-tel margin-lr">
                    <div class="text-all dis-box j-text-all">
                        <div class="input-text input-check  box-flex">
                            <input class="j-input-text" style="padding: 2rem;" name="oldpass" type="password" placeholder="原密码">
                            <i class="iconfont icon-guanbi2 is-null j-is-null"></i>
                        </div>
                    </div>
                    <div class="text-all dis-box j-text-all">
                        <div class="input-text input-check  box-flex">
                            <input class="j-input-text" style="padding: 2rem;" name="newpass" type="password" placeholder="新密码">
                            <i class="iconfont icon-guanbi2 is-null j-is-null"></i>
                        </div>
                    </div>
                    <div class="text-all dis-box j-text-all">
                        <div class="input-text input-check  box-flex">
                            <input class="j-input-text" style="padding: 2rem;" name="comfirmpass" type="password" placeholder="确认密码">
                            <i class="iconfont icon-guanbi2 is-null j-is-null"></i>
                        </div>
                    </div>
                    <input name="act" type="hidden" value="edit_password">
                    <button type="submit" class="btn-submit">确认修改</button>
                </section>
            </form>
            <script type="text/javascript">
            /* 会员修改密码 */
            function editPassword() {
                var frm = document.forms['formPassword'];
                var old_password = frm.elements['oldpass'].value;
                var new_password = frm.elements['newpass'].value;
                var confirm_password = frm.elements['comfirmpass'].value;
                var msg = '';
                var reg = null;

                if (new_password != confirm_password) {
                    msg += '新密码输入不一致' + '\n';
                }

                if (msg != '') {
                    alert(msg);
                } else {
                    $.post('/app/user/modifypassword', {
                        oldpass: old_password,
                        newpass: new_password
                    }, function(res) {
                        alert(res.msg);
                        // if (res.code == 0) {
                        //  localhost.href = '/app/public/login';
                        // }
                        $.pjax({
                            url: '/app/public/login',
                            container: '#pjax-container'
                        });
                    });
                }

                return false;
            }
            </script>
    </div>
    <div class="search-div ts-3">
        <section class="search">
            <form name="formSrh" class="validforms" action="/app/product/index" method="get" onsubmit="searchClose()">
                <div class="text-all dis-box j-text-all">
                    <!--<a class="a-icon-back j-close-search" href="javascript:"><i-->
                    <!--        class="iconfont icon-jiantou is-left-font"></i></a>-->
                    <div class="box-flex input-text">
                        <input id="newinput" name="name" class="j-input-text" type="text" placeholder="请输入搜索关键词！" autofocus="autofocus" maxlength="10" required>
                        <i class="iconfont icon-guanbi2 is-null j-is-null"></i>
                    </div>
                    <button type="submit" class="btn-submit">搜索</button>
                </div>
            </form>
        </section>
        <section class="search-con">
            <div class="swiper-scroll history-search swiper-container-vertical swiper-container-free-mode">
                <div class="swiper-wrapper" style="transition-duration: 0ms;">
                    <div class="swiper-slide swiper-slide-active">
                        <p>
                            <label class="fl">热门搜索</label>
                        </p>
                        <ul class="hot-search a-text-more">
                            <li class="w-3">
                                <a href="/app/product/index?name=零食" onclick="searchClose()" style="border:1px solid #efefef;border-radius:4px;"><span>零食</span></a>
                            </li>
                            <li class="w-3">
                                <a href="/app/product/index?name=羊排" onclick="searchClose()" style="border:1px solid #efefef;border-radius:4px;"><span>羊排</span></a>
                            </li>
                            <li class="w-3">
                                <a href="/app/product/index?name=芒果" onclick="searchClose()" style="border:1px solid #efefef;border-radius:4px;"><span>芒果</span></a>
                            </li>
                            <li class="w-3">
                                <a href="/app/product/index?name=一动网" onclick="searchClose()" style="border:1px solid #efefef;border-radius:4px;"><span>一动网</span></a>
                            </li>
                        </ul>
                        <p class="hos-search">
                            <label class="fl">最近搜索</label>
                            <!--<span class="fr" onclick="javascript:clearHistroy();"><i-->
                            <!--class="iconfont icon-xiao10 is-xiao10 jian-top fr"></i></span>-->
                        </p>
                        <ul class="hot-search a-text-more a-text-one" id="search_histroy">
                            <li>
                                <a href="/app/product/index?name=羊排" onclick="searchClose()">
                                    <span>羊排</span>
                                </a>
                            </li>
                            <li>
                                <a href="/app/product/index?name=零食" onclick="searchClose()">
                                    <span>零食</span>
                                </a>
                            </li>
                            <li>
                                <a href="/app/product/index?name=85" onclick="searchClose()">
                                    <span>85</span>
                                </a>
                            </li>
                            <li>
                                <a href="/app/product/index?name=芒果" onclick="searchClose()">
                                    <span>芒果</span>
                                </a>
                            </li>
                            <li>
                                <a href="/app/product/index?name=零食" onclick="searchClose()">
                                    <span>零食</span>
                                </a>
                            </li>
                            <li>
                                <a href="/app/product/index?name=零食" onclick="searchClose()">
                                    <span>零食</span>
                                </a>
                            </li>
                            <li>
                                <a href="/app/product/index?name=零食" onclick="searchClose()">
                                    <span>零食</span>
                                </a>
                            </li>
                            <li>
                                <a href="/app/product/index?name=酸" onclick="searchClose()">
                                    <span>酸</span>
                                </a>
                            </li>
                            <li>
                                <a href="/app/product/index?name=零食" onclick="searchClose()">
                                    <span>零食</span>
                                </a>
                            </li>
                            <li>
                                <a href="/app/product/index?name=芒果" onclick="searchClose()">
                                    <span>芒果</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="swiper-scrollbar" style="opacity: 0; transition-duration: 400ms;">
                    <div class="swiper-scrollbar-drag" style="transition-duration: 0ms;"></div>
                </div>
            </div>
        </section>
        <footer class="close-search j-close-search" onclick="searchClose()">
            点击关闭
        </footer>
    </div>
 <?php $this->load->view('public/footer.php') ?>
