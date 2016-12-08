<?php
/**
 * Created by PhpStorm.
 * User: z
 * Date: 2016/12/8
 * Time: 17:21
 */
namespace app\index\controller;
use think\Controller;
class User extends Controller{
    public function add(){
        echo 'add';
    }
    public function index(){
        echo 'index';
    }
    public function create(){
        echo 'create';
    }
    public function add_list(){
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