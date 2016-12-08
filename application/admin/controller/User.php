<?php
/**
 * Created by PhpStorm.
 * User: z
 * Date: 2016/12/1
 * Time: 11:39
 */
namespace app\admin\controller;

use think\Controller;

class User extends Controller {
    //登录系统
    public function login(){
        //临时关闭布局文件
        $this->view->engine->layout(false);
        return $this->fetch();
    }
    //安全退出
    public function logout(){
        //用户退出成功
        //显示用户登录页面
        $this->redirect('user/login');
    }
    //锁定屏幕
    public function lock(){
        //临时关闭布局文件
        $this->view->engine->layout(false);
        return $this->fetch();
    }
    //修改密码
    public function changePwd(){
        return $this->fetch();
    }
    //会员列表
    public function ulist(){
        return $this->fetch();
    }
    //会员等级
    public function levelList(){
        return $this->fetch();
    }
    //充值记录
    public function recharge(){
        return $this->fetch();
    }
}