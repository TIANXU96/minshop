<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:78:"C:\wamp64\www\work\minshop\public/../application/admin\view\comment\index.html";i:1559272959;s:72:"C:\wamp64\www\work\minshop\application\admin\view\public\headerFile.html";i:1553500178;s:66:"C:\wamp64\www\work\minshop\application\admin\view\public\head.html";i:1559284433;s:69:"C:\wamp64\www\work\minshop\application\admin\view\public\sidebar.html";i:1559094075;s:74:"C:\wamp64\www\work\minshop\application\admin\view\public\footerJsFile.html";i:1553913178;}*/ ?>
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
        <a href="<?php echo url('admin/home/index'); ?>"><strong>Fs</strong>
            <small>二手信息发布平台</small>
        </a>
    </div>
    <!--自适应-->
    <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only"
            data-am-collapse="{target: '#topbar-collapse'}">
        <span class="am-sr-only">导航切换</span>
        <span class="am-icon-bars"></span></button>

    <div class="am-collapse am-topbar-collapse" id="topbar-collapse">


        <ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list">
            <li><a href="<?php echo url('index/home/index'); ?>"><span class="am-icon-home">查看后台</span></a></li>
            <li><a href="<?php echo url('admin/login/login'); ?>"><span class="am-icon-sign-in"></span>登陆</a></li>
            <li class="am-dropdown" data-am-dropdown>
                <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
                    <span class="am-icon-users"></span>用户<span class="am-icon-caret-down"></span>
                </a>
                <ul class="am-dropdown-content">
                    <li><a href="<?php echo url('admin/login/logout'); ?>"><span class="am-icon-sign-out"></span> 注销</a></li>
                </ul>
            </li>
        </ul>

    </div>
</header>

<style type="text/css">
    .big-pic {
        width: 100px;
        height: 100px;
    }
</style>
<div class="am-cf admin-main">
    <div class="admin-sidebar am-offcanvas" id="admin-offcanvas">
    <div class="am-offcanvas-bar admin-offcanvas-bar">
        <ul class="am-list admin-sidebar-list">
            <li><a href="<?php echo url('admin/home/index'); ?>"><span class="am-icon-home"></span> 首页</a></li>
            <li>
                <a class="am-cf" data-am-collapse="{target: '#user-nav'}">
                    <span class="am-icon-group"></span> 浏览帖子 <span
                        class="am-icon-angle-right am-fr am-margin-right"></span>
                </a>
                <ul class="am-list am-collapse admin-sidebar-sub" id="user-nav">
                    <li><a href="<?php echo url('admin/comment/index'); ?>" class="am-cf">浏览帖子</a></li>
                </ul>
            </li>
            <li>
                <a class="am-cf" data-am-collapse="{target : '#shop-nav'}">
                    <span class="am-icon-file"></span>贴子发布<span
                        class="am-icon-angle-right am-fr am-margin-right"></span>
                </a>
                <ul class="am-list am-collapse admin-sidebar-sub" id="shop-nav">
                    <li><a href="<?php echo url('admin/comment/send'); ?>" class="am-cf">贴子发布</a></li>
                </ul>
            </li>

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
    <div class="admin-content">
        <div class="admin-content-body">
            <div class="am-cf am-padding am-padding-bottom-0">
                <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">浏览帖子</strong> /
                    <small>浏览帖子</small>
                </div>
            </div>
            <hr>

            <div class="am-panel-bd am-collapse am-in am-cf" id="collapse-panel-3">
                <ul class="am-comments-list admin-content-comment">
                    <!--循环开始-->
                    <?php if(is_array($post_data) || $post_data instanceof \think\Collection || $post_data instanceof \think\Paginator): $i = 0; $__LIST__ = $post_data;if( count($__LIST__)==0 ) : echo "没有数据" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <li class="am-comment">
                        <a href="#"><img src="/work/minshop/public/static/img/user/default-user-avatar.jpg" alt=""
                                         class="am-comment-avatar" width="48" height="48"></a>
                        <div class="am-comment-main">
                            <header class="am-comment-hd">
                                <div class="am-comment-meta"><a href="#" class="am-comment-author"><?php echo $vo['users_name']; ?>:</a> <?php echo $vo['post_head']; ?>
                                    <time class="am-fr"><?php echo $vo['post_create_time']; ?></time>
                                </div>
                            </header>
                            <div class="am-comment-bd"><p><?php echo $vo['post_desn']; ?></p>
                            </div>
                            <a href="#"><img id="small_pic"
                                             src="<?php echo $vo['post_picture_url']; ?>"
                                             alt="" class="big-pic"  width="50%" height="50%"></a>
                            <hr>
                            <div class="am-comment-meta">

                               <span class="am-icon-mail-reply"><b>Email:</b><?php echo $vo['users_email']; ?></span>
                                <span class="am-icon-phone"><b>TEL:</b><?php echo $vo['users_phone']; ?></span>
                            </div>
                        </div>



                    </li>
                    <?php endforeach; endif; else: echo "没有数据" ;endif; ?>


                </ul>

            </div>

        </div>
    </div>
    <!-- content end   -->
</div>

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
    $('img#small_pic').on('click', function () {
        $(this).toggleClass();
    });
</script>
</body>
</html>