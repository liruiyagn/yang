<?php
define('IMOOC',realpath('./'));
define('CORE',IMOOC.'/core');
define('APP',IMOOC.'/app');
define('BEBUG',true);
define('MODULE','app');
include IMOOC.'/vendor/autoload.php';
if(BEBUG){
    $whoops = new \Whoops\Run;
    $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
    $whoops->register();
    ini_set('display_error','On');
}else{
    ini_set('display_error','Off');
}
include IMOOC.'/core/common/function.php';//加载类库
include IMOOC.'/core/coom.php';
//dump('asdsadd');die;
spl_autoload_register('\core\coom::load');
\core\coom::run();
?>