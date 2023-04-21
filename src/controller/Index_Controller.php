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
        
        //$auto = new Auto("hola");
        
        $this->render("index/index");

    }
    public function saludar()
    {
        //recibe parametros llama a la vista
    }
}