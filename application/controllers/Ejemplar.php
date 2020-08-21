<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ejemplar extends CI_Controller {

	public function index(){
        parent::__construct();
        
        
    }
    public function crear(){
        $this->load->helper('form');
        $this->load->model('Model_Ejemplar1');
        $opciones = $this->Model_Ejemplar1->getCategorias();
        $data['opciones']=$opciones;
        $this->load->view("ejemplar/formulario",$data);
    }
    public function listar(){
        $this->load->view("ejemplar/listar");
    }
    public function evalua(){
        $cate_id=$this->input->post('cate_id');

        echo $cate_id;
    }
}
?>