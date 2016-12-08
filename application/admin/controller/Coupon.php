<?php
/**
 * Created by PhpStorm.
 * User: z
 * Date: 2016/12/2
 * Time: 11:28
 */
namespace app\admin\controller;
use think\Controller;
class Coupon extends Controller{
    //代金券管理
    public function index(){
        return $this->fetch();
    }
}