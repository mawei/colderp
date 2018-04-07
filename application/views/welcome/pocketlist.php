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
                <h3 class="box-flex">账户明细</h3>
            </header>
            <section class="flow-consignee-list j-get-consignee-one select-three" id="J_ItemList">
                <ul>
                    <?php foreach ($pocklist as $key=>$value): ?>
                    <li class="flow-checkout-adr m-top08 single_item ">
                        <div class="flow-set-adr of-hidden padding-all ">
                            <div class="ect-select fl">

                                <p class="f-h-adr-title">
                                    <label><?php echo $value['source'];?></label><span class="ect-colory"><?php echo $value['amount'];?></span></p>
                                <p class="f-h-adr-con t-remark m-top04"><?php echo $value['createtime'];?></p>
                            </div>
                            <div class="fr">

                            </div>
                        </div>

                    </li>
                    <?php endforeach ?>

                </ul>
            </section>

        </div>

    </div>

<?php $this->load->view('public/footer.php') ?>

