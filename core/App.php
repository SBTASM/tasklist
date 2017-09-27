<?php

namespace core;

class App{
    private static $database;
    private $config;
    private static $modules = array();

    private static $i18n;

    public function __construct(array $config){
        $this->config = $config;

        self::$database = Database::getInstance($config['database']);

        self::$i18n = new \i18n();

        $this->bootModules();
    }

    private function bootModules(){
        $modules = $this->config['modules'];
        foreach ($modules as $name => $config){
            $module = new $config['class'];
            unset($config['class']);

            foreach ($config as $var => $val){
                $module->$var = $val;
            }

            self::$modules[$name] =  $module;
        }
    }

    public static function t($message, array $params = []){
    }

    public function run(){
        $controller_name =  isset($_GET['c']) ? strtolower($_GET['c']) : strtolower($this->config['routing']['default_controller']);
        $action_name = isset($_GET['a']) ? strtolower($_GET['a']) : $this->config['routing']['default_action'];

        $class_name = 'controllers\\' . ucfirst($controller_name);
        if(!class_exists($class_name)){
            throw new Exception('404!');
        }

        $controller = new $class_name($this->config);

        if(!method_exists($class_name, strtolower($action_name))){
            throw new Exception('404!');
        }

        return $controller->$action_name();
    }

    public static function getDbConnection(){
        return self::$database;
    }

    public static function m($name){
        return self::$modules[$name];
    }
}