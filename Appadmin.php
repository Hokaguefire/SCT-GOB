<?php
require_once('crudApp.php');
require_once('tramite.php');
$crud=new CrudTramite();
$tramite= new Tramite();
//obtiene todos los tramites con el método mostrar de la clase crud
$listaTramites=$crud->mostrar();

session_start();
$varsesion=$_SESSION['usuario'];
if($varsesion == null || $varsesion ='')
{
    echo 'Acceso denegado';
    die();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="Autor" content="David Quiñonez" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
        <title>SCTGOB</title>
        <link rel="stylesheet" href="styles/estiloAdmin.css">
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
                    <a href="Appnew.php"><div class="nuevo">+</div></a>
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
<!--Mostrar Datos-->
        <br/><br/><br/><br/>
        <form id="cont-buscar" name="bar-buscar" method='post' action="controlApp.php"> 
            <input type="search" name="buscador" id="txt-buscar" onchange="document.links.enlace.href='Appresult.php?id='+this.value" placeholder="Ingrese el número de trámite para buscar" autofocus required>
            
            <a type="submit" name="enlace" id="btn-buscar" href="Appresult.php?id">Buscar</a>
        </form>
        
        <section><table border=1 >
		<head>
            <th>Nº</th>
			<th>De</th>
			<th>Asunto</th>
			<th>Fecha de inicio</th>
            <th>Documento</th>
            <th>Entregado a:</th>
            <th>Delegado a:</th>
            <th>Finalizado el:</th>
			<th>Opciones</th>
		</head>
            
		<body>
			<?php foreach ($listaTramites as $tramite) {?>
			<tr>
                <td><?php echo $tramite->getId()?></td>
				<td><?php echo $tramite->getDe()?></td>
				<td><?php echo $tramite->getAsunto()?></td>
				<td><?php echo $tramite->getFecha()?></td>
                <td><?php echo $tramite->getDocumento()?></td>
                <td><?php echo $tramite->getEntregado()?></td>
                <td><?php echo $tramite->getDelegado()?></td>
                <td><?php echo $tramite->getFinalizado()?></td>
                <td>
                    <a href="Appupdate.php?id=<?php echo $tramite->getId()?>&accion=a">&#x02699; Actualizar</a>
                    <a href="reporte.php?id=<?php echo $tramite->getId()?>&accion=b" target="_blank">&#x02699; Ver detalles</a><p></p>
                </td>
			</tr>
			<?php }?>
		</body>
        </table></section>
    <footer>
        <p class="powered_by">Desarrollado por:
            <a href="https://api.whatsapp.com/send?phone=593968727645&text=Buen%20día,%20estimado%20Sr.%20David%20Quiñónez" target="_blank">David Quiñónez &#x02709;</a>
        </p>
        <p>Gobernación de Esmeraldas</p>
    </footer>
    </body>
</html>