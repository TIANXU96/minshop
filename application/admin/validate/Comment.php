<?php
/**
 * Created by PhpStorm.
 * User: 旭
 * Date: 2019/5/29
 * Time: 17:18
 */

namespace app\admin\validate;

use think\Validate;

class Comment extends Validate
{

    protected $rule = [
        'comment_head|标题' => 'require',
        'comment_body|内容' => 'require',
        'post_head|标题' => 'require',
        'post_body|内容' => 'require',

    ];
    protected $message = [
        'comment_head.require' => ':attribute不能为空',
        'comment_body.require' => ':attribute不能为空',
        'post_head.require' => ':attribute不能为空',
        'post_body.require' => ':attribute不能为空',


    ];
    protected $scene = [
        'new_comment' => ['comment_head', 'comment_body'],
        'new_post' =>['post_head','post_body'],


    ];
}