<?php
namespace Home\Controller;


class IndexController extends CommonController {

    //支出 1  收入 0
    public function _initialize()
    {
        parent::_initialize();//昨日支出
        $zrtime=date("Y-m-d",time()-(1*24*60*60));
        $zrsum=M('bill')->where(array('mold'=>'1','date'=>strtotime($zrtime)))->sum('price');
        $this->assign('zrsum',$zrsum);
        //本周支出
        $bztime=date("Y-m-d",time()-(7*24*60*60));
        $where['mold']=1;
        $where['date']=array('gt',strtotime($bztime));
        $bzsum=M('bill')->where($where)->sum('price');
        $this->assign('bzsum',$bzsum);
        //本月支出
        $bytime=date("Y-m-d H:i:s",mktime(0, 0 , 0,date("m"),1,date("Y")));
        $where['mold']=1;
        $where['date']=array('gt',strtotime($bytime));
        $bysum=M('bill')->where($where)->sum('price');
        $this->assign('bysum',$bysum);
    }

    public function index(){
        $rel = M('bill')->order('id desc')->limit(30)->select();
        $this->assign('bill',$rel);
        $this->assign('title','账单首页');
        $this->display();
    }
    //收入
    public function income()
    {
        //求总和
        $sum=M('bill')->where(array('mold'=>'0'))->sum('price');
        $this->assign('sum',$sum);
        $income=M('bill')->where(array('mold'=>'0'))->order('id desc')->select();
        $this->assign('income',$income);
        $this->assign('title','收入账单');
        $this->display();
    }

    //支出
    public function expend()
    {
        //求总和
        $sum=M('bill')->where(array('mold'=>'1'))->sum('price');
        $this->assign('sum',$sum);
        $expend=M('bill')->where(array('mold'=>'1'))->order('id desc')->select();
        $this->assign('expend',$expend);
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
            $_POST['mold']= '0';
            if(M('bill')->add($_POST)){
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
            $_POST['mold']= '1';
            if(M('bill')->add($_POST)){
                echo '1';
            }else{
                echo '0';
            }
        }else{
            //获取分类
            $cate=M('category')->select();
            $this->assign('category',$cate);
            $this->assign('title','添加支出账单');
            $this->display();
        }
    }
    
    //搜索操作
    public function seach()
    {
        if($_POST){
            if($_POST['mold'] != null){
                $where['mold']=$_POST['mold'];
            }
            if($_POST['category'] != null){
                $where['type']=$_POST['category'];
            }
            if($_POST['beginTime'] != null && $_POST['endTime'] != null){
                $where['date']=array(array('gt',strtotime($_POST['beginTime'])),array('lt',strtotime($_POST['endTime'])));
            }
            $rel = M('bill')->where($where)->select();
            $this->assign('bill',$rel);
            $sum = M('bill')->where($where)->sum('price');
            $this->assign('sum',$sum);
            $this->display('seachs');
        }else{
            //获取分类
            $cate=M('category')->select();
            $this->assign('category',$cate);
            $this->display();
        }
    }
}