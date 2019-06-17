<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:77:"C:\wamp64\www\work\minshop\public/../application/index\view\login\change.html";i:1559274836;s:74:"C:\wamp64\www\work\minshop\application\index\view\public\footerJsFile.html";i:1553913178;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <!--引入头文件-->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Min-Shop 后台管理系统</title>
    <link rel="stylesheet" href="/work/minshop/public/static/assets/css/amazeui.css"/>
    <link rel="stylesheet" href="/work/minshop/public/static/assets/css/app.css">
</head>
<body>

<!--start-->
<div class="account-pages">

    <div class="am-g">
        <div class="am-g">
            <div class="am-u-sm-10 am-u-md-8 am-u-lg-4 am-u-sm-centered">
                <span class="am-center am-text-center am-text-xxxl am-text-primary">Min-Shop </span>
                <span class="am-center am-text-center am-text-xl">后台管理系统</span>
            </div>
        </div>
        <!--login-->
        <div class="wrapper-page">
            <div class="panel-body">

                <div class="am-radius back-color-w">
                    <form action="" class="am-form" data-am-validator>
                        <fieldset>
                            <legend class="am-text-center am-text-secondary am-text-xl">重置密码</legend>
                            <div class="am-form-group am-block">
                                <label for="admin_name">用户名：</label>
                                <input type="text" id="admin_name" minlength="6"
                                       placeholder="输入需要重置的用户名6-20位" required/>
                            </div>
                            <div class="am-form-group am-block">
                                <label for="password_1">密码：</label>
                                <input type="password" id="password_1" placeholder="6-20位由数字和字母组成的密码"
                                       pattern="^[0-9a-zA-Z_]{6,20}$" required/>
                            </div>

                            <div class="am-form-group am-block">
                                <label for="password_2">确认密码：</label>
                                <input type="password" id="password_2" placeholder="请与上面输入的值一致"
                                       data-equal-to="#password_1" required/>
                            </div>
                            <div class="am-form-group">
                                <button class="am-btn am-btn-primary am-btn-block am-radius" type="button"
                                        id="change_password">
                                    确认提交
                                </button>
                                <span class="am-text-warning " id="get_ajax_info"></span>
                            </div>
                            <div class="am-form-group">
                                <span><a href="<?php echo url('index/login/login'); ?>" class="am-link-muted am-text-sm">登陆</a></span>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end-->


<!--尾部JS-->
<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="/work/minshop/public/static/assets/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->
<script src="/work/minshop/public/static/js/jquery-3.3.1.min.js"></script>
<script src="/work/minshop/public/static/assets/js/amazeui.min.js"></script>
<script src="/work/minshop/public/static/assets/js/app.js"></script>
<script type="text/javascript">
    $(function () {
        $("#change_password").click(function () {
            var admin_name = $('#admin_name').val();
            var password_1 = $("#password_1").val();
            var password_2 = $("#password_2").val();
            $.ajax({
                url: '<?php echo url("index/Login/ajax_change"); ?>',
                data: {
                    'admin_name': admin_name,
                    'password_1': password_1,
                    'password_2': password_2,
                },
                type: "POST",
                dataType: "JSON",
                success: function (result) {
                    var arr = Object.keys(result);
                    switch (arr[0]) {
                        case 'pwd_not_same':
                            $('#get_ajax_info').attr('class','am-text-danger am-icon-info-circle').text(result[arr[0]]);
                            break;
                        case 'pwd_error':
                            $('#get_ajax_info').attr('class','am-text-danger am-icon-info-circle').text(result[arr[0]]);
                            break;
                        case 'verify_time_pass':
                            $('#get_ajax_info').attr('class','am-text-danger am-icon-info-circle').text(result[arr[0]]);
                            break;
                        case 'admin_name_error':
                            $('#get_ajax_info').attr('class','am-text-danger am-icon-info-circle').text(result[arr[0]]);
                            break;
                        case 'no_verify_email':
                            $('#get_ajax_info').attr('class','am-text-danger am-icon-info-circle').text(result[arr[0]]);
                            break;
                        case 'pass':
                            alert(result[arr[0]]);
                            window.location.replace("<?php echo url('index/login/login'); ?>");
                            break;
                        default:
                            break;
                    }

                }
            });
        });
    });
</script>


</body>
</html>