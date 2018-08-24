<?php
namespace app\user\controller;
use think\Db;
use think\View;
use think\Request;
class user extends \think\Controller
{
  public $request;
  function test(){
    $data = [
      'name'=>'lixiaobo',
      'password'=>'qw198543',
      'email'=>'yjl2123@163.com',
      'phone'=>'13354520210'

    ];
    return Db::table('users')->where('id',1)->insertGetId($data);


  }
 function demo(){
    $row = Db::table('user')->find();
    return json($row);
 }
 function show(){
   $userinfo = Db::table('user')->where('hide',1)->find();
   $userinfo = json($userinfo);
   $view = new View();
   return $view->fetch('/index');

 }
}


?>
