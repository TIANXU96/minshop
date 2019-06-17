<?php
/**
 * Created by PhpStorm.
 * User: 旭
 * Date: 2019/5/23
 * Time: 18:58
 */

namespace app\admin\validate;

use think\Validate;

class Users extends Validate
{
    protected $rule = [
        'users_name|用户昵称' => 'require|chsAlphaNum|length:6,12',
        'password|密码' => 'require|alphaDash|length:6,20',
        'users_phone|手机号' => 'require|length:11|checkPhone',
        'users_email|邮箱' => 'require|email',
        'users_real_name|姓名' => 'require|chs|length:1,10',
        'users_verify|验证码' => 'require|alphaNum|length:5',
    ];
    protected $message = [
        'users_name.require' => ':attribute不能为空',
        'users_name.chsDash' => ':attribute只能是汉字、字母和数字',
        'users_name.length' => ':attribute长度范围6-12',
        'password.length' => ':attribute长度范围6-12',
        'password.require' => ':attribute不能为空',
        'password.alphaDash' => ':attribute只能使用字母和数字下划线_及破折号-',
        'users_phone.length' => ':attribute请输入正确长度',
        'users_phone.require' => ':attribute不能为空',
        'users_email.email' => ':attribute邮箱格式错误',
        'users_real_name.require' => ':attribute不能为空',
        'users_real_name.chs' => ':attribute只能中文',
        'users_real_name.length' => ':attribute长度范围1-10',
        'users_verify.require' => ':attribute不能为空',
        'users_verify.alphaNum' => ':attribute值只能为字母和数字',
        'users_verify.length' => ':attribute长度只能为5',
    ];
    protected $scene = [
        'users_name' => ['users_name'],
        'users_phone' => ['users_phone'],
        'users_email' => ['users_email'],
        'users_real_name' => ['users_real_name'],
        'login' =>['users_name','password'],
        'send_email' =>['users_name','users_email'],
        'find_password' =>['users_name','users_email','users_verify'],
        'add_new' =>['users_name', 'users_email', 'users_phone'],
        'change' => ['users_name', 'password'],
    ];

    protected function checkPhone($value)
    {
        if (preg_match('/^((1[3,5,8][0-9])|(14[5,7])|(17[0,6,7,8])|(19[7]))\d{8}$/', $value)) {
            return true;
        } else {
            return '手机号请输入正确的格式';
        }
    }
}