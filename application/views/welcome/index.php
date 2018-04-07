<?php $this->load->view('public/header.php') ?>


<body style="max-width:640px;">
    <div id="pjax-container" style="padding-bottom: 60px">
        <div class="con" style="overflow: auto">
            <div class="ect-bg">
                <header class="ect-header ect-margin-tb ect-margin-lr text-center ect-bg icon-write">
                    <!-- <a href="javascript:history.go(-1)" class="pull-left ect-icon ect-icon1 ect-icon-history"></a> -->
                    <span>首页</span>
                </header>
            </div>
            <!--购物车-->
<!--             <p class="flow-price ect-padding-lr ect-padding-tb">
                共<b id="total_number">2</b>件商品，总价(不含运费)：
                <b class="ect-colory">￥</b>
                <b class="ect-colory" id="goods_subtotal">65.01</b>
                <b class="ect-colory">元</b>
            </p> -->
            <div class="btn-group" style="width: 49.5%;">
                <button type="button" class="btn btn-default dropdown-toggle" 
                        data-toggle="dropdown" style="font-size: 1.5rem">
                    品牌 <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" role="menu"  style="width: 100%">
                    <?php foreach ($all_brand as $key=>$value): ?>
                        <li><a href="<?=base_url('welcome/index')?>/<?php echo $value['brand'];?>/"><?php echo $value['brand'];?></a></li>
                    <?php endforeach ?>
                </ul>
            </div>
            <div class="btn-group" style="width: 49.5%">
                <button type="button" class="btn btn-default dropdown-toggle" 
                        data-toggle="dropdown"  style="font-size: 1.5rem">
                    系列 <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" role="menu" style="width: 100%">
                    <?php foreach ($all_series as $key=>$value): ?>
                        <li><a href="<?=base_url('welcome/index')?>/<?php echo $brand;?>/<?php echo $value['series'];?>"><?php echo $value['series'];?></a></li>
                    <?php endforeach ?>
                </ul>
            </div>
            <section class="ect-pro-list flow-pic ect-border-bottom0">
                <ul>
                    <?php foreach ($data as $key=>$value): ?>
                    <li class="n-flow1-box">
                        <div class="n-flow-right-sum">
                            <div class="ect-clear-over">
                                <a href="">
                                    <img src="<?=base_url('images')?>/<?php echo $value['image'];?>" title="<?php echo $value['name'];?>">
                                </a>
                                <dl style="margin-left: 9rem">
                                    <dt>
                                <h2 class="title">
                                    <!-- <a href="/app/product/detail?id=224"><?php echo $value['name'];?></a> -->
                                    <?php echo $value['name'];?>
                                </h2>
                                    </dt>
                                    <dd class="ect-color999">
                                        <p style="line-height: 2.5rem">库存：<?php echo $value['number'];?><?php echo $value['unit'];?></p>
                                        <p><strong class="ect-colory">￥<?php echo $value['price'];?>元</strong></p>
                                    </dd>
                                </dl>
                            </div>
                            <div class="ect-margin-tb ect-margin-bottom0 ect-clear-over flow-num-del">
                                <div class="input-group pull-left wrap div-num">
                                    <span class="input-group-addon" onclick="change_goods_number(1,<?php echo $value['stock_id'];?>)">-</span>
                                    <input type="hidden" id="back_number<?php echo $value['stock_id'];?>" value="<?php echo array_key_exists($value['stock_id'],$cart)? $cart[$value['stock_id']] : 0;?>">
                                    <input type="number" class="form-num form-contro" name="number" id="goods_number<?php echo $value['stock_id'];?>" autocomplete="off" value="<?php echo array_key_exists($value['stock_id'],$cart)? $cart[$value['stock_id']] : 0;?>" onchange="change_goods_number(2,<?php echo $value['stock_id'];?>)">
                                <span class="input-group-addon" onclick="change_goods_number(3,<?php echo $value['stock_id'];?>,<?php echo $value['number'];?>)">+</span>
                            </div>

                            </div>
                        </div>
                    </li>
                    <?php endforeach ?>
                    
                </ul>
            </section>

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

        $("#buybutton").click(function(){
            window.location.href = "<?=base_url('welcome/choose_address')?>";
        });

        // 输入购物车中商品数量
        function back_goods_number(id) {
            var goods_number = document.getElementById('goods_number' + id).value;
            document.getElementById('back_number' + id).value = goods_number;
        }

        // 点击按钮加减购物车中商品数量
        function change_goods_number(type, id,max) {

            var goods_number = document.getElementById('goods_number' + id).value;
            if (type == 2) {
                var dou = goods_number.split('.');
                goods_number = (dou[0] > 0) ? dou[0] : 0;
            }
            if (type == 1) {
                goods_number--;
            }
            if (type == 3) {
                goods_number++;
            }
            if (goods_number > max) {
                goods_number = max;
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

