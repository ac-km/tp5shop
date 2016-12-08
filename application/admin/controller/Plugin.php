<?php
/**
 * Created by PhpStorm.
 * User: z
 * Date: 2016/12/2
 * Time: 11:53
 */
namespace app\admin\controller;
use think\Controller;
class Plugin extends Controller {
    //插件列表
    public function index(){
        return $this->fetch();
    }

}