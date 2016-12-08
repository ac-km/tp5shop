<?php
/**
 * Created by PhpStorm.
 * User: z
 * Date: 2016/12/2
 * Time: 9:28
 */
namespace app\admin\controller;
use think\Controller;
class Admin extends Controller{
    //管理员列表
    public function index(){
        return $this->fetch();
    }
    //角色管理
    public function role(){
        return $this->fetch();
    }
    //供应商管理
    public function supplier(){
        return $this->fetch();
    }
    //管理员日志
    public function log(){
        return $this->fetch();
    }
}