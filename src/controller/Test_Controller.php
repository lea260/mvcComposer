<?php

use Leandro\mvc\libs\Controller;



class Test_Controller extends Controller
{
  public function __construct()
  {
    parent::__construct();
  }

  //base+articulos
  public function index()
  {
    //$alumnos = $this->model->get();  
    $this->render('articulos/index');
  }

  public function nuevo($param = null)
  {

    //lista los articulos
    $this->render('articulo/nuevo');
  } //end listar
  public function hola($param = null)
  {
    echo "<pre>";
    var_dump($_POST);
    var_dump($_GET);
    echo "</pre>";
  } //end listar









}