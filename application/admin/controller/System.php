<?php
/**
 * Created by PhpStorm.
 * User: z
 * Date: 2016/12/1
 * Time: 17:53
 */
namespace app\admin\controller;
use think\Controller;
class System extends Controller{
    //网站设置;
    public function index(){
        return $this->fetch();
    }
    //自定义导航
    public function navigationList(){
        return $this->fetch();
    }
    //权限资源列表
    public function right_list(){
        return $this->fetch();
    }
}