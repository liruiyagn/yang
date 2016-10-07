<?php
namespace core;
class coom{
    public static $classMap=array();
    public $assign;
    static public function run(){
        //加载控制器
        $ber=new \core\lib\route();
//        p($ber);die;
        $strlClass=$ber->ctr;
        $action=$ber->action;
        $strfile=APP.'/ctr/'.$strlClass.'Ctr.php';
        $cltrlClass='\\'.MODULE.'\ctr\\'.$strlClass.'Ctr';
//        echo $cltrlClass;die;
        if(is_file($strfile)){
            include $strfile;
            $ctr=new $cltrlClass();
            $ctr->$action();
        }else{
            throw new \Exception('找不到控制器'.$cltrlClass);
        }
//        \core\lib\log::log('ctr:'.$cltrlClass.'       '.'action'.$action);
    }
    /*
     * 自动加载类
     */
    static public function load($class){
        $class=str_replace('\\','/',$class);
        $de=str_replace('\\','/',IMOOC);
        $file=$de.'/'.$class.'.php';
        if(is_file($file)){
            include $file;
            self::$classMap[$class]=$class;
        }else{
            return false;
        }
    }
     public function assign($name,$value){
        $this->assign[$name]=$value;
    }
    public function display($file){
        $file_name = $file;
        $file=APP.'/view/'.$file;
        if(is_file($file)){
            \Twig_Autoloader::register();
            $loader = new \Twig_Loader_Filesystem(APP.'/view');
            $twig = new \Twig_Environment($loader, array(
                'cache' =>IMOOC.'/log/twig',
                'debug'=>BEBUG,
            ));
            $template = $twig->loadTemplate($file_name);
            $template->display($this->assign?$this->assign:array());
        }else{
            echo "这个文件不存在";
        }
    }
}