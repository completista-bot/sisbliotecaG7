<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ejemplar1 extends CI_Controller {

    function __construct(){
        parent::__construct();
    }

    public function crear(){
        $this->load->helper('form');
        $this->load->model('Model_Ejemplar1');
        $opciones = $this->Model_Ejemplar1->getCategorias();
        
        $data['opciones'] = $opciones;
        $this->load->view("ejemplar1/formulario", $data);
    }

    public function listar(){
        $rows = $this->db->query("SELECT * FROM ejemplar1")->result();

        $data['rows'] = $rows;
        $this->load->view("ejemplar1/listar", $data);
    }

    public function evalua(){
        $cate_id = $this->input->post('cate_id');

        echo $cate_id; 
    }


}
    ?>