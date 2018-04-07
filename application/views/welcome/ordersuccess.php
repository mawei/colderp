<?php $this->load->view('public/header.php') ?>


<body style="max-width:640px;">
    <div id="pjax-container" style="padding-bottom: 60px">
        <style type="text/css">
        .header-menu h3 {
            margin-right: 0px;
        }
        </style>
        <header class="dis-box header-menu b-color color-whie">
            <a class="" href="javascript:history.go(-1)">
                <i class="iconfont icon-jiantou" style="color: white;"></i></i>
            </a>
            <h3 class="box-flex">下单成功</h3>
            <p><a href="index.html"><i class="iconfont icon-home" style="color: white;"></i></i></a></p>
        </header>
        <div class="padding-all b-color-f">                
                <!-- <p class="ect-checkbox ect-padding-tb ect-margin-tb ect-margin-bottom0">
            <input type="checkbox" value="1" name="remember" id="remember" class="l-checkbox">
            <label for="remember"><i></i></label>
        </p> -->
            <div class=" ect-padding-tb" style="padding-top: 10rem">
                <a type="button"  href="<?=base_url('welcome/orderdetail?sale_id=')?><?php echo $sale_id;?>" class="btn-submit col-md-12" value="" id="loginbtn">查看订单</a>
            </div>


        </div>

    </div>

    <?php $this->load->view('public/footer.php') ?>
