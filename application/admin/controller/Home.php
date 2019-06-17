<?php

namespace app\admin\controller;

use app\admin\model\Usersdata;
use think\Controller;
use think\Request;
use think\Session;
use think\View;

class Home extends Controller
{
    public function index()
    {
//        users用户信息
        if (Session::has("users_name") && Session::has("users_id")) {
            //记录访客信息
            $this->assign('users_name', Session::get('users_name'));
            $this->assign('users_phone', Session::get('users_phone'));
            $this->assign('users_email', Session::get('users_email'));
        } else {
            $this->assign('users_name','游客');
            $this->assign('users_phone', '无');
            $this->assign('users_email', '无');
        }

        return $this->fetch();
    }

    public function create_new_users()
    {
        $request = Request::instance();
        if ($request->isAjax()) {
            $users_name = $request->post('admin_name');
            $users_mobile = $request->post('admin_mobile');
            $users_email = $request->post('admin_email');
            $users_gender = $request->post('admin_gender');
            $data = [
                'users_name' => $users_name,
                'users_phone' => $users_mobile,
                'users_email' => $users_email,
            ];
            $judgement = $this->validate($data, 'users.add_new');
            if (true === $judgement) {
//                查询是否存在重复数据
                $res_sql_admin_name = Usersdata::where('users_name', '=', $users_name)->select();
                $res_sql_admin_mobile = Usersdata::where('users_phone', '=', $users_mobile)->select();
                $res_sql_admin_email = Usersdata::where('users_email', '=', $users_email)->select();

                if (empty($res_sql_admin_name)) {

                    if (empty($res_sql_admin_mobile)) {

                        if (empty($res_sql_admin_email)) {
                            $mix = "23456789ABCDEFGHJKLMNPQRSTUVWXYZ";
                            $users_password = md5(substr(str_shuffle($mix), 0, 9));
                            $create_time = date('Y-m-d H:i:s', time());
                            $sql_data['users_name'] = $users_name;
                            $sql_data['users_phone'] = $users_mobile;
                            $sql_data['users_password'] = $users_password;
                            $sql_data['users_email'] = $users_email;
                            $sql_data['users_gender'] = $users_gender;
                            $sql_data['users_real_name'] = '田旭';
                            $sql_data['users_create_time'] = $create_time;
                            $sql_res = Usersdata::insert($sql_data);
//                            获取ID值 然后更新create_time的值,解决无法一步到位的特殊情况
//                            $new_admin_id = $sql_res->getData('users_id');
//                            $add_create_time = Usersdata::where('Users_id', '=', $new_admin_id)->update(['users_create_time' => $create_time]);
                            if ($sql_res) {
                                $pass['pass'] = '新建用户成功,请新用户第一次登陆前重置密码';
                                return $pass;
//                                插入成功
                            } else {
                                $error_res['sql_wrong'] = '新建用户失败,请重试';
                                return $error_res;
                            }

                        } else {
                            $error_res['admin_email_occupy'] = '邮箱已经被占用';
                            return $error_res;
                        }
                    } else {
                        $error_res['admin_mobile_occupy'] = '手机号已经被占用';
                        return $error_res;
                    }
                } else {
                    $error_res['admin_name_occupy'] = '用户名已经被占用';
                    return $error_res;
                }


            } else {
                $error_res['judgement'] = $judgement;
                return $error_res;
            }
        }
    }

}
