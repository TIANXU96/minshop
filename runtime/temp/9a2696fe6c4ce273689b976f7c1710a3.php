<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:75:"C:\wamp64\www\work\minshop\public/../application/index\view\login\find.html";i:1559274798;s:74:"C:\wamp64\www\work\minshop\application\index\view\public\footerJsFile.html";i:1553913178;}*/ ?>
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
                <span class="am-center am-text-center am-text-xxxl am-text-primary">F_s </span>
                <span class="am-center am-text-center am-text-xl">后台管理系统</span>
            </div>
        </div>
        <!--login-->
        <div class="wrapper-page">
            <div class="panel-body">

                <div class="am-radius back-color-w">
                    <form action="" class="am-form" method="post" >
                        <fieldset>
                            <legend class="am-text-center am-text-secondary am-text-xl">重置密码</legend>
                            <div class="am-form-group am-block">
                                <label for="admin_name">用户名：</label>
                                <input class="am-form-inline" type="text" id="admin_name"
                                       placeholder="用户的用户名">
                            </div>
                            <div class="am-form-group am-block">
                                <label for="admin_name">邮箱：</label>
                                <input class="am-form-inline" type="text" id="admin_email"
                                       placeholder="用户的邮箱地址">
                            </div>
                            <div class="am-form-group am-block">
                                <button type="button" id="get_verify" class="am-btn am-form-inline"
                                        data-am-loading="{loadingText: '努力发送中...'}"> 获取验证码
                                </button>
                            </div>
                            <div class="am-form-group am-block">
                                <label for="admin_verify">验证码：</label>
                                <input class="am-form-inline" type="text" id="admin_verify"
                                       placeholder="输入收到的验证码 注意大小写">
                            </div>
                            <div class="am-form-group am-block">

                            </div>

                            <div class="am-form-group">
                                <button class="am-btn am-btn-primary am-btn-block am-radius" type="button"
                                        id="ajax_find_password">
                                    重置密码
                                </button>
                                <span class="am-text-warning" id="get_ajax_info"></span>
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
    $('#get_verify').click(function () {
        var $btn = $(this);
        $btn.button('loading');
        setTimeout(function () {
            $btn.button('reset');
        }, 2000);
    });
</script>
<!--获取验证码 发送邮件ajax-->
<script type="text/javascript">
    $(function () {
        $("#get_verify").click(function () {
            var admin_email = $("#admin_email").val();
            var admin_name = $("#admin_name").val();
            $.ajax({
                url: '<?php echo url("index/Login/sendEmail"); ?>',
                data: {
                    'admin_email': admin_email,
                    'admin_name': admin_name,
                },
                type: "POST",
                dataType: "JSON",
                success: function (result) {
                    var arr = Object.keys(result);
                    switch (arr[0]) {
                        case 'validate_res':
                            $("#get_ajax_info").attr('class', "am-text-danger am-icon-info-circle").text(result[arr[0]]);
                            break;
                        case 'sql_res':
                            $("#get_ajax_info").attr('class', "am-text-danger am-icon-info-circle").text(result[arr[0]]);
                            break;
                        case 'send_res':
                            $("#get_ajax_info").attr('class', "am-text-danger am-icon-info-circle").text(result[arr[0]]);
                            break;
                        case 'not_expire':
                            $("#get_ajax_info").attr('class', "am-text-warning am-icon-info-circle").text(result[arr[0]]);
                            break;
                        case 'pass':
                            $("#get_ajax_info").attr('class', "am-text-success am-icon-check").text(result[arr[0]]);
                            break;
                        default:
                            //nothing
                            break;
                    }

                }
            });
        });
    });

</script>
<!--提交完整信息下调下一步的 ajax-->
<script>
    $(function () {
        $("#ajax_find_password").click(function () {
            var admin_email = $("#admin_email").val();
            var admin_name = $("#admin_name").val();
            var admin_verify = $("#admin_verify").val();
            $.ajax({
                url: '<?php echo url("index/Login/ajax_jump_find"); ?>',
                data: {
                    'admin_email': admin_email,
                    'admin_name': admin_name,
                    'admin_verify': admin_verify,
                },
                type: "POST",
                dataType: "JSON",
                success: function (result) {
                    var arr = Object.keys(result);
                    switch (arr[0]) {
                        case 'validate_res':
                            $("#get_ajax_info").attr('class', "am-text-danger am-icon-info-circle").text(result[arr[0]]);
                            break;
                        case 'expire':
                            $("#get_ajax_info").attr('class', "am-text-danger am-icon-info-circle").text(result[arr[0]]);
                            break;
                        case 'wrong_admin_name':
                            $("#get_ajax_info").attr('class', "am-text-danger am-icon-info-circle").text(result[arr[0]]);
                            break;
                        case 'pass':
                            window.location.replace("<?php echo url('index/login/change'); ?>");
                            break;
                        case 'not_same':
                            $("#get_ajax_info").attr('class', "am-text-danger am-icon-info-circle").text(result[arr[0]]);
                            break;
                        default:
                            //nothing
                            break;
                    }
                    //    code
                }
            });
        });
    });
</script>


</body>
</html>