<?php
namespace core\lib\drive\log;
//文件系统
use core\lib\conf;
class file{
    public $path;//日志存储位置
    public function __construct()
    {
        $ber=conf::Get('OPTION','log');
        $this->path=$ber['PATH'];
    }

    public function log($message,$file='log'){
        /*
         *1:确定文件存储位置是否存在
         * 新建目录
         * 2：写入日志
         */
//        p($this->path);die;
        if(!is_dir($this->path.date('YmdH'))){
            mkdir($this->path.date('YmdH'),'0777',true);
        }
//        p($this->path.date('YmdH').'/'.$file.'.php');die;
        return file_put_contents($this->path.date('YmdH').'/'.$file.'.php',date('Y-m-d H:i:s').json_encode($message).PHP_EOL,FILE_APPEND);
    }
}