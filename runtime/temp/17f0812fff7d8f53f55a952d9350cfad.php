<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:85:"C:\wamp64\www\work\minshop\public/../application/index\view\usermanagement\index.html";i:1558350963;s:72:"C:\wamp64\www\work\minshop\application\index\view\public\headerFile.html";i:1553500178;s:66:"C:\wamp64\www\work\minshop\application\index\view\public\head.html";i:1558066973;s:69:"C:\wamp64\www\work\minshop\application\index\view\public\sidebar.html";i:1558352373;s:74:"C:\wamp64\www\work\minshop\application\index\view\public\footerJsFile.html";i:1553913178;}*/ ?>
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
            <li><a href="#"><span class="am-icon-home">查看主页</span></a></li>
            <li><a href="javascript:;"><span class="am-icon-info-circle"></span> 消息 <span
                    class="am-badge am-badge-warning">5{}</span></a></li>
            <li class="am-dropdown" data-am-dropdown>
                <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
                    <span class="am-icon-users"></span> 管理员{} <span class="am-icon-caret-down"></span>
                </a>
                <ul class="am-dropdown-content">
                    <li><a href="#"><span class="am-icon-cog"></span> 设置</a></li>
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
            <li><a href="<?php echo url('index/home/index'); ?>"><span class="am-icon-home"></span> 首页</a></li>
            <li>
                <a class="am-cf" data-am-collapse="{target: '#user-nav'}">
                    <span class="am-icon-group"></span> 用户管理 <span
                        class="am-icon-angle-right am-fr am-margin-right"></span>
                </a>
                <ul class="am-list am-collapse admin-sidebar-sub" id="user-nav">
                    <li><a href="<?php echo url('index/usermanagement/index'); ?>" class="am-cf">用户列表</a>
                    </li>
                </ul>
            </li>
            <li>
                <a class="am-cf" data-am-collapse="{target : '#shop-nav'}">
                    <span class="am-icon-shopping-bag"></span>商品管理<span
                        class="am-icon-angle-right am-fr am-margin-right"></span>
                </a>
                <ul class="am-list am-collapse admin-sidebar-sub" id="shop-nav">
                    <li><a href="<?php echo url('index/commodity/management'); ?>" class="am-cf">商品管理</a></li>
                    <li><a href="<?php echo url('index/commodity/classification'); ?>" class="am-cf">商品分类</a></li>
                </ul>
            </li>
            <li>
                <a class="am-cf" data-am-collapse="{target : '#power-nav'}">
                    <span class="am-icon-user"></span>权限控制<span
                        class="am-icon-angle-right am-fr am-margin-right"></span>
                </a>
                <ul class="am-list am-collapse admin-sidebar-sub" id="power-nav">
                    <li><a href="#" class="am-cf">管理员列表</a></li>
                    <li><a href="#" class="am-cf">角色管理</a></li>
                    <li><a href="#" class="am-cf">权限分配</a></li>
                </ul>
            </li>
            <li>
                <a class="am-cf" data-am-collapse="{target : '#order-nav'}">
                    <span class="am-icon-first-order"></span>订单管理<span
                        class="am-icon-angle-right am-fr am-margin-right"></span>
                </a>
                <ul class="am-list am-collapse admin-sidebar-sub" id="order-nav">
                    <li><a href="#" class="am-cf">订单管理</a></li>
                </ul>
            </li>

            <li>
                <a class="am-cf" data-am-collapse="{target : '#region-nav'}">
                    <span class="am-icon-home"></span>城市管理<span
                        class="am-icon-angle-right am-fr am-margin-right"></span>
                </a>
                <ul class="am-list am-collapse admin-sidebar-sub" id="region-nav">
                    <li><a href="#" class="am-cf">城市列表管理</a></li>
                </ul>
            </li>


            <li><a href="<?php echo url('index/order/order'); ?>"><span class="am-icon-table"></span> 表格</a></li>
            <li><a href="#"><span class="am-icon-pencil-square-o"></span> 表单</a></li>
            <li><a href="<?php echo url('index/login/logout'); ?>"><span class="am-icon-sign-out"></span> 注销</a></li>
        </ul>

        <div class="am-panel am-panel-default admin-sidebar-panel">
            <div class="am-panel-bd">
                <p><span class="am-icon-bookmark"></span> 公告 </p>
                <hr>
                <div class="am-panel-hd">
                    <p>严格要求，精准把控</p>
                </div>

            </div>
        </div>

        <div class="am-panel am-panel-footer ">
            <div class="am-panel-bd">
                <p>  <span class="am-icon-clock-o"> </span> 时间{}</p>
            </div>
        </div>

    </div>
</div>


    <!-- content start -->

    <!-- form start -->
    <div class="admin-content">
        <div class="admin-content-body">
            <div class="am-cf am-padding am-padding-bottom-0">
                <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">用户管理{user}</strong> /
                    <small>用户列表{}</small>
                </div>
            </div>
            <hr>
            <div class="am-g">

                <div class="am-u-sm-12 am-u-md-6">
                    <div class="am-btn-toolbar">
                        <div class="am-btn-group am-btn-group-xs">
                            <button type="button" class="am-btn am-btn-default"><span class="am-icon-save"></span>
                                保存当前操作
                            </button>
                            <button type="button" class="am-btn am-btn-default"><span
                                    class="am-icon-file-excel-o"></span> 导出Excel
                            </button>

                        </div>
                    </div>
                </div>

                <form class="am-form am-form-inline" action="#" method="POST">
                    <div class="am-u-sm-12 am-u-md-6 ">

                        <div class="am-form-group">
                            <input type="text" autocomplete="off" class="am-form-field"
                                   placeholder="姓名/手机/邮箱/昵称"
                                   name="keywords"/>
                        </div>

                        <button type="submit" class="am-btn am-btn-secondary am-btn-sm">查询
                        </button>
                        <label>
                            更多筛选
                            <input class="am-hide" type="checkbox" name="is_more" value="1" id="is_more"/>
                            <i class="am-icon-angle-down"></i>
                        </label>


                    </div>

                    <div class="am-u-sm-12 am-u-md-12">
                        <div class="am-form-group">
                            <label for="select-1"></label>
                            <select id="select-1" class="am-form-field am-radius">
                                <option value="-1">性别 	&nbsp	&nbsp</option>
                                <option value="0">保密</option>
                                <option value="1">女</option>
                                <option value="2">男</option>
                            </select>

                            <span>最近登陆时间:</span>
                            <div class="am-form-group">
                                <input type="text" autocomplete="off" name="time_start" class="am-radius"
                                       placeholder="起始时间"/>

                            </div>
                            <span>~</span>
                            <div class="am-form-group">
                                <input type="text" autocomplete="off" class="am-radius" name="time_end"
                                       placeholder="结束时间"/>
                            </div>
                        </div>
                    </div>
                </form>

                <!--表单开始-->
                <div class="am-g">
                    <div class="am-u-sm-12">
                        <form class="am-form">
                            <table class="am-table am-table-striped am-table-hover table-main">
                                <thead>
                                <tr>
                                    <!--10列-->
                                    <th class="table-id">头像</th>
                                    <th class="table-title">昵称</th>
                                    <th class="table-title">姓名</th>
                                    <th class="table-type">性别</th>
                                    <th class="table-type">邮箱</th>
                                    <th class="table-type">最近一次登陆的时间</th>
                                    <th class="table-type">注册天数</th>
                                    <th class="table-author">作者</th>
                                    <th class="table-date">修改日期</th>
                                    <th class="table-set">操作</th>
                                </tr>
                                </thead>

                                <tr>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>3</td>
                                    <td>4</td>
                                    <td>5 测试1号</td>
                                    <td>6 2014年9月4日 7:28:47</td>
                                    <td>7</td>
                                    <td>8</td>
                                    <td>9</td>
                                    <td>10</td>

                                </tr>


                                <tbody>


                                </tbody>
                            </table>
                            <div class="am-cf">
                                当前共{}条 /共 {} 条记录
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
                        </form>
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