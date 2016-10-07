<?php
namespace app\model;
use core\lib\model;

class emailModel extends model{
    public $table="email";
    //查询所有
    public function lists(){
     return $this->select($this->table,'*');
    }
    //查询单挑
    public function listone($data){
        return $this->get($this->table,'*',['id'=>$data]);
    }
    //修改
    public function up($data)
    {
        return $this->update($this->table,$data);
    }
    //添加
    public function in($data){
        return $this->insert($this->table,$data);
    }
    //删除
    public function de($id)
    {
        return $this->delete($this->table,array('id'=>$id));
    }
}