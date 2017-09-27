<?php

namespace modules\admin;

use core\Module;

class Admin extends Module {
    public $login;
    public $passw;

    public function __construct(){
        session_start();
    }

    public function login($login, $password){
        if(strcmp($this->login, $login) === 0 && strcmp($this->passw, $password) === 0){
            $_SESSION['logged'] = true;
            return true;
        }else{
            $_SESSION['logged'] = false;
            return false;
        }
    }

    public function logout(){
        if($this->isLogged()){
            $_SESSION['logged'] = false;
        }
    }

    public function isLogged(){
        return isset($_SESSION['logged']) ? $_SESSION['logged'] : false;
    }
}