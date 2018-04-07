<?php $this->load->view('public/header.php') ?>

<body style="max-width:640px;">
    <div id="pjax-container" style="padding-bottom: 60px">
        <style type="text/css">
        .flow-consignee-list ul li {
            border-bottom: 0px;
        }
        </style>
        <div class="con">
            <header class="dis-box header-menu b-color color-whie">
                <a class="" href="javascript:history.go(-1)">
                    <i class="iconfont icon-jiantou icon-write" style="color: white;"></i>
                </a>
                <h3 class="box-flex">收货人信息</h3>
            </header>
            <section class="flow-consignee-list j-get-consignee-one select-three" id="J_ItemList">
                <ul>
                    <?php foreach ($address as $key=>$value): ?>
                    <li class="flow-checkout-adr m-top08 single_item ">
                        <div class="flow-set-adr of-hidden padding-all ">
                            <div class="ect-select fl">
<!--                                 <label class="dis-box active">
                                    <i class="select-btn"></i>
                                    <span class="box-flex">设为默认</span>
                                </label> -->
                                <p class="f-h-adr-title">
                                    <label><?php echo $value['name'];?></label><span class="ect-colory"><?php echo $value['telephone'];?></span></p>
                                <p class="f-h-adr-con t-remark m-top04"><?php echo $value['area'].' '.$value['address'];?></p>
                            </div>
                            <div class="fr">
<!--                                 <a href="/app/user/editconsignee?id=78">
                                    <i class="iconfont icon-bianji"></i>编辑
                                </a> -->
                                <a href="<?=base_url('welcome/delete_address?address_id=')?><?php echo $value['address_id'];?>">
                                    <i class="iconfont icon-xiao10"></i>删除
                                </a>
                            </div>
                        </div>
<!--                         <div class="flow-have-adr padding-all">
                            <p class="f-h-adr-title">
                                <label><?php echo $value['name'];?></label><span class="ect-colory"><?php echo $value['telephone'];?></span></p>
                            <p class="f-h-adr-con t-remark m-top04"><?php echo $value['area'].' '.$value['address'];?></p>
                        </div> -->
                    </li>
                    <?php endforeach ?>

                </ul>
            </section>
            <div class="filter-btn dis-box">
                <a href="<?=base_url('welcome/add_address')?>" type="button" class="btn-submit box-flex n-iphone5-top1 j-goods-attr j-show-div">新增收货地址</a>
            </div>
        </div>
        <script>
        //获取用户位置
        function getLocation() {
            var options = {
                enableHighAccuracy: true,
                maximumAge: 1000
            }
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(onSuccess, onError, options);
            } else {
                onError();
            }
        }
        //成功时
        function onSuccess(position) {
            //返回用户位置
            var longitude = position.coords.longitude; //经度
            var latitude = position.coords.latitude; //纬度
            $.post('/app/user/location', {
                lng: longitude,
                lat: latitude
            }, function(data) {
                if (data.error == 0) {
                    window.location.href = data.url;
                } else {
                    alert(data.message);
                }
            }, 'json');
        }
        //失败时
        function onError(error) {
            switch (error.code) {
                case 1:
                    alert("位置服务被拒绝");
                    break;
                case 2:
                    alert("暂时获取不到位置信息");
                    break;
                case 3:
                    alert("获取信息超时");
                    break;
                case 4:
                    alert("未知错误");
                    break;
                default:
                    break;
            }
        }

        // getLocation();
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

