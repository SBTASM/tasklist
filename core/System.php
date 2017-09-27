<?php

namespace core;

use core\web\Controller;

class System extends Controller{
    public function notfound(){
        return $this->render('error', ['code' => 404]);
    }
}