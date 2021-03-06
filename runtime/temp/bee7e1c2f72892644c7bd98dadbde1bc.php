<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:76:"C:\wamp64\www\work\minshop\public/../application/index\view\index\index.html";i:1559273142;s:74:"C:\wamp64\www\work\minshop\application\index\view\public\footerJsFile.html";i:1553913178;}*/ ?>
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
            </div>
        </div>
        <!--login-->
        <div class="wrapper-page">
            <div class="panel-body">
                <div class="am-radius back-color-w">

                        <fieldset>
                            <legend class="am-text-center am-text-secondary am-text-xl">选择前台\后台</legend>

                            <div class="am-form-group am-block">
                                <a href="<?php echo url('admin/index/index'); ?>"
                                   class="am-btn am-btn-primary am-btn-block am-radius">前台 </a>
                            </div>
                            <div class="am-form-group am-block">
                                <a href="<?php echo url('index/Login/login'); ?>"
                                   class="am-btn am-btn-primary am-btn-block am-radius">后台 </a>
                            </div>

                        </fieldset>

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

</body>
</html>