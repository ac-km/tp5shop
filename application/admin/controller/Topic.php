<?php
/**
 * Created by PhpStorm.
 * User: z
 * Date: 2016/12/2
 * Time: 11:38
 */
namespace app\admin\controller;
use think\Controller;
class Topic extends Controller{
    //专题列表
    public function topicList(){
        return $this->fetch();
    }
}