<?php
session_start();
$varsesion = $_SESSION['usuario'];

if($varsesion == null || $varsesion ='')
{
    echo 'Acceso denegado';
    die();
}

session_destroy();
header("location:login.html");
?>