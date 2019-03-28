<?php
/**
 * Created by PhpStorm.
 * User: 旭
 * Date: 2019/3/25
 * Time: 12:00
 */

namespace app\index\controller;


use think\Controller;

class Order extends Controller
{

    public function order(){
        return $this->fetch();
    }
}