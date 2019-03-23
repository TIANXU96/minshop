<?php

namespace app\index\controller;

use think\Controller;
use think\Request;
class Index extends Controller
{
    public function index()
    {
        $request = Request::instance();
        getUrl($request);
        echo $request->get('user') . '</ br>';
        echo $request->get('pwd') . '</ br>';
        return $this->fetch();
    }

    public function admin()
    {
        return $this->fetch();
    }


}
