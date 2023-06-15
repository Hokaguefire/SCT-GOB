<?php
    require 'fpdf/fpdf.php';
    class PDF extends FPDF
    {
        function Header()
        {
            $this->Image('img/cabecera.png', 8, 0, 180);
            $this->Ln(25); //salto de linea
            $this->SetFont('Arial','B',15);
            $this->Cell(30,10,utf8_decode('Detalles del trámite'),0,'C'); // Título
            $this->Ln(12); //salto de linea
        }
        
        function Footer()
        {
            $this->SetY(-15);
            $this->SetFont('Arial','I',10);
            $this->Cell(30,0,date('d/m/Y'),0,1,'L');
            $this->Cell(0,8,utf8_decode('Página '.$this->PageNo().'/{nb}'),0,0,'C');
        }
        
    }
?>