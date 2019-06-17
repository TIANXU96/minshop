<?php
/**
 * Created by PhpStorm.
 * User: 旭
 * Date: 2019/5/20
 * Time: 17:37
 */

namespace app\index\controller;

use think\Controller;
class Index extends Controller
{
    public function index(){


        return $this->fetch();
    }
}