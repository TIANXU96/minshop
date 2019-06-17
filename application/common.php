<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件
/*
 * 发送邮件
 * @param $to
 * @param $content
 * @param $subject
 * @param $mail
 */
function email($to, $content, $subject, $mail)
{
    // 使用SMTP服务
    $mail->isSMTP();
    // 编码格式为utf8，不设置编码的话，中文会出现乱码
    $mail->CharSet = "utf8";
    // 发送方的SMTP服务器地址
    $mail->Host = "smtp.qq.com";
    // 是否使用身份验证
    $mail->SMTPAuth = true;
    // 发送方的163邮箱用户名，就是你申请163的SMTP服务使用的163邮箱
    $mail->Username = "tian.xu96@qq.com";
    // 发送方的邮箱密码，注意用163邮箱这里填写的是“客户端授权密码”而不是邮箱的登录密码
    $mail->Password = "cdaggzngclhubbji";
    // 使用ssl协议方式
    $mail->SMTPSecure = "ssl";
    // qq邮箱的ssl协议方式端口号是465/994
    $mail->Port = 465;
    // 设置发件人信息，如邮件格式说明中的发件人，这里会显示为Mailer(xxxx@qq.com），Mailer是当做名字显示
    $mail->setFrom("tian.xu96@qq.com", "Min-Shop");
    // 设置收件人信息，如邮件格式说明中的收件人，这里会显示为Liang(yyyy@qq.com)
    $mail->addAddress($to, 'Address');
    // 设置回复人信息，指的是收件人收到邮件后，如果要回复，回复邮件将发送到的邮箱地址
    $mail->addReplyTo("tian.xu96@qq.com", "Reply");
    //$mail->addCC("xxx@163.com");// 设置邮件抄送人，可以只写地址，上述的设置也可以只写地址(这个人也能收到邮件)
    //$mail->addBCC("xxx@163.com");// 设置秘密抄送人(这个人也能收到邮件)
    //$mail->addAttachment("bug0.jpg");// 添加附件

    //邮件正文是否为html编码 注意此处是一个方法 不再是属性 true或false
    $mail->isHTML(true);
    // 邮件标题
    $mail->Subject = $subject;
    // 邮件正文
    $mail->Body = $content;
    //$mail->AltBody = "This is the plain text纯文本";// 这个是设置纯文本方式显示的正文内容，如果不支持Html方式，就会用到这个，基本无用

    // 发送邮件
    $state = $mail->send();
    if (!$state) {
        $message = "Message could not be sent.Mailer Error:" . $mail->ErrorInfo;
        return $message;
    } else {
        return false;
    }

}


// 生成随机验证码位数

function verifyCode()
{
    $long = 5;
    $type = rand(1, 3);
    $number = "2345678923456789";
    $english = "ABCDEFGHJKLMNPQRSTUVWXYZ";
    $mix = "23456789ABCDEFGHJKLMNPQRSTUVWXYZ";
    switch ($type) {
        case 1:
            $res = substr(str_shuffle($number), 0, $long);
            break;
        case 2:
            $res = substr(str_shuffle($english), 0, $long);
            break;
        case 3:
            $res = substr(str_shuffle($mix), 0, $long);
            break;
        default:
            $res = substr(str_shuffle($number), 0, $long);
            break;
    }
    return $res;
}


