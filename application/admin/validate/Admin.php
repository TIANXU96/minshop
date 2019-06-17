<?php

namespace app\admin\validate;

use think\Validate;

class Admin extends Validate
{
    protected $rule = [
        'username|用户名' => 'require|chsDash|length:6,20',
        'password|密码' => 'require|alphaDash|length:6,20',
        'admin_email|邮箱' => 'email|require',
        'admin_verify|验证码' => 'require|alphaNum|length:5',
        'admin_phone|手机号' => 'require|length:11|checkPhone',
    ];
    protected $message = [
        'username.require' => ':attribute不能为空',
        'username.chsDash' => ':attribute只允许汉字、字母、数字和下划线_及破折号-',
        'username.length' => ':attribute长度范围6-20',
        'password.require' => ':attribute不能为空',
        'password.alphaDash' => ':attribute只能使用字母和数字下划线_及破折号-',
        'password.length' => ':attribute长度范围6-20',
        'admin_email.email' => ':attribute邮箱格式错误',
        'admin_email.require' => ':attribute不能为空',
        'admin_verify.require' => ':attribute不能为空',
        'admin_verify.alphaNum' => ':attribute值只能为字母和数字',
        'admin_verify.length' => ':attribute长度只能为5',
        'admin_phone.length' => ':attribute请输入正确长度',
        'admin_phone.require' => ':attribute不能为空',

    ];
    protected $scene = [
        'login' => ['username', 'password'],
        'send_email' => ['admin_email', 'username'],
        'find_password' => ['admin_email', 'username', 'admin_verify'],
        'change' => ['username', 'password'],
        'add_new' => ['username', 'admin_email', 'admin_phone'],

    ];

    // 自定义规则
    protected function checkPhone($value)
    {
        if (preg_match('/^((1[3,5,8][0-9])|(14[5,7])|(17[0,6,7,8])|(19[7]))\d{8}$/', $value)) {
            return true;
        } else {
            return '手机号请输入正确的格式';
        }
    }
}