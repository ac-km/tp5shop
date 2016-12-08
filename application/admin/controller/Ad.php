<?php
/**
 * Created by PhpStorm.
 * User: z
 * Date: 2016/12/2
 * Time: 11:31
 */
namespace app\admin\controller;
use think\Controller;
class Ad extends Controller{
    //广告列表
    public function adList(){
        return $this->fetch();
    }
    //广告位置
    public function positionList(){
        return $this->fetch();
    }
}