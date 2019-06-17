<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:75:"C:\wamp64\www\work\minshop\public/../application/index\view\home\index.html";i:1559138385;s:72:"C:\wamp64\www\work\minshop\application\index\view\public\headerFile.html";i:1553500178;s:66:"C:\wamp64\www\work\minshop\application\index\view\public\head.html";i:1559272650;s:69:"C:\wamp64\www\work\minshop\application\index\view\public\sidebar.html";i:1559058034;s:74:"C:\wamp64\www\work\minshop\application\index\view\public\footerJsFile.html";i:1553913178;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <!--引入头文件-->
    <meta charset="UTF-8">
<title>后台首页</title>
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
        <a href="<?php echo url('index/index/index'); ?>"><strong>F_s</strong>
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
                    <li><a href="<?php echo url('index/Comment/index'); ?>" class="am-cf"> 贴子管理</a></li>
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
    <div class="admin-content">
        <div class="admin-content-body">
            <div class="am-cf am-padding">
                <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">首页</strong> /
                    <small>概述</small>
                </div>
            </div>

            <ul class="am-avg-sm-1 am-avg-md-4 am-margin am-padding am-text-center admin-content-list ">
                <li><a href="#" class="am-text-success"><span
                        class="am-icon-btn am-icon-file-text"></span><br/>总计登陆次数<br/><?php echo $admin_login_total; ?></a></li>
                <li><a href="#" class="am-text-warning"><span
                        class="am-icon-btn am-icon-briefcase"></span><br/>帖子总数<br/><?php echo $total_post; ?></a></li>
                <li><a href="#" class="am-text-secondary"><span
                        class="am-icon-btn am-icon-user-md"></span><br/>总计用户<br/><?php echo $total_users; ?></a></li>
                <li><a href="#" class="am-text-secondary"><span class="am-icon-btn am-icon-user-md"></span><br/>管理员<br/><?php echo $total_admin; ?></a>
                </li>
            </ul>


            <div class="am-g">
                <div class="am-u-md-6">
                    <div class="am-panel am-panel-default">
                        <div class="am-panel-hd am-cf" data-am-collapse="{target: '#new_admin'}">添加新管理员<span
                                class="am-icon-chevron-down am-fr"></span></div>
                        <div class="am-panel-bd am-collapse am-in" id="new_admin">
                            <form action="" class="am-form" data-am-validator>
                                <fieldset>
                                    <legend>添加新管理员</legend>
                                    <div class="am-form-group">
                                        <label for="new_admin_name">用户名：</label>
                                        <input type="text" id="new_admin_name" minlength="6"
                                               placeholder="输入需要重置的用户名6-20位" required/>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="new_admin_mobile">电话号码：</label>
                                        <input type="text" id="new_admin_mobile" placeholder="请输入电话号码"
                                               pattern="^1[34578]\d{9}$" required/>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="new_admin_email">邮箱：</label>
                                        <input type="email" id="new_admin_email" placeholder="输入邮箱"
                                               pattern="^(\w-*\.*)+@(\w-?)+(\.\w{2,})+$" required/>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="new_admin_gender">选择性别</label>
                                        <select id="new_admin_gender" required>
                                            <option value="0">保密</option>
                                            <option value="1">女</option>
                                            <option value="2">男</option>
                                        </select>
                                    </div>
                                    <button class="am-btn am-btn-secondary" type="button" id="ajax_new_admin">提交
                                    </button>
                                    <span class="am-text-danger" id="get_back_info"></span>
                                </fieldset>
                            </form>
                        </div>
                    </div>

                </div>

                <div class="am-u-md-6">
                    <div class="am-panel am-panel-default">
                        <div class="am-panel-hd am-cf" data-am-collapse="{target: '#collapse-panel-4'}">欢迎:<?php echo $admin_name; ?></div>
                        <div id="collapse-panel-4" class="am-panel-bd am-collapse am-in">
                            <h1> 欢迎</h1>
                            <br>
                            <div class="am-panel-bd am-in">
                                <span class="am-icon-user"> <b><?php echo $admin_role; ?>:</b><?php echo $admin_name; ?></span>
                            </div>
                            <div class="am-panel-bd am-in">
                                <span class="am-icon-mail-reply"> <b>Email:</b><?php echo $admin_email; ?></span>

                            </div>
                            <div class="am-panel-bd am-in">
                                <span class="am-icon-phone-square"> <b>TEL:</b><?php echo $admin_mobile; ?></span>
                            </div>

                        </div>
                    </div>
                </div>

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
    $("#ajax_new_admin").click(function () {
        var admin_name = $('#new_admin_name').val();
        var admin_mobile = $('#new_admin_mobile').val();
        var admin_email = $('#new_admin_email').val();
        var admin_gender = $('#new_admin_gender option:selected').val();
        $.ajax({
            url: '<?php echo url("index/home/create_new_admin"); ?>',
            data: {
                'admin_name': admin_name,
                'admin_mobile': admin_mobile,
                'admin_email': admin_email,
                'admin_gender': admin_gender,
            },
            type: "POST",
            dataType: "JSON",
            success: function (result) {

                var arr = Object.keys(result);
                switch (arr[0]) {
                    case 'pass':
                        $("#get_back_info").attr("class", "am-text-danger am-icon-info-circle").html(result[arr[0]]);

                        break;
                    case 'sql_wrong':
                        $("#get_back_info").attr("class", "am-text-danger am-icon-info-circle").html(result[arr[0]]);

                        break;
                    case 'admin_email_occupy':
                        $("#get_back_info").attr("class", "am-text-danger am-icon-info-circle").html(result[arr[0]]);

                        break;
                    case 'admin_mobile_occupy':
                        $("#get_back_info").attr("class", "am-text-danger am-icon-info-circle").html(result[arr[0]]);

                        break;
                    case 'admin_name_occupy':
                        $("#get_back_info").attr("class", "am-text-danger am-icon-info-circle").html(result[arr[0]]);

                        break;
                    case 'judgement':
                        $("#get_back_info").attr("class", "am-text-danger am-icon-info-circle").html(result[arr[0]]);

                        break;
                    default:
                        //nothing
                        break;
                }
            }
        });
    });
</script>

</body>
</html>