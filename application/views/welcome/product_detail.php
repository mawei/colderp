<?php $this->load->view('public/header.php') ?>


<body style="max-width:640px;">
    <div id="pjax-container" style="padding-bottom: 60px">
        <div class="con">
            <div class="goods" style="margin-bottom: 0rem;">
                <div class="ect-bg">
                    <span id="top"></span>
                    <header class="dis-box header-menu-1 b-color color-whie goods-fixed ts-3">
                        <a class="" href="javascript:history.go(-1)">
                            <div class="goods-left-jiat"><i class="iconfont icon-jiantou is-con"></i></div>
                        </a>
                        <div class="box-flex">
                            <ul class="dis-box goods-header-nav-box">
                                <li class="box-flex">
                                    <a class="hover">
                                        <label>商品</label>
                                    </a>
                                </li>
                                <li class="box-flex">
                                    <a>
                                        <label>详情</label>
                                    </a>
                                </li>
                                <li class="box-flex">
                                    <a>
                                        <label>评价</label>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <a class="" href="javascript:;">
                            <div class="goods-left-jiat"><i class="iconfont icon-gengduo j-nav-box is-con"></i></div>
                        </a>
                        <div class="goods-nav ts-3">
                            <ul class="goods-nav-box">
                                <a href="index.html">
                                    <li><i class="iconfont icon-home j-nav-box"></i>首页</li>
                                </a>
                                <a href="/app/user/message">
                                    <li><i class="iconfont icon-xiaoxi1 j-nav-box"></i>消息</li>
                                </a>
                                <a href="user.html">
                                    <li><i class="iconfont icon-geren j-nav-box"></i>用户中心</li>
                                </a>
                                <a href="/app/order/index">
                                    <li style="border:none"><i class="iconfont icon-quanbudingdan j-nav-box"></i>全部订单</li>
                                </a>
                            </ul>
                        </div>
                    </header>
                </div>
                <div id="j-tab-con" class="goods-photo n-j-show-goods-img swiper-container banner-first swiper-container-horizontal">
                    <!--<span class="goods-num" id="goods-num"><span id="g-active-num">1</span>/<span id="g-all-num">0</span></span> -->
                    <ul class="swiper-wrapper">
                        <li class="swiper-slide" style="width: 100%;height: 96vw;">
                            <div class="of-hidden" id="img-photo-box" style="width: 100%; height: 100%; background-image: url('http://qingful.com/public/uploads/2017-01-11/0c6ef3f0-d7d6-11e6-b4ee-4d604fc4e35b.jpg');background-size:100% 100%">
                            </div>
                        </li>
                    </ul>
                    <div class="swiper-pagination"></div>
                </div>
                <div class="goods-info" style="margin-top:1.2rem;">
                    <section class="goods-title b-color-f padding-all ">
                        <div class="dis-box">
                            <h3 class="box-flex">掌微小银耳古田银耳干货白木耳雪耳新鲜银耳糯银耳特产无硫160克<br>
                        <p class="p-price"><span class="t-first" style="border:none;font-size:2.1rem;">￥0.01元</span></p>
                    </h3>
                            <span class="heart j-heart " onclick="collect(50)" id="ECS_COLLECT">
                        <i class="ts-2"></i><em class="ts-2">收藏</em>
                    </span>
                        </div>
                    </section>
                    <form method="post" name="ECS_FORMBUY" id="ECS_FORMBUY" onsubmit="return false;">
                        <section class="padding-all b-color-f goods-attr j-goods-attr j-show-div">
                            <div class="dis-box">
                                <label class="t-remark g-t-temark">已选</label>
                                <div class="box-flex t-goods1 ">请选择</div>
                                <span class="t-jiantou"><i class="iconfont icon-jiantou tf-180"></i></span>
                            </div>
                            <div class="mask-filter-div"></div>
                            <div class="show-goods-attr j-filter-show-div ts-3 b-color-1">
                                <section class="s-g-attr-title b-color-1  product-list-small">
                                    <div class="product-div">
                                        <img src="http://qingful.com/public/uploads/2017-01-11/0c6ef3f0-d7d6-11e6-b4ee-4d604fc4e35b.jpg" alt="掌微小银耳古田银耳干货白木耳雪耳新鲜银耳糯银耳特产无硫160克" class="product-list-img">
                                        <div class="product-text n-right-box">
                                            <div class="dis-box">
                                                <h4 class="box-flex">掌微小银耳古田银耳干货白木耳雪耳新鲜银耳糯银耳特产无硫160克</h4>
                                                <i class="iconfont icon-guanbi show-div-guanbi"></i>
                                            </div>
                                            <p>
                                                <span class="p-price t-first">￥</span>
                                                <span class="p-price t-first" id="ECS_GOODS_AMOUNT">0.01</span>
                                                <span class="p-price t-first">元</span>
                                            </p>
                                        </div>
                                    </div>
                                </section>
                                <section class="s-g-attr-con swiper-scroll b-color-f padding-all m-top1px swiper-container-vertical swiper-container-free-mode">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide swiper-slide-active">
                                            <div class="input-group pull-left wrap div-num">
                                                <span class="input-group-addon" onclick="changePrice(1)">-</span>
                                                <input type="hidden" id="back_number24" value="1">
                                                <input type="number" class="form-num form-contro" name="number" id="goods_number" value="1" onchange="changePrice(0)">
                                                <span class="input-group-addon" onclick="changePrice(3)">+</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-scrollbar" style="display: none; opacity: 0;">
                                        <div class="swiper-scrollbar-drag" style="height: 0px;"></div>
                                    </div>
                                </section>
                                <section class="ect-button-more dis-box padding-all">
                                    <a class="btn-cart box-flex show-div-guanbi n-btn-box" type="button" onclick="addToCart(50);">加入购物车</a>
                                    <a class="btn-submit box-flex" type="button" onclick="addToCart_quick(50);">立即购买</a>
                                </section>
                            </div>
                        </section>
                    </form>
                    <section class="goods-evaluation">
                        <a href="/app/product/evaluate?id=50">
                            <div class="dis-box padding-all b-color-f  g-evaluation-title">
                                <label class="t-remark g-t-temark">用户评价</label>
                                <div class="box-flex t-goods1">好评率 <em class="t-first">0%</em></div>
                                <div class="t-goods1"><em class="t-first"></em><span class="t-jiantou">0人评论<i
                            class="iconfont icon-jiantou tf-180" style="bottom:0px;"></i></span></div>
                            </div>
                        </a>
                        <div class="m-top1px b-color-f g-evaluation-con">
                        </div>
                    </section>
                </div>
                <div class="mask-filter-div"></div>
                <div class="goods-scoll-bg"></div>
            </div>
            <div class="filter-btn dis-box">
                <a href="cart.html" class="filter-btn-flow filter-btn-a">
                    <i class="iconfont icon-gouwuche"></i>
                    <sup id="total_number" class="b-color">3</sup><em>购物车</em>
                </a>
                <a type="button" class="btn-cart box-flex n-iphone5-top1 j-goods-attr j-show-div">加入购物车</a>
                <a type="button" class="btn-submit box-flex n-iphone5-top1 j-goods-attr j-show-div">立即购买</a>
            </div>
        </div>
        <div class="n-goods-bg"></div>
        <div class="con" style="padding-bottom: 20px;">
            <div id="n-goods" class="goods-info of-hidden ect-tab b-color-f j-goods-info j-ect-tab ts-3" style="margin-bottom: 6.4rem;margin-top:0.2rem;">
                <div class="hd j-tab-title tab-title b-color-f of-hidden">
                    <ul class="dis-box">
                        <li class="box-flex active" id="detail">商品描述</li>
                    </ul>
                </div>
                <div id="miaoshu" class="b-color-f m-top1px tab-con swiper-container-horizontal swiper-container-autoheight">
                    <div class="swiper-wrapper">
                        <section class="swiper-slide swiper-slide-active">
                            <p><img src="http://qingful.com/public/uploads/2017-01-11/2e98fc50-d7d6-11e6-b4ee-4d604fc4e35b.jpg" title="2e98fc50-d7d6-11e6-b4ee-4d604fc4e35b.jpg" /></p>
                            <p><img src="http://qingful.com/public/uploads/2017-01-11/2eae0af0-d7d6-11e6-b4ee-4d604fc4e35b.jpg" title="2eae0af0-d7d6-11e6-b4ee-4d604fc4e35b.jpg" /></p>
                            <p><img src="http://qingful.com/public/uploads/2017-01-11/2eb07bf0-d7d6-11e6-b4ee-4d604fc4e35b.jpg" title="2eb07bf0-d7d6-11e6-b4ee-4d604fc4e35b.jpg" /></p>
                            <p><img src="http://qingful.com/public/uploads/2017-01-11/2ebf9720-d7d6-11e6-b4ee-4d604fc4e35b.jpg" title="2ebf9720-d7d6-11e6-b4ee-4d604fc4e35b.jpg" /></p>
                            <p><img src="http://qingful.com/public/uploads/2017-01-11/2ec3b5d0-d7d6-11e6-b4ee-4d604fc4e35b.jpg" title="2ec3b5d0-d7d6-11e6-b4ee-4d604fc4e35b.jpg" /></p>
                            <p><img src="http://qingful.com/public/uploads/2017-01-11/2ec93410-d7d6-11e6-b4ee-4d604fc4e35b.jpg" title="2ec93410-d7d6-11e6-b4ee-4d604fc4e35b.jpg" /></p>
                            <p><img src="http://qingful.com/public/uploads/2017-01-11/2ecbcc20-d7d6-11e6-b4ee-4d604fc4e35b.jpg" title="2ecbcc20-d7d6-11e6-b4ee-4d604fc4e35b.jpg" /></p>
                            <p><img src="http://qingful.com/public/uploads/2017-01-11/2ed7da10-d7d6-11e6-b4ee-4d604fc4e35b.jpg" title="2ed7da10-d7d6-11e6-b4ee-4d604fc4e35b.jpg" /></p>
                            <p><img src="http://qingful.com/public/uploads/2017-01-11/2ee9b460-d7d6-11e6-b4ee-4d604fc4e35b.jpg" title="2ee9b460-d7d6-11e6-b4ee-4d604fc4e35b.jpg" /></p>
                            <p>
                                <br/>
                            </p>
                        </section>
                    </div>
                </div>
                <div id="canshu" class="b-color-f m-top1px tab-con swiper-container-horizontal swiper-container-autoheight" style="display: none;">
                    <div class="swiper-wrapper">
                        <section class="swiper-slide swiper-slide-active">
                            <div class="padding-all">
                                <div class="no-div-message">
                                    <i class="iconfont icon-biaoqingleiben"></i>
                                    <p>亲，没有参数内容～！</p>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
        function back_goods_number() {
            var goods_number = document.getElementById('goods_number').value;
            document.getElementById('back_number').value = goods_number;
        }
        /**
         * 点选可选属性或改变数量时修改商品价格的函数
         */
        function changePrice(type) {
            var qty = document.forms['ECS_FORMBUY'].elements['number'].value;
            var sgp = 0.01;
            var is_dou = qty.split('.');
            if (is_dou.length > 1) {
                qty = is_dou[0] || 1;
            }

            if (type == 1) {
                qty--;
            }
            if (type == 3) {
                qty++;
            }
            if (qty <= 0) {
                qty = 1;
            }
            if (!/^[0-9]*$/.test(qty)) {
                qty = document.getElementById('back_number').value;
            }
            document.getElementById('goods_number').value = qty;
            document.getElementById('ECS_GOODS_AMOUNT').innerHTML = (sgp * 100 * qty) / 100;
            var attr = getSelectedAttributes(document.forms['ECS_FORMBUY']);
        }

        $(function($) {

            // var handler = function(e) { //禁止浏览器默认行为
            //     e.preventDefault();
            // };

            /*弹出层方式*/
            $(".j-show-div").click(function() {
                // document.addEventListener("touchmove", handler, false);
                $(".j-filter-show-div").addClass("show");
                $(".mask-filter-div").addClass("show");
            });
            /*关闭弹出层*/
            $(".mask-filter-div,.show-div-guanbi").click(function() {
                // document.removeEventListener("touchmove", handler, false);
                $(".j-filter-show-div").removeClass("show");
                $(".mask-filter-div").removeClass("show");
                return false;
            });
            var swiper = new Swiper('#j-tab-con', {
                pagination: '.swiper-pagination',
                paginationClickable: true
            });
            $(".j-tab-title li").on('touchstart mousedown', function(e) {
                e.preventDefault()
                $(".j-tab-title .active").removeClass('active')
                $(this).addClass('active')
                if (e.currentTarget.id == 'property') {
                    $('#canshu')[0].style.display = 'block';
                    $('#miaoshu')[0].style.display = 'none';
                } else {
                    $('#canshu')[0].style.display = 'none';
                    $('#miaoshu')[0].style.display = 'block';
                }
            })

            /*头部导航*/
            $(".j-nav-box").click(function() {
                $(".j-nav-content").toggleClass("active");
            });

            /*导航弹框*/
            $(".icon-gengduo").click(function() {
                $(".goods-nav").toggleClass("active");
            });

            $('.goods-header-nav-box li').click(function() {
                for (var i = 0; i < $('.goods-header-nav-box li').size(); i++) {
                    if (this == $('.goods-header-nav-box li').get(i)) {
                        $('.goods-header-nav-box li').eq(i).children('a').addClass('hover');
                    } else {
                        $('.goods-header-nav-box li').eq(i).children('a').removeClass('hover');
                    }
                }
            })
        });
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
