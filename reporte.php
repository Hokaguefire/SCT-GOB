<?php
    require_once('crudApp.php');
    require_once('tramite.php');
    $crud= new CrudTramite();
    $tramite=new Tramite();

    $tramite=$crud->buscar($_GET['id']);
    //$tramite=$crud->obtenerTramite($_GET['id']);
    //$listaTramites=$crud->mostrar();
    //$tramit= $_GET['id'];
    
    include 'plantilla.php';
    $pdf = new PDF();
    $pdf->AliasNbPages();   
    $pdf->AddPage();

$pdf->Cell(7,8,utf8_decode('Nº: '.$pdf->SetFont('Arial','B',12)),0,0,'L',0);
$pdf->Cell(20,8,utf8_decode($tramite->getId().$pdf->SetFont('Arial','',12)),0,1,'L',0);
$pdf->Cell(8,8,utf8_decode('De: '.$pdf->SetFont('Arial','B',12)),0,0,'L',0);
$pdf->Cell(180,8,utf8_decode($tramite->getDe().$pdf->SetFont('Arial','',12)),0,1,'L',0);
$pdf->Cell(15,8,utf8_decode('Fecha: '.$pdf->SetFont('Arial','B',12)),0,0,'L',0);
$pdf->MultiCell(140,8,utf8_decode($tramite->getFecha().$pdf->SetFont('Arial','',12)),0,1,0,'L',0);
$pdf->Cell(17,8,utf8_decode('Asunto: '.$pdf->SetFont('Arial','B',12)),0,0,'L',0);
$pdf->MultiCell(170,8,utf8_decode($tramite->getAsunto().$pdf->SetFont('Arial','',12)),0,1,0,'L',0);
$pdf->Cell(26,8,utf8_decode('Documento: '.$pdf->SetFont('Arial','B',12)),0,0,'L',0);
$pdf->MultiCell(140,8,utf8_decode($tramite->getDocumento().$pdf->SetFont('Arial','',12)),0,1,0,'L',0);
$pdf->Cell(27,8,utf8_decode('Entregado a: '.$pdf->SetFont('Arial','B',12)),0,0,'L',0);
$pdf->MultiCell(140,8,utf8_decode($tramite->getEntregado().$pdf->SetFont('Arial','',12)),0,1,0,'L',0);
$pdf->Cell(37,8,utf8_decode('Fecha de entrega: '.$pdf->SetFont('Arial','B',12)),0,0,'L',0);
$pdf->MultiCell(140,8,utf8_decode($tramite->getF_entregado().$pdf->SetFont('Arial','',12)),0,1,0,'L',0);
$pdf->Cell(26,7,utf8_decode('Delegado a: '.$pdf->SetFont('Arial','B',12)),0,0,'L',0);
$pdf->MultiCell(140,8,utf8_decode($tramite->getDelegado().$pdf->SetFont('Arial','',12)),0,1,0,'L',0);
$pdf->Cell(44,8,utf8_decode('Fecha de delegación: '.$pdf->SetFont('Arial','B',12)),0,0,'L',0);
$pdf->MultiCell(120,8,utf8_decode($tramite->getF_delegado().$pdf->SetFont('Arial','',12)),0,1,0,'L',0);
$pdf->Cell(28,8,utf8_decode('Finalizado el: '.$pdf->SetFont('Arial','B',12)),0,0,'L',0);
$pdf->MultiCell(120,8,utf8_decode($tramite->getFinalizado().$pdf->SetFont('Arial','',12)),0,1,0,'L',0);
$pdf->Cell(28,8,utf8_decode('Observación: '.$pdf->SetFont('Arial','B',12)),0,0,'L',0);
$pdf->MultiCell(160,8,utf8_decode($tramite->getObservacion().$pdf->SetFont('Arial','',12)),0,1,0,'L',0);
$pdf->Output();
?>