<?php

namespace application\models;

use application\core\Model;

class Main extends Model
{
    public $error;

    public function contactValidate($post) {
        $nameLen = strlen($post['name']);
        $textLen = strlen($post['msg']);
        $subjLen = strlen($post['subject']);
        $telLen = strlen($post['phone']);

        if ($nameLen < 3 or $nameLen > 20) {
            $this->error = 'Имя должно содержать от 3 до 20 символов';
            return false;
        } 
        elseif(!filter_var($post['email'], FILTER_VALIDATE_EMAIL)){
            $this->error = 'Е-mail указан не верно';
            return false;
        } 
        elseif($textLen < 10 or $textLen > 500) {
            $this->error = 'Текст должно содержать от 10 до 500 символов';
            return false;
        } elseif($subjLen < 3 or $subjLen > 50) {
             $this->error = 'Тема должно содержать от 3 до 50 символов';
             return false;
        } elseif($telLen < 1 or $telLen > 15) {
            $this->error = 'Телефон должно содержать от 1 до 15 символов';
            return false;
        }

        return true;
    }

    public function postsCount(){
        return $this->db->column('SELECT COUNT(id) FROM posts');
    }
    
    public function postsList($route, $max){
        $params = [
            'max' => $max,
            'start' => (($route['page'] ?? 1)-1) * $max,
        ];
        return $this->db->row('SELECT * FROM posts ORDER BY id DESC LIMIT :start,:max',$params);
    }
// public function getNews(){
//     $result = $this->db->row('SELECT title, discription FROM news');
//     return $result;
// }

}
