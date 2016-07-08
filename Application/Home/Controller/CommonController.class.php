<?php
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller {
    public function _initialize(){
        $user = cookie('users');
        if($user == ''){
            $this->error('对不起,请登录后操作',U('Login/index'),1);
        }
    }
}