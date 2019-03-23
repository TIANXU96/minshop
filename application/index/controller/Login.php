<?php

namespace app\index\controller;

use app\index\validate\User;
use app\index\model\Users;
use think\Controller;
use think\Loader;
use think\Request;
use think\View;

class Login extends Controller
{
    public function login()
    {
        $request = Request::instance();


//查看当前的 模块 @控制器 操作
        getParameter($request);
        return $this->fetch();
    }


    public function ajaxLogin()
    {
        //获取登陆页面数据
        $request = Request::instance();
        if ($request->isAjax()) {
            $username = $request->post('username');
            $pwd = $request->post('pwd');
            $data = [
                'username' => $username,
                'password' => $pwd
            ];
            $res = $this->validate($data, 'User.login');
            if (true !== $res) {
                $this->assign('wrong', $res);
                return $res;
            } else {
                //判断用户名是否存在
                $map = [];
                $map['users_name'] = ['=', $username];
                $res = Loader::model('Users')
                    ->where($map)
                    ->find();
                if (empty($res)) {
                    return '用户不存在';
                } else {
                    $mesg = $res->getData();
                    if ($mesg['users_password'] !== md5($pwd)) {
                        return '密码错误';
                    } else {
                        return '登陆成功';

                        //                    写入session
                    }
                    //返回执行结果跳转响应页面
                }
            }
        }
    }



}