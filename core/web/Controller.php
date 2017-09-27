<?php

namespace core\web;
use http\Env\Request;

/**
 * Class Controller
 * @package core\web
 *
 * @property \Smarty $smarty
 * @property array $config
 */

abstract class Controller implements \core\interfaces\web\Controller{
    private $smarty;
    protected $config;
    public function __construct(array $config){
        $this->config = $config;

        $this->smarty = new \Smarty();
        $this->smarty->setTemplateDir($config['path']['template_source']);
        $this->smarty->setCompileDir($config['path']['template_compiled']);

        $this->smarty->setDebugging(true);

        $this->beforeAction();
    }
    /**
     * @param $view
     * @param array $params
     * @return string
     *
     * Render laoyout&view file
     */
    public function render($view, array $params = []){
        $title = null;
        $layout_name = 'layout' . DIRECTORY_SEPARATOR . $this->config['layout']['main'];
        $this->smarty->assignByRef('title' , $title);

        if(is_null($title)){ $title = $this->config['render']['default_title']; }

        $content = $this->renderPartial($view, $params);

        $this->smarty->assign('title', $title);
        $this->smarty->assign('site_name', 'BeeJee');
        $this->smarty->assign('content', $content);

        return $this->smarty->fetch($layout_name);
    }
    /**
     * @param $view
     * @param array $params
     * @return string
     *
     * Render file
     */
    public function renderPartial($view, array $params = []){
        $path = explode('\\', get_called_class());
        $path = array_pop($path);
        $path = mb_strtolower($path);

        foreach ($params as $name => $val){
            $this->smarty->assign($name, $val);
        }
        return $this->smarty->fetch($path . DIRECTORY_SEPARATOR . $view . '.tpl');
    }
    public function redirect($controller, $action){
        $base_host = sprintf(
            "%s://%s",
            isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
            $_SERVER['SERVER_NAME']
        );
        return header(sprintf('Location: %s/index.php?c=%s&a=%s', $base_host, strtolower($controller), strtolower($action)));
    }
    public function goHome(){}
    public function isPost(){
        if($_SERVER['REQUEST_METHOD'] === 'POST') return true;
        else return false;
    }
    public function isGet(){
        if ($_SERVER['REQUEST_METHOD'] === 'GET') return true;
        else return false;
    }

    public function beforeAction(){}
    public function afterAction(){}
    public function __destruct(){ $this->afterAction(); }
}