<?php



use Leandro\mvc\libs\Controller;
use Leandro\mvc\models\Articulo;

class Articulos_Controller extends Controller
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
    public function listar($param = null)
    {
        $modelo = new Articulo();
        $lista = $modelo->listar();
        $this->render('articulos/listar', $lista);
    } //end listar









}
