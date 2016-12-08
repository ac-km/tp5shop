<?php
/**
 * Created by PhpStorm.
 * User: z
 * Date: 2016/12/2
 * Time: 11:23
 */
namespace app\admin\controller;
use think\Controller;
class Promotion extends Controller{
    //抢购管理
    public function flash_sale(){
        return $this->fetch();
    }
    //团购管理
    public function group_buy_list(){
        return $this->fetch();
    }
    //商品促销
    public function prom_goods_list(){
        return $this->fetch();
    }
    //订单促销
    public function prom_order_list(){
        return $this->fetch();
    }
}