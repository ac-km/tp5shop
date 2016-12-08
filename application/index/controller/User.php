<?php
/**
 * Created by PhpStorm.
 * User: z
 * Date: 2016/12/8
 * Time: 17:21
 */
namespace app\index\controller;
use think\Controller;
use app\index\model\User as UserModel;
class User extends Controller{
    public function add(){

        //方式1
        /*
        $user = new UserModel;
        $user -> nickname = '流年';
        $user -> email = 'THINKPHP@qq.com';
        $user -> birthday = strtotime('1997-03-05');
        if($user->save()){
            return '用户[' . $user->nickname . ':' . $user->id . ']新增成功';
        }else{
            return $user -> getError();
        }*/
        //方式2
        $user['nickname'] = '看云';
        $user['email'] = 'kancloud@qq.com';
        $user['birthday'] = strtotime('2015-04-02');
        if($result = UserModel::create($user)){
            return '用户[' . $result['nickname'] . ':' .$result->id . ']新增成功';
        }else{
            return '新增出错';
        }
    }
    public function index(){
        echo 'index';
    }
    public function create(){
        echo 'create';
    }
    public function addList(){
        echo 'add_list';
    }
    public function update(){
        echo 'update';
    }
    public function delete(){
        echo 'delete';
    }
    public function read(){
        echo 'read';
    }
}