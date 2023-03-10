<?php
namespace application\controllers;

use application\core\Controller;

class AccountController extends Controller{

    public function loginAction(){
        if (!empty($_POST)) {
            $this->view->message('error', 'Текст ошибки');
        }
        $this->view->render('Cтраница логин');
    }

    public function registerAction(){
        $this->view->render('Страница регистрации');
    }
}

