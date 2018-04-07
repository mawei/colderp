    <footer class="footer-nav dis-box">
<!--         <a id="link_index" href="<?=base_url('welcome/index')?>" class="box-flex nav-list">
            <i class="nav-box i-home"></i><span>首页</span>
        </a>
        <a id="link_menu" href="<?=base_url('welcome/category')?>" class="box-flex nav-list">
            <i class="nav-box i-cate"></i><span>分类</span>
        </a> -->
        <a id="" href="<?=base_url('welcome/index')?>" class="box-flex nav-list">
            <i class="nav-box i-cate"></i><span>首页</span>
        </a>
        <a id="link_cart" href="<?=base_url('welcome/cart')?>" class="box-flex nav-list">
            <i class="nav-box i-flow"></i><span>购物车</span>
        </a>

        <a id="link_user" href="<?=base_url('welcome/user')?>" class="box-flex nav-list">
            <i class="nav-box i-user"></i><span>我的</span>
        </a>
    </footer>
    <script type="text/javascript" src="<?=base_url('scripts/jquery.pjax.js')?>"></script>
    <script type="text/javascript" src="<?=base_url('scripts/nprogress.js')?>"></script>
    <script type="text/javascript" src="<?=base_url('scripts/jquery.json.js')?>"></script>
    <script type="text/javascript" src="<?=base_url('scripts/common.js')?>"></script>
    <script type="text/javascript" src="<?=base_url('scripts/jquery.more.js')?>"></script>
    <script type="text/javascript" src="<?=base_url('scripts/utils.js')?>"></script>
    <script type="text/javascript" src="<?=base_url('scripts/jquery.swiper.min.js')?>"></script>
    <script type="text/javascript" src="<?=base_url('scripts/bootstrap.min.js')?>"></script>
    <script type="text/javascript" src="<?=base_url('scripts/jquery.scrollUp.min.js')?>"></script>
    <script type="text/javascript" src="<?=base_url('scripts/validform.js')?>"></script>
    <script type="text/javascript" src="<?=base_url('scripts/app.js')?>"></script>
    <script type="text/javascript">
    function changeNav() {
        $('#link_index').removeClass('active');
        $('#link_menu').removeClass('active');
        $('#link_cart').removeClass('active');
        $('#link_user').removeClass('active');

        // 改变导航
        var link = location.pathname;
        if (link == '/') {
            $('#link_index').addClass('active');
        }
        if (link.indexOf('app/index') > 0) {
            $('#link_index').addClass('active');
        } else if (link.indexOf('app/menu') > 0) {
            $('#link_menu').addClass('active');
        } else if (link.indexOf('app/cart') > 0) {
            $('#link_cart').addClass('active');
        } else if (link.indexOf('app/user') > 0) {
            $('#link_user').addClass('active');
        } else if (link.indexOf('app/order') > 0) {
            $('#link_user').addClass('active');
        } else if (link.indexOf('app/public') > 0) {
            $('#link_user').addClass('active');
        } else if (link.indexOf('app/product') > 0) {
            $('#link_menu').addClass('active');
        } else {
            $('#link_index').addClass('active');
        }
    }

    (function($) {
        changeNav();

        NProgress.configure({
            template: '<div class="bar" role="bar" style="background: #18ac16;height: 3px"><div class="peg" style="box-shadow: 0 0 10px #fff, 0 0 5px #18ac16;"></div></div>'
        });
        if ($.support.pjax) {
            $.pjax.defaults.timeout = 6000;
            $(document).on('click', 'a[target!=_blank][target!=_self]', function(event) {
                if ($(this).attr('pjax-push-false') == undefined) {
                    $.pjax.click(event, '#pjax-container');
                } else {
                    $.pjax.click(event, '#pjax-container', {
                        push: false
                    });
                }
            });
            $(document).on('pjax:send', function() {
                NProgress.start();
            });
            $(document).on('pjax:complete', function() {
                NProgress.done();
                changeNav();
            });
            $(document).on('pjax:popstate', function() {
                changeNav();
            });
            $(document).on('pjax:timeout', function(event) {
                // Prevent default timeout redirection behavior
                event.preventDefault()
            });
            $(document).on('pjax:beforeReplace', function(contents, options) {
                //处理服务器返回的json通知
                if (options['0'].data != undefined) {
                    options['0'].data = '';
                }
            });
            $(document).on('submit', 'form', function(event) {
                //隐藏返回值
                $.pjax.submit(event, '#pjax-container', {
                    push: false
                });
            });
            $(document).on('pjax:success', function(event, data, status, xhr) {

                //正则匹配JSON
                if (data.match("^\{(.+:.+,*){1,}\}$")) {
                    var data = JSON.parse(data);

                    if (data.data) {
                        if (data.data.indexOf('/app/pay/wxpay/index') != -1 || data.data.indexOf('/app/pay/alipay/index') != -1) {
                            pay(data.data);
                        } else {
                            $.pjax({
                                url: data.data,
                                container: '#pjax-container',
                                push: false
                            })
                        }
                    }
                }
            });
        }
    })(jQuery);
    </script>
</body>

</html>
