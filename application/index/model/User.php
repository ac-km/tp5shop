<?php
/**
 * Created by PhpStorm.
 * User: z
 * Date: 2016/12/8
 * Time: 17:31
 */
namespace app\index\model;
use think\Model;
class User extends Model{
    //读取器1
//    protected function getBirthdayAttr($birthday){
//        return date('Y-m-d',$birthday);
//    }
    //读取器2
//    protected function getUserBirthdayAttr($value,$data){
//        return date('Y-m-d',$data['birthday']);
//    }
//    //修改器
//    protected function setBirthdayAttr($value){
//        return strtotime($value);
//    }
      protected $type = [
          //设置birthday为时间戳类型(整型)
          'birthday' => 'timestamp:Y-m-d H:i:s',
          'create_time' => 'timestamp',
          'update_time' => 'timestamp',
      ];
    //自动完成
    protected $auto = ['status'];
    //修改器
    protected function setStatusAttr($value,$data){
        return '流年' == $data['nickname'] ? 1 : 2 ;
    }
    //读取器
    protected function getStatusAttr($value){
        $status = [-1 => '删除' , 0 => '禁用' , 1 => '正常' , 2 => '待审核'];
        return $status[$value];
    }
    //查询范围
    protected function scopeEmail($query){
        $query -> where('email','804259513@qq.com');
    }
    //全局查询范围
    protected  static function base($query){
        $query -> where('status=1');
    }

}