<?php
namespace app\index\controller;
use app\index\model\User;
use think\Request;
use think\Controller;
use app\index\model\Editor;
use think\Db;
use think\View;
class Index extends Controller
{
  private $vName = 'authnum998';
    public $name = "qiuwei";
    public $arr = ["code"=>1,"mes"=>"获取成功","data"=>[
      "name"=>"qiuwei",
      "age"=>12,
      "sex"=>"male"
      ]
    ];


    public function index()
    {
      return view('/index');



      // $user = User::get(33);
      // $user->name = "ydetective";
      // $user->save();
    }
    public function demo(){
      return view('/demo');
    }

    Public function dstrlen() {
      srand((double)microtime()*10000000);
  		while(($authNum = rand()%10000)<1000);
  		$randCode = strtoupper(substr(md5($authNum),1,4));
  		$sign = $this->buildsafe($randCode);
  		$this->cookie($sign);
  		return $randCode;
	}
  Public function buildsafe($nums)
	{
		$sign = "";
		$keys = date("mYd")."95000c326f12651569a4bc4ede2769ce";
		$sign = strtoupper(md5($keys.$nums.$keys.$nums.$keys.$nums.$keys));
		return $sign;
	}
  Public function cookie($value)
	{
		$expire = time()+3600;
		return setcookie($this->vName,$value,$expire,'/','');
	}
}
