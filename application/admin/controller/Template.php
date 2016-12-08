<?php
/**
 * Created by PhpStorm.
 * User: z
 * Date: 2016/12/2
 * Time: 11:46
 */
namespace app\admin\controller;
use think\Controller;
class Template extends Controller {
    //模板列表
    public function templateList($t='pc'){
        //$t  'pc'   'mobile'
        $this->assign('t',$t);
        return $this->fetch();
    }
}