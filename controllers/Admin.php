<?php

namespace controllers;

use core\App;
use core\web\Controller;

/**
 * Class Admin
 * @package controllers
 * @property \modules\admin\Admin $admin_module
 */

class Admin extends Controller{

    private $admin_module = null;
    public function __construct(array $config){
        $this->admin_module = App::m('admin');
        parent::__construct($config);
    }

    public function about(){
        return $this->render('about');
    }
    public function edit(){
        $id = isset($_GET['id']) ? (integer)$_GET['id'] : null;
        if(is_null($id)) return $this->redirect('task', 'index');

        $task = \models\Task::findById($id);
        if(is_null($task) || $task === false) return $this->redirect('task', 'index');

        if($this->isPost()){
            $task->text = $_POST['text'];
            $task->status = strtolower($_POST['status'] === 'on') ? 1 : 0;

            if($task->update()){
                return $this->redirect('task', 'index');
            }
        }

        return $this->render('edit', ['task' => $task]);
    }


    public function beforeAction(){
        if(!$this->admin_module->isLogged()){
            return $this->redirect('login', 'login');
        }
    }
}