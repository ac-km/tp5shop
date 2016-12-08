<?php
/**
 * Created by PhpStorm.
 * User: z
 * Date: 2016/12/2
 * Time: 13:31
 */
namespace app\admin\controller;
use think\Controller;
class Report extends Controller{
    //销售概况
    public function index(){
        return $this->fetch();
    }
    //销售排行
    public function saleTop(){
        return $this->fetch();
    }
    //会员排行
    public function userTop(){
        return $this->fetch();
    }
    //销售明细
    public function saleList(){
        return $this->fetch();
    }
    //会员统计
    public function user(){
        return $this->fetch();
    }
    //财务统计
    public function finance(){
        return $this->fetch();
    }
}