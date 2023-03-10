<?php
require 'application/lib/Dev.php';

//Авто подключение классов
use application\core\Router;
// use application\lib\Db;
spl_autoload_register(function($class) {
    $path = str_replace('\\','/', $class .'.php');
    if (file_exists($path)){
        require $path;
    }
});

// хранение данные в куки(почитать за сессии)
session_start();

// echo 'GGGGGGGG';    
$router = new Router;
$router->run();
?>