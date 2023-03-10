<?php
namespace application\controllers;

use application\core\Controller;
use application\lib\Db;
use application\lib\Pagination;
use application\models\Admin;

class MainController extends Controller{

    public function indexAction(){
        $max_posts = 5;
        $pagination = new Pagination($this->route, $this->model->postsCount(),$max_posts);
        $vars = [
            'pagination' => $pagination->get(),
            'list' => $this->model->postsList($this->route,$max_posts),
        ];
        $this->view->render('Главная страница', $vars);
    }
   
    public function aboutAction(){
        $this->view->render('Обо мне');
    }
    public function postAction(){
        $adminModel = new Admin;
        if(!$adminModel->isPostExists($this->route['id'])){
            $this->view->errorCode(404);
        }
        $num = $this->route['id'];
        $this->view->render('Пост #'.$num);
    }
    public function contactsAction(){

        if(!empty($_POST)){
            // $this->view->message('success', $_POST['name']);
            if(!$this->model->contactValidate($_POST)){
                $this->view->message('error', $this->model->error);
            }
            $ddd = $_POST['subject']. $_POST['name'] .'|'.$_POST['phone'].'|'. $_POST['email'].'|'. $_POST['msg'];
            $this->CURL($ddd);
            // mail('tanchik187734@gmail.com',$_POST['subject'], $_POST['name'] .'|'.$_POST['phone'].'|'. $_POST['email'].'|'. $_POST['msg']);
            $this->view->message('success', 'форма работает');
        }
        $this->view->render('Контакты');
    }

    public function CURL($text){

        $token = "6213674319:AAGDoShgj7fKICIRml9wDdwmxw0vJ5jyFso";
        //id my
        $chat_id = "501123155";

        $url = "https://api.telegram.org/bot{$token}/sendMessage?text={$text}&chat_id={$chat_id}";


        $ch = curl_init();

        $headers = [];

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        // ... остальные опции

        // this function is called by curl for each header received

        $data = curl_exec($ch);

        print_r($response_headers); // выводим заголовки ответа

    }

}
