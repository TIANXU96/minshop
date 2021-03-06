<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:81:"C:\wamp64\www\work\minshop\public/../application/index\view\users\management.html";i:1559146455;s:72:"C:\wamp64\www\work\minshop\application\index\view\public\headerFile.html";i:1553500178;s:66:"C:\wamp64\www\work\minshop\application\index\view\public\head.html";i:1559272650;s:69:"C:\wamp64\www\work\minshop\application\index\view\public\sidebar.html";i:1559058034;s:74:"C:\wamp64\www\work\minshop\application\index\view\public\footerJsFile.html";i:1553913178;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <!--引入头文件-->
    <meta charset="UTF-8">
<title>用户管理</title>
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

    <!-- form start -->
    <div class="admin-content">
        <div class="admin-content-body">
            <div class="am-cf am-padding am-padding-bottom-0">
                <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg"><?php echo $title; ?></strong> /
                    <small><?php echo $small_title; ?></small>
                </div>
            </div>
            <hr>
            <div class="am-g">


                <form class="am-form am-form-inline" action="#" method="POST" id="select_users_form">
                    <!--第一部分-->
                    <div class="am-u-md-9">
                        <div class="am-form-group">
                            <label for="select_name">查询条件:</label>
                            <select id="select_name" class="am-form-field am-radius" data-am-selected>
                                <option value="0">姓名</option>
                                <option value="1">手机号</option>
                                <option value="2">邮箱</option>
                                <option value="3">昵称</option>
                            </select>
                        </div>

                        <div class="am-form-group">
                            <input type="text" autocomplete="off" class="am-form-field"
                                   placeholder="姓名/手机/邮箱/昵称"
                                   id="select_input_item"/>
                        </div>

                        <button type="button" class="am-btn am-btn-secondary am-btn-sm" id="ajax_select_form">查询
                        </button>
                        <label>
                            更多筛选 <input class="am-checkbox" type="checkbox" value="on"
                                        id="more_select"/>
                        </label>
                    </div>
                    <!--第二部分-->
                    <div class="am-g">
                        <div class="am-u-sm-12 am-u-md-12"><p></p></div>
                        <div class="am-u-sm-12 am-u-md-12" id="select_more_option">
                            <div class="am-form-group">
                                <label for="select_gender"></label>
                                <select id="select_gender" class="am-form-field am-radius" data-am-selected>
                                    <option value="0">保密</option>
                                    <option value="1">女</option>
                                    <option value="2">男</option>
                                </select>
                                <label for="select_state"></label>
                                <select id="select_state" class="am-form-field am-radius" data-am-selected>
                                    <option value="0">自由发言</option>
                                    <option value="1">禁言</option>
                                    <option value="2">永久封号</option>
                                </select>
                                <span>最近一次登陆时间:</span>
                                <!--时间插件-->
                                <div class="am-form-group">
                                    <input type="text" autocomplete="off" id="select_time_start" class="am-radius"
                                           placeholder="起始时间" data-am-datepicker readonly required/>
                                </div>
                                <span>~~</span>
                                <div class="am-form-group">
                                    <input type="text" autocomplete="off" id="select_time_end" class="am-radius"
                                           placeholder="结束时间" data-am-datepicker readonly required/>
                                </div>
                            </div>
                        </div>
                    </div>

                </form>

                <!--表单开始-->
                <div class="am-g">
                    <div class="am-u-sm-12">
                        <!--表单开始-->
                        <form class="am-form" action="#" method="post">
                            <table class="am-table am-table-striped am-table-hover table-main">
                                <thead>
                                <tr>
                                    <!--10列-->
                                    <th>头像</th>
                                    <th>昵称</th>
                                    <th>姓名</th>
                                    <th>性别</th>
                                    <th>电话</th>
                                    <th>邮箱</th>
                                    <th>最近一次登陆的时间</th>
                                    <th>状态</th>
                                    <th>操作</th>
                                </tr>
                                </thead>
                                <tbody id="empty_create_form">
                                <?php if(is_array($res) || $res instanceof \think\Collection || $res instanceof \think\Paginator): $i = 0; $__LIST__ = $res;if( count($__LIST__)==0 ) : echo "没有数据" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                <tr id="create_form">
                                    <td>
                                        <img src="/work/minshop/public/static/img/user/default-user-avatar.jpg"
                                             width="60px" height="60px" alt="Head portrait"/></td>
                                    <td id="<?php echo $vo['users_id']; ?>"><?php echo $vo['users_name']; ?></td>
                                    <td><?php echo $vo['users_real_name']; ?></td>
                                    <td class="users_gender_change"><?php echo $vo['users_gender']; ?></td>
                                    <td><?php echo $vo['users_phone']; ?></td>
                                    <td><?php echo $vo['users_email']; ?></td>
                                    <td><?php echo $vo['users_last_landing']; ?></td>
                                    <td class="users_state_change"><?php echo $vo['users_state']; ?></td>
                                    <td>
                                        <div class="am-btn-toolbar">
                                            <div class="am-btn-group am-btn-group-xs">
                                                <button class="am-btn am-btn-warning am-btn-xs am-text-warning"
                                                        type="button" id="edit_1" value="<?php echo $vo['users_id']; ?>">
                                                    <span>禁言</span>
                                                </button>
                                                <button class="am-btn am-btn-success am-btn-xs am-text-success"
                                                        type="button" id="edit_2" value="<?php echo $vo['users_id']; ?>">
                                                    <span>自由发言</span>
                                                </button>
                                                <button class="am-btn am-btn-danger am-btn-xs am-text-danger"
                                                        type="button" id="edit_3" value="<?php echo $vo['users_id']; ?>">
                                                    <span>封号</span>
                                                </button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach; endif; else: echo "没有数据" ;endif; ?>
                                </tbody>
                            </table>
                        </form>
                        <div class="am-cf " id="pagination">
                            <?php echo $res->render(); ?>
                            <p class="am-text-center">当前页面显示<?php echo $long; ?>条 /共 <?php echo $item; ?> 条记录</p>
                        </div>


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
        <script type="text/javascript">
            //生成额外选择条件
            $(function () {
                $("#pagination").children('ul').attr('class', 'am-pagination am-pagination-centered');
                $("#select_more_option").hide();
                $("#more_select").click(function () {
                    $("#select_more_option").toggle();
                });
            });
            //改变用户状态
            $(function () {
                $("td.users_state_change").each(function () {
                    var res = parseInt($(this).text());
                    switch (res) {
                        case 0 :
                            $(this).text('自由发言');
                            break;
                        case 1 :
                            $(this).text('禁言');
                            break;
                        case 2 :
                            $(this).text('封号');
                            break;
                        default :
                            break;
                    }
                });
            });
            //改变用户性别
            $(function () {
                $("td.users_gender_change").each(function () {
                    var res = parseInt($(this).text());
                    switch (res) {
                        case 0 :
                            $(this).text('保密');
                            break;
                        case 1 :
                            $(this).text('女');
                            break;
                        case 2 :
                            $(this).text('男');
                            break;
                        default :
                            break;
                    }
                });
            });
            //ajax改变用户状态

            $("button#edit_1").on("click", function () {
                var users_id = $(this).val();
                $.ajax({
                    url: '<?php echo url("index/users/ajax_update_state"); ?>',
                    data: {
                        'users_id': users_id,
                        'edit_order': 1,
                    },
                    type: "POST",
                    dataType: "JSON",
                    success: function (result) {
                        var arr_key = Object.keys(result);
                        switch (arr_key['0']) {
                            case 'success_update':
                                alert('操作成功');
                                window.location.reload();
                                break;
                            case 'same_state':
                                alert(result['same_state']);

                                break;
                            case 'no_item':
                                alert(result['success_update']);
                                break;

                        }
                    }
                });
            });


            $("button#edit_2").on("click", function () {
                var users_id = $(this).val();
                $.ajax({
                    url: '<?php echo url("index/users/ajax_update_state"); ?>',
                    data: {
                        'users_id': users_id,
                        'edit_order': 0,
                    },
                    type: "POST",
                    dataType: "JSON",
                    success: function (result) {
                        var arr_key = Object.keys(result);
                        switch (arr_key['0']) {
                            case 'success_update':
                                alert('操作成功');
                                window.location.reload();
                                break;
                            case 'same_state':
                                alert(result['same_state']);

                                break;
                            case 'no_item':
                                alert(result['success_update']);
                                break;

                        }
                        console.log(arr_key);
                    }
                });
            });


            $("button#edit_3").on("click", function () {
                var users_id = $(this).val();
                $.ajax({
                    url: '<?php echo url("index/users/ajax_update_state"); ?>',
                    data: {
                        'users_id': users_id,
                        'edit_order': 2,
                    },
                    type: "POST",
                    dataType: "JSON",
                    success: function (result) {
                        var arr_key = Object.keys(result);
                        switch (arr_key['0']) {
                            case 'success_update':
                                alert('操作成功');
                                window.location.reload();
                                break;
                            case 'same_state':
                                alert(result['same_state']);

                                break;
                            case 'no_item':
                                alert(result['success_update']);
                                break;

                        }
                        console.log(arr_key);
                    }
                });
            });

        </script>
        <script type="text/javascript">
            //ajax生成查询结果
            $(function () {
                $("#ajax_select_form").click(function () {
                    // 获取要查询的数据的类型
                    var find_item_class = $('#select_name option:selected').val();
                    switch (parseInt(find_item_class)) {
                        case 0:
                            var user_real_name = $('#select_input_item').val();
                            break;
                        case 1:
                            var user_tel = $('#select_input_item').val();
                            break;
                        case 2:
                            var user_email = $('#select_input_item').val();
                            break;
                        case 3:
                            var user_name = $('#select_input_item').val();
                            break;
                        default:
                            alert('hello');
                            break;

                    }
                    if ($('#more_select:checked').val()) {
                        var gender = $('#select_gender option:selected').val();
                        var state = $('#select_state option:selected').val();
                        var start_time = $('#select_time_start').val();
                        var end_time = $('#select_time_end').val();
                    }
                    $.ajax({
                        url: '<?php echo url("index/Users/ajax_update_form"); ?>',
                        data: {
                            'find_item_class': find_item_class,
                            'users_name': user_name,
                            'users_real_name': user_real_name,
                            'users_gender': gender,
                            'users_phone': user_tel,
                            'users_email': user_email,
                            'users_state': state,
                            'users_start_time': start_time,
                            'users_end_time': end_time,

                        },
                        type: "POST",
                        dataType: "JSON",
                        success: function (result) {
                            var arr = Object.keys(result);
                            console.log(arr.length);
                            console.log(result);
                            switch (arr['0']) {
                                case 'no_item':
                                    alert(result['no_item']);
                                    break;
                                case 'error_time':
                                    alert(result['error_time']);
                                    break;
                                case 'error_real_name':
                                    alert(result['error_real_name']);
                                    break;
                                case 'error_users_phone':
                                    alert(result['error_users_phone']);
                                    break;
                                case 'error_users_email':
                                    alert(result['error_users_email']);
                                    break;
                                case 'error_users_name':
                                    alert(result['error_users_name']);
                                    break;
                                default:
                                    //输出结果
                                    $('#empty_create_form').empty();
                                    $('div#pagination').remove();
                                    var form_result = Object.keys(result);
                                    for (var i = 0; i < form_result.length; i++) {
                                        //important id 要唯一 不然会叠加
                                        var t_str = $('<tr id=create_form_' + result[form_result[i]]['users_id'] + '></tr>');
                                        $('#empty_create_form').append(t_str);
                                        var text_pic = $('<td><img src="/work/minshop/public/static/img/user/default-user-avatar.jpg" width="60px" height="60px" alt="Head portrait"></td>');
                                        var text_name = $('<td></td>').text(result[form_result[i]]['users_name']);
                                        var text_real_name = $('<td></td>').text(result[form_result[i]]['users_real_name']);
                                        var text_gender = $('<td class="users_gender_change"></td>').text(result[form_result[i]]['users_gender']);
                                        var text_phone = $('<td></td>').text(result[form_result[i]]['users_phone']);
                                        var text_email = $('<td></td>').text(result[form_result[i]]['users_email']);
                                        var text_last_landing = $('<td></td>').text(result[form_result[i]]['users_last_landing']);
                                        var text_state = $('<td class="users_state_change"></td>').text(result[form_result[i]]['users_state']);
                                        var text_button = $('<td><div class="am-btn-toolbar"><div class="am-btn-group am-btn-group-xs">' +
                                            '<button class="am-btn am-btn-warning am-btn-xs am-text-warning" type="button" id="edit_1">' +
                                            '<span>禁言</span> </button>' +
                                            '<button class="am-btn am-btn-success am-btn-xs am-text-success" type="button" id="edit_2">' +
                                            '<span>自由发言</span> </button>' +
                                            '<button class="am-btn am-btn-danger am-btn-xs am-text-danger" type="button" id="edit_3">' +
                                            '<span>封号</span> </button>' +
                                            '</div></div></td>');
                                        $('#create_form_' + result[form_result[i]]['users_id']).append(text_pic, text_name, text_real_name, text_gender, text_phone, text_email, text_last_landing, text_state, text_button);
                                        $('button#edit_1').attr('value', result[form_result[i]]['users_id']);
                                        $('button#edit_2').attr('value', result[form_result[i]]['users_id']);
                                        $('button#edit_3').attr('value', result[form_result[i]]['users_id']);
                                    }
                                    $("td.users_state_change").each(function () {
                                        var res = parseInt($(this).text());
                                        switch (res) {
                                            case 0 :
                                                $(this).text('自由发言');
                                                break;
                                            case 1 :
                                                $(this).text('禁言');
                                                break;
                                            case 2 :
                                                $(this).text('封号');
                                                break;
                                            default :
                                                break;
                                        }
                                    });
                                    $("td.users_gender_change").each(function () {
                                        var res = parseInt($(this).text());
                                        switch (res) {
                                            case 0 :
                                                $(this).text('保密');
                                                break;
                                            case 1 :
                                                $(this).text('女');
                                                break;
                                            case 2 :
                                                $(this).text('男');
                                                break;
                                            default :
                                                break;
                                        }
                                    });
                                    $("button#edit_1").on("click", function () {
                                        var users_id = $(this).val();
                                        $.ajax({
                                            url: '<?php echo url("index/users/ajax_update_state"); ?>',
                                            data: {
                                                'users_id': users_id,
                                                'edit_order': 1,
                                            },
                                            type: "POST",
                                            dataType: "JSON",
                                            success: function (result) {
                                                var arr_key = Object.keys(result);
                                                switch (arr_key['0']) {
                                                    case 'success_update':
                                                        alert('操作成功');
                                                        window.location.reload();
                                                        break;
                                                    case 'same_state':
                                                        alert(result['same_state']);

                                                        break;
                                                    case 'no_item':
                                                        alert(result['success_update']);
                                                        break;

                                                }
                                            }
                                        });
                                    });
                                    $("button#edit_2").on("click", function () {
                                        var users_id = $(this).val();
                                        $.ajax({
                                            url: '<?php echo url("index/users/ajax_update_state"); ?>',
                                            data: {
                                                'users_id': users_id,
                                                'edit_order': 0,
                                            },
                                            type: "POST",
                                            dataType: "JSON",
                                            success: function (result) {
                                                var arr_key = Object.keys(result);
                                                switch (arr_key['0']) {
                                                    case 'success_update':
                                                        alert('操作成功');
                                                        window.location.reload();
                                                        break;
                                                    case 'same_state':
                                                        alert(result['same_state']);

                                                        break;
                                                    case 'no_item':
                                                        alert(result['success_update']);
                                                        break;

                                                }
                                                console.log(arr_key);
                                            }
                                        });
                                    });
                                    $("button#edit_3").on("click", function () {
                                        var users_id = $(this).val();
                                        $.ajax({
                                            url: '<?php echo url("index/users/ajax_update_state"); ?>',
                                            data: {
                                                'users_id': users_id,
                                                'edit_order': 2,
                                            },
                                            type: "POST",
                                            dataType: "JSON",
                                            success: function (result) {
                                                var arr_key = Object.keys(result);
                                                switch (arr_key['0']) {
                                                    case 'success_update':
                                                        alert('操作成功');
                                                        window.location.reload();
                                                        break;
                                                    case 'same_state':
                                                        alert(result['same_state']);

                                                        break;
                                                    case 'no_item':
                                                        alert(result['success_update']);
                                                        break;

                                                }
                                                console.log(arr_key);
                                            }
                                        });
                                    });
                                    break;
                            }
                        }
                    });
                });
            });

        </script>


</body>
</html>