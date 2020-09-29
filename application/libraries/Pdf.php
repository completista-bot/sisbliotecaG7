<?php 
    include(APPPATH."libraries/fpdf/fpdf.php");

    class PDF extends FPDF 
    {
        function Header()
        {   
            $this->SetFillcolor(253, 135, 39);
            $this->Rect(55, 0, 320, 50, 'F');
            // Logo
            $this->SetX(25);
            $this->Image(FCPATH.'assets/logo.png',5,5,45);
            // Arial bold 15
            $this->SetFont('Arial','B',30);
            // Movernos a la derecha
            $this->Cell(80);
            // Título
            $this->SetTextColor(255, 255, 255);
            $this->Cell(30,10,utf8_decode('REPORTE USUARIO'),0,2,'L');
            // Salto de línea
            
            $this->Ln(20);
            $this->SetY(70);
            $this->SetFont('Arial','B',10);
            $this->SetTextColor(255, 255, 255);
            $this->SetFillcolor(79, 78, 77);
            $this->cell(30, 10, 'login', 1, 0, 'C', 1);
            $this->cell(30, 10, 'password', 1, 0, 'C', 1);
            $this->cell(30, 10, 'codigo', 1, 0, 'C', 1);
            $this->cell(30, 10, 'nombres', 1, 0, 'C', 1);
            $this->cell(30, 10, 'apellidos', 1, 0, 'C', 1);
            $this->cell(30, 10, 'direccion', 1, 0, 'C', 1);
            $this->cell(30, 10, 'email', 1, 0, 'C', 1);
            $this->cell(30, 10, 'telefono', 1, 0, 'C', 1);
            $this->cell(30, 10, 'esadmin', 1, 1, 'C', 1);
        }
        
        // Pie de página
        function Footer()
        {
            $this->SetFillcolor(253, 135, 39);
            $this->Rect(0, 180, 320, 50, 'F');
            // Posición: a 1,5 cm del final
            $this->SetY(-20);
            // Arial italic 8
            $this->SetFont('Arial','I',8);
            $this->SetX(260);
            $this->Cell(0,10,utf8_decode('Proyecto del Grupo7'),0,1,'L');

            // Número de página
            $this->Cell(0,10,utf8_decode('Página').$this->PageNo().'/{nb}',0,0,'C');
        }
         
    }
?>