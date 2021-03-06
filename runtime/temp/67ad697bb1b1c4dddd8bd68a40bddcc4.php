<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:76:"C:\wamp64\www\work\minshop\public/../application/index\view\login\login.html";i:1559274732;s:74:"C:\wamp64\www\work\minshop\application\index\view\public\footerJsFile.html";i:1553913178;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <!--引入头文件-->
    <meta charset="UTF-8">
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
                    <form action="" class="am-form" method="post">
                        <fieldset>
                            <legend class="am-text-center am-text-secondary am-text-xl">登陆</legend>
                            <div class="am-form-group am-block">
                                <label for="username">用户名：</label>
                                <input class="am-form-inline" type="text" id="username"
                                       placeholder="用户名  6-20位">
                            </div>
                            <div class="am-form-group am-block">
                                <label for="password">密码：</label>
                                <input class="am-form-inline" type="password" id="password"
                                       placeholder="密码  6-20位">
                            </div>
                            <div class="am-form-group am-block">

                            </div>

                            <div class="am-form-group">
                                <input class="am-btn am-btn-primary am-btn-block am-radius"
                                       type="button" id="ajax_post" value="登陆">
                                <span class="am-text-danger " id="login_info"></span>
                            </div>
                            <div class="am-form-group">
                                <span><a href="<?php echo url('index/login/find'); ?>" class="am-link-muted am-text-sm">忘记密码？</a></span>
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
        $("#ajax_post").click(function () {
            var username = $("#username").val();
            var password = $("#password").val();
            $.ajax({
                url: '<?php echo url("index/Login/ajaxLogin"); ?>',
                data: {
                    'username': username,
                    'pwd': password
                },
                type: "POST",
                dataType: "JSON",
                success: function (result) {
                    switch (result['id']) {
                        case 0:
                            $("#login_info").attr("class", "am-text-danger am-icon-info-circle").html(result["mes"]);

                            break;
                        case  1:
                            $("#login_info").attr("class", "am-text-danger am-icon-info-circle").html(result['mes']);
                            break;
                        case  2:
                            $("#login_info").attr("class", "am-text-danger am-icon-info-circle").html(result['mes']);
                            break;
                        case  3:
                            window.location.replace("<?php echo url('index/home/index'); ?>");
                            //jump
                            break;
                        case  4:
                            $("#login_info").attr("class", "am-text-danger am-icon-info-circle").html(result['mes']);
                            break;
                        default:
                            alert("error");
                            break;
                    }
                }
            });
        });
    })
</script>


</body>
</html>