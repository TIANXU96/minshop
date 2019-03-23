<?php

namespace app\index\validate;

use think\Validate;

class User extends Validate
{
    protected $rule = [
        'username|登录账户' => 'require|chsDash|length:6,20',
        'password|登录密码' => 'require|alphaDash|length:6,20',
        'email|邮箱' => 'email',
        'nickname|真实姓名' => 'require|chs',
    ];
    protected $message = [
        'username.require' => ':attribute不能为空',
        'username.chsDash' => ':attribute只允许汉字、字母、数字和下划线_及破折号-',
        'username.length' => ':attribute长度范围6-20',
        'password.require' => ':attribute不能为空',
        'password.alphaDash' => ':attribute只能使用字母和数字下划线_及破折号-',
        'password.length' => ':attribute长度范围6-20',
        'email' => ':attribute邮箱格式错误',
        'nickname.require' => ':attribute不能为空',
        'nickname.chs' => ':attribute只能中文',
    ];
    protected $scene = [
        'login' => ['username', 'password'],

    ];

    // 自定义规则

}