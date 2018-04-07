<?php $this->load->view('public/header.php') ?>


<body style="max-width:640px;">
    <div id="pjax-container" style="padding-bottom: 60px">
        <header class="dis-box header-menu b-color color-whie">
            <a class="" href="javascript:history.go(-1)">
                <i class="iconfont icon-jiantou icon-write" style="color: white;"></i>
            </a>
            <h3 class="box-flex">申请记录</h3>
        </header>
        <ul class="n-user-acc-log">
            <li class="dis-shop-list p-r padding-all m-top10 b-color-f  ">
                <div class="dis-box">
                    <div class="box-flex">
                        <h5 class="f-05 col-7">2017-02-13 11:05:52</h5>
                        <!---->
                        <h6 class="f-05 col-7  m-top04">余额提现</h6>
                        <!---->
                    </div>
                    <div class="box-flex">
                        <p class="f-04 color-red text-right">拒绝</p>
                        <h6 class="f-05 col-3 text-right m-top04">￥15.37元</h6>
                    </div>
                </div>
                <!--<p class="f-03 m-top02"><span class="col-7 f-05">管理员备注 : </span><span class="col-3">N/A</span></p>-->
                <p class="f-03 m-top04"><span class="col-7 f-05">提现帐号 : </span><span class="col-3">5555555555555</span></p>
                <!--        -->
                <!--    <p class="f-03 m-top04"><span class="col-7 f-05">提现帐号 : </span><span class="col-3">5555555555555</span></p>-->
                <!--    <div class="n-but-box n-acc-log">-->
                <!--        -->
                <!--    </div>-->
                <!---->
            </li>
            <li class="dis-shop-list p-r padding-all m-top10 b-color-f  ">
                <div class="dis-box">
                    <div class="box-flex">
                        <h5 class="f-05 col-7">2017-01-17 17:48:26</h5>
                        <!---->
                        <h6 class="f-05 col-7  m-top04">余额提现</h6>
                        <!---->
                    </div>
                    <div class="box-flex">
                        <p class="f-04 color-red text-right">通过</p>
                        <h6 class="f-05 col-3 text-right m-top04">￥98.85元</h6>
                    </div>
                </div>
                <!--<p class="f-03 m-top02"><span class="col-7 f-05">管理员备注 : </span><span class="col-3">N/A</span></p>-->
                <p class="f-03 m-top04"><span class="col-7 f-05">提现帐号 : </span><span class="col-3">969969</span></p>
                <!--        -->
                <!--    <p class="f-03 m-top04"><span class="col-7 f-05">提现帐号 : </span><span class="col-3">969969</span></p>-->
                <!--    <div class="n-but-box n-acc-log">-->
                <!--        -->
                <!--    </div>-->
                <!---->
            </li>
            <li class="dis-shop-list p-r padding-all m-top10 b-color-f  ">
                <div class="dis-box">
                    <div class="box-flex">
                        <h5 class="f-05 col-7">2017-01-14 14:33:08</h5>
                        <!---->
                        <h6 class="f-05 col-7  m-top04">余额提现</h6>
                        <!---->
                    </div>
                    <div class="box-flex">
                        <p class="f-04 color-red text-right">拒绝</p>
                        <h6 class="f-05 col-3 text-right m-top04">￥98.85元</h6>
                    </div>
                </div>
                <!--<p class="f-03 m-top02"><span class="col-7 f-05">管理员备注 : </span><span class="col-3">N/A</span></p>-->
                <p class="f-03 m-top04"><span class="col-7 f-05">提现帐号 : </span><span class="col-3">1</span></p>
                <!--        -->
                <!--    <p class="f-03 m-top04"><span class="col-7 f-05">提现帐号 : </span><span class="col-3">1</span></p>-->
                <!--    <div class="n-but-box n-acc-log">-->
                <!--        -->
                <!--    </div>-->
                <!---->
            </li>
            <li class="dis-shop-list p-r padding-all m-top10 b-color-f  ">
                <div class="dis-box">
                    <div class="box-flex">
                        <h5 class="f-05 col-7">2017-01-13 14:18:16</h5>
                        <!---->
                        <h6 class="f-05 col-7  m-top04">余额提现</h6>
                        <!---->
                    </div>
                    <div class="box-flex">
                        <p class="f-04 color-red text-right">通过</p>
                        <h6 class="f-05 col-3 text-right m-top04">￥57.96元</h6>
                    </div>
                </div>
                <!--<p class="f-03 m-top02"><span class="col-7 f-05">管理员备注 : </span><span class="col-3">N/A</span></p>-->
                <p class="f-03 m-top04"><span class="col-7 f-05">提现帐号 : </span><span class="col-3">30</span></p>
                <!--        -->
                <!--    <p class="f-03 m-top04"><span class="col-7 f-05">提现帐号 : </span><span class="col-3">30</span></p>-->
                <!--    <div class="n-but-box n-acc-log">-->
                <!--        -->
                <!--    </div>-->
                <!---->
            </li>
        </ul>
        <section class="padding-all">
            <ul class="dis-box">
                <li class="n-page-but">
                    <a href="/app/user/apply?page=1">
                        <div class="page-but">上一页</div>
                    </a>
                </li>
                <li class="box-flex">
                    <div class="page-num">
                        <select name="sel_question" onchange="window.location.href=this.value;">
                            <option value="/app/user/apply?page=1">1/1
                            </option>
                        </select>
                    </div>
                </li>
                <li class="n-page-but">
                    <a href="/app/user/apply?page=1">
                        <div class="page-but">下一页</div>
                    </a>
                </li>
            </ul>
        </section>
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
