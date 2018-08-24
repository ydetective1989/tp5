<?php
namespace app\index\event;
use app\index\model\User;
use think\Request;
use think\Controller;
class Demo
{
    public $name = "qiuwei";
    public $arr = ["code"=>1,"mes"=>"获取成功","data"=>[
      "name"=>"qiuwei",
      "age"=>12,
      "sex"=>"male"
      ]
    ];
    public function index()
    {
      return "event";



      // $user = User::get(33);
      // $user->name = "ydetective";
      // $user->save();
    }
}
