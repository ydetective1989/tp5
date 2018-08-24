<?php
namespace app\index\controller;
class user
{
   function test(){
     extract($_GET);
     if(isset($_GET)){
       return json(['name'=>$name,'password'=>$password]);
     }

   }


}

?>
