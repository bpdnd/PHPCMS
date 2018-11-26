<?php
namespace app\login\controller;

use think\Controller;
use think\Db;

class Index extends Controller
{
    public function index()
    {
    	$this->dbTest();
        return view();
    }
   /* 连接数据库*/
    public function dbTest(){
    	$res = Db::table('t_userInfo')->select();
    	dump($res);
    }
}
