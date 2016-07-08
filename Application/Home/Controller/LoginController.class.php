<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function index()
    {
        $this->display();
    }
    //验证登录
    public function yzlogin()
    {
        $pwd=I('pwd');
        $password='123456';
        if($pwd==$password){
            cookie('users','admin');
            echo '1';
        }else{
            echo '0';
        }
    }
}