<?php $this->load->view('public/header.php') ?>


<body style="max-width:640px;">
    <div id="pjax-container" style="padding-bottom: 60px">
        <style type="text/css">
        .flow-consignee ul li {
            padding: 1zrem 0rem;
            overflow: hidden;
            height: auto;
            clear: both;
            position: relative;
            border-bottom: 1px solid #f6f6f9;
        }
        
        .flow-consignee {
            border-top: 1px solid #f6f6f9;
            border-bottom: 0px solid #e3e3e3;
        }
        
        .profile-left-name {
            padding-top: 0.7rem;
        }
        
        .flow-consignee ul li:last-child {
            border-bottom: 1px solid #f6f6f9;
        }
        </style>
        <header class="dis-box header-menu b-color color-whie">
            <a class="" href="javascript:history.go(-1)">
                <i class="iconfont icon-jiantou icon-write" style="color: white;"></i>
            </a>
            <h3 class="box-flex">新增收货地址</h3>
            <!-- <p><i class="iconfont icon-pailie j-nav-box"></i></p> -->
        </header>
        <form action="<?=base_url('welcome/add_address')?>" method="post" name="theForm" style="overflow: auto">
            <section class="flow-consignee ect-bg-colorf s-user-top onclik-admin">
                <ul>
                    <li class="dis-box s-xian-box s-user-top-1">
                        <h3 class="profile-left-name text-all-span my-u-title-size">收货人姓名：</h3>
                        <div class="box-flex t-goods1 n-pro-name onelist-hidden">
                            <input name="name" maxlength="10" placeholder="收货人姓名必填" type="text" class="inputBg" value="">
                        </div>
                    </li>
                    <li class="dis-box s-xian-box s-user-top-1">
                        <h3 class="profile-left-name text-all-span my-u-title-size">手机：</h3>
                        <div class="box-flex t-goods1 onelist-hidden n-pro-name">
                            <input maxlength="11" placeholder="手机必填" name="telephone" type="text" class="inputBg_touch" value="">
                        </div>
                    </li>
                    <li class="dis-box s-xian-box s-user-top-1">
                        <h3 class="profile-left-name text-all-span my-u-title-size" style="padding-top: 5px;">省/直辖市：</h3>
                        <i class="iconfont icon-more n-addr-edit"></i>
                        <select class="n-edit-box box-flex" style="width: 58%;" name="province" id="selProvinces" onchange="region.changed(this, 2, 'selCities')">
                            <option value="浙江">浙江</option>
                        </select>
                    </li>
                    <li class="dis-box s-xian-box s-user-top-1">
                        <h3 class="profile-left-name text-all-span my-u-title-size" style="padding-top: 5px;">城市：</h3>
                        <i class="iconfont icon-more n-addr-edit"></i>
                        <select class="n-edit-box box-flex" style="width: 58%;" name="city" id="city" onchange="region.changed(this, 3, 'selDistricts')">
                            <option value="平湖">平湖</option>
                        </select>
                    </li>
                    <li class="dis-box s-xian-box s-user-top-1" id="selDistricts__box" style="display: block;">
                        <h3 class="profile-left-name text-all-span my-u-title-size" style="padding-top: 5px;">区/县：</h3>
                        <i class="iconfont icon-more n-addr-edit"></i>
                        <select class="n-edit-box box-flex" style="width: 58%;" name="area" id="area" style="">
                            <option value="当湖街道">当湖街道</option>
                        </select>
                    </li>
                    <li class="input-text  s-user-top-1"><b class="pull-left" style="width:12rem;">详细地址：</b>
                        <textarea name="address" placeholder="详细地址必填" type="text"></textarea>
                    </li>
                </ul>
                <div class="two-btn ect-padding-tb text-center">
                    <button type="submit" class="btn-submit box-flex">点击提交</button>
                </div>
            </section>
        </form>
        <script type="text/javascript">
        var region = new Object();
        var consignee_not_null = "收货人姓名不能为空！";
        var country_not_null = "请您选择收货人所在国家！";
        var province_not_null = "请您选择收货人所在省份！";
        var city_not_null = "请您选择收货人所在城市！";
        var district_not_null = "请您选择收货人所在区域！";
        var invalid_email = "您输入的邮件地址不是一个合法的邮件地址。";
        var address_not_null = "收货人的详细地址不能为空！";
        var tele_not_null = "电话不能为空！";
        var shipping_not_null = "请您选择配送方式！";
        var payment_not_null = "请您选择支付方式！";
        var goodsattr_style = "1";
        var tele_invaild = "电话号码不有效的号码";
        var zip_not_num = "邮政编码只能填写数字";
        var mobile_invaild = "手机号码不是合法号码";
        var mobile_not_null = "手机号码不能为空";

        /* *
         * 载入指定的国家下所有的省份
         *
         * @country integer     国家的编号
         * @selName string      列表框的名称
         */
        region.loadProvinces = function(country, selName) {
            var objName = (typeof selName == "undefined") ? "selProvinces" : selName;
            region.loadRegions(country, 1, objName);
        }

        /* *
         * 载入指定的省份下所有的城市
         *
         * @province    integer 省份的编号
         * @selName     string  列表框的名称
         */
        region.loadCities = function(province, selName) {
            var objName = (typeof selName == "undefined") ? "selCities" : selName;
            region.loadRegions(province, 2, objName);
        }

        /* *
         * 载入指定的城市下的区 / 县
         *
         * @city    integer     城市的编号
         * @selName string      列表框的名称
         */
        region.loadDistricts = function(city, selName) {
            var objName = (typeof selName == "undefined") ? "selDistricts" : selName;
            region.loadRegions(city, 3, objName);
        }

        /* *
         * 处理下拉列表改变的函数
         *
         * @obj     object  下拉列表
         * @type    integer 类型
         * @selName string  目标列表框的名称
         */
        region.changed = function(obj, type, selName) {
            var parent = obj.options[obj.selectedIndex].value;
            region.loadRegions(parent, type, selName);
        }

        region.loadRegions = function(parent, type, target) {
            $.get(region.getFileName(), {
                type: type,
                pid: parent
            }, function(data) {
                region.response(data.data, target);
            }, 'json');
        }

        region.response = function(result, select) {

            if (select == 'selCities') {
                document.getElementById('selDistricts').parentNode.style.display = 'none';
            } else {
                document.getElementById('selDistricts').parentNode.style.display = 'block';
            }

            var sel = document.getElementById(select);
            sel.length = 1;
            sel.selectedIndex = 0;

            for (i = 0; i < result.length; i++) {
                var opt = document.createElement("OPTION");
                opt.value = result[i].id;
                opt.text = result[i].name;

                sel.options.add(opt);
            }
        }

        region.getFileName = function() {
            return "/app/public/region";
        }

        onload = function() {
            if (!document.all) {
                document.forms['theForm'].reset();
            }
            $('#selProvinces').val();
            $('#selCities').val();
            $('#selDistricts').val();
        }
        </script>
    </div>
        
<?php $this->load->view('public/footer.php') ?>
