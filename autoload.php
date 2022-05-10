<?php
 session_start();

 spl_autoload_register('autoload');

 function autoload($class_name){
    $aaray_path = array(
        'DataBase/';
        'app/classes';
        'modles/';
        'controllers/';
    );

    $parts = explodes('\\',$class_name);
    $name = array_pop($parts);

    foreach($array_paths as $path){

    $file = sprintf($path. '%s.php',$name);
    if(is_file($file)){
        include_once $file;
    }
    }
 }

?>