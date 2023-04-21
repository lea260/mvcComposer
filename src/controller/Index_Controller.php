<?php

use Leandro\mvc\libs\Controller;
use Leandro\mvc\models\Auto;

//namespace Leandro\mvc\controller;

class Index_Controller extends Controller
{
    public function __construct()
    {
        //$this->vista = $vista;
    }

    public function index()
    {
        echo "desde index";
        //recibe parametros llama a la vista
        $auto = new Auto("hola");
        $info = $auto->info();
        $this->render("index/index", $auto);

    }
    public function saludar()
    {
        //recibe parametros llama a la vista
    }
}

;
