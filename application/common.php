<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件
function getUrl($request)
{

    echo "<h1>获取URL信息</h1>";
    echo "获取当前域名:<br/>";
    echo 'domain: ' . $request->domain() . '<br/>';
    echo "获取当前入口文件:<br/>";
    echo 'file: ' . $request->baseFile() . '<br/>';
    echo "获取当前URL地址 不含域名:<br/>";
    echo 'url: ' . $request->url() . '<br/>';
    echo "获取包含域名的完整URL地址<br/>";
    echo 'url with domain: ' . $request->url(true) . '<br/>';
    echo "获取当前URL地址 不含QUERY_STRING<br/>";
    echo 'url without query: ' . $request->baseUrl() . '<br/>';
    echo "获取URL访问的ROOT地址:<br/>";
    echo 'root:' . $request->root() . '<br/>';
    echo "获取URL访问的ROOT地址:<br/>";
    echo 'root with domain: ' . $request->root(true) . '<br/>';
    echo "获取URL地址中的PATH_INFO信息:<br/>";
    echo 'pathinfo: ' . $request->pathinfo() . '<br/>';
    echo "获取URL地址中的PATH_INFO信息 不含后缀:<br/>";
    echo 'pathinfo: ' . $request->path() . '<br/>';
    echo "获取URL地址中的后缀信息:<br/>";
    echo 'ext: ' . $request->ext() . '<br/>';
    echo "<h1>获取请求参数</h1>";
    echo '请求方法：' . $request->method() . '<br/>';
    echo '资源类型：' . $request->type() . '<br/>';
    echo '访问ip地址：' . $request->ip() . '<br/>';
    echo '是否AJax请求：' . var_export($request->isAjax(), true) . '<br/>';
    echo '请求参数：';
    dump($request->param());


    echo "当前模块名称是:" . $request->module() . '<br/>';
    echo "当前控制器名称是:" . $request->controller() . '<br/>';
    echo "当前操作名称是:" . $request->action() . '<br/>';

}