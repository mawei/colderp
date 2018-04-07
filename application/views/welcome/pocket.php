<?php $this->load->view('public/header.php') ?>

<body style="max-width:640px;">
    <div id="pjax-container" style="padding-bottom: 60px">
        <header class="dis-box header-menu b-color color-whie">
            <a class="" href="javascript:history.go(-1)">
                <i class="iconfont icon-jiantou icon-write" style="color: white;"></i>
            </a>
            <h3 class="box-flex">我的钱包</h3>
        </header>
        <section class="purse-header-box text-center purse-f">
            <p>可用余额:</p>
            <h2>￥<?php echo $customer['amount'];?>元</h2>
            <img src="img/pur-bg.png">
            <div class="user-pur-box">
                <div class="user-nav-1-box g-s-i-title-4 dis-box text-center">
<!--                     <a href="/app/user/recharge" class="box-flex">
                        <h4 class="ellipsis-one purse-f"><i class="iconfont icon-money is-money-color"></i>账户充值</h4>
                    </a> -->
                    <a href="<?=base_url('welcome/tixian')?>" class="box-flex">
                        <h4 class="ellipsis-one purse-f"><i class="iconfont icon-wodetixian is-money-color"></i>余额提现</h4>
                    </a>
                </div>
            </div>
        </section>
        <section class="b-color-f my-nav-box m-top10">
            <a href="<?=base_url('welcome/pocketlist')?>">
                <div class="dis-box padding-all my-bottom">
                    <h3 class="box-flex text-all-span my-u-title-size">帐户明细</h3>
                    <span class="t-jiantou"><i class="iconfont icon-jiantou tf-180 jian-top"></i></span>
                </div>
            </a>
<!--             <a href="<?=base_url('welcome/tixianlist')?>">
                <div class="dis-box padding-all my-bottom">
                    <h3 class="box-flex text-all-span my-u-title-size">申请记录</h3>
                    <span class="t-jiantou"><i class="iconfont icon-jiantou tf-180 jian-top"></i></span>
                </div>
            </a> -->
        </section>
    </div>
 
<?php $this->load->view('public/footer.php') ?>

