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
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Registro</title>
        <link rel="stylesheet" href="styles/estilos.css">
        <script src="styles/validar.js"></script>
    </head>
    <body>
        <div id="particles-js"></div>
        <script  src="styles/particles.js"></script>
        <script  src="styles/particulas.js"></script>
        <form action="usuario.php" method="=post" class="registro" onsubmit="return validar();">
            <h2 class="titulo">CREAR CUENTA</h2>
                <div class="contenedor">
                    <input type="text" id="usuario" name="usuario" placeholder="Usuario" class="input-100" required>
                    <input type="password" id="clave" name="clave" placeholder="Contraseña" class="input-100" required>
                    <select name="tipo" class="lista" required>
                        <option value="user" class="lista">Usuario</option>
                        <option value="admin" class="lista">Administrador</option>
                        <option value="super" class="lista">Super Administrador</option>
                    </select>
                    <input type="submit" value="Registrar" class="enviar">
                </div>    
        </form>
    </body>
</html>