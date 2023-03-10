<?php
namespace application\controllers;

use application\core\Controller;
use application\lib\Db;
use application\lib\Pagination;
use application\models\Main;


class AdminController extends Controller{
    
    public function __construct($route) {
        parent::__construct($route);
        $this->view->layout = 'admin';
        // $_SESSION['admin'] = 1;
    }


    public function loginAction(){   
        if(isset($_SESSION['admin'])){
            $this->view->redirect('admin/add');
        }
        if(!empty($_POST)){
            if(!$this->model->loginValidate($_POST)){
                $this->view->message('error', $this->model->error);
            }
            $_SESSION['admin'] = true;
            $this->view->location('/admin/add');
        }

        $this->view->render('Вход');
    }
   
    public function logoutAction(){
        unset($_SESSION['admin']);
        // debag($_SESSION);
        $this->view->redirect('admin/login');
    }

    public function addAction(){

        if(!empty($_POST)){
            if(!$this->model->postValidate($_POST, 'add')){
                $this->view->message('error', $this->model->error);
            }
            $id = $this->model->postAdd($_POST);
            $this->model->postUploadImage($_FILES['img']['tmp_name'], $id);
            $this->view->message('success', 'ID: '.$id);
        }
        
        $this->view->render('Добавить пост');
    }
    public function editAction(){
        if(!$this->model->isPostExists($this->route['id'])){
            $this->view->errorCode(404);
        }

        if(!empty($_POST)){
            if(!$this->model->postValidate($_POST , 'edit')){
                $this->view->message('error', $this->model->error);
            }
            $this->model->postEdit($_POST, $this->route['id']);
            if ($_FILES['img']['tmp_name']){
                $this->model->postUploadImage($_FILES['img']['tmp_name'],$this->route['id']);
            }
            $this->view->message('success', 'OK');
        }
        $vars = [
            'data' => $this->model->postData($this->route['id'])[0],
        ];
        $this->view->render('Изменить пост', $vars);
    }
    public function deleteAction(){
        // var_dump($this->route);
        if(!$this->model->isPostExists($this->route['id'])){
            $this->view->errorCode(404);
        }
        $this->model->postDelete($this->route['id']);
        $this->view->redirect('admin/posts');
        exit('Удалить:'.$this->route['id']);
    }

    public function postsAction(){
        $mainModel = new Main;
        $max_posts = 5;
        $pagination = new Pagination($this->route, $mainModel->postsCount(),$max_posts);
        $vars = [
            'pagination' => $pagination->get(),
            'list' => $mainModel->postsList($this->route,$max_posts),
        ];
        $this->view->render('Все посты', $vars);
    }
    
}

