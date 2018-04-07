<?php $this->load->view('public/header.php') ?>


<body style="max-width:640px;">
    <div id="pjax-container" style="padding-bottom: 60px">
        <div class="con" style="overflow: auto">
            <div class="ect-bg">
                <header class="ect-header ect-margin-tb ect-margin-lr text-center ect-bg icon-write">
                    <a href="javascript:history.go(-1)" class="pull-left ect-icon ect-icon1 ect-icon-history"></a>
                    <span>订单详情</span>
                </header>
            </div>
            <!--购物车-->
<!--             <p class="flow-price ect-padding-lr ect-padding-tb">
                共<b id="total_number">2</b>件商品，总价(不含运费)：
                <b class="ect-colory">￥</b>
                <b class="ect-colory" id="goods_subtotal">65.01</b>
                <b class="ect-colory">元</b>
            </p> -->
            <p class="flow-price ect-padding-lr ect-padding-tb">
                订单号：<?php echo $order[0]['sale_id'];?>
            </p>
            <p class="flow-price ect-padding-lr ect-padding-tb">
                收货人：<?php echo $address['name'];?><?php echo $address['telephone'];?>
            </p>
            <p class="flow-price ect-padding-lr ect-padding-tb">
                收货地址：<?php echo $address['address'];?>
            </p>
            <p class="flow-price ect-padding-lr ect-padding-tb">
                创建时间：<?php echo $order[0]['time'];?>
            </p>
            <section class="ect-pro-list flow-pic ect-border-bottom0">
                <ul>
                    <?php foreach ($order as $key=>$value): ?>
                    <li class="n-flow1-box">
                        <div class="n-flow-right-sum">
                            <div class="ect-clear-over">
                                <a href="">
                                    <img src="../images/<?php echo $value['image'];?>" title="<?php echo $value['name'];?>">
                                </a>
                                <dl>
                                    <dt>
                                    <h4 class="title">
                                    <!-- <a href="/app/product/detail?id=224"><?php echo $value['name'];?></a> -->
                                        <?php echo $value['name'];?>
                                    </h4>

                                    <h5 class="title">
                                    <!-- <a href="/app/product/detail?id=224"><?php echo $value['name'];?></a> -->
                                        数量：<?php echo $value['number'];?>
                                    </h5>
                                </dt>
                                    <dd class="ect-color999">
                                        <p></p>
                                        <p><strong class="ect-colory">￥<?php echo $value['price'];?>元</strong></p>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                    </li>
                    <?php endforeach ?>
                    
                </ul>
            </section>
            <div class="flow-jiesuan ect-padding-lr ect-padding-tb" style="background: #f7f7f7;">
                <?php if($customer['customer_type'] == '普通客户'):?>
                <a href="<?=base_url('welcome/pay')?>" type="button" class="btn btn-info ect-btn-info ect-bg">立即付款</a>
                <?php else:?>
                    <a href="" type="button" class="btn btn-info ect-btn-info ect-bg">下单成功</a>
                <?php endif?>
            </div>
        </div>
        <script>
        $(".n-flow1-box").click(function() {
            var n_flow1_box = $(this).find(".n-flow-ckecked label");
            if (n_flow1_box.hasClass("active")) {
                n_flow1_box.removeClass("active");
            } else {
                n_flow1_box.addClass("active");
            }
        });

        // 输入购物车中商品数量
        function back_goods_number(id) {
            var goods_number = document.getElementById('goods_number' + id).value;
            document.getElementById('back_number' + id).value = goods_number;
        }

        // 点击按钮加减购物车中商品数量
        function change_goods_number(type, id) {

            var goods_number = document.getElementById('goods_number' + id).value;
            if (type == 2) {
                var dou = goods_number.split('.');
                goods_number = (dou[0] > 0) ? dou[0] : 1;
            }
            if (type == 1) {
                goods_number--;
            }
            if (type == 3) {
                goods_number++;
            }
            if (goods_number <= 0) {
                goods_number = 1;
                return;
            }
            if (!/^[0-9]*$/.test(goods_number)) {
                goods_number = document.getElementById('back_number' + id).value;
            }
            document.getElementById('back_number' + id).value = goods_number;
            document.getElementById('goods_number' + id).value = goods_number;

            $.post("<?=base_url('welcome/addcart')?>", {
                stock_id: id,
                number: goods_number
            }, function(data) {
                // document.getElementById('total_number').innerHTML = data.data; //更新数量
                // document.getElementById('goods_subtotal').innerHTML = data.msg; //更新小计
                // change_goods_number_response(data, id);
            }, 'json');
        }

        // 处理返回信息并显示
        function change_goods_number_response(result, id) {
            if (result.error == 0) {
                var rec_id = result.rec_id;
                $("#goods_number_" + rec_id).val(result.goods_number);
                document.getElementById('total_number').innerHTML = result.total_number; //更新数量
                document.getElementById('goods_subtotal').innerHTML = result.total_desc; //更新小计
                if (document.getElementById('ECS_CARTINFO')) {
                    //更新购物车数量
                    document.getElementById('ECS_CARTINFO').innerHTML = result.cart_info;
                }
            } else if (result.message != '') {
                alert(result.message);
                var goods_number = document.getElementById('back_number' + id).value;
                document.getElementById('goods_number' + id).value = goods_number;
            }
        }
        </script>
    </div>

<?php $this->load->view('public/footer.php') ?>

