<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	 function __construct(){
		parent::__construct();
		
		
		if($this->session->userdata('auth')!=true){
				redirect('Biblioteca');
				dic("");
		};
	}

	public function index()
	{
		$this->load->view('biblioteca/menu');
		$this->load->view('biblioteca/welcome_message');

		
	}
	public function usuario()
	{
		$this->load->view('biblioteca/formUsuario');
		
	}
	public function tabusuarios()
	{ 
		$this->load->model('model_usuario');
        $result = $this->model_usuario->consultar();
        $datos = array('registros'=>$result);
		$this->load->view('biblioteca/tabusuarios',$datos);
		
	}
	public function ejemplar()
	{
		$this->load->view('biblioteca/formEjemplar');
		
	}
	public function tabejemplar()
	{
		
		$this->load->model('model_ejemplar');
        $result = $this->model_ejemplar->consultar();
        $datos = array('registros'=>$result);
		$this->load->view('biblioteca/tabEjemplar',$datos);
		
	}

	public function categoria()
	{
		$this->load->view('biblioteca/formCategoria1');
	}
	public function tabcategoria()
	{
		$this->load->model('model_categoria');
        $result = $this->model_categoria->consultar();
        $datos = array('registros'=>$result);
		$this->load->view('biblioteca/tabCategoria',$datos);
		
	}
}

