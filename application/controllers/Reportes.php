<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reportes extends CI_Controller {
    function __construct(){

        parent::__construct();
    }

    function index()
    {
        $this->load ->library('pdf');

        $pdf =  new PDF('L','mm','A4');

       
        $pdf->AliasNbPages();
        $pdf->AddPage();
        $pdf->SetFont('Arial','',8);
        /*for($i=1;$i<=40;$i++)
        $pdf->Cell(0,10,'Imprimiendo línea número '.$i,0,1);*/
        $rows = $this->db->query("SELECT * FROM usuario")->result();
        foreach($rows as $row){
            $pdf->cell(30, 10, $row->usua_login, 1, 0, 'C', 0);
            $pdf->cell(30, 10, $row->usua_password, 1, 0, 'C', 0);
            $pdf->cell(30, 10, $row->usua_codigo, 1, 0, 'C', 0);
            $pdf->cell(30, 10, $row->usua_nombres, 1, 0, 'C', 0);
            $pdf->cell(30, 10, $row->usua_apellidos, 1, 0, 'C', 0);
            $pdf->cell(30, 10, $row->usua_direccion, 1, 0, 'C', 0);
            $pdf->cell(30, 10, $row->usua_email, 1, 0, 'C', 0);
            $pdf->cell(30, 10, $row->usua_telefono, 1, 0, 'C', 0);
            $pdf->cell(30, 10, $row->usua_esadmin, 1, 1, 'C', 0);
        }
        $pdf->Output();
    }
}
?>