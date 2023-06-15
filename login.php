<?php
include 'conector.php';
$usuario = $_GET["usuario"];
$clave = $_GET["clave"];

$consulta ="SELECT tipo FROM usuario WHERE usuario='$usuario' and clave='$clave'";

$resultado = mysqli_query($conexion, $consulta);

$fila=mysqli_fetch_array($resultado);


if ($fila["tipo"]=='super')
{
    session_start();
    $_SESSION['usuario'] = $usuario;
    header("location:Appsuper.php");
    exit(); //Cierra el codigo php
}

else if($fila["tipo"]=='admin') 
{
    session_start();
    $_SESSION['usuario'] = $usuario;
    header("location:Appadmin.php");
    exit();
}

else if($fila["tipo"]=='user') 
{
    session_start();
    $_SESSION['usuario'] = $usuario;
    header("location:Appuser.php");
    exit();
}


else
{
    echo"<script language='javascript'>alert('Usuario y contraseña incorrectos, por favor intente nuevamente');window.location.href='login.html';</script>";
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>