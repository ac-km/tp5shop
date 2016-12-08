<?php
/**
 * Created by PhpStorm.
 * User: z
 * Date: 2016/12/2
 * Time: 9:37
 */
namespace app\admin\controller;
use think\Controller;
class Goods extends Controller{
    //商品分类
    public function categoryList(){
        return $this->fetch();
    }
    //商品列表
    public function goodsList(){
        return $this->fetch();
    }
    //商品类型
    public function goodsTypeList(){
        return $this->fetch();
    }
    //商品规格
    public function specList(){
        return $this->fetch();
    }
    //商品属性
    public function goodsAttributeList(){
        return $this->fetch();
    }
    //品牌列表
    public function brandList(){
        return $this->fetch();
    }
}