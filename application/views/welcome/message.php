<?php $this->load->view('public/header.php') ?>


<body style="max-width:640px;">
    <div id="pjax-container" style="padding-bottom: 60px">
        <header class="dis-box header-menu b-color color-whie">
            <a class="" href="javascript:history.go(-1)">
                <i class="iconfont icon-jiantou icon-write" style="color: white;"></i>
            </a>
            <h3 class="box-flex">消息中心</h3>
            <!-- <p><i class="iconfont icon-pailie j-nav-box"></i></p> -->
        </header>
        <div class="user-account-detail">
            <ul>
                <li class="single_item">
                    <div class="dis-box new-msg-title" style="margin-bottom:10px;">
                        <div class="box-flex">
                            <h4>1111:</h4>
                            <span>2017-01-09 10:47:12</span>
                        </div>
                    </div>
                    <span>1111</span>
                </li>
                <li class="single_item">
                    <div class="dis-box new-msg-title" style="margin-bottom:10px;">
                        <div class="box-flex">
                            <h4>1:</h4>
                            <span>2017-01-07 15:30:14</span>
                        </div>
                    </div>
                    <span>1</span>
                </li>
                <li class="single_item">
                    <div class="dis-box new-msg-title" style="margin-bottom:10px;">
                        <div class="box-flex">
                            <h4>elm:</h4>
                            <span>2017-01-06 14:53:18</span>
                        </div>
                    </div>
                    <span>123456</span>
                </li>
                <li class="single_item">
                    <div class="dis-box new-msg-title" style="margin-bottom:10px;">
                        <div class="box-flex">
                            <h4>1:</h4>
                            <span>2017-01-05 19:30:40</span>
                        </div>
                    </div>
                    <span>1</span>
                </li>
                <li class="single_item">
                    <div class="dis-box new-msg-title" style="margin-bottom:10px;">
                        <div class="box-flex">
                            <h4>111:</h4>
                            <span>2016-12-27 01:53:11</span>
                        </div>
                    </div>
                    <span>1111</span>
                </li>
                <li class="single_item">
                    <div class="dis-box new-msg-title" style="margin-bottom:10px;">
                        <div class="box-flex">
                            <h4>welcome:</h4>
                            <span>2016-12-26 07:50:53</span>
                        </div>
                    </div>
                    <span>huanyinglaidaoyingxionglianmeng</span>
                </li>
            </ul>
        </div>
        <section class="padding-all">
            <ul class="dis-box">
                <li class="n-page-but">
                    <a href="/app/user/message?page=1">
                        <div class="page-but">上一页</div>
                    </a>
                </li>
                <li class="box-flex">
                    <div class="page-num">
                        <select name="sel_question" onchange="window.location.href=this.value;">
                            <option value="/app/user/message?page=1">1/1
                            </option>
                        </select>
                    </div>
                </li>
                <li class="n-page-but">
                    <a href="/app/user/message?page=1">
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
