<?php $this->load->view('public/header.php') ?>

<style type="text/css">
    *{margin: 0;padding: 0;}
    div{
        width:640px;
        height: 500px;
        display: table-cell;
        vertical-align: middle;
        text-align: center;
    }
    img {
        width: 10rem;
        height: 10rem;
    }
</style>
<body style="max-width:640px;">
            <header class="dis-box header-menu b-color color-whie">
            <a class="" href="javascript:history.go(-1)">
                <i class="iconfont icon-jiantou" style="color: white;"></i></i>
            </a>
            <h3 class="box-flex">二维码</h3>
            <p><a href="index.html"><i class="iconfont icon-home" style="color: white;"></i></i></a></p>
        </header>
    <div id="pjax-container">
        <img src="<?php echo base_url($file);?>">
    </div>
<?php $this->load->view('public/footer.php') ?>
