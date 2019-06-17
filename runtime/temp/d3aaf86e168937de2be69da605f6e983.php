<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:85:"C:\wamp64\www\work\minshop\public/../application/index\view\commodity\management.html";i:1559049486;s:72:"C:\wamp64\www\work\minshop\application\index\view\public\headerFile.html";i:1553500178;s:66:"C:\wamp64\www\work\minshop\application\index\view\public\head.html";i:1559039153;s:69:"C:\wamp64\www\work\minshop\application\index\view\public\sidebar.html";i:1559049048;s:74:"C:\wamp64\www\work\minshop\application\index\view\public\footerJsFile.html";i:1553913178;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <!--引入头文件-->
    <meta charset="UTF-8">
<title>首页</title>
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
        <a href="<?php echo url('index/index/index'); ?>"><strong>Min-Shop</strong>
            <small>后台管理系统</small>
        </a>
    </div>


    <!--自适应-->
    <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only"
            data-am-collapse="{target: '#topbar-collapse'}">
        <span class="am-sr-only">导航切换</span>
        <span class="am-icon-bars"></span></button>
    <div class="am-collapse am-topbar-collapse" id="topbar-collapse">

        <ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list">
            <li><a href="<?php echo url('admin/home/index'); ?>"><span class="am-icon-home">查看主页</span></a></li>
            <li class="am-dropdown" data-am-dropdown>
                <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
                    <span class="am-icon-users"></span> 管理员 <span class="am-icon-caret-down"></span>
                </a>
                <ul class="am-dropdown-content">
                    <li><a href="#"><span class="am-icon-cog"></span> 个人设置</a></li>
                    <li><a href="<?php echo url('index/login/logout'); ?>"><span class="am-icon-sign-out"></span> 注销</a></li>
                </ul>
            </li>
        </ul>

    </div>
</header>

<div class="am-cf admin-main">
    <div class="admin-sidebar am-offcanvas" id="admin-offcanvas">
    <div class="am-offcanvas-bar admin-offcanvas-bar">
        <ul class="am-list admin-sidebar-list">
            <li><a href="<?php echo url('index/home/index'); ?>"><span class="am-icon-home"></span> 首页</a></li>
            <li>
                <a class="am-cf" data-am-collapse="{target: '#user-nav'}">
                    <span class="am-icon-group"></span> 用户管理 <span
                        class="am-icon-angle-right am-fr am-margin-right"></span>
                </a>
                <ul class="am-list am-collapse admin-sidebar-sub" id="user-nav">
                    <li><a href="<?php echo url('index/users/management'); ?>" class="am-cf"> 用户列表 </a>
                    </li>
                </ul>
            </li>
            <li>
                <a class="am-cf" data-am-collapse="{target : '#shop-nav'}">
                    <span class="am-icon-file"></span> 贴子管理<span
                        class="am-icon-angle-right am-fr am-margin-right"></span>
                </a>
                <ul class="am-list am-collapse admin-sidebar-sub" id="shop-nav">
                    <li><a href="<?php echo url('index/commodity/management'); ?>" class="am-cf"> 贴子管理</a></li>
                </ul>
            </li>
            <!--
            <li>
                <a class="am-cf" data-am-collapse="{target : '#model-nav'}">
                    <span class="am-icon-clone"></span> 板块管理<span
                        class="am-icon-angle-right am-fr am-margin-right"></span>
                </a>
                <ul class="am-list am-collapse admin-sidebar-sub" id="model-nav">
                    <li><a href="#" class="am-cf"> 板块管理</a></li>
                    <li><a href="#" class="am-cf"> 板块分类</a></li>
                </ul>
            </li>
            -->

            <!--<li>
                <a class="am-cf" data-am-collapse="{target : '#power-nav'}">
                    <span class="am-icon-user"></span>权限控制<span
                        class="am-icon-angle-right am-fr am-margin-right"></span>
                </a>
                <ul class="am-list am-collapse admin-sidebar-sub" id="power-nav">
                    <li><a href="<?php echo url('index/power/adminList'); ?>" class="am-cf">管理员列表</a></li>
                    <li><a href="<?php echo url('index/power/powerList'); ?>" class="am-cf">角色管理</a></li>
                    <li><a href="<?php echo url('index/power/powerManagement'); ?>" class="am-cf">权限分配</a></li>
                </ul>
            </li>

            <li>
                <a class="am-cf" data-am-collapse="{target : '#order-nav'}">
                    <span class="am-icon-first-order"></span>订单管理<span
                        class="am-icon-angle-right am-fr am-margin-right"></span>
                </a>
                <ul class="am-list am-collapse admin-sidebar-sub" id="order-nav">
                    <li><a href="<?php echo url('index/order/order'); ?>" class="am-cf">订单管理</a></li>
                </ul>
            </li>

            <li>
                <a class="am-cf" data-am-collapse="{target : '#region-nav'}">
                    <span class="am-icon-home"></span>城市管理<span
                        class="am-icon-angle-right am-fr am-margin-right"></span>
                </a>
                <ul class="am-list am-collapse admin-sidebar-sub" id="region-nav">
                    <li><a href="<?php echo url('index/city/index'); ?>" class="am-cf">城市列表管理</a></li>
                </ul>
            </li>
            -->
        </ul>
    </div>
</div>


    <!-- content start -->

    <!-- form start -->
    <div class="admin-content">
        <div class="admin-content-body">
            <div class="am-cf am-padding am-padding-bottom-0">
                <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">帖子管理</strong> /
                    <small>帖子管理</small>
                </div>
            </div>
            <hr>
            <div class="am-g">
                <!--内容开始-->
                    <div class="am-u-sm-12">
                                <div class="am-panel am-panel-default">
                                    <div class="am-panel-hd am-cf" data-am-collapse="{target: '#collapse-panel-4'}">任务 task<span class="am-icon-chevron-down am-fr" ></span></div>
                                    <div id="collapse-panel-4" class="am-panel-bd am-collapse am-in">
                                        <ul class="am-list admin-content-task">
                                            <li>
                                                <div class="admin-task-meta"> Posted on 25/1/2120 by John Clark</div>
                                                <div class="admin-task-bd">
                                                    The starting place for exploring business management; helping new managers get started and experienced managers get better.
                                                </div>
                                                <div class="am-cf">
                                                    <div class="am-btn-toolbar am-fl">
                                                        <div class="am-btn-group am-btn-group-xs">
                                                            <button type="button" class="am-btn am-btn-default"><span class="am-icon-check"></span></button>
                                                            <button type="button" class="am-btn am-btn-default"><span class="am-icon-pencil"></span></button>
                                                            <button type="button" class="am-btn am-btn-default"><span class="am-icon-times"></span></button>
                                                        </div>
                                                    </div>
                                                    <div class="am-fr">
                                                        <button type="button" class="am-btn am-btn-default am-btn-xs">删除</button>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="admin-task-meta"> Posted on 25/1/2120 by 呵呵呵</div>
                                                <div class="admin-task-bd">
                                                    基兰和狗熊出现在不同阵营时。基兰会获得BUFF，“装甲熊憎恨者”。狗熊会获得BUFF，“时光老人憎恨者”。
                                                </div>
                                                <div class="am-cf">
                                                    <div class="am-btn-toolbar am-fl">
                                                        <div class="am-btn-group am-btn-group-xs">
                                                            <button type="button" class="am-btn am-btn-default"><span class="am-icon-check"></span></button>
                                                            <button type="button" class="am-btn am-btn-default"><span class="am-icon-pencil"></span></button>
                                                            <button type="button" class="am-btn am-btn-default"><span class="am-icon-times"></span></button>
                                                        </div>
                                                    </div>
                                                    <div class="am-fr">
                                                        <button type="button" class="am-btn am-btn-default am-btn-xs">删除</button>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            <div class="am-cf">
                                <ul class="am-pagination am-pagination-centered">
                                    <li><a href="#">«</a></li>
                                    <li><a href="#"> &lt </a></li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">.....</a></li>
                                    <li><a href="#"> &gt </a></li>
                                    <li><a href="#">»</a></li>
                                </ul>
                            </div>
                    </div>
            </div>
        </div>
        <!-- content end   -->

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