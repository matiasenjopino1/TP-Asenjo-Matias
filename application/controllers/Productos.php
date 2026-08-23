<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos extends CI_Controller
{

    public function __construct() {
        parent::__construct();
        $this->load->model("Productos_model");
         $this->load->helper("url");
    }

    public function index()
    {
        $datos['productos'] = $this->Productos_model->obtenerTodos();
        $this->load->view('productos_listado',$datos);
    }

    public function ver($id)
{
    $datos['producto'] = $this->Productos_model->obtenerPorId($id);

    $this->load->view('productos_detalle', $datos);
}   
}