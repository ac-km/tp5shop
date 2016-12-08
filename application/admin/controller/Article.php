<?php
/**
 * Created by PhpStorm.
 * User: z
 * Date: 2016/12/2
 * Time: 9:18
 */
namespace app\admin\controller;
use think\Controller;
class Article extends Controller{
    //友情链接
    public function linkList(){
        return $this->fetch();
    }
    //文章列表
    public function articleList(){
        return $this->fetch();
    }
    //文章分类
    public function categoryList(){
        return $this->fetch();
    }
}