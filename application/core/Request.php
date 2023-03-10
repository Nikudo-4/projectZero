<?php

namespace application\core;


class Request {

    public $post;
    public $get;
    public $sesion;

    function __construct(){
        $this->get =$this->kuk($_GET);
        $this->sesion =$this->kuk($_SESSION);
        $this->post = $this->kuk($_POST);
    }
    private function kuk(array $g):array
    {
        $arrag = [];
        
        foreach ($g as $key => $value) {
            $fg = htmlspecialchars($value);
            $key = htmlspecialchars($key);
            $arrag[$key] = $fg;
            
        }
        return $arrag;
    }
}