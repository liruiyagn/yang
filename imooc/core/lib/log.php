<?php
namespace core\lib;
use core\lib\conf;
class log{
    /*
     * 1：:确定日志的存储方式
     * 2写日志
     */
    static $class;
    static public function index(){
        //确定储存方式
        $drive=conf::get('DRIVE','log');
        $class='\core\lib\drive\log\\'.$drive;
//        echo $class;
        self::$class=new $class;
    }
    static public function log($name,$file='log'){
        self::$class->log($name,$file);
    }
}