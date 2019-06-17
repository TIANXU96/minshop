<?php
/**
 * Created by PhpStorm.
 * User: 旭
 * Date: 2019/5/28
 * Time: 22:54
 */

namespace app\index\controller;

use think\Controller;
use app\index\model\Postdata;
use app\index\model\Usersdata;
use think\Db;
use think\Model;
use think\Request;
use think\Session;


class Comment extends Controller
{
    public function index()
    {
//查询所有帖子的 picture_id
        $picture_res = Postdata::where('post_id', '>=', 0)->select();

        foreach ($picture_res as $key) {
            $sql_picture_res[] = $key->getData();

        }
        if (!empty($sql_picture_res)) {
            if (count($sql_picture_res) > 0) {
//    有数据
//获取用户名信息,进行拼接
                for ($i = 0; $i < count($sql_picture_res); $i++) {
                    $sql_users_info[] = Usersdata::get(['users_id' => $sql_picture_res[$i]['post_users_id']])->getData();
                    $sql_picture_res[$i] += $sql_users_info[$i];
                }
            } else {
                return $this->error('用户数据出错啦!');
            }

        } else {
            $sql_picture_res = '没有数据';
        }
//        dump($sql_picture_res);
//        dump($sql_users_info);

        $this->assign('post_data', $sql_picture_res);

        return $this->fetch();

    }

    public function delete_ajax()
    {
        $request = Request::instance();
        if ($request->isAjax()) {
            $delete_post_id = $request->post('delete_id');
            $sql_res = Db::table('sh_post')->where('post_id', '=', $delete_post_id)->delete();

            if ($sql_res) {
                return true;
            } else {
                return $this->error('删除失败');
            }
        }
    }
}