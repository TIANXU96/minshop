<?php

namespace app\index\controller;

use app\index\validate\User;
use app\index\model\Users;
use think\Controller;
use think\Loader;
use think\Request;
use think\Session;

class Login extends Controller
{
    public function login()
    {
        if (Session::has("users_name") && Session::has("users_id")) {
            $this->redirect("index/index/index");
        } else {
            dump(Session::get('users_name'));
            return $this->fetch();
        }
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
            $judgement = $this->validate($data, 'User.login');
            $ajax_res = [];
            if (true !== $judgement) {
                $ajax_res = [
                    'id' => 0,
                    'mes' => $judgement
                ];
                return $ajax_res;
            } else {
                //判断用户名是否存在
                $map = [];
                $map['users_name'] = ['=', $username];
                $res = Loader::model('Users')
                    ->where($map)
                    ->find();
                if (empty($res)) {
                    $ajax_res = [
                        'id' => 1,
                        'mes' => '用户不存在'
                    ];
                    return $ajax_res;
                } else {
                    $sqldata = $res->getData();
                    if ($sqldata['users_password'] !== md5($pwd)) {
                        $ajax_res = [
                            'id' => 2,
                            'mes' => '密码错误'
                        ];
                    } else {
                        //写入session
                        Session::set('users_id', $sqldata['users_id']);
                        Session::set('users_name', $sqldata['users_name']);
                        Session::set('users_password', $sqldata['users_password']);
                        Session::set('users_status', $sqldata['users_status']);
                        $ajax_res = [
                            'id' => 3,
                            'mes' => '登陆成功'
                        ];
                        return $ajax_res;
                    }
                }
            }
        }


    }


    public function logout()
    {
//注销session
        Session::clear();
        $this->redirect('index/login/login');
//跳转登陆页面
    }


}