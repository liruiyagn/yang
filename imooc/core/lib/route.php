<?php
namespace core\lib;
use core\lib\conf;
class route{
    public function __construct()
    {
        /*
         * xxx.com/index/index
         * xxx.com/index.php/index/index
         *1:隐藏index.php
         * 2:获取URL 参数部分
         * 3：返回对应控制和方法
         */
//        $_SERVER['REQUEST_URI']='/index/index/';
        if(isset($_SERVER['REQUEST_URI'])&&$_SERVER['REQUEST_URI'] != '/'){
            $path=$_SERVER['REQUEST_URI'];
            $patharr=explode('/',trim($path,'/'));
//            p($patharr);
            if(isset($patharr)){
                $this->ctr=$patharr[0];
            }
            unset($patharr[0]);
            if(isset($patharr[1])){
                $this->action=$patharr[1];
                unset($patharr[1]);
            }else{
                $this->action=conf::get('ACTION','route');
            }
            //URL多余部分转换成GET
            //id/1/str/2/test/3
            $count=count($patharr)+2;
            $i=0+2;
            while($i<$count){
                $_GET[$patharr[$i]]=$patharr[$i+1];
                $i=$i+2;
            }
        }else{
            $this->ctr=conf::get('CTR','route');
            $this->action=conf::get('ACTION','route');
        }
    }
}