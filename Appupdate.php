<?php
require_once('crudApp.php');
require_once('tramite.php');
$crud= new CrudTramite();
$tramite=new Tramite();
//busca el tramite utilizando el id, que es enviado por GET desde la vista mostrar.php
$tramite=$crud->obtenerTramite($_GET['id']);

session_start();
$varsesion=$_SESSION['usuario'];
if($varsesion == null || $varsesion ='')
{
    echo 'Acceso denegado';
    die();
}
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="Autor" content="David Quiñonez" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
    <title>SCTGOB - Editor de trámite</title>
    <link rel="stylesheet" href="styles/estiloEdit.css">
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <header>
            <div class="contenedor">
                <div class="logo">
                    <img src="img/isotipo.png">
                </div>
                <a class="logo" href="Appadmin.php">
                    <img src="img/nombre.png">
                </a>
                <input type="checkbox" id="btn-menu">
                <label class="icon-menu" for="btn-menu"></label>
                <nav>
                    <ul class="menu">
                        <li><img src="img/user.png"></li>
                        <li><h3>&nbsp;<?php echo $_SESSION['usuario']?></h3></li>
                        <li><a href="cerrar.php">Cerrar sesión</a></li>
                    </ul>
                </nav>
            </div>
    </header>
    
    <br/><br/><br/><br/>
	<form action='controlApp.php' method='post'>
        <table>
                <input type='hidden' name='id' value='<?php echo $tramite->getId()?>'>
                <tr>
                <td>De:</td>
                    <td><input type='text' name='de' value="<?php echo $tramite->getDe()?>" required></td>
                </tr>
                <tr>
                <td>Asunto</td>
                    <td><input type='text' name='asunto' value="<?php echo $tramite->getAsunto()?>" required></td>
                </tr>  
                <tr>
                    <td>Fecha de Inicio:</td>
                    <td><input type='datetime-local' name='fecha' value="<?php echo $tramite->getFecha()?>" required></td>
                </tr>   
                <tr>
                    <td>Documento:</td>
                    <td><input type='text' name='documento' value="<?php echo $tramite->getDocumento()?>" required></td>
                </tr>
                <tr>
                    <td>Entregado a:</td>
                    <td><input type='text' name='entregado' value="<?php echo $tramite->getEntregado()?>" required></td>
                </tr>
                <tr>
                    <td>Fecha de entrega:</td>
                    <td><input type='datetime-local' name='f_entregado' value="<?php echo $tramite->getF_entregado()?>" required></td>
                </tr>
                <tr>
                    <td>Delegado a:</td>
                    <td><input type='text' name='delegado' value="<?php echo $tramite->getDelegado()?>"></td>
                </tr>
                <tr>
                    <td>Fecha de delegación:</td>
                    <td><input type='datetime-local' name='f_delegado' value="<?php echo $tramite->getF_delegado()?>"></td>
                </tr>
                <tr>
                    <td>Fecha de finalización</td>
                    <td><input type='datetime-local' name='finalizado' value="<?php echo $tramite->getFinalizado()?>"></td>
                </tr>
                <tr>
                    <td>Observación</td>
                    <td><textarea rows="4" cols="25" name='observacion' ><?php echo $tramite->getObservacion()?></textarea></td>
                </tr>
            <input type='hidden' name='actualizar' id="btn-guardar" value='actualizar'>
        </table>
        <input type='submit' value='Guardar' id="btn-guardar">
    </form>
    
    <footer>
        <p class="powered_by">Desarrollado por:
            <a href="https://api.whatsapp.com/send?phone=593968727645&text=Buen%20día,%20estimado%20Sr.%20David%20Quiñónez">David Quiñónez &#x02709;</a>
        </p>
        <p>Gobernación de Esmeraldas</p>
    </footer>
</body>
</html>