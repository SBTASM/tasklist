<?php

namespace controllers;

use core\App;
use core\web\Controller;

class Task extends Controller{

    private $admin_module = null;

    public function __construct(array $config)
    {
        $this->admin_module = App::m('admin');
        parent::__construct($config);
    }

    public function index(){
        $is_admin = $this->admin_module->isLogged();
        $sort_by = isset($_GET['sort']) ? strtolower($_GET['sort']) : null;
        $page = isset($_GET['page']) ? (integer)$_GET['page'] : 1;
        $count = \models\Task::count();
        $count_of_page = $this->config['paginate']['page_items'];
        $start = ($page - 1) * $count_of_page;
        $data = \models\Task::findAll($start, $count_of_page, $sort_by);
        $pages = round(($count / $count_of_page) + 0.49) ;

        return $this->render('index', ['tasks' => $data, 'pages' => $pages, 'is_admin' => $is_admin]);
    }
    public function create(){
        if($this->isPost()){
            if(isset($_POST['name']) || isset($_POST['text']) || isset($_POST['email'])){
                $model = new \models\Task($_POST);
                $model->status = false;

                if(!is_null($_FILES['image']['tmp_name']) && strlen($_FILES['image']['tmp_name']) !== 0){
                    $model->image = $this->saveImage($_FILES['image']['tmp_name']);
                }

                if($model->save()){ $this->redirect('task', 'index'); }
            }
        }
        return $this->render('create');
    }
    public function preview(){
        if($this->isPost()){
            $task = new \models\Task($_POST);
//            $task->status = 1;
            return $this->renderPartial('preview', [
                'name' => $task->name,
                'email' => $task->email,
                'text' => $task->text,
                'status' => $task->status
            ]);
        }

        return $this->render('index');
    }
    protected function saveImage($file){
        if(!is_uploaded_file($file)){
            die('Critical image error!');
        }

        //Костиль!!!!!!!
        $this->config['image']['max_width'] = 320;
        $this->config['image']['max_height'] = 240;
        $this->config['image']['default_path'] = $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'assets' . DIRECTORY_SEPARATOR . 'images';
        //Костиль!!!!!!!

        $image = new \Imagick();
        $image->readImage($file);

        $max_width = $this->config['image']['max_width'];
        $max_height = $this->config['image']['max_height'];


        if($image->getImageHeight() > $max_height || $image->getImageWidth() > $max_width){
            $image->adaptiveResizeImage($max_width, $max_height);
        }

        $file_name = md5(time());
        $ext = $this->getImageExt($image);
        $image_path = sprintf("%s%s%s%s",
            $this->config['image']['default_path'], DIRECTORY_SEPARATOR,
            $file_name, $ext);

        $image->writeImage($image_path);
        $image->destroy();

        return sprintf("%s%s", $file_name, $ext);
    }
    /**
     * @param $image \Imagick
     * @return string
     */
    protected function getImageExt($image){
        $mime = $image->getImageMimeType();

        switch($mime){
            case 'image/jpeg':
                return '.jpg';
            case 'image/png':
                return '.png';
            case 'image/gif':
                return '.gif';
            default:
                return false;
        }
    }
}