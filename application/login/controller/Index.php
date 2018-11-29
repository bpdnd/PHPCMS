<?php
namespace app\login\controller;

use think\Controller;
use think\Db;

class Index extends Controller
{

    public function index(){
        return view();
    }
    public function login(){
        return view();
    }
    public function  he(){

        return $_POST["userName"];
        //$this->index();
        //dump($_POST["userName"]);
    }

   /* 连接数据库*/
    public function dbTest(){
    	$res = Db::table('t_userInfo')->select();
    	dump($res);
    }
}
