<?php

namespace app\index\controller;

use app\index\model\Adminsql;
use app\index\model\Postdata;
use app\index\model\Rolesql;
use app\index\model\Usersdata;
use think\Controller;
use think\Request;
use think\Session;
use think\View;

class Home extends Controller
{
    public function _initialize()
    {
        parent::_initialize(); // TODO: Change the autogenerated stub
        //检查登陆状态
        if (Session::has("admin_name") && Session::has("admin_id")) {
            //记录访客信息
        } else {
            //提示登陆
            $this->redirect('index/login/login');
        }
    }

    public function index()
    {

        $total_admin = Adminsql::where('admin_id', '>=', 0)->select();
        $total_user = Usersdata::where('users_id', '>=', 0)->select();
        $total_post = Postdata::where('post_id','>=',0)->select();
        $login_count = Session::get('admin_login_total');

        $this->assign('total_admin', count($total_admin));
        $this->assign('total_users', count($total_user));
        $this->assign('total_post', count($total_post));
        $this->assign('admin_login_total', $login_count);


//        admin用户信息
        $admin_role_id = Session::get('admin_role_id');
        $sql_data = Rolesql::field('role_name')->where('role_id', '=', $admin_role_id)->find();


        $this->assign('admin_name', Session::get('admin_name'));
        $this->assign('admin_mobile', Session::get('admin_name'));
        $this->assign('admin_role', $sql_data['role_name']);
        $this->assign('admin_email', Session::get('admin_email'));

        return $this->fetch();
    }

    public function create_new_admin()
    {
        $request = Request::instance();
        if ($request->isAjax()) {
            $admin_name = $request->post('admin_name');
            $admin_mobile = $request->post('admin_mobile');
            $admin_email = $request->post('admin_email');
            $admin_gender = $request->post('admin_gender');
            $data = [
                'username' => $admin_name,
                'admin_phone' => $admin_mobile,
                'admin_email' => $admin_email,
            ];
            $judgement = $this->validate($data, 'Admin.add_new');
            if (true === $judgement) {
//                查询是否存在重复数据
                $res_sql_admin_name = Adminsql::where('admin_name', '=', $admin_name)->select();
                $res_sql_admin_mobile = Adminsql::where('admin_mobile', '=', $admin_mobile)->select();
                $res_sql_admin_email = Adminsql::where('admin_email', '=', $admin_email)->select();

                if (empty($res_sql_admin_name)) {

                    if (empty($res_sql_admin_mobile)) {

                        if (empty($res_sql_admin_email)) {
                            $mix = "23456789ABCDEFGHJKLMNPQRSTUVWXYZ";
                            $admin_password = md5(substr(str_shuffle($mix), 0, 9));
                            $create_time = date('Y-m-d H:i:s', time());
                            $sql_data['admin_name'] = $admin_name;
                            $sql_data['admin_mobile'] = $admin_mobile;
                            $sql_data['admin_password'] = $admin_password;
                            $sql_data['admin_email'] = $admin_email;
                            $sql_data['admin_gender'] = $admin_gender;
                            $sql_data['admin_role_id'] = 6;
                            $sql_data['admin_create_time'] = $create_time;
                            $sql_res = Adminsql::insert($sql_data);
//                            获取ID值 然后更新create_time的值,解决无法一步到位的特殊情况
//                            $add_create_time = Adminsql::where('admin_id', '=', $new_admin_id)->update(['admin_create_time' => $create_time]);
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
