<?php
/**
 * Created by PhpStorm.
 * User: z
 * Date: 2016/12/2
 * Time: 9:46
 */
namespace app\admin\controller;
use think\Controller;
class Comment extends Controller{
    //商品评论
    public function index(){
        return $this->fetch();
    }
    //商品咨询
    public function ask_list(){
        return $this->fetch();
    }
}