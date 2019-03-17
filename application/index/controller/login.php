<?php
namespace app\index\controller;

use think\Request;
use think\Controller;
class Login extends Controller
{
    public function login()
    {
        $requset = Request::instance();
        getUrl($requset);
        return $this->fetch();

    }
}