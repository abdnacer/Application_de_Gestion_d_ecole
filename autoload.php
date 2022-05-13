<?php
 session_start();

 spl_autoload_register('autoload');
 require_once('controllers/StudentsController.php');

 function autoload($class_name){
    $array_paths = array(
        'DataBase/',
        'app/classes',
        'modles/',
        'controllers/'
    );

    $parts = explode('\\',$class_name);
    $name = array_pop($parts);

    foreach($array_paths as $path){

    $file = sprintf($path. '%s.php',$name);
    if(is_file($file)){
        include_once $file;
    }
    }
 }

?>