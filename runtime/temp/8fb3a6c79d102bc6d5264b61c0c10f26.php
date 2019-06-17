<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:75:"C:\wamp64\www\work\minshop\public/../application/index\view\index\user.html";i:1553915314;s:72:"C:\wamp64\www\work\minshop\application\index\view\public\headerFile.html";i:1553500178;s:66:"C:\wamp64\www\work\minshop\application\index\view\public\head.html";i:1553743326;s:69:"C:\wamp64\www\work\minshop\application\index\view\public\sidebar.html";i:1558064310;s:74:"C:\wamp64\www\work\minshop\application\index\view\public\footerJsFile.html";i:1553913178;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <!--引入头文件-->
    <meta charset="UTF-8">
<title>图标</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="这是一个页面">
<meta name="keywords" content="form">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="renderer" content="webkit">
<meta http-equiv="Cache-Control" content="no-siteapp" />
<meta name="apple-mobile-web-app-title" content="Amaze UI" />
<link rel="stylesheet" href="/work/minshop/public/static/assets/css/amazeui.min.css"/>
<link rel="stylesheet" href="/work/minshop/public/static/assets/css/admin.css">

</head>
<body>
<header class="am-topbar am-topbar-inverse admin-header">
    <div class="am-topbar-brand">
        <strong>Min-Shop</strong> <small>后台管理系统</small>
    </div>

    <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#topbar-collapse'}">
        <span class="am-sr-only">导航切换</span>
        <span class="am-icon-bars"></span></button>

    <div class="am-collapse am-topbar-collapse" id="topbar-collapse">

        <ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list">
            <li><a href="javascript:;"><span class="am-icon-info-circle"></span> 消息 <span class="am-badge am-badge-warning">5</span></a></li>
            <li class="am-dropdown" data-am-dropdown>
                <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
                    <span class="am-icon-users"></span> 管理员 <span class="am-icon-caret-down"></span>
                </a>
                <ul class="am-dropdown-content">
                    <li><a href="#"><span class="am-icon-user"></span> 个人资料</a></li>
                    <li><a href="#"><span class="am-icon-cog"></span> 设置权限</a></li>
                    <li><a href="<?php echo url('index/login/logout'); ?>"><span class="am-icon-power-off"></span> 退出</a></li>
                </ul>
            </li>
        </ul>

    </div>
</header>

<div class="am-cf admin-main">
    <div class="admin-sidebar am-offcanvas" id="admin-offcanvas">
    <div class="am-offcanvas-bar admin-offcanvas-bar">
        <ul class="am-list admin-sidebar-list">
            <li><a href="<?php echo url('index/index/index'); ?>"><span class="am-icon-home"></span> 首页</a></li>
            <li>
                <a class="am-cf" data-am-collapse="{target: '#collapse-nav'}">
                    <span class="am-icon-file"></span> 用户管理 <span class="am-icon-angle-right am-fr am-margin-right"></span>
                </a>
                <ul class="am-list am-collapse admin-sidebar-sub am-in" id="collapse-nav">
                    <li>
                        <a href="<?php echo url('index/index/admin'); ?>" class="am-cf"><span class="am-icon-check"></span> 用户列表</a>
                    </li>
                </ul>
            </li>

            <li>

            </li>



            <li><a href="<?php echo url('index/order/order'); ?>"><span class="am-icon-table"></span> 表格</a></li>
            <li><a href="#"><span class="am-icon-pencil-square-o"></span> 表单</a></li>
            <li><a href="<?php echo url('index/login/logout'); ?>"><span class="am-icon-sign-out"></span> 注销</a></li>
        </ul>

        <div class="am-panel am-panel-default admin-sidebar-panel">
            <div class="am-panel-bd">
                <p><span class="am-icon-bookmark"></span> 公告</p>
                <p>严格要求，精准把控</p>
            </div>
        </div>

        <div class="am-panel am-panel-default admin-sidebar-panel">
            <div class="am-panel-bd">
                <p><span class="am-icon-tag"></span> 常用标签</p>
                <p>Welcome to the Amaze UI wiki!</p>
            </div>
        </div>
    </div>
</div>


    <!-- content start -->
    <div class="admin-content">
        <div class="admin-content-body">
            <div class="am-cf am-padding am-padding-bottom-0">
                <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">用户</strong> / <small>123</small></div>
            </div>

            <p class="am-text-danger">  this is index index user</p>
        </div>
    </div>
    <!-- content end   -->
</div>

<!--引入JS文件-->
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