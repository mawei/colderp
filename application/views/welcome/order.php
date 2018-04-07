<?php $this->load->view('public/header.php') ?>


<body style="max-width:640px;">
    <div id="pjax-container" style="padding-bottom: 60px">
        <style type="text/css">
        .user-order li i.fa:before {
            font-size: 2.4em;
            color: #bbb;
        }
        
        .user-order li {
            position: relative;
        }
        
        .user-order li i.fa {
            position: absolute;
            top: 50%;
            margin-top: -1.2em;
            right: 0.6em;
        }
        
        .user-order ul li dl dt h4.title {
            height: auto;
        }
        
        .user-order {
            border-top: none;
            padding: 0.6em 0;
        }
        
        .user-order ul li img {
            height: 6em;
            height: 6em;
        }
        </style>
        <div class="con">
            <div class="ect-bg">
                <header class="ect-header ect-margin-tb ect-margin-lr text-center ect-bg icon-write">
                    <a href="javascript:history.go(-1)" class="pull-left ect-icon ect-icon1 ect-icon-history"></a>
                    <span>全部订单</span>
                    <!-- <a href="javascript:;" onclick="openMune()" class="pull-right ect-icon ect-icon1 ect-icon-mune"></a> -->
                </header>
            </div>
            <div class="ect-pro-list user-order" style="border-bottom:none;">
                <ul id="J_ItemList">
                    <?php foreach ($order as $key=>$value): ?>
                    <li>
                        <a href="<?=base_url('welcome/orderdetail?sale_id=')?><?php echo $value['sale_id'];?>">
                            <!-- <img src="http://qingful.com/public/uploads/2017-01-11/e8eba7b0-d7d6-11e6-949b-8d34162e2842.jpg" class="pull-left"> -->
                            <dl>
                                <dt>
                                    <h4 class="title">订单号：<?php echo $value['sale_id'];?></h4>
                                </dt>
                                <!-- <dd>订单状态： 未付款 已完成</dd> -->
                                
                                <!-- <dd>订单金额：<span class="ect-color">￥0.01元</span></dd> -->
                                <dd>下单时间：<?php echo $value['time'];?></dd>
                            </dl>
                            <i class="pull-right fa fa-angle-right"></i>
                        </a>
                    </li>
                    <?php endforeach ?>
                </ul>
            </div>
            <!-- <section class="padding-all">
                <ul class="dis-box">
                    <li class="n-page-but">
                        <a href="/app/order/index?pay_status=&status=&page=1">
                            <div class="page-but">上一页</div>
                        </a>
                    </li>
                    <li class="box-flex">
                        <div class="page-num">
                            <select name="sel_question" onchange="window.location.href=this.value;">
                                <option value="/app/order/index?pay_status=&status=&page=1">1/6
                                </option>
                                <option value="/app/order/index?pay_status=&status=&page=2">2/6
                                </option>
                                <option value="/app/order/index?pay_status=&status=&page=3">3/6
                                </option>
                                <option value="/app/order/index?pay_status=&status=&page=4">4/6
                                </option>
                                <option value="/app/order/index?pay_status=&status=&page=5">5/6
                                </option>
                                <option value="/app/order/index?pay_status=&status=&page=6">6/6
                                </option>
                            </select>
                        </div>
                    </li>
                    <li class="n-page-but">
                        <a href="/app/order/index?pay_status=&status=&page=2">
                            <div class="page-but">下一页</div>
                        </a>
                    </li>
                </ul>
            </section> -->
        </div>
</body>

</html>
</div>
<div class="search-div ts-3">
    <footer class="close-search j-close-search" onclick="searchClose()">
        点击关闭
    </footer>
</div>
<?php $this->load->view('public/footer.php') ?>
