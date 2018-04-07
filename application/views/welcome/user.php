<?php $this->load->view('public/header.php') ?>


<body style="max-width:640px;">
    <div id="pjax-container" style="padding-bottom: 60px">
        <style type="text/css">
        .jian-top {
            margin-top: 0rem;
        }
        </style>
        <div class="con m-b7">
            <div class="my-admin-header-box">
                <div class="admin-bg-box">
                    <div class="my-user-box com-header">
                        <div class="padding-all dis-box">
                            <div class="user-head-img-box">
                                <!-- <a href="javascript: void(0)"><img src="http://qingful.com/public/uploads/2017-02-19/90b085e0-f6b5-11e6-9a92-e1d58c740d7f.jpg"></a> -->
                            </div>
                            <!--<div class="user-bg-box"><img src="img/head-bg.png"></div>-->
                            <!--<div class="user-bg2-box"><img src="img/head-bg.png"></div>-->
                            <div class="box-flex">
                                <div class="g-s-i-title-a">
                                    <a href="javascript:;">
                                        <h4 class="ellipsis-one user-admin-size"><?php echo $user['telephone'];  ?></h4></a>
       <!--                              <a href="javascript:;">
                                        <p class="user-reg-top color-whie f-03">您的等级是 基础会员 </p>
                                    </a> -->
                                </div>
                            </div>
                           <!--  <div class="user-right-maxbox">
                                <a href="<?=base_url('welcome/user_info')?>">
                                    <div class="user-right-box">
                                        <i class="iconfont icon-shezhi is-shezi my-user-right-cont" style="display:block;"></i>
                                        <p class="my-user-right-cont"><span class="my-t-remark color-whie" style="line-height: 26px;">设置</span></p>
                                    </div>
                                </a>
                            </div> -->
                        </div>
                    </div>
                </div>
                <!-- <div class="my-nav-box my-shoucang-bg">
                    <div class="user-nav-box n-g-s-i-title-1 dis-box text-center">
                        <a href="/app/user/wallet" class="box-flex">
                            <h4 class="color-whie ellipsis-one">38.53</h4>
                            <p class="color-whie t-remark3">余额</p>
                        </a>
                        <a href="javascript:void(0)" class="box-flex">
                            <h4 class="color-whie ellipsis-one">55</h4>
                            <p class="color-whie t-remark3">积分</p>
                        </a>
                        <a href="/app/user/collection" class="box-flex">
                            <h4 class="color-whie ellipsis-one">12</h4>
                            <p class="color-whie t-remark3">收藏</p>
                        </a>
                        <a href="/app/user/message" class="box-flex">
                            <h4 class="color-whie ellipsis-one">6</h4>
                            <p class="color-whie t-remark3">消息</p>
                        </a>
                    </div>
                </div> -->
            </div>
            <section class="b-color-f my-nav-box m-top10">
                <a href="<?=base_url('welcome/order')?>">
                    <div class="dis-box padding-all my-bottom">
                        <h3 class="box-flex text-all-span my-u-title-size">
                    <i class="iconfont icon-quanbudingdan is-user-size t-first"></i>我的订单
                </h3>
                <div class="box-flex t-goods1 text-right onelist-hidden jian-top">全部订单</div>
                        <span class="t-jiantou"><i class="iconfont icon-jiantou tf-180 jian-top" style="bottom:0px;"></i></span>
                    </div>
                </a>

                <a href="<?=base_url('welcome/invite')?>">
                    <div class="dis-box padding-all my-bottom">
                        <h3 class="box-flex text-all-span my-u-title-size">
                        <i class="iconfont icon-shezhi is-user-size t-first"></i>邀请码
                    </div>
                </h3>
                    </a>


                <a href="<?=base_url('welcome/pocket')?>">
                    <div class="dis-box padding-all my-bottom">
                        <h3 class="box-flex text-all-span my-u-title-size">
                        <i class="iconfont icon-shezhi is-user-size t-first"></i>钱包
                    </div>
                </h3>
                </a>


                <a href="<?=base_url('welcome/user_info')?>">
                    <div class="dis-box padding-all my-bottom">
                        <h3 class="box-flex text-all-span my-u-title-size">
                    <i class="iconfont icon-shezhi is-user-size t-first"></i>设置
                </div>
                </h3>
                
                </a>

                <!-- <ul class="user-money-list g-s-i-title-2 dis-box text-center my-dingdan">
                    <a href="/app/order/index?pay_status=0&status=0" class="box-flex">
                        <li>
                            <h4 class="ellipsis-one"><i class="iconfont icon-daifukuan my-img-size"></i></h4>
                            <p class="t-remark3">待付款</p>
                            <div class="user-list-num">42</div>
                        </li>
                    </a>
                    <a href="/app/order/index?status=1" class="box-flex">
                        <li>
                            <h4 class="ellipsis-one"><i class="iconfont icon-daifahuo my-img-size"></i></h4>
                            <p class="t-remark3">待收货</p>
                            <div class="user-list-num">3</div>
                        </li>
                    </a>
                    <a href="/app/order/index?status=2" class="box-flex">
                        <li>
                            <h4 class="ellipsis-one"><i class="iconfont icon-daipingjia my-img-size"></i></h4>
                            <p class="t-remark3">待评价</p>
                            <div class="user-list-num">6</div>
                        </li>
                    </a>
                    <a href="/app/order/index?status=-2" class="box-flex">
                        <li>
                            <h4 class="ellipsis-one"><i class="iconfont icon-p-return my-img-size"></i></h4>
                            <p class="t-remark3">退/换货</p>
                        </li>
                    </a>
                </ul> -->
            </section>


        </div>
        <script type="text/javascript">
        $(function() {
            var swiper = new Swiper('.swiper-container-horizontal', {
                slidesPerView: 3,
                paginationClickable: true,
                spaceBetween: 10
            });
        })
        </script>
    </div>
    <div class="search-div ts-3">

        
        <footer class="close-search j-close-search" onclick="searchClose()">
            点击关闭
        </footer>
    </div>
<?php $this->load->view('public/footer.php') ?>
