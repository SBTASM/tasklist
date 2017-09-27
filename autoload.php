<?php


/**
 * Автолоадер. Пара строк избавляет от "include" и "require"
 */
spl_autoload_register(function($class_name){
    $class_data = explode('\\', $class_name);
    $base_dir = $_SERVER['DOCUMENT_ROOT'];

    $class_path = $base_dir . DIRECTORY_SEPARATOR . implode(DIRECTORY_SEPARATOR, $class_data) . '.php';

    if(file_exists($class_path)){
        require_once $class_path;
    }
});