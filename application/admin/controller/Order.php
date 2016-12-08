<?php
/**
 * Created by PhpStorm.
 * User: z
 * Date: 2016/12/2
 * Time: 10:04
 */
namespace app\admin\controller;
use think\Controller;
class Order extends Controller{
    //订单列表
    public function index(){
        return $this->fetch();
    }
    //发货单
    public function delivery_list(){
        return $this->fetch();
    }
    //退货单
    public function return_list(){
        return $this->fetch();
    }
    //添加订单
    public function add_order(){
        return $this->fetch();
    }
    //订单日志
    public function order_log(){
        return $this->fetch();
    }
}