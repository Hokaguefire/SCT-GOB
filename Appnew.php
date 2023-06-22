<?php
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
        <title>SCTGOB - Nuevo Trámite</title>
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
        <form name="nuevo"action='controlApp.php' method='post'>
            <table>
            <tr>
                <td>De:</td>
                <td><input type='text' name='de' required></td>
            </tr>
            <tr>
                <td>Asunto</td>
                <td><input type='text' name='asunto' required></td>
            </tr>  
            <tr>
                <td>Fecha de inicio:</td>
                <td><input type='datetime-local' name='fecha' required></td>
            </tr>   
            <tr>
                <td>Documento:</td>
                <td><input type='text' name='documento' required></td>
            </tr>
            <tr>
                <td>Entregado a:</td>
                <td><input type='text' name='entregado' required></td>
            </tr>
            <tr>
                <td>Fecha de entrega:</td>
                <td><input type='datetime-local' name='f_entregado' required></td>
            </tr>
            <tr>
                <td>Delegado a:</td>
                <td><input type='text' name='delegado' ></td>
            </tr>
            <tr>
                <td>Fecha de delegación:</td>
                <td><input type='datetime-local' name='f_delegado' ></td>
            </tr>
            <tr>
                <td>Fecha de finalización</td>
                <td><input type='datetime-local' name='finalizado' ></td>
            </tr>
            <tr>
                <td>Observación</td>
                <td><textarea rows="4" cols="25" name="observacion" ></textarea></td>
            </tr>

            <input type='hidden' name='insertar' value='insertar'>
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