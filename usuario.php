<?php
include 'conector.php'; //llamada de conector
$tipo = $_GET["tipo"];
$usuario = $_GET["usuario"];
$clave = $_GET["clave"];

//Consulta para agregar datos a la bd
$agregar = "INSERT INTO usuario(tipo, usuario, clave) VALUES ('$tipo', '$usuario', '$clave')";

//Ejecutar consulta
$resultado = mysqli_query($conexion, $agregar);
if ($resultado)
{   
    echo"<script language='javascript'>alert('Usuario creado exitosamente.');window.location.href='usuario.html';</script>";  
}
else
{
    echo"<script language='javascript'>alert('Error al registrar.');</script>";
}
?>