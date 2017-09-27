<?php

namespace controllers;

use core\App;
use core\web\Controller;

/**
 * Class Login
 * @package controllers
 *
 * @property Admin $admin_module
 */

class Login extends Controller{

    private $admin_module = null;

    public function __construct(array $config){
        $this->admin_module = App::m('admin');
        parent::__construct($config);
    }

    public function login(){
        $message = array();
        if($this->isPost()){
            $login = isset($_POST['login']) ? $_POST['login'] : null;
            $passw = isset($_POST['password']) ? $_POST['password'] : null;

            $login_res = $this->admin_module->login($login, $passw);

            if($login_res === true){
                $this->redirect('task', 'index');
            }else{
                array_push($message, 'Login failed!');
            }

        }
        return $this->render('login', ['messages' => $message]);
    }

    public function logout(){
        $this->admin_module->logout();
        return $this->redirect('task', 'index');
    }
}