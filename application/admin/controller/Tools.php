<?php
/**
 * Created by PhpStorm.
 * User: z
 * Date: 2016/12/2
 * Time: 9:21
 */
namespace app\admin\controller;
use think\Controller;
class Tools extends Controller{
    //数据备份
    public function index(){
        return $this->fetch();
    }
    //数据还原
    public function restore(){
        return $this->fetch();
    }
    //区域管理
    public function region(){
        return $this->fetch();
    }
}