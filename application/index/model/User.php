<?php
namespace app\index\model;
use think\Model;
use traits\model\SoftDelete;
use think\Request;

class User extends Model
{
  protected $deleteTime = 'delete_time';
  protected $autoWriteTimestamp = true;
  protected $resultSetType = 'collection';
  // protected $readonly = ['name'];
  protected $type = [
    'update_time' => 'timestamp'
  ];
  protected $auto = ['ip'];
  function getRow(){
    $user = new User();
    $userinfo = $user->where('id',34)->find();
    return $userinfo;
  }
  public function setIpAttr($value){
    return request()->ip();
  }
  public function getFullNameAttr($value){
    return 'qiuwei'.$value;
  }
  protected static function init(){
    User::event('before_update','boforeUpdate');
  }
  public function boforeUpdate(){
    echo "更新成功";
  }
  public function editor(){
    return $this->hasOne('Editor','userid')->field('blogtext');
  }
  // // public function getEditorAttr($value)
  // //  {
  // //      $status = [0=>'禁用',1=>'正常'];
  // //      return $status[$value];
  // //  }
  // //  public function getHideAttr($value)
  // //   {
  // //       $status = [0=>'禁用',1=>'正常'];
  // //       return $status[$value];
  // //   }
  //   public function setNameAttr($value,$data)
  //    {
  //        return strtoupper($value);
  //    }
}

 ?>
