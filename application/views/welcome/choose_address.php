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
                        <div class="flow-have-adr padding-all">
                            <a href="<?=base_url('welcome/select_address?address_id=')?><?php echo $value['address_id'];?>">
                            <p class="f-h-adr-title">
                                <label><?php echo $value['name'];?></label><span class="ect-colory"><?php echo $value['telephone'];?></span></p>
                            <p class="f-h-adr-con t-remark m-top04"><?php echo $value['area'].' '.$value['address'];?></p>
                        </a>
                        </div>
                    </li>
                    <?php endforeach ?>

                </ul>
            </section>
            <div class="filter-btn dis-box">
                <a href="<?=base_url('welcome/add_address')?>" type="button" class="btn-submit box-flex n-iphone5-top1 j-goods-attr j-show-div">新增收货地址</a>
            </div>
        </div>

    </div>

<?php $this->load->view('public/footer.php') ?>

