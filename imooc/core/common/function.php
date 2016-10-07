<?php
function p($var){
    if(is_bool($var)){
        var_dump($var);
    }else if(is_null($var)){
        var_dump(NULL);
    }else{
        print_r($var);
    }
}
function jump($url){
    header('location:'.$url);
    exit();
}
function post($name,$default=false,$file=false){
    if(isset($_POST[$name])){
        if($file){
            switch($file){
                case 'int':
                    if(is_numeric($_POST[$name])){
                        return $_POST[$name];
                    }else{
                        return $default;
                    }
                break;
                default:;
            }
        }
    }else{
        return $default;
    }
}