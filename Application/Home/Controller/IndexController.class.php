<?php
namespace Home\Controller;


class IndexController extends CommonController {
    public function index(){

        $this->assign('title','账单首页');
        $this->display();
    }
    //收入
    public function income()
    {
        $this->assign('title','收入账单');
        $this->display();
    }

    //支出
    public function expend()
    {
        $this->assign('title','支出账单');
        $this->display();
    }

    //分类
    public function category()
    {
        if($_POST){
            $data=array(
                'name'=>I('category'),
                'times'=>time()
            );
            $where['name'] = array('like','%'.I('category').'%');
            if(M('category')->where($where)->find()){
                echo '2';
            }else{
                if(M('category')->add($data)){
                    echo '1';
                }else{
                    echo '0';
                }
            }
        }else{
            //获取所有分类
            $category=M('category')->select();
            $this->assign('category',$category);
            $this->assign('title','账本分类');
            $this->display();
        }
    }

    //添加收入
    public function addincome()
    {

        $this->assign('title','添加收入账单');
        $this->display();
    }

    //添加支出
    public function addexpend()
    {

        $this->assign('title','添加支出账单');
        $this->display();
    }
}