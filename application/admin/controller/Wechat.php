<?php
/**
 * Created by PhpStorm.
 * User: z
 * Date: 2016/12/2
 * Time: 11:40
 */
namespace app\admin\controller;
use think\Controller;
class Wechat extends Controller{
    //公众号管理
    public function index(){
        return $this->fetch();
    }
    //微信菜单管理
    public function menu(){
        return $this->fetch();
    }
    //文本回复
    public function text(){
        return $this->fetch();
    }
    //图文回复
    public function img(){
        return $this->fetch();
    }
}