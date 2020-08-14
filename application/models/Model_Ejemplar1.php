<?php
    class Model_Ejemplar1 extends CI_Model{
        public function __construct()
        {
            parent::__construct();
        }
        
        function getCategorias(){
            $rows = $this->db->query("SELECT * FROM categoria")->result();
            $opciones = array();
            foreach($rows as $row){
                $opciones[$row->cate_id] = $row->cate_nombre;
            }
            return $opciones;
        }
    }
?>