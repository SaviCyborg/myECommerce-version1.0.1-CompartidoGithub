<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link rel="icon" href="logo/savilogo(width300pxHeight300)T.png">
        <title>Inicia Sesión</title>
        <link rel="stylesheet"  type="text/css" href="estilos/estiloIniciarSesion.css"> 
    </head>
<?php
    include_once "datosConexion.php";

    if(!empty($_POST)){
        if (isset($_POST['botonInicioSesion'])) {
            $usuario = $_POST['usuario'];
            $Pass = md5($_POST['password']);

            $conexion = mysqli_connect($db_host,$db_user,$db_pass,$db_database);

        
            ini_set("display_errors",1);//quitando la tabla con errores para evitar ataques
            ini_set("display_startup_errors",1);//quitando la tabla con errores para evitar ataques
    
            if($conexion==false){
                die("Error de conexion a MySQL con el codigo: ".mysqli_connect_errno($conexion).
                    "<br>".mysqli_connect_error($conexion)
                );
            }

          

            $query = "SELECT * FROM `epiz_32478908_empresa`.`usuarios` WHERE `contrasena` = '$Pass' AND `usuario` = '$usuario';
            ";

            $result = mysqli_query($conexion,$query);

            $row = mysqli_fetch_assoc($result);

            if ($row) {
                session_start();

                $_SESSION['usuario'] =  $usuario;

                header("Location:indexS_UsuarioRegistrado.php");
            }else{
                echo "¡Clave o Contraseña Invalida!";
            }

            mysqli_close($conexion); 
        }

       



    }



?>
    <body>
        <form class="form" action="iniciarSesionS.php" method="post">
            <h2 class="form__title">Inicia Sesión</h2>
            <p class="form__paragraph">¿Aún no tienes una cuenta? &nbsp&nbsp<a href="registrateS.php" class="form__link">Entra aquí</a></p>

            <div class="form__container">
            
            
                <div class="form__group">
                    <input type="text" id="user" class="form__input" name="usuario" placeholder=" " required>
                    <label for="user" class="form__label">Usuario:</label>
                    <span class="form__line"></span>
                </div>
         
            
                <div class="form__group">
                    <input type="password" id="password" class="form__input" name="password" placeholder=" " required>
                    <label for="password" class="form__label">Contraseña:</label>
                    <span class="form__line"></span>
                </div>
           

            </div>

            <input type="submit" class="form__submit" value="Entrar" name="botonInicioSesion">
        </form>

        <script src="codigojs/codigoIniciarSesionS.js"></script>
    </body>
</html>

