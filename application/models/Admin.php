<?php

namespace application\models;

use application\core\Model;
use Imagick;

class Admin extends Model
{
    public $error;

    public function loginValidate($post) {
        $config = require 'application/config/admin.php';
        if($config['login'] != $post['login'] or $config['password'] != $post['password']) {
            $this->error = 'ОШИБКА' . $config['login']. $config['password'];
            return false;
            // $post['login'] . $post['password']
        }
        return true;
    }
    public function postValidate($post , $type){
        $nameLen = iconv_strlen($post['name']);
        $textLen = iconv_strlen($post['text']);
        $subjLen = iconv_strlen($post['description']);
        

        if ($nameLen < 3 or $nameLen > 20) {
            $this->error = 'Название должно содержать от 3 до 20 символов';
            return false;
        }  
        elseif($textLen < 10 or $textLen > 500) {
            $this->error = 'Текст должно содержать от 3  до 500 символов';
            return false;
        } elseif($subjLen < 3 or $subjLen > 50) {
            $this->error = 'Описание должно содержать от 3 до 50 символов';
            return false;
        }

        // if(empty($_FILES['img']['tmp_name']) and $type == 'add') {
        //     $this->error = 'Изображение не указано';
        //     return false;
        // }

        return true;
    }

    public function postAdd($post){

        $params = [
            'name' => $post['name'],
            'description' => $post['description'],
            'text' => $post['text'],
        ];

        $this->db->query('INSERT INTO posts (name,description,text) VALUES (:name, :description, :text)', $params);
        return $this->db->lastInsertId();   
    }

    public function postUploadImage($path, $id){
        $img = new Imagick($path);
        $img->cropThumbnailImage(1080, 800);
        $img->setImageCompressionQuality(80);
        $img->writeImage(__DIR__.'\\..\\..\\public\\materials\\'.$id.'.jpg');
        // move_uploaaded_file($path, 'public/materials/'.$id.'.jpg');
    }

    public function isPostExists($id){
        $params = [
            'id' => $id,
        ];

        return $this->db->column('SELECT id FROM posts WHERE id =:id', $params);
    }

    public function postDelete($id){
        $params = [
            'id' => $id,
        ];

        $this->db->query('DELETE FROM posts WHERE id =:id', $params);
        unlink(__DIR__.'\\..\\..\\public\\materials\\'.$id.'.jpg');
    }

    public function postData($id){
        $params = [
            'id' => $id,
        ];

        return $this->db->row('SELECT * FROM posts WHERE id =:id', $params);
    }

    public function postEdit($post,$id){
        $params = [
            'id' => $id,
            'name' => $post['name'],
            'description' => $post['description'],
            'text' => $post['text'],
        ];

        $this->db->query('UPDATE posts SET name = :name, description = :description,text = :text WHERE id=:id', $params);
    }
}
