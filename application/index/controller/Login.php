<?php

namespace app\index\controller;

use app\index\model\Adminsql;
use app\index\model\Rolesql;
use app\index\model\Userdata;
use think\Controller;
use think\Loader;
use think\process\pipes\Unix;
use think\Request;
use think\Session;
use phpmailer\PHPMailer;

class Login extends Controller
{
    public function login()
    {
        if (Session::has("admin_name") && Session::has("admin_id")) {
            $this->redirect("index/home/index");
        } else {
            return $this->fetch();
        }
    }

    public function logout()
    {
//注销session
        Session::clear();
        $this->redirect('index/login/login');
//跳转登陆页面
    }

    public function find()
    {
        return $this->fetch();
    }

    public function ajaxLogin()
    {
        //获取登陆页面数据
        $request = Request::instance();
        if ($request->isAjax()) {
            $admin_name = $request->post('username');
            $admin_pwd = $request->post('pwd');
            $data = [
                'username' => $admin_name,
                'password' => $admin_pwd
            ];
            $judgement = $this->validate($data, 'Admin.login');
            $ajax_res = [];
            if (true !== $judgement) {
                $ajax_res = [
                    'id' => 0,
                    'mes' => $judgement
                ];
                return $ajax_res;
            } else {
                //判断用户名是否存在
                $map['admin_name'] = ['=', $admin_name];
                $res = Adminsql::where($map)->find();
                if (empty($res)) {
                    $ajax_res = [
                        'id' => 1,
                        'mes' => '用户不存在'
                    ];
                    return $ajax_res;
                } else {
                    $sql_data = $res->getData();
                    if ($sql_data['admin_password'] !== md5($admin_pwd)) {
                        $ajax_res = [
                            'id' => 2,
                            'mes' => '密码错误'
                        ];
                        return $ajax_res;
                    } else {
                        //写入session
                        Session::set('admin_id', $sql_data['admin_id']);
                        Session::set('admin_name', $sql_data['admin_name']);
                        Session::set('admin_password', $sql_data['admin_password']);
                        Session::set('admin_mobile', $sql_data['admin_mobile']);
                        Session::set('admin_role_id', $sql_data['admin_role_id']);
                        Session::set('admin_email', $sql_data['admin_email']);
                        Session::set('admin_login_total', $sql_data['admin_login_total']);
                        $ajax_res = [
                            'id' => 3,
                            'mes' => '登陆成功'
                        ];

//                        更新数据库状态
                        $update_where['admin_name'] = ['=', $admin_name];
                        $admin_login_total = (int)$sql_data['admin_login_total'] + 1;
                        $admin_last_landing = date('Y-m-d H:i:s', time());
                        $update_data = [
                            'admin_login_total' => $admin_login_total,
                            'admin_last_landing' => $admin_last_landing,
                        ];
                        $sql_res = Adminsql::where($update_where)->update($update_data);

                        return $ajax_res;
                    }
                }
            }

        }


    }

    public function sendEmail()
    {
        $request = Request::instance();
        if ($request->isAjax()) {
//            存放查询条件
            $map = [];

            $admin_name = $request->post('admin_name');
            $admin_email = $request->post('admin_email');
            $data = [
                'username' => $admin_name,
                'admin_email' => $admin_email
            ];

//          将数据进行校验
            $judgement = $this->validate($data, 'Admin.send_email');
            if (true === $judgement) {
//                    与数据库进行比对
                $map['admin_email'] = ['=', $admin_email];
                $map['admin_name'] = ['=', $admin_name];
                $sql_res = Adminsql::where($map)->select();
                if (!empty($sql_res)) {
                    $mail = new PHPMailer();
                    //验证码已经生成
                    $identify = verifyCode();
//                  接受验证码的邮箱
                    $to = $admin_email;
                    //允许使用html语言 返回内容
                    $content = '<p style="color:#1576c2">[Min-Shop]<p/><hr/><p>尊敬的用户:' . $admin_name . '以下是你的账户重置密码所需的验证码:</p><br/>';
                    $content .= '<b style="background-color: cornflowerblue">' . $identify . '</b>';
                    $content .= '<br/><p>' . date('Y-m-d H:i:s', time()) . '验证码有效期2分钟</p>';
//                    $res = email($to, $content, "[Min-Shop]验证码", $mail);
//                    if ($res == false) {
//                    } else {
//                        $error_res['send_res'] = '邮件格式输入有问题,请检查' . $res;
//                        return $error_res;
//                    }
//                        判断是否存在session
//                        Session::delete('email_verify');  // 功能:只发送新的验证码 用于测试
                    if (Session::has('email_verify')) {
//                            存在判断是否超时 获取session中的时间戳 跟现在作比较
                        $get_session = Session::get('email_verify');
                        $in_session_time_stamp = explode("|", $get_session);
                        $create_time = (int)$in_session_time_stamp[1];
                        if ((time() - $create_time) <= 180) {
//                      没有超时 则不用创建session 也不用销毁session
                            $pass['not_expire'] = '验证码已经发送请不要重复提交';
                            return $pass;
                        } else {
//                                超时 销毁session并创建新session
                            email($to, $content, "[Min-Shop]验证码", $mail);
                            Session::delete('email_verify');
                            $now = time();
//                               session中存放用户名 好做定位
                            $identify_time_stamp = $identify . '|' . $now . '|' . $admin_name;
                            Session::set('email_verify', $identify_time_stamp);
                            $pass['pass'] = '验证码已经发送请注意查收,验证码有效期2分钟,请注意时间';
                            return $pass;
                        }
                    } else {
//                            不存在时直接创建
                        email($to, $content, "[Min-Shop]验证码", $mail);
                        $now = time();
                        $identify_time_stamp = $identify . '|' . $now . '|' . $admin_name;
                        Session::set('email_verify', $identify_time_stamp);
                        $pass['pass'] = '验证码已经发送请注意查收,验证码有效期2分钟,请注意时间';
                        return $pass;
                    }

                } else {
                    $error_res['sql_res'] = '用户名邮箱不匹配,请检查';
                    return $error_res;
                }
            } else {
                $error_res['validate_res'] = $judgement;
                return $error_res;

            }

        }
    }

    public function ajax_jump_find()
    {
        $request = Request::instance();
        if ($request->isAjax()) {
            $admin_name = $request->post('admin_name');
            $admin_email = $request->post('admin_email');
            $admin_verify = $request->post('admin_verify');
            $data = [
                'username' => $admin_name,
                'admin_email' => $admin_email,
                'admin_verify' => $admin_verify
            ];
            $judgement = $this->validate($data, 'Admin.find_password');
//          数据校验通过
            if (true === $judgement) {
                $get_session = Session::get('email_verify');
                $in_session_time_stamp = explode("|", $get_session);
                $email_code = $in_session_time_stamp[0];
                $create_time = (int)$in_session_time_stamp[1];
                $session_admin_name = $in_session_time_stamp[2];
//              存在判断是否超时 获取session中的时间戳,用户名信息 进行比对

                if ((time() - $create_time) <= 180) {
//              没有超时 则不用创建session 也不用销毁session
                    if ($session_admin_name == $admin_name) {
                        if ($email_code == $admin_verify) {
                            $pass['pass'] = 'jump';
                            return $pass;
                        }else{
                            $error_res['not_same'] = '验证码输入错误';
                            return $error_res;
                        }
                    } else {
//              用户名不匹配
                        $error_res['wrong_admin_name'] = '用户名码错误!';
                        return $error_res;
                    }
                } else {
//              超时 销毁session
                    Session::delete('email_verify');
                    $error_res['expire'] = '验证码已经超时,请重新获取!';
                    return $error_res;
                }
            } else {
                $error_res['validate_res'] = $judgement;
                return $error_res;
            }
        }
    }


    public function change()
    {
        return $this->fetch();
    }

    public function ajax_change()
    {
        $request = Request::instance();
        if ($request->isAjax()) {
            $admin_name = $request->post('admin_name');
            $password_1 = $request->post('password_1');
            $password_2 = $request->post('password_2');
            $data = [
                'username' => $admin_name,
                'password' => $password_1,
            ];
            if ($password_1 == $password_2) {
                $judgement = $this->validate($data, 'Admin.change');
                if (true === $judgement) {

                    if (Session::has('email_verify')) {
                        $get_session = Session::get('email_verify');
                        $in_session_time_stamp = explode("|", $get_session);
                        $create_time = (int)$in_session_time_stamp[1];
                        $session_admin_name = $in_session_time_stamp[2];

                        if ($session_admin_name == $admin_name) {
                            if ((time() - $create_time) <= 180) {
                                $where['admin_name'] = ['=', $admin_name];
                                $sql_data = [
                                    'admin_password' => md5($password_1),
                                ];
                                $sql_update = Adminsql::where($where)->update($sql_data);
                                $success['pass'] = '更新完成,请登录';
                                Session::delete('email_verify');
                                return $success;
                            } else {
                                Session::delete('email_verify');
                                $error_res['verify_time_pass'] = '操作超时,请重新获取验证码';
                                return $error_res;
                            }

                        } else {
                            $error_res['admin_name_error'] = '当前用户名输入错误';
                            return $error_res;
                        }

                    } else {
                        $error_res['no_verify_email'] = '操作超时,请重新获取验证码';
                        return $error_res;
                    }
                } else {
                    $error_res['pwd_error'] = $judgement;
                    return $error_res;
                }
            } else {
                $error_res['pwd_not_same'] = '两次密码不一致';
                return $error_res;
            }


        }
    }


}