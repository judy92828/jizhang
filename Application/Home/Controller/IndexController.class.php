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
        $income=M('income')->order('id desc')->select();
        $this->assign('income',$income);
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
    
    //分类修改
    public function cateedit()
    {
        if($_POST){
            $id=I('id');
            $data=array(
                'name'=>I('category'),
                'times'=>time()
            );
            $where['name'] = array('like','%'.I('category').'%');
            if(M('category')->where($where)->find()){
                echo '2';
            }else{
                if(M('category')->where(array('id'=>$id))->save($data)){
                    echo '1';
                }else{
                    echo '0';
                }
            }
        }else{
            echo '0';
        }
    }
    
    //删除分类
    public function catedel()
    {
        $id=I('id');
        if(M('category')->where(array('id'=>$id))->delete()){
            echo '1';
        }else{
            echo '0';
        }
    }

    //添加收入
    public function addincome()
    {
        if($_POST){
            $_POST['date']=strtotime($_POST['date']);
            $_POST['times']=time();
            if(M('income')->add($_POST)){
                echo '1';
            }else{
                echo '0';
            }
        }else{
            $this->assign('title','添加收入账单');
            $this->display();
        }
    }

    //添加支出
    public function addexpend()
    {
        if($_POST){
            $_POST['date']=strtotime($_POST['date']);
            $_POST['times']=time();
            if(M('income')->add($_POST)){
                echo '1';
            }else{
                echo '0';
            }
        }else{
            $this->assign('title','添加支出账单');
            $this->display();
        }
    }
}