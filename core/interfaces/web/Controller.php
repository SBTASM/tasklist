<?php

namespace core\interfaces\web;

interface Controller{
    public function render($view, array $params = []);
    public function renderPartial($view, array $params = []);

    public function redirect($controller, $action);
    public function goHome();
}