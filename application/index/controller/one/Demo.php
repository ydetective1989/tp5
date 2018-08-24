<?php
namespace app\index\controller\one;
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
      $a = 1;
      $b = 3;
      list($b,$a)=array($a,$b);
      echo $a."".$b;



      // $user = User::get(33);
      // $user->name = "ydetective";
      // $user->save();
    }
}
