<?php
/**
 * Created by PhpStorm.
 * User: z
 * Date: 2016/12/2
 * Time: 13:36
 */
namespace app\admin\controller;
use think\Controller;
class Pickup extends Controller{
    //自提点列表
    public function index(){
        return $this->fetch();
    }
    //添加自提点
    public function add(){
        return $this->fetch();
    }
}