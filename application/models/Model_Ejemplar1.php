<?php
    class Model_Ejemplar1 extends CI_Model{
        public function __construct()
        {
            parent::__construct();
        }
<<<<<<< HEAD

        function getCategorias(){
            $rows=$this->db->query("SELECT * FROM  categoria")->result();



        $opciones=array();
        foreach($rows as $row){
            $opciones[$row->cate_id] = $row->cate_nombre;
        }
        return $opciones;
    
    }
}
=======
        
        function getCategorias(){
            $rows = $this->db->query("SELECT * FROM categoria")->result();
            $opciones = array();
            foreach($rows as $row){
                $opciones[$row->cate_id] = $row->cate_nombre;
            }
            return $opciones;
        }
    }
>>>>>>> 3e605e759a1a97327b10372560effe618a81c52b
?>