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
    public function index(){
//        $list = UserModel::all();
//        $list = UserModel::where('id','<',10)->select();
        $list = UserModel::all();
        foreach ($list as $user){
            echo $user->id . '<br>';
            echo $user->nickname . '<br>';
            echo $user->email . '<br>';
            echo $user->birthday . '<br>';
            echo $user->create_time . '<br>';
            echo $user->update_time . '<br>';
            echo $user->status . '<br>';
            echo '<hr>';
        }

    }
    public function add(){

        //方式1
        /*
        $user = new UserModel();
        $user -> nickname = '流年';
        $user -> email = 'THINKPHP@qq.com';
        $user -> birthday = strtotime('1997-03-05');
        if($user->save()){
            return '用户[' . $user->nickname . ':' . $user->id . ']新增成功';
        }else{
            return $user -> getError();
        }*/
        //方式2
        $user['nickname'] = '流年';
        $user['email'] = 'test1@qq.com';
        $user['birthday'] = '1995-04-02';
        if($result = UserModel::create($user)){
            return '用户[' . $result['nickname'] . ':' .$result->id . ']新增成功';
        }else{
            return '新增出错';
        }
    }
    public function create(){
        echo 'create';
    }
    public function addList(){
        $user = new UserModel();
        $list = [
            ['nickname'=>'张三','email'=>'zhangsan@qq.com','birthday'=>strtotime('1988-01-15')],
            ['nickname'=>'李四','email'=>'lisi@qq.com','birthday'=>strtotime('1990-09-19')],
        ];
        if($user->saveAll($list)){
            return '用户批量新增成功';
        }else{
            return $user->getError();
        }

    }
    public function update($id){
        /*$user = UserModel::get($id);
        if(isset($user->id)){
            //更新数据
            $user->nickname = '波波';
            $user->email = '804259513@qq.com';
            $user->birthday = strtotime('1990-10-18');
            if($user->save()){
                echo '更新成功' . '<br>';
                echo $user->id . '<br>';
                echo $user->nickname . '<br>';
                echo $user->email . '<br>';
                echo date('Y/m/d',$user->birthday);
            }else{
                echo '更新数据失败';
            }
        }else{
            //不存在该用户
            echo '不存在该用户';
        }*/
        $user['id'] = (int)$id;
        $user['nickname'] = '刘程';
        $user['email'] = 'liu21st@gmail.com';
        $result = UserModel::update($user);
        return '更新用户成功' . $result['nickname'];

    }
    public function delete($id){
        /*$user = UserModel::get($id);
        if($user){
            $user->delete();
            return '删除用户成功';
        }else{
            return '删除的用户不存在';
        }*/
        $result = UserModel::destroy($id);
        if($result){
            return '删除用户成功';
        }else{
            return '删除的用户不存在';
        }
    }
    public function read($id=''){
        $user = UserModel::get($id);
        /*if(isset($user->id)){
            echo $user->nickname . '<br>';
            echo $user->email . '<br>';
            echo date('Y/m/d',$user->birthday) . '<br>';
        }else{
            echo '该用户不存在';
        }*/
//        $user = UserModel::getByEmail("thinkphp@qq.com");
//        $user = UserModel::get(['nickname'=>'看云']);
//        $user = UserModel::where(['nickname'=>'张三'])->find();
        echo $user['id'] . '<br>';
        echo $user['nickname'] . '<br>';
        echo $user['email'] . '<br>';
        echo $user['birthday'] . '<br>';
        echo $user['create_time'] . '<br>';
        echo $user['status'] . '<br>';
//        echo $user['user_birthday'] . '<br>';
    }
}