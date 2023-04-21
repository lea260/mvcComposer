<?php

use Leandro\mvc\models\Auto;

//namespace Leandro\mvc\controller;

class Index_Controller
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
    }
    public function saludar()
    {
        //recibe parametros llama a la vista
    }
}

;
