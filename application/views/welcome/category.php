<?php $this->load->view('public/header.php') ?>

<body style="max-width:640px;">
    <div id="pjax-container" style="padding-bottom: 60px">
        <div class="con">
            <div>
                <header>
                    <section class="search">
                        <div class="text-all  text-all-back j-text-all">
                            <div class="input-text n-input-text i-search-input">
                                <a class="a-search-input j-search-input" href="javascript:void(0)" onclick="searchOpen()"></a>
                                <i class="iconfont icon-sousuo"></i>
                                <input type="text" placeholder="请输入您搜索的关键词!">
                                <i class="iconfont icon-guanbi is-null j-is-null"></i>
                            </div>
                        </div>
                    </section>
                </header>
            </div>
            <aside style="width: 25%;float: left;">
                <div class="menu-left scrollbar-none" id="sidebar">
                    <ul>
                        <li class="active">美食/生鲜</li>
                        <li>护肤美妆</li>
                        <li>图书乐器</li>
                        <li>鲜花/宠物</li>
                        <li>运动户外</li>
                        <li>珠宝/配饰</li>
                        <li>手机数码</li>
                        <li>鞋靴/箱包</li>
                        <li>洗发护理</li>
                    </ul>
                </div>
            </aside>
            <aside style="width: 75%;float: right;">
                <div class="menu-right scrollbar-none">
                    <section class="menu-right padding-all j-content">
                        <h5>美食/生鲜</h5>
                        <ul>
                            <li class="w-3">
                                <a href="/app/product/index?menu_id=7"></a>
                                <img src="http://qingful.com/public/uploads/2017-01-11/d05b2630-d7d1-11e6-b4ee-4d604fc4e35b.jpg"><span>茶水饮料</span></li>
                            <li class="w-3">
                                <a href="/app/product/index?menu_id=6"></a>
                                <img src="http://qingful.com/public/uploads/2017-01-09/1bdf6970-d621-11e6-a3c2-ed2563d4ff88.jpg"><span>新鲜水果</span></li>
                            <li class="w-3">
                                <a href="/app/product/index?menu_id=26"></a>
                                <img src="http://qingful.com/public/uploads/2017-01-09/cd4ded80-d621-11e6-a3c2-ed2563d4ff88.jpg"><span>生鲜果蔬</span></li>
                            <li class="w-3">
                                <a href="/app/product/index?menu_id=5"></a>
                                <img src="http://qingful.com/public/uploads/2017-01-09/9c9a5150-d622-11e6-a3c2-ed2563d4ff88.jpg"><span>速冻食品</span></li>
                            <li class="w-3">
                                <a href="/app/product/index?menu_id=63"></a>
                                <img src="http://qingful.com/public/uploads/2017-01-09/8f026fb0-d653-11e6-80c2-2d2ffc78dea5.jpg"><span>禽类蛋品</span></li>
                            <li class="w-3">
                                <a href="/app/product/index?menu_id=66"></a>
                                <img src="http://qingful.com/public/uploads/2017-01-09/d7817000-d654-11e6-b823-290206af3961.jpg"><span>海产干货</span></li>
                            <li class="w-3">
                                <a href="/app/product/index?menu_id=67"></a>
                                <img src="http://qingful.com/public/uploads/2017-01-11/41945410-d7d3-11e6-b4ee-4d604fc4e35b.jpg"><span>新鲜蔬菜</span></li>
                            <li class="w-3">
                                <a href="/app/product/index?menu_id=68"></a>
                                <img src="http://qingful.com/public/uploads/2017-01-09/68a9edf0-d655-11e6-9827-d7c8e1fea6c2.jpg"><span>面点食品</span></li>
                            <li class="w-3">
                                <a href="/app/product/index?menu_id=70"></a>
                                <img src="http://qingful.com/public/uploads/2017-01-11/f88bff80-d7d1-11e6-b4ee-4d604fc4e35b.jpg"><span>粮油干货</span></li>
                        </ul>
                    </section>
                    <section class="menu-right padding-all j-content" style="display: none">
                        <h5>护肤美妆</h5>
                        <ul>
                            <li class="w-3">
                                <a href="/app/product/index?menu_id=85"></a>
                                <img src="http://qingful.com/public/uploads/2017-01-09/ed7afd80-d65a-11e6-ae31-41d27887c2f9.jpg"><span>润手霜</span></li>
                            <li class="w-3">
                                <a href="/app/product/index?menu_id=59"></a>
                                <img src="http://qingful.com/public/uploads/2017-01-09/af988710-d652-11e6-80c2-2d2ffc78dea5.jpg"><span>润肤</span></li>
                            <li class="w-3">
                                <a href="/app/product/index?menu_id=22"></a>
                                <img src="http://qingful.com/public/uploads/2017-01-07/caee4fc0-d4ba-11e6-9267-9b063bb5f149.jpg"><span>美妆工具</span></li>
                            <li class="w-3">
                                <a href="/app/product/index?menu_id=83"></a>
                                <img src="http://qingful.com/public/uploads/2017-01-09/c8e85990-d65a-11e6-ae31-41d27887c2f9.jpg"><span>面膜</span></li>
                            <li class="w-3">
                                <a href="/app/product/index?menu_id=84"></a>
                                <img src="http://qingful.com/public/uploads/2017-01-09/d1a3ea40-d65a-11e6-ae31-41d27887c2f9.png"><span>爽肤水</span></li>
                            <li class="w-3">
                                <a href="/app/product/index?menu_id=17"></a>
                                <img src="http://qingful.com/public/uploads/2017-01-07/68ef7d30-d4ba-11e6-a27d-11271b0af9e6.jpg"><span>美妆护肤</span></li>
                            <li class="w-3">
                                <a href="/app/product/index?menu_id=61"></a>
                                <img src="http://qingful.com/public/uploads/2017-01-09/fa4ecf30-d652-11e6-80c2-2d2ffc78dea5.jpg"><span>美体工具</span></li>
                            <li class="w-3">
                                <a href="/app/product/index?menu_id=82"></a>
                                <img src="http://qingful.com/public/uploads/2017-01-09/b7e779a0-d65a-11e6-ae31-41d27887c2f9.jpg"><span>男士护理</span></li>
                            <li class="w-3">
                                <a href="/app/product/index?menu_id=58"></a>
                                <img src="http://qingful.com/public/uploads/2017-01-09/9ebfc890-d652-11e6-80c2-2d2ffc78dea5.jpg"><span>美甲</span></li>
                            <li class="w-3">
                                <a href="/app/product/index?menu_id=57"></a>
                                <img src="http://qingful.com/public/uploads/2017-01-09/916ef850-d652-11e6-80c2-2d2ffc78dea5.jpg"><span>彩妆</span></li>
                            <li class="w-3">
                                <a href="/app/product/index?menu_id=56"></a>
                                <img src="http://qingful.com/public/uploads/2017-01-09/882c3640-d652-11e6-80c2-2d2ffc78dea5.jpg"><span>香水</span></li>
                        </ul>
                    </section>
                    <section class="menu-right padding-all j-content" style="display: none">
                        <h5>图书乐器</h5>
                        <ul>
                            <li class="w-3">
                                <a href="/app/product/index?menu_id=101"></a>
                                <img src="http://qingful.com/public/uploads/2017-01-11/005a7210-d7c7-11e6-a0f3-11db77b1988a.jpg"><span>历史</span></li>
                            <li class="w-3">
                                <a href="/app/product/index?menu_id=100"></a>
                                <img src="http://qingful.com/public/uploads/2017-01-11/09334ec0-d7c7-11e6-a0f3-11db77b1988a.jpg"><span>当代文学</span></li>
                            <li class="w-3">
                                <a href="/app/product/index?menu_id=104"></a>
                                <img src="http://qingful.com/public/uploads/2017-01-11/e6600e10-d7c6-11e6-a0f3-11db77b1988a.jpg"><span>散文散笔</span></li>
                            <li class="w-3">
                                <a href="/app/product/index?menu_id=105"></a>
                                <img src="http://qingful.com/public/uploads/2017-01-11/dc0f1050-d7c6-11e6-a0f3-11db77b1988a.jpg"><span>传记</span></li>
                            <li class="w-3">
                                <a href="/app/product/index?menu_id=103"></a>
                                <img src="http://qingful.com/public/uploads/2017-01-11/ef99a860-d7c6-11e6-a0f3-11db77b1988a.jpg"><span>世界名著</span></li>
                        </ul>
                    </section>
                    <section class="menu-right padding-all j-content" style="display: none">
                        <h5>鲜花/宠物</h5>
                        <ul>
                            <li class="w-3">
                                <a href="/app/product/index?menu_id=108"></a>
                                <img src="http://qingful.com/public/uploads/2017-01-11/c2dd2c70-d7c6-11e6-a0f3-11db77b1988a.jpg"><span>宠物笼子</span></li>
                            <li class="w-3">
                                <a href="/app/product/index?menu_id=109"></a>
                                <img src="http://qingful.com/public/uploads/2017-01-11/bad81a80-d7c6-11e6-a0f3-11db77b1988a.jpg"><span>宠物玩具</span></li>
                            <li class="w-3">
                                <a href="/app/product/index?menu_id=107"></a>
                                <img src="http://qingful.com/public/uploads/2017-01-11/c9d00b10-d7c6-11e6-a0f3-11db77b1988a.jpg"><span>宠物服饰</span></li>
                            <li class="w-3">
                                <a href="/app/product/index?menu_id=111"></a>
                                <img src="http://qingful.com/public/uploads/2017-01-11/aa47d6b0-d7c6-11e6-a0f3-11db77b1988a.jpg"><span>狗狗</span></li>
                            <li class="w-3">
                                <a href="/app/product/index?menu_id=112"></a>
                                <img src="http://qingful.com/public/uploads/2017-01-11/a383a930-d7c6-11e6-a0f3-11db77b1988a.jpg"><span>狗狗零食</span></li>
                            <li class="w-3">
                                <a href="/app/product/index?menu_id=114"></a>
                                <img src="http://qingful.com/public/uploads/2017-01-11/9418ab80-d7c6-11e6-a0f3-11db77b1988a.jpg"><span>猫咪</span></li>
                            <li class="w-3">
                                <a href="/app/product/index?menu_id=115"></a>
                                <img src="http://qingful.com/public/uploads/2017-01-11/8bde7fd0-d7c6-11e6-a0f3-11db77b1988a.jpg"><span>猫咪零食</span></li>
                            <li class="w-3">
                                <a href="/app/product/index?menu_id=116"></a>
                                <img src="http://qingful.com/public/uploads/2017-01-11/83a11fd0-d7c6-11e6-a0f3-11db77b1988a.jpg"><span>猫咪主粮</span></li>
                            <li class="w-3">
                                <a href="/app/product/index?menu_id=110"></a>
                                <img src="http://qingful.com/public/uploads/2017-01-11/b2f55da0-d7c6-11e6-a0f3-11db77b1988a.jpg"><span>宠物窝垫</span></li>
                        </ul>
                    </section>
                    <section class="menu-right padding-all j-content" style="display: none">
                        <h5>运动户外</h5>
                        <ul>
                            <li class="w-3">
                                <a href="/app/product/index?menu_id=140"></a>
                                <img src="http://qingful.com/public/uploads/2017-01-11/0454a2c0-d7ca-11e6-a0f3-11db77b1988a.jpg"><span>篮球</span></li>
                            <li class="w-3">
                                <a href="/app/product/index?menu_id=139"></a>
                                <img src="http://qingful.com/public/uploads/2017-01-11/faf705b0-d7c9-11e6-a0f3-11db77b1988a.jpg"><span>动感单车</span></li>
                            <li class="w-3">
                                <a href="/app/product/index?menu_id=146"></a>
                                <img src="http://qingful.com/public/uploads/2017-01-11/42c6f6c0-d7ca-11e6-a0f3-11db77b1988a.jpg"><span>羽毛球拍</span></li>
                            <li class="w-3">
                                <a href="/app/product/index?menu_id=144"></a>
                                <img src="http://qingful.com/public/uploads/2017-01-11/3144d8e0-d7ca-11e6-a0f3-11db77b1988a.jpg"><span>踏步机</span></li>
                            <li class="w-3">
                                <a href="/app/product/index?menu_id=143"></a>
                                <img src="http://qingful.com/public/uploads/2017-01-11/274aadb0-d7ca-11e6-a0f3-11db77b1988a.jpg"><span>甩脂机</span></li>
                            <li class="w-3">
                                <a href="/app/product/index?menu_id=147"></a>
                                <img src="http://qingful.com/public/uploads/2017-01-11/4bd1b8e0-d7ca-11e6-a0f3-11db77b1988a.jpg"><span>指压板</span></li>
                            <li class="w-3">
                                <a href="/app/product/index?menu_id=142"></a>
                                <img src="http://qingful.com/public/uploads/2017-01-11/19c02fd0-d7ca-11e6-a0f3-11db77b1988a.jpg"><span>跑步机</span></li>
                            <li class="w-3">
                                <a href="/app/product/index?menu_id=131"></a>
                                <img src="http://qingful.com/public/uploads/2017-01-11/a364a820-d7c9-11e6-a0f3-11db77b1988a.jpg"><span>情侣运动装</span></li>
                            <li class="w-3">
                                <a href="/app/product/index?menu_id=138"></a>
                                <img src="http://qingful.com/public/uploads/2017-01-11/f09c9210-d7c9-11e6-a0f3-11db77b1988a.jpg"><span>长袖T恤</span></li>
                            <li class="w-3">
                                <a href="/app/product/index?menu_id=137"></a>
                                <img src="http://qingful.com/public/uploads/2017-01-11/e4706bb0-d7c9-11e6-a0f3-11db77b1988a.jpg"><span>运动长裤</span></li>
                            <li class="w-3">
                                <a href="/app/product/index?menu_id=136"></a>
                                <img src="http://qingful.com/public/uploads/2017-01-11/da849860-d7c9-11e6-a0f3-11db77b1988a.jpg"><span>运动套装</span></li>
                            <li class="w-3">
                                <a href="/app/product/index?menu_id=135"></a>
                                <img src="http://qingful.com/public/uploads/2017-01-11/cf9b0420-d7c9-11e6-a0f3-11db77b1988a.jpg"><span>运动夹克</span></li>
                            <li class="w-3">
                                <a href="/app/product/index?menu_id=132"></a>
                                <img src="http://qingful.com/public/uploads/2017-01-11/aef5ee10-d7c9-11e6-a0f3-11db77b1988a.jpg"><span>球服</span></li>
                            <li class="w-3">
                                <a href="/app/product/index?menu_id=133"></a>
                                <img src="http://qingful.com/public/uploads/2017-01-11/b7a6d060-d7c9-11e6-a0f3-11db77b1988a.jpg"><span>套头衫</span></li>
                            <li class="w-3">
                                <a href="/app/product/index?menu_id=134"></a>
                                <img src="http://qingful.com/public/uploads/2017-01-11/c255cca0-d7c9-11e6-a0f3-11db77b1988a.jpg"><span>运动短裤</span></li>
                        </ul>
                    </section>
                    <section class="menu-right padding-all j-content" style="display: none">
                        <h5>珠宝/配饰</h5>
                        <ul>
                            <li class="w-3">
                                <a href="/app/product/index?menu_id=154"></a>
                                <img src="http://qingful.com/public/uploads/2017-01-11/754ff260-d7cd-11e6-a70d-7b55e27c52c1.jpg"><span>六福珠宝</span></li>
                            <li class="w-3">
                                <a href="/app/product/index?menu_id=162"></a>
                                <img src="http://qingful.com/public/uploads/2017-01-11/c0fea440-d7cd-11e6-a70d-7b55e27c52c1.jpg"><span>佐卡伊</span></li>
                            <li class="w-3">
                                <a href="/app/product/index?menu_id=160"></a>
                                <img src="http://qingful.com/public/uploads/2017-01-11/afaa9b40-d7cd-11e6-a70d-7b55e27c52c1.jpg"><span>周大生</span></li>
                            <li class="w-3">
                                <a href="/app/product/index?menu_id=159"></a>
                                <img src="http://qingful.com/public/uploads/2017-01-11/a6c0cea0-d7cd-11e6-a70d-7b55e27c52c1.jpg"><span>周大福</span></li>
                            <li class="w-3">
                                <a href="/app/product/index?menu_id=158"></a>
                                <img src="http://qingful.com/public/uploads/2017-01-11/9afe3f80-d7cd-11e6-a70d-7b55e27c52c1.jpg"><span>中国黄金</span></li>
                            <li class="w-3">
                                <a href="/app/product/index?menu_id=161"></a>
                                <img src="http://qingful.com/public/uploads/2017-01-11/b8558a20-d7cd-11e6-a70d-7b55e27c52c1.jpg"><span>周生生</span></li>
                            <li class="w-3">
                                <a href="/app/product/index?menu_id=157"></a>
                                <img src="http://qingful.com/public/uploads/2017-01-11/929080b0-d7cd-11e6-a70d-7b55e27c52c1.jpg"><span>壹博千金</span></li>
                            <li class="w-3">
                                <a href="/app/product/index?menu_id=156"></a>
                                <img src="http://qingful.com/public/uploads/2017-01-11/890ac230-d7cd-11e6-a70d-7b55e27c52c1.jpg"><span>谢瑞麟</span></li>
                            <li class="w-3">
                                <a href="/app/product/index?menu_id=153"></a>
                                <img src="http://qingful.com/public/uploads/2017-01-11/4f01e2d0-d7cd-11e6-a70d-7b55e27c52c1.jpg"><span>京润珍珠</span></li>
                            <li class="w-3">
                                <a href="/app/product/index?menu_id=152"></a>
                                <img src="http://qingful.com/public/uploads/2017-01-11/4253e240-d7cd-11e6-a70d-7b55e27c52c1.jpg"><span>潮宏基</span></li>
                            <li class="w-3">
                                <a href="/app/product/index?menu_id=151"></a>
                                <img src="http://qingful.com/public/uploads/2017-01-11/359518d0-d7cd-11e6-a70d-7b55e27c52c1.jpg"><span>菜百首饰</span></li>
                            <li class="w-3">
                                <a href="/app/product/index?menu_id=148"></a>
                                <img src="http://qingful.com/public/uploads/2017-01-11/16d98340-d7cd-11e6-a70d-7b55e27c52c1.jpg"><span>Casio</span></li>
                            <li class="w-3">
                                <a href="/app/product/index?menu_id=150"></a>
                                <img src="http://qingful.com/public/uploads/2017-01-11/2c6e6a40-d7cd-11e6-a70d-7b55e27c52c1.jpg"><span>zippo</span></li>
                            <li class="w-3">
                                <a href="/app/product/index?menu_id=149"></a>
                                <img src="http://qingful.com/public/uploads/2017-01-11/217e6d60-d7cd-11e6-a70d-7b55e27c52c1.jpg"><span>cK</span></li>
                        </ul>
                    </section>
                    <section class="menu-right padding-all j-content" style="display: none">
                        <h5>手机数码</h5>
                        <ul>
                            <li class="w-3">
                                <a href="/app/product/index?menu_id=117"></a>
                                <img src="http://qingful.com/public/uploads/2017-01-11/29d336b0-d7b1-11e6-a0f3-11db77b1988a.jpg"><span>VIVO</span></li>
                            <li class="w-3">
                                <a href="/app/product/index?menu_id=120"></a>
                                <img src="http://qingful.com/public/uploads/2017-01-11/58184e70-d7b1-11e6-a0f3-11db77b1988a.jpg"><span>Meizu/魅族</span></li>
                            <li class="w-3">
                                <a href="/app/product/index?menu_id=121"></a>
                                <img src="http://qingful.com/public/uploads/2017-01-11/78421a00-d7b1-11e6-a0f3-11db77b1988a.jpg"><span>Apple/苹果</span></li>
                            <li class="w-3">
                                <a href="/app/product/index?menu_id=122"></a>
                                <img src="http://qingful.com/public/uploads/2017-01-11/85ef3b10-d7b1-11e6-a0f3-11db77b1988a.jpg"><span>Samsung/三星</span></li>
                            <li class="w-3">
                                <a href="/app/product/index?menu_id=118"></a>
                                <img src="http://qingful.com/public/uploads/2017-01-11/36a9f4f0-d7b1-11e6-a0f3-11db77b1988a.jpg"><span>HuaWei/华为</span></li>
                            <li class="w-3">
                                <a href="/app/product/index?menu_id=123"></a>
                                <img src="http://qingful.com/public/uploads/2017-01-11/92564790-d7b1-11e6-a0f3-11db77b1988a.jpg"><span>MIUI/小米</span></li>
                        </ul>
                    </section>
                    <section class="menu-right padding-all j-content" style="display: none">
                        <h5>鞋靴/箱包</h5>
                        <ul>
                            <li class="w-3">
                                <a href="/app/product/index?menu_id=165"></a>
                                <img src="http://qingful.com/public/uploads/2017-01-11/ecd3e290-d7cf-11e6-b4ee-4d604fc4e35b.jpg"><span>手提包</span></li>
                            <li class="w-3">
                                <a href="/app/product/index?menu_id=166"></a>
                                <img src="http://qingful.com/public/uploads/2017-01-11/f4990550-d7cf-11e6-b4ee-4d604fc4e35b.jpg"><span>斜挎包</span></li>
                            <li class="w-3">
                                <a href="/app/product/index?menu_id=169"></a>
                                <img src="http://qingful.com/public/uploads/2017-01-11/17cb2ee0-d7d0-11e6-b4ee-4d604fc4e35b.jpg"><span>帆布鞋</span></li>
                            <li class="w-3">
                                <a href="/app/product/index?menu_id=168"></a>
                                <img src="http://qingful.com/public/uploads/2017-01-11/0efe6020-d7d0-11e6-b4ee-4d604fc4e35b.jpg"><span>短靴</span></li>
                            <li class="w-3">
                                <a href="/app/product/index?menu_id=167"></a>
                                <img src="http://qingful.com/public/uploads/2017-01-11/068863f0-d7d0-11e6-b4ee-4d604fc4e35b.jpg"><span>单鞋</span></li>
                            <li class="w-3">
                                <a href="/app/product/index?menu_id=170"></a>
                                <img src="http://qingful.com/public/uploads/2017-01-11/1ff247c0-d7d0-11e6-b4ee-4d604fc4e35b.jpg"><span>防水台单鞋</span></li>
                            <li class="w-3">
                                <a href="/app/product/index?menu_id=173"></a>
                                <img src="http://qingful.com/public/uploads/2017-01-11/53f344c0-d7d0-11e6-b4ee-4d604fc4e35b.jpg"><span>马丁靴</span></li>
                            <li class="w-3">
                                <a href="/app/product/index?menu_id=164"></a>
                                <img src="http://qingful.com/public/uploads/2017-01-11/e4d6bfe0-d7cf-11e6-b4ee-4d604fc4e35b.jpg"><span>迷你包</span></li>
                            <li class="w-3">
                                <a href="/app/product/index?menu_id=178"></a>
                                <img src="http://qingful.com/public/uploads/2017-01-11/80d34e40-d7d0-11e6-b4ee-4d604fc4e35b.jpg"><span>运动风</span></li>
                            <li class="w-3">
                                <a href="/app/product/index?menu_id=176"></a>
                                <img src="http://qingful.com/public/uploads/2017-01-11/704f6680-d7d0-11e6-b4ee-4d604fc4e35b.jpg"><span>靴子</span></li>
                            <li class="w-3">
                                <a href="/app/product/index?menu_id=175"></a>
                                <img src="http://qingful.com/public/uploads/2017-01-11/663e7f00-d7d0-11e6-b4ee-4d604fc4e35b.jpg"><span>小白鞋</span></li>
                            <li class="w-3">
                                <a href="/app/product/index?menu_id=174"></a>
                                <img src="http://qingful.com/public/uploads/2017-01-11/5c5ee0b0-d7d0-11e6-b4ee-4d604fc4e35b.jpg"><span>平底鞋</span></li>
                        </ul>
                    </section>
                    <section class="menu-right padding-all j-content" style="display: none">
                        <h5>洗发护理</h5>
                    </section>
                </div>
            </aside>
        </div>
        <script type="text/javascript">
        $(function($) {
            $('#sidebar ul li').click(function() {
                $(this).addClass('active').siblings('li').removeClass('active');
                var index = $(this).index();
                $('.j-content').eq(index).show().siblings('.j-content').hide();
                $(window).scrollTop(0);
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

