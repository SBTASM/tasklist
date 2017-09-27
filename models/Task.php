<?php

namespace models;

use core\App;
use core\Exception;

class Task{
    public $id, $text, $email, $name, $status = 0, $image;

    public function __construct(array $params = []){
        foreach ($params as $name=> $val){
            if(property_exists($this, $name))
            $this->$name = $val;
        }
    }

    public static function findAll($start, $count, $sort_by = null){
        $db = App::getDbConnection()->getConnection();

        $sql = null;

        if(is_null($sort_by)){
            $sql = sprintf("select `id`, `text`, `email`, `name`, `status`, `image` from `task` limit %d, %d",
                $start, $count);
        }else{
            $sql = sprintf("select `id`, `text`, `email`, `name`, `status`, `image` from `task` ORDER BY `%s` LIMIT %d, %d",
                $sort_by, $start, $count);
        }




        $rows = $db->query($sql);
        if($rows === false) return null;

        $objects = array();
        foreach ($rows as $row){
            array_push($objects, new self($row));
        }

        return $objects;
    }

    public static function count(){
        $db = App::getDbConnection()->getConnection();
        $sql = sprintf("select count(*) from `task`");

        $result = $db->query($sql);

        if($result === false) throw new Exception('Count error!');

        $result = mysqli_fetch_assoc($result);

        if(is_null($result)) return 0;
        $result = array_pop($result);

        return (integer)$result;
    }

    public static function findById($id){
        $db = App::getDbConnection()->getConnection();

        $sql = sprintf("select `id`, `text`, `email`, `name`, `status`, `image` from `task` where `id` = %d", $id);

        $data = $db->query($sql);
        $data = mysqli_fetch_assoc($data);

        if(is_null($data)){ return null; }

        $result = new self($data);

        return $result;

    }

    public function save(){
        $db = App::getDbConnection()->getConnection();
        $isNewRecord = is_null($this->id);

       $sql = null;

       if($isNewRecord){
           $sql = sprintf(
               "insert into `task`(`text`, `email`, `name`, `status`, `image`) VALUES('%s','%s','%s',%d,'%s')",
               $this->text, $this->email, $this->name, (integer)$this->status, $this->image);
       }else{
           $sql = sprintf("update `task` SET `text` = '%s', `email` = '%s', `name` = '%s', `status` = '%d', WHERE `id` = %d",
               $this->text, $this->email, $this->name, (integer)$this->status, (integer)$this->id);
       }

       return $db->query($sql); 
    }

    public function delete(){
        $db = App::getDbConnection()->getConnection();

        $sql = sprintf("delete from `task` WHERE `id` = %d", (integer)$this->id);

        return $db->query($sql);
    }

    public function update(){
        $db = App::getDbConnection()->getConnection();

        if($this->id === NULL) return false;

        $sql = sprintf("UPDATE `task` SET `text` = '%s', `status` = %d WHERE `id` = %d",
            $this->text, $this->status, $this->id);

        return $db->query($sql);
    }
}