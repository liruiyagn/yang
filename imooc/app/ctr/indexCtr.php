<?php
namespace app\ctr;
use core\lib\model;
header('content-type:text/html;charset=utf8');
class indexCtr extends \core\coom{
    //展示日志
    public function index(){
        $ber=new \app\model\emailModel();
        $der=$ber->lists();
        $this->assign('der',$der);
        $this->display('index.html');
    }
    //修改日志页面
    public function test(){
        $id=$_GET['id'];
        $ber=new \app\model\emailModel();
        $der=$ber->listone($id);
//        p($der);die;
        $this->assign('der',$der);
        $this->display('update.html');
    }
    //修改
    public function upda()
    {
        $data['id']=$_POST['id'];
        $data['name']=$_POST['name'];
        $data['email']=$_POST['email'];
        $data['qq']=$_POST['qq'];
        $data['teg']=$_POST['teg'];
        $ber=new \app\model\emailModel();
        $der=$ber->up($data);
        if($der){
            jump('/');
        }else{
            echo "修改错误";
        }
    }
    //添加日志页面
    public function insert()
    {
//        echo 111;die;
        $this->display("insert.html");
    }
    //添加日志
    public function inse(){
        $data['name']=$_POST['name'];
        $data['email']=$_POST['email'];
        $data['qq']=$_POST['qq'];
        $data['teg']=$_POST['teg'];
        $ber=new \app\model\emailModel();
        $der=$ber->in($data);
        if($der){
            jump('/');
        }else{
            echo "添加错误";
        }
    }
    //删除日志
    public function delete(){
        $id=$_GET['id'];
        $ber=new \app\model\emailModel();
        $der=$ber->de($id);
        if($der){
            jump('/');
        }else{
            echo "删除有错误";
        }
    }
}
