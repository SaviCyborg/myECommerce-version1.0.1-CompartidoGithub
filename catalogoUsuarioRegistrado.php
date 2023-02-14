<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Catálogo</title>
    <link rel="icon" href="logo/savilogo(width300pxHeight300)T.png">
    <link rel="stylesheet"  type="text/css" href="estilos/catalogoUsuarioRegistrado.css">  
</head>
<body>

<?php
    session_start();

    if (!isset($_SESSION['usuario'])) {
       header("Location:iniciarSesion.php");
    }

    if (isset($_GET['favorito'])) {

    
        include_once "datosConexion.php"; 
        $conexion2 = mysqli_connect($db_host,$db_user,$db_pass,$db_database);
        
        ini_set("display_errors",1);//quitando la tabla con errores para evitar ataques
        ini_set("display_startup_errors",1);//quitando la tabla con errores para evitar ataques
        
        if($conexion2==false){
            die("Error de conexion a MySQL con el codigo: ".mysqli_connect_errno($conexion2).
        "<br>".mysqli_connect_error($conexion2)
            );
        }
        $nombreUsuario = $_SESSION['usuario'];
        $favoritoGuardar = $_GET['favorito'];
        if ($favoritoGuardar == "Acelga") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='$favoritoGuardar' WHERE `id`='1';";
        }
        if ($favoritoGuardar == "Almendras azucaradas con miel") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='$favoritoGuardar' WHERE `id`='2';";
        }
        if ($favoritoGuardar == "Cambur") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='$favoritoGuardar' WHERE `id`='3';";
        } 
        if ($favoritoGuardar == "Cerezas") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='$favoritoGuardar' WHERE `id`='4';";
        }
        if ($favoritoGuardar == "Chocolate Croissants") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='$favoritoGuardar' WHERE `id`='5';";
        }
        if ($favoritoGuardar == "Chorizo iberico") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='$favoritoGuardar' WHERE `id`='6';";
        }
        if ($favoritoGuardar == "Chorizo Picante") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='$favoritoGuardar' WHERE `id`='7';";
        }
        if ($favoritoGuardar == "Costillas De Cerdo") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='$favoritoGuardar' WHERE `id`='8';";
        }
        if ($favoritoGuardar == "Croissants") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='$favoritoGuardar' WHERE `id`='9';";
        }
        if ($favoritoGuardar == "Espinacas") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='$favoritoGuardar' WHERE `id`='10';";
        }
        if ($favoritoGuardar == "Filete De Corvina") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='$favoritoGuardar' WHERE `id`='11';";
        }
        if ($favoritoGuardar == "Guanabana") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='$favoritoGuardar' WHERE `id`='12';";
        }
        if ($favoritoGuardar == "Helado de mora") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='$favoritoGuardar' WHERE `id`='13';";
        }
        if ($favoritoGuardar == "Helado Artesanal") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='$favoritoGuardar' WHERE `id`='14';";
        }
        if ($favoritoGuardar == "Helado Artesanal De Mora") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='$favoritoGuardar' WHERE `id`='15';";
        }
        if ($favoritoGuardar == "Helado Artesanal de pistacho") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='$favoritoGuardar' WHERE `id`='16';";
        }
        if ($favoritoGuardar == "Helado Artesanal de Mango") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='$favoritoGuardar' WHERE `id`='17';";
        }
        if ($favoritoGuardar == "Helado Sundae Caramel") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='$favoritoGuardar' WHERE `id`='18';";
        }
        if ($favoritoGuardar == "Higos Secos") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='$favoritoGuardar' WHERE `id`='19';";
        }
        if ($favoritoGuardar == "Jamon Serrano") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='$favoritoGuardar' WHERE `id`='20';";
        }
        if ($favoritoGuardar == "Langostinos") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='$favoritoGuardar' WHERE `id`='21';";
        }
        if ($favoritoGuardar == "Lechosa") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='$favoritoGuardar' WHERE `id`='22';";
        }
        if ($favoritoGuardar == "Limones") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='$favoritoGuardar' WHERE `id`='23';";
        }
        if ($favoritoGuardar == "Mango") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='$favoritoGuardar' WHERE `id`='24';";
        }
        if ($favoritoGuardar == "Manitoba Original Mix") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='$favoritoGuardar' WHERE `id`='25';";
        }
        if ($favoritoGuardar == "Manzana Amarilla") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='$favoritoGuardar' WHERE `id`='26';";
        }
        if ($favoritoGuardar == "Manzana Roja") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='$favoritoGuardar' WHERE `id`='27';";
        }
        if ($favoritoGuardar == "Manzana Verde") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='$favoritoGuardar' WHERE `id`='28';";
        }
        if ($favoritoGuardar == "Medallones de lomito") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='$favoritoGuardar' WHERE `id`='29';";
        }
        if ($favoritoGuardar == "Merey Cashews") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='$favoritoGuardar' WHERE `id`='30';";
        }
        if ($favoritoGuardar == "Merey Grupo Cashews") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='$favoritoGuardar' WHERE `id`='31';";
        }
        if ($favoritoGuardar == "Mermelada") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='$favoritoGuardar' WHERE `id`='32';";
        }
        if ($favoritoGuardar == "Mixed Nuts") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='$favoritoGuardar' WHERE `id`='33';";
        }
        if ($favoritoGuardar == "Mozzarella") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='$favoritoGuardar' WHERE `id`='34';";
        }
        if ($favoritoGuardar == "Naranja") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='$favoritoGuardar' WHERE `id`='35';";
        }
        if ($favoritoGuardar == "Nispero") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='$favoritoGuardar' WHERE `id`='36';";
        }
        if ($favoritoGuardar == "Ocumo") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='$favoritoGuardar' WHERE `id`='37';";
        }
        if ($favoritoGuardar == "Ossobuco") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='$favoritoGuardar' WHERE `id`='38';";
        }
        if ($favoritoGuardar == "Pan Campesino") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='$favoritoGuardar' WHERE `id`='39';";
        }
        if ($favoritoGuardar == "Pan Canilla") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='$favoritoGuardar' WHERE `id`='40';";
        }
        if ($favoritoGuardar == "Pan Cuadrado") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='$favoritoGuardar' WHERE `id`='41';";
        }
        if ($favoritoGuardar == "Pan de perro caliente") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='$favoritoGuardar' WHERE `id`='42';";
        }
        if ($favoritoGuardar == "Pan Gallego") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='$favoritoGuardar' WHERE `id`='43';";
        }
        if ($favoritoGuardar == "Parmesano Reggiano") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='$favoritoGuardar' WHERE `id`='44';";
        }
        if ($favoritoGuardar == "Patilla") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='$favoritoGuardar' WHERE `id`='45';";
        }
        if ($favoritoGuardar == "Pera") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='$favoritoGuardar' WHERE `id`='46';";
        }
        if ($favoritoGuardar == "Perejil") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='$favoritoGuardar' WHERE `id`='47';";
        }
        if ($favoritoGuardar == "Chuletas de Cochino") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='$favoritoGuardar' WHERE `id`='48';";
        }
        if ($favoritoGuardar == "Pringles") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='$favoritoGuardar' WHERE `id`='49';";
        }
        if ($favoritoGuardar == "Queso Brie") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='$favoritoGuardar' WHERE `id`='50';";
        }
        if ($favoritoGuardar == "Queso Fresco") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='$favoritoGuardar' WHERE `id`='51';";
        }
        if ($favoritoGuardar == "Queso fresco Casero") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='$favoritoGuardar' WHERE `id`='52';";
        }
        if ($favoritoGuardar == "Queso Gouda") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='$favoritoGuardar' WHERE `id`='53';";
        }
        if ($favoritoGuardar == "Queso Gouda Ahumado") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='$favoritoGuardar' WHERE `id`='54';";
        }
        if ($favoritoGuardar == "Queso Holandes") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='$favoritoGuardar' WHERE `id`='55';";
        }
        if ($favoritoGuardar == "Queso Paisa") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='$favoritoGuardar' WHERE `id`='56';";
        }
        if ($favoritoGuardar == "Queso Pecorino") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='$favoritoGuardar' WHERE `id`='57';";
        }
        if ($favoritoGuardar == "Salchicha Alemana") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='$favoritoGuardar' WHERE `id`='58';";
        }
        if ($favoritoGuardar == "Salchicha Debrecziner") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='$favoritoGuardar' WHERE `id`='59';";
        }
        if ($favoritoGuardar == "Salchicha Frankfurt") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='$favoritoGuardar' WHERE `id`='60';";
        }
        if ($favoritoGuardar == "Salchicha") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='$favoritoGuardar' WHERE `id`='61';";
        }
        if ($favoritoGuardar == "Salchicha Polaca") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='$favoritoGuardar' WHERE `id`='62';";
        }
        if ($favoritoGuardar == "Salchichon") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='$favoritoGuardar' WHERE `id`='63';";
        }
        if ($favoritoGuardar == "Salmon Ahumado") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='$favoritoGuardar' WHERE `id`='64';";
        }
        if ($favoritoGuardar == "Camarones") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='$favoritoGuardar' WHERE `id`='65';";
        }
        if ($favoritoGuardar == "Chuletas de Cerdo") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='$favoritoGuardar' WHERE `id`='66';";
        }
        if ($favoritoGuardar == "Calamares") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='$favoritoGuardar' WHERE `id`='67';";
        }
        if ($favoritoGuardar == "Filete t bone steak") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='$favoritoGuardar' WHERE `id`='68';";
        }
        if ($favoritoGuardar == "Toblerone") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='$favoritoGuardar' WHERE `id`='69';";
        }
        if ($favoritoGuardar == "Toblerone de leche") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='$favoritoGuardar' WHERE `id`='70';";
        }
        if ($favoritoGuardar == "Toblerone Chocolate Negro") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='$favoritoGuardar' WHERE `id`='71';";
        }
        if ($favoritoGuardar == "Toblerone Almendras Crujientes") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='$favoritoGuardar' WHERE `id`='72';";
        }
        if ($favoritoGuardar == "Toblerone Almendras Saladas") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='$favoritoGuardar' WHERE `id`='73';";
        }
        if ($favoritoGuardar == "Tomates") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='$favoritoGuardar' WHERE `id`='74';";
        }
        if ($favoritoGuardar == "Toronja") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='$favoritoGuardar' WHERE `id`='75';";
        }
        if ($favoritoGuardar == "Zanahorias") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='$favoritoGuardar' WHERE `id`='76';";
        }
        $result = mysqli_query($conexion2,$query);
        
        mysqli_close($conexion2);
    
    }

    if (isset($_GET['quitarFavorito'])) {

    
        include_once "datosConexion.php"; 
        $conexion3 = mysqli_connect($db_host,$db_user,$db_pass,$db_database);
        
        ini_set("display_errors",1);//quitando la tabla con errores para evitar ataques
        ini_set("display_startup_errors",1);//quitando la tabla con errores para evitar ataques
        
        if($conexion3==false){
            die("Error de conexion a MySQL con el codigo: ".mysqli_connect_errno($conexion3).
        "<br>".mysqli_connect_error($conexion3)
            );
        }
        $nombreUsuario = $_SESSION['usuario'];
        $favoritoQuitar = $_GET['quitarFavorito'];
        if ($favoritoQuitar == "Acelga") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='NULL' WHERE `id`='1';";
        }
        if ($favoritoQuitar == "Almendras azucaradas con miel") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='NULL' WHERE `id`='2';";
        }
        if ($favoritoQuitar == "Cambur") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='NULL' WHERE `id`='3';";
        } 
        if ($favoritoQuitar == "Cerezas") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='NULL' WHERE `id`='4';";
        }
        if ($favoritoQuitar == "Chocolate Croissants") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='NULL' WHERE `id`='5';";
        }
        if ($favoritoQuitar == "Chorizo iberico") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='NULL' WHERE `id`='6';";
        }
        if ($favoritoQuitar == "Chorizo Picante") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='NULL' WHERE `id`='7';";
        }
        if ($favoritoQuitar == "Costillas De Cerdo") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='NULL' WHERE `id`='8';";
        }
        if ($favoritoQuitar == "Croissants") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='NULL' WHERE `id`='9';";
        }
        if ($favoritoQuitar == "Espinacas") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='NULL' WHERE `id`='10';";
        }
        if ($favoritoQuitar == "Filete De Corvina") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='NULL' WHERE `id`='11';";
        }
        if ($favoritoQuitar == "Guanabana") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='NULL' WHERE `id`='12';";
        }
        if ($favoritoQuitar == "Helado de mora") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='NULL' WHERE `id`='13';";
        }
        if ($favoritoQuitar == "Helado Artesanal") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='NULL' WHERE `id`='14';";
        }
        if ($favoritoQuitar == "Helado Artesanal De Mora") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='NULL' WHERE `id`='15';";
        }
        if ($favoritoQuitar == "Helado Artesanal de pistacho") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='NULL' WHERE `id`='16';";
        }
        if ($favoritoQuitar == "Helado Artesanal de Mango") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='NULL' WHERE `id`='17';";
        }
        if ($favoritoQuitar == "Helado Sundae Caramel") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='NULL' WHERE `id`='18';";
        }
        if ($favoritoQuitar == "Higos Secos") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='NULL' WHERE `id`='19';";
        }
        if ($favoritoQuitar == "Jamon Serrano") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='NULL' WHERE `id`='20';";
        }
        if ($favoritoQuitar == "Langostinos") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='NULL' WHERE `id`='21';";
        }
        if ($favoritoQuitar == "Lechosa") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='NULL' WHERE `id`='22';";
        }
        if ($favoritoQuitar == "Limones") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='NULL' WHERE `id`='23';";
        }
        if ($favoritoQuitar == "Mango") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='NULL' WHERE `id`='24';";
        }
        if ($favoritoQuitar == "Manitoba Original Mix") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='NULL' WHERE `id`='25';";
        }
        if ($favoritoQuitar == "Manzana Amarilla") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='NULL' WHERE `id`='26';";
        }
        if ($favoritoQuitar == "Manzana Roja") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='NULL' WHERE `id`='27';";
        }
        if ($favoritoQuitar == "Manzana Verde") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='NULL' WHERE `id`='28';";
        }
        if ($favoritoQuitar == "Medallones de lomito") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='NULL' WHERE `id`='29';";
        }
        if ($favoritoQuitar == "Merey Cashews") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='NULL' WHERE `id`='30';";
        }
        if ($favoritoQuitar == "Merey Grupo Cashews") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='NULL' WHERE `id`='31';";
        }
        if ($favoritoQuitar == "Mermelada") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='NULL' WHERE `id`='32';";
        }
        if ($favoritoQuitar == "Mixed Nuts") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='NULL' WHERE `id`='33';";
        }
        if ($favoritoQuitar == "Mozzarella") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='NULL' WHERE `id`='34';";
        }
        if ($favoritoQuitar == "Naranja") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='NULL' WHERE `id`='35';";
        }
        if ($favoritoQuitar == "Nispero") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='NULL' WHERE `id`='36';";
        }
        if ($favoritoQuitar == "Ocumo") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='NULL' WHERE `id`='37';";
        }
        if ($favoritoQuitar == "Ossobuco") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='NULL' WHERE `id`='38';";
        }
        if ($favoritoQuitar == "Pan Campesino") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='NULL' WHERE `id`='39';";
        }
        if ($favoritoQuitar == "Pan Canilla") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='NULL' WHERE `id`='40';";
        }
        if ($favoritoQuitar == "Pan Cuadrado") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='NULL' WHERE `id`='41';";
        }
        if ($favoritoQuitar == "Pan de perro caliente") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='NULL' WHERE `id`='42';";
        }
        if ($favoritoQuitar == "Pan Gallego") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='NULL' WHERE `id`='43';";
        }
        if ($favoritoQuitar == "Parmesano Reggiano") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='NULL' WHERE `id`='44';";
        }
        if ($favoritoQuitar == "Patilla") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='NULL' WHERE `id`='45';";
        }
        if ($favoritoQuitar == "Pera") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='NULL' WHERE `id`='46';";
        }
        if ($favoritoQuitar == "Perejil") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='NULL' WHERE `id`='47';";
        }
        if ($favoritoQuitar == "Chuletas de Cochino") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='NULL' WHERE `id`='48';";
        }
        if ($favoritoQuitar == "Pringles") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='NULL' WHERE `id`='49';";
        }
        if ($favoritoQuitar == "Queso Brie") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='NULL' WHERE `id`='50';";
        }
        if ($favoritoQuitar == "Queso Fresco") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='NULL' WHERE `id`='51';";
        }
        if ($favoritoQuitar == "Queso fresco Casero") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='NULL' WHERE `id`='52';";
        }
        if ($favoritoQuitar == "Queso Gouda") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='NULL' WHERE `id`='53';";
        }
        if ($favoritoQuitar == "Queso Gouda Ahumado") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='NULL' WHERE `id`='54';";
        }
        if ($favoritoQuitar == "Queso Holandes") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='NULL' WHERE `id`='55';";
        }
        if ($favoritoQuitar == "Queso Paisa") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='NULL' WHERE `id`='56';";
        }
        if ($favoritoQuitar == "Queso Pecorino") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='NULL' WHERE `id`='57';";
        }
        if ($favoritoQuitar == "Salchicha Alemana") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='NULL' WHERE `id`='58';";
        }
        if ($favoritoQuitar == "Salchicha Debrecziner") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='NULL' WHERE `id`='59';";
        }
        if ($favoritoQuitar == "Salchicha Frankfurt") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='NULL' WHERE `id`='60';";
        }
        if ($favoritoQuitar == "Salchicha") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='NULL' WHERE `id`='61';";
        }
        if ($favoritoQuitar == "Salchicha Polaca") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='NULL' WHERE `id`='62';";
        }
        if ($favoritoQuitar == "Salchichon") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='NULL' WHERE `id`='63';";
        }
        if ($favoritoQuitar == "Salmon Ahumado") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='NULL' WHERE `id`='64';";
        }
        if ($favoritoQuitar == "Camarones") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='NULL' WHERE `id`='65';";
        }
        if ($favoritoQuitar == "Chuletas de Cerdo") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='NULL' WHERE `id`='66';";
        }
        if ($favoritoQuitar == "Calamares") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='NULL' WHERE `id`='67';";
        }
        if ($favoritoQuitar == "Filete t bone steak") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='NULL' WHERE `id`='68';";
        }
        if ($favoritoQuitar == "Toblerone") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='NULL' WHERE `id`='69';";
        }
        if ($favoritoQuitar == "Toblerone de leche") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='NULL' WHERE `id`='70';";
        }
        if ($favoritoQuitar == "Toblerone Chocolate Negro") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='NULL' WHERE `id`='71';";
        }
        if ($favoritoQuitar == "Toblerone Almendras Crujientes") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='NULL' WHERE `id`='72';";
        }
        if ($favoritoQuitar == "Toblerone Almendras Saladas") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='NULL' WHERE `id`='73';";
        }
        if ($favoritoQuitar == "Tomates") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='NULL' WHERE `id`='74';";
        }
        if ($favoritoQuitar == "Toronja") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='NULL' WHERE `id`='75';";
        }
        if ($favoritoQuitar == "Zanahorias") {
            $query = "UPDATE `epiz_32478908_empresa`.`favoritos_$nombreUsuario` SET `favoritos`='NULL' WHERE `id`='76';";
        }
        
        $result = mysqli_query($conexion3,$query);
        
        mysqli_close($conexion3);
    
    }
?>

    <nav id="open-close">
        <span >
            <i id="iconomenu">
                <svg id="svg-menu" x="0px" y="0px" viewBox="0 0 384.97 384.97" style="enable-background:new 0 0 384.97 384.97;" xml:space="preserve" width="30px" height="30px">
                    <path d="M12.03,84.212h360.909c6.641,0,12.03-5.39,12.03-12.03c0-6.641-5.39-12.03-12.03-12.03H12.03
                            C5.39,60.152,0,65.541,0,72.182C0,78.823,5.39,84.212,12.03,84.212z"/>
                    <path d="M372.939,180.455H12.03c-6.641,0-12.03,5.39-12.03,12.03s5.39,12.03,12.03,12.03h360.909c6.641,0,12.03-5.39,12.03-12.03
                        S379.58,180.455,372.939,180.455z"/>
                    <path d="M372.939,300.758H12.03c-6.641,0-12.03,5.39-12.03,12.03c0,6.641,5.39,12.03,12.03,12.03h360.909
                        c6.641,0,12.03-5.39,12.03-12.03C384.97,306.147,379.58,300.758,372.939,300.758z"/>
                </svg>
            </i>
        </span>  
    </nav>
    <aside id="aside" class="desplegar">
        <div class="container-svg">
            <div>
                <svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" focusable="false" class="style-scope yt-icon" style="pointer-events: none; display: block; width: 25px; height: 25px;" fill="white"><path d="M12,4.33l7,6.12V20H15V14H9v6H5V10.45l7-6.12M12,3,4,10V21h6V15h4v6h6V10L12,3Z" class="style-scope yt-icon"></path></svg>
                <a href="indexUsuarioRegistrado.php">Inicio</a>
            </div>
            <div>
                <svg width="20px" height="20px" x="0px" y="0px" viewBox="0 0 512 512"  xml:space="preserve" fill="white"><path d="M256,0L31.394,32.593V512L256,479.407L480.606,512V32.593L256,0z M240.806,450.907L61.781,476.884V58.889l179.025-25.977V450.907z M450.219,476.884l-179.025-25.977V32.911l179.025,25.977V476.884z"/><path d="M305.37,220.596v204.482l110.672,16.059V236.655L305.37,220.596z M385.654,406.021l-49.897-7.239v-143.07l49.897,7.239V406.021z"/><path d="M95.958,236.654v204.484l110.672-16.059V220.595L95.958,236.654z M176.243,398.783l-49.897,7.239c0,0,0-143.07,0-143.07l49.897-7.239V398.783z"/><rect x="345.497" y="36.28" transform="matrix(0.1436 -0.9896 0.9896 0.1436 217.2465 436.2592)" width="30.387" height="112.653"/><rect x="345.497" y="86.347" transform="matrix(0.1436 -0.9896 0.9896 0.1436 167.6995 479.1369)" width="30.387" height="112.653"/><rect x="345.529" y="136.446" transform="matrix(0.1436 -0.9896 0.9896 0.1436 118.1468 522.0733)" width="30.387" height="112.653"/><rect x="94.972" y="77.414" transform="matrix(0.9896 -0.1436 0.1436 0.9896 -11.7307 22.687)" width="112.653" height="30.387"/><rect x="94.969" y="127.502" transform="matrix(0.9896 -0.1436 0.1436 0.9896 -18.9235 23.2059)" width="112.653" height="30.387"/><rect x="94.963" y="177.582" transform="matrix(0.9896 -0.1436 0.1436 0.9896 -26.1155 23.7242)" width="112.653" height="30.387"/></svg>
                <a href="#">&nbspCatálogo</a>
            </div>
            <div>
                <svg width="25px" height="25px" viewBox="0 0 32 32" fill="white">  <path class="cls-1" d="M5,5V27H27V5ZM25,7V17.83l-3.5-3.25-5.71,6.33L12,18.83,7,23.65V7ZM8.49,25l3.86-3.71,3.86,2.13,5.41-6L25,20.56V25Z"/> <rect class="cls-1" height="2" width="1.81" x="11.06" y="15"/></svg>
                <a href="galeriaUsuarioRegistrado.php">Galería</a>
            </div>
            
        </div>
        <div class="container-svg">
            <div>
                <svg width="25px" height="25px" viewBox="0 0 20 20" fill="white"><path d="M10 20S3 10.87 3 7a7 7 0 1 1 14 0c0 3.87-7 13-7 13zm0-11a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/></svg>
                <a href="ubicacion.php">Ubicación</a>
            </div>
            <div>
                <svg width="25px" height="25px" x="0px" y="0px" viewBox="0 0 476.9 476.9"  xml:space="preserve" fill="white"><path d="M181.117,155.5c3-3,6-6.1,9.1-9.2c10.7-10.7,16.4-23.1,16.4-35.7s-5.7-24.9-16.4-35.7l-29.4-29.4c-3.4-3.4-6.7-6.8-10-10.2c-6.6-6.7-13.3-13.6-20-19.9c-10.1-10.1-22.1-15.4-34.7-15.4s-24.7,5.3-35.2,15.4l-37.1,37c-13.4,13.4-21,29.8-22.7,48.7c-1.9,23.6,2.4,48.8,13.7,79.1c17.3,46.9,43.4,90.4,82.1,137c47,56.2,103.6,100.5,168.2,131.7c24.6,11.7,57.5,25.4,94.1,27.8c2.3,0.1,4.5,0.2,6.7,0.2c24.6,0,44.4-8.5,60.5-26c0.1-0.1,0.3-0.3,0.4-0.5c5.7-6.9,12.2-13.1,19-19.7c4.6-4.5,9.4-9.1,13.9-13.9c21.1-22,21.1-49.9-0.2-71.2l-59.3-59.3c-10.1-10.5-22.2-16.1-34.9-16.1c-12.7,0-24.8,5.5-35.2,15.9l-35.2,35.4c-3.2-1.9-6.5-3.5-9.7-5.1c-3.9-2-7.6-3.8-10.9-5.9c-32.2-20.4-61.4-47.1-89.3-81.4c-14.1-17.8-23.5-32.8-30.1-48.1C164.117,172.7,172.817,163.9,181.117,155.5z M136.417,164.7c-0.2,0.2-0.3,0.3-0.5,0.5c-8.2,8.2-7,16.1-5,22.1c0.1,0.3,0.2,0.5,0.3,0.8c7.6,18.3,18.2,35.6,34.6,56.4c29.7,36.5,60.8,64.9,95.2,86.7c4.3,2.7,8.8,5,13.1,7.1c3.9,2,7.6,3.8,10.9,5.9c0.4,0.2,0.7,0.4,1.1,0.6c3.3,1.7,6.4,2.5,9.6,2.5c8,0,13.1-5.1,14.8-6.8l36.9-36.9c5.7-5.7,11.9-8.7,17.9-8.7c7.5,0,13.5,4.6,17.4,8.7l59.5,59.5c11.8,11.8,11.7,24.5-0.3,37c-4.2,4.4-8.5,8.6-13.2,13.1c-6.9,6.7-14.1,13.6-20.6,21.4c-11.3,12.2-24.8,17.9-42.3,17.9c-1.7,0-3.5-0.1-5.2-0.2c-32.4-2.1-62.5-14.7-85-25.5c-61.4-29.7-115.2-71.9-160-125.3c-36.8-44.3-61.6-85.6-77.9-129.8c-10-26.9-13.9-48.7-12.3-68.5c1.1-13.1,6.2-24.1,15.6-33.4l36.7-36.7c5.7-5.5,12-8.4,18.1-8.4c6,0,12,2.8,17.7,8.5c6.6,6.2,12.9,12.6,19.5,19.4c3.4,3.4,6.8,6.9,10.2,10.4l29.4,29.4c6.1,6.1,9.2,12.3,9.2,18.3c0,6-3.1,12.2-9.2,18.3c-3.1,3.1-6.1,6.2-9.2,9.3C154.517,147.5,145.917,156.3,136.417,164.7z"/><path d="M273.017,203.8c2.4,2.4,5.5,3.6,8.7,3.6s6.3-1.2,8.7-3.6l161.2-161.3v95.4c0,6.8,5.5,12.3,12.3,12.3s12.3-5.5,12.3-12.3v-125c0-6.8-5.5-12.3-12.3-12.3h-125c-6.8,0-12.3,5.5-12.3,12.3s5.5,12.3,12.3,12.3h95.4l-161.3,161.3C268.217,191.3,268.217,199.1,273.017,203.8z"/></svg>
                <button id="botonMoverScroll">Contactanos</button>

            </div>
            <div>
                <svg version="1.1" x="0px" y="0px" width="25px" height="25px" viewBox="0 0 544.582 544.582" style="enable-background:new 0 0 544.582 544.582;" xml:space="preserve" fill="white"><path d="M448.069,57.839c-72.675-23.562-150.781,15.759-175.721,87.898C247.41,73.522,169.303,34.277,96.628,57.839C23.111,81.784-16.975,160.885,6.894,234.708c22.95,70.38,235.773,258.876,263.006,258.876c27.234,0,244.801-188.267,267.751-258.876C561.595,160.732,521.509,81.631,448.069,57.839z"/></svg>
                <a href="favoritos.php">Favoritos</a>
            </div>
            <div>
                <svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" focusable="false" class="style-scope yt-icon" style="pointer-events: none; display: block; width: 25px; height: 25px;"><g class="style-scope yt-icon"><path d="M12,4.33l7,6.12V20H15V14H9v6H5V10.45l7-6.12M12,3,4,10V21h6V15h4v6h6V10L12,3Z" class="style-scope yt-icon"></path></g></svg>
                <span></span>
            </div>
            <div>
                <svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" focusable="false" class="style-scope yt-icon" style="pointer-events: none; display: block; width: 25px; height: 25px;"><g class="style-scope yt-icon"><path d="M12,4.33l7,6.12V20H15V14H9v6H5V10.45l7-6.12M12,3,4,10V21h6V15h4v6h6V10L12,3Z" class="style-scope yt-icon"></path></g></svg>
                <span></span>
            </div>
            <div>
                <svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" focusable="false" class="style-scope yt-icon" style="pointer-events: none; display: block; width: 25px; height: 25px;"><g class="style-scope yt-icon"><path d="M12,4.33l7,6.12V20H15V14H9v6H5V10.45l7-6.12M12,3,4,10V21h6V15h4v6h6V10L12,3Z" class="style-scope yt-icon"></path></g></svg>
                <span></span>
            </div>
            
        </div>
        <div class="container-svg">
            <div>
                <svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" focusable="false" class="style-scope yt-icon" style="pointer-events: none; display: block; width: 25px; height: 25px;"><g class="style-scope yt-icon"><path d="M12,4.33l7,6.12V20H15V14H9v6H5V10.45l7-6.12M12,3,4,10V21h6V15h4v6h6V10L12,3Z" class="style-scope yt-icon"></path></g></svg>
                <span></span>
            </div>
            <div>
                <svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" focusable="false" class="style-scope yt-icon" style="pointer-events: none; display: block; width: 25px; height: 25px;"><g class="style-scope yt-icon"><path d="M12,4.33l7,6.12V20H15V14H9v6H5V10.45l7-6.12M12,3,4,10V21h6V15h4v6h6V10L12,3Z" class="style-scope yt-icon"></path></g></svg>
                <span></span>
            </div>
            <div>
                <svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" focusable="false" class="style-scope yt-icon" style="pointer-events: none; display: block; width: 25px; height: 25px;"><g class="style-scope yt-icon"><path d="M12,4.33l7,6.12V20H15V14H9v6H5V10.45l7-6.12M12,3,4,10V21h6V15h4v6h6V10L12,3Z" class="style-scope yt-icon"></path></g></svg>
                <span></span>
            </div>
            <div>
                <svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" focusable="false" class="style-scope yt-icon" style="pointer-events: none; display: block; width: 25px; height: 25px;"><g class="style-scope yt-icon"><path d="M12,4.33l7,6.12V20H15V14H9v6H5V10.45l7-6.12M12,3,4,10V21h6V15h4v6h6V10L12,3Z" class="style-scope yt-icon"></path></g></svg>
                <span></span>
            </div>
            <div>
                <svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" focusable="false" class="style-scope yt-icon" style="pointer-events: none; display: block; width: 25px; height: 25px;"><g class="style-scope yt-icon"><path d="M12,4.33l7,6.12V20H15V14H9v6H5V10.45l7-6.12M12,3,4,10V21h6V15h4v6h6V10L12,3Z" class="style-scope yt-icon"></path></g></svg>
                <span></span>
            </div>
            <div>
                <svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" focusable="false" class="style-scope yt-icon" style="pointer-events: none; display: block; width: 25px; height: 25px;"><g class="style-scope yt-icon"><path d="M12,4.33l7,6.12V20H15V14H9v6H5V10.45l7-6.12M12,3,4,10V21h6V15h4v6h6V10L12,3Z" class="style-scope yt-icon"></path></g></svg>
                <span></span>
            </div>
            
        </div>
    </aside>
    
    <header id="header">
        
        <div id="logo" class="logo-place">
            <img  id="imagen-logo" src="logo/savilogo(width300pxHeight300)T.png" width="80px" height="80px">
        </div>
        <div id="searchplace" class="search-place" >
            <form id="primerFormulario" action="catalogoUsuarioRegistrado.php" method="get" >
                <input type="text" id="idbusqueda" placeholder="Buscar" name="textoBuscarNombre">
                <button id='bt-search' class="btn-search" title="Buscar" name="botonBusqueda"><i ><svg id="boton-buscar-icon" fill="#000000" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 50 50" width="25px" height="25px"><path d="M 21 3 C 11.601563 3 4 10.601563 4 20 C 4 29.398438 11.601563 37 21 37 C 24.355469 37 27.460938 36.015625 30.09375 34.34375 L 42.375 46.625 L 46.625 42.375 L 34.5 30.28125 C 36.679688 27.421875 38 23.878906 38 20 C 38 10.601563 30.398438 3 21 3 Z M 21 7 C 28.199219 7 34 12.800781 34 20 C 34 27.199219 28.199219 33 21 33 C 13.800781 33 8 27.199219 8 20 C 8 12.800781 13.800781 7 21 7 Z"/></svg></i></button>
            </form>
        </div>
        <div id="optionplace" class="options-place" width='' height=''>
            <div id="divboton-login" class="item-option" title="Cerrar Sesión">
                <a href="cierre.php">
                    <i>
                        <svg id="login-icon" x="0px" y="0px" viewBox="0 0 384.971 384.971" style="enable-background:new 0 0 384.971 384.971;" xml:space="preserve" width="27px" height="27px" ><path d="M180.455,360.91H24.061V24.061h156.394c6.641,0,12.03-5.39,12.03-12.03s-5.39-12.03-12.03-12.03H12.03C5.39,0.001,0,5.39,0,12.031V372.94c0,6.641,5.39,12.03,12.03,12.03h168.424c6.641,0,12.03-5.39,12.03-12.03C192.485,366.299,187.095,360.91,180.455,360.91z"/><path d="M381.481,184.088l-83.009-84.2c-4.704-4.752-12.319-4.74-17.011,0c-4.704,4.74-4.704,12.439,0,17.179l62.558,63.46H96.279c-6.641,0-12.03,5.438-12.03,12.151c0,6.713,5.39,12.151,12.03,12.151h247.74l-62.558,63.46c-4.704,4.752-4.704,12.439,0,17.179c4.704,4.752,12.319,4.752,17.011,0l82.997-84.2C386.113,196.588,386.161,188.756,381.481,184.088z"/></svg>
                    </i>
                </a>
            </div>
            <div id="divboton-inicio" class="item-option" title="Inicio">
                <i id="boton-inicio">
                    <svg id="home-icon" x="0px" y="0px" viewBox="0 0 330.242 330.242" style="enable-background:new 0 0 330.242 330.242;" xml:space="preserve" width="30px" height="30px">
                    <path d="M324.442,129.811l-41.321-33.677V42.275c0-6.065-4.935-11-11-11h-26c-6.065,0-11,4.935-11,11v14.737l-55.213-44.999
	                c-3.994-3.254-9.258-5.047-14.822-5.047c-5.542,0-10.781,1.782-14.753,5.019L5.8,129.81c-6.567,5.351-6.173,10.012-5.354,12.314
	                c0.817,2.297,3.448,6.151,11.884,6.151h19.791v154.947c0,11.058,8.972,20.053,20,20.053h62.5c10.935,0,19.5-8.809,19.5-20.053
	                v-63.541c0-5.446,5.005-10.405,10.5-10.405h42c5.238,0,9.5,4.668,9.5,10.405v63.541c0,10.87,9.388,20.053,20.5,20.053h61.5
	                c11.028,0,20-8.996,20-20.053V148.275h19.791c8.436,0,11.066-3.854,11.884-6.151C330.615,139.822,331.009,135.161,324.442,129.811z"/> 
                    </svg>
                </i>
            </div>
            <div class="item-option" title="<?php echo  $nombreUsuario; ?>">
                <a href="#">
                    <i>
                        <svg x="0px" y="0px" viewBox="0 0 484.2 484.2" style="enable-background:new 0 0 484.2 484.2;" xml:space="preserve" width="30px" height="30px"> <path id="XMLID_2079_" d="M413.3,70.9C367.6,25.2,306.8,0,242.1,0S116.6,25.2,70.9,70.9S0,177.4,0,242.1s25.2,125.5,70.9,171.2s106.5,70.9,171.2,70.9s125.5-25.2,171.2-70.9s70.9-106.5,70.9-171.2S459,116.6,413.3,70.9z M242.1,162.8c-15.3,0-27.7,12.4-27.7,27.7c0,7-5.7,12.7-12.7,12.7s-12.7-5.7-12.7-12.7c0-29.3,23.8-53.1,53.1-53.1c7,0,12.7,5.7,12.7,12.7C254.8,157.1,249.1,162.8,242.1,162.8z M376.2,374.7c-14.1-50.9-40.8-95.3-89.2-112c24.1-15,40.1-41.7,40.1-72.2c0-47-38.1-85-85-85s-85,38.1-85,85c0,30.5,16,57.2,40.1,72.2c-48.4,16.7-75.1,61.1-89.2,112c-33.7-34.1-54.6-81-54.6-132.6c0-104.1,84.7-188.7,188.7-188.7c104.1,0,188.7,84.7,188.7,188.7C430.8,293.8,410,340.6,376.2,374.7z"/></svg>
                    </i>
                </a>
            </div>
        </div>
    </header>

    

    <?php
    include_once "datosConexion.php"; 
    $conexion = mysqli_connect($db_host,$db_user,$db_pass,$db_database);

    ini_set("display_errors",1);//quitando la tabla con errores para evitar ataques
    ini_set("display_startup_errors",1);//quitando la tabla con errores para evitar ataques

    if($conexion==false){
        die("Error de conexion a MySQL con el codigo: ".mysqli_connect_errno($conexion).
    "<br>".mysqli_connect_error($conexion)
        );
    }
    $where=" where 1=1 "; 


    if (isset($_GET['botonCategoria'])) {

        if ($_GET['datoCategoria'] == "Vegetales") {
            $where=" where 1=1 and categoria like '%".$_GET['datoCategoria']."%'";
        }else if ($_GET['datoCategoria'] == "Chucherias") {
            $where=" where 1=1 and categoria like '%".$_GET['datoCategoria']."%'";
        }else if ($_GET['datoCategoria'] == "Frutas") {
            $where=" where 1=1 and categoria like '%".$_GET['datoCategoria']."%'";
        }else if ($_GET['datoCategoria'] == "Pasteleria") {
            $where=" where 1=1 and categoria like '%".$_GET['datoCategoria']."%'";
        }else if ($_GET['datoCategoria'] == "Charcuteria") {
            $where=" where 1=1 and categoria like '%".$_GET['datoCategoria']."%'";
        }else if ($_GET['datoCategoria'] == "Carniceria") {
            $where=" where 1=1 and categoria like '%".$_GET['datoCategoria']."%'";
        }else if ($_GET['datoCategoria'] == "Helados") {
            $where=" where 1=1 and categoria like '%".$_GET['datoCategoria']."%'";
        }else if ($_GET['datoCategoria'] == "Frutos secos") {
            $where=" where 1=1 and categoria like '%".$_GET['datoCategoria']."%'";
        }else if ($_GET['datoCategoria'] == "Pescaderia") {
            $where=" where 1=1 and categoria like '%".$_GET['datoCategoria']."%'";
        }else if ($_GET['datoCategoria'] == "Snacks") {
            $where=" where 1=1 and categoria like '%".$_GET['datoCategoria']."%'";
        }else if ($_GET['datoCategoria'] == "Dulces") {
            $where=" where 1=1 and categoria like '%".$_GET['datoCategoria']."%'";
        }else if ($_GET['datoCategoria'] == "Quesos") {
            $where=" where 1=1 and categoria like '%".$_GET['datoCategoria']."%'";
        }else if ($_GET['datoCategoria'] == "Panaderia") {
            $where=" where 1=1 and categoria like '%".$_GET['datoCategoria']."%'";
        }

        $sql = "SELECT 
        `categoria`
        FROM 
        `park`
        $where;
        ";
        
        $resultado = mysqli_query($conexion,$sql);

        $row=mysqli_fetch_array($resultado,MYSQLI_ASSOC);
    ?>

    <div id="tituloCategorias" class="title-section"><?php echo $row['categoria']; ?>&nbsp-&nbspSavi's Market</div>

    <?php  
    }
    ?>

        <?php mysqli_close($conexion); ?>

    <div id="listaCategorias" class="lista_categorias" width="240px" height="60px">
        <form action="catalogoUsuarioRegistrado.php" method="get"  >
            
        <select name="datoCategoria" class="form-select" aria-label="Default select example" width="300px">
            <option value="">Categorias</option>
            <option value="Quesos">Quesos</option>
            <option value="Carniceria">Carniceria</option>
            <option value="Pescaderia">Pescaderia</option>
            <option value="Charcuteria">Charcuteria</option>
            <option value="Vegetales">Vegetales</option>
            <option value="Frutas">Frutas</option>
            <option value="Panaderia">Panaderia</option>
            <option value="Pasteleria">Pasteleria</option>
            <option value="Snacks">Snacks</option>
            <option value="Frutos secos">Frutos secos</option>
            <option value="Chucherias">Chucherias</option>
            <option value="Helados">Helados</option>
            <option value="Dulces">Dulces</option>
        </select>

           
            <button type="submit" class="btn btn-outline-primary mt-3" name="botonCategoria">Buscar</button>
        </form>
    </div>

    <div id="mainContent" class="main-content">
        <div id="contentPage" class="content-page">
            
            <div id="productsList" class="products-list">
                <div  id="productBox" class="product-box">
                    <?php
                    include_once "datosConexion.php"; 
                    $conexion = mysqli_connect($db_host,$db_user,$db_pass,$db_database);

                    ini_set("display_errors",1);//quitando la tabla con errores para evitar ataques
                    ini_set("display_startup_errors",1);//quitando la tabla con errores para evitar ataques

                    if($conexion==false){
                        die("Error de conexion a MySQL con el codigo: ".mysqli_connect_errno($conexion).
                    "<br>".mysqli_connect_error($conexion)
                        );
                    }
                    $where=" where 1=1 "; 

                    if (isset($_GET['botonBusqueda'])) {
                        $nombreB = $_GET['textoBuscarNombre'];
                        $categoriaB = $_GET['textoBuscarNombre'];
                        $where=$where.'and nombre like '.'"%'.$nombreB.'%"'.'OR categoria like '.'"%'.$categoriaB.'%";';
                    }

                    if (isset($_GET['botonCategoria'])) {

                        if ($_GET['datoCategoria'] == "Vegetales") {
                            $where=" where 1=1 and categoria like '%".$_GET['datoCategoria']."%'";
                        }else if ($_GET['datoCategoria'] == "Chucherias") {
                            $where=" where 1=1 and categoria like '%".$_GET['datoCategoria']."%'";
                        }else if ($_GET['datoCategoria'] == "Frutas") {
                            $where=" where 1=1 and categoria like '%".$_GET['datoCategoria']."%'";
                        }else if ($_GET['datoCategoria'] == "Pasteleria") {
                            $where=" where 1=1 and categoria like '%".$_GET['datoCategoria']."%'";
                        }else if ($_GET['datoCategoria'] == "Charcuteria") {
                            $where=" where 1=1 and categoria like '%".$_GET['datoCategoria']."%'";
                        }else if ($_GET['datoCategoria'] == "Carniceria") {
                            $where=" where 1=1 and categoria like '%".$_GET['datoCategoria']."%'";
                        }else if ($_GET['datoCategoria'] == "Helados") {
                            $where=" where 1=1 and categoria like '%".$_GET['datoCategoria']."%'";
                        }else if ($_GET['datoCategoria'] == "Frutos secos") {
                            $where=" where 1=1 and categoria like '%".$_GET['datoCategoria']."%'";
                        }else if ($_GET['datoCategoria'] == "Pescaderia") {
                            $where=" where 1=1 and categoria like '%".$_GET['datoCategoria']."%'";
                        }else if ($_GET['datoCategoria'] == "Snacks") {
                            $where=" where 1=1 and categoria like '%".$_GET['datoCategoria']."%'";
                        }else if ($_GET['datoCategoria'] == "Dulces") {
                            $where=" where 1=1 and categoria like '%".$_GET['datoCategoria']."%'";
                        }else if ($_GET['datoCategoria'] == "Quesos") {
                            $where=" where 1=1 and categoria like '%".$_GET['datoCategoria']."%'";
                        }else if ($_GET['datoCategoria'] == "Panaderia") {
                            $where=" where 1=1 and categoria like '%".$_GET['datoCategoria']."%'";
                        }
                        
                    }

                
                    $sql = "SELECT 
                    `nombre`,`url`,`categoria`,`precioVenta`,`imagen`
                    FROM 
                    `park`
                    $where;
                    ";
                    ?>
        
                    <?php 
                    $resultado = mysqli_query($conexion,$sql);

                    while($row=mysqli_fetch_array($resultado,MYSQLI_ASSOC)){
                        $url = $row['url'];
                        $nombre = $row['nombre'];
                    
                    ?>
                    
                    
                    <a href='<?php echo "$url.php?nombre=$nombre"?>'>
                        <div class="product"  name='divProducto' width= '200px' height= '450px'>
                        
                            <?php $corazonAzulRelleno = "<svg class='heart' version='1.1' x='0px' y='0px' width='20px' height='20px' viewBox='0 0 544.582 544.582' style='enable-background:new 0 0 544.582 544.582;' xml:space='preserve' fill='blue'><path d='M448.069,57.839c-72.675-23.562-150.781,15.759-175.721,87.898C247.41,73.522,169.303,34.277,96.628,57.839C23.111,81.784-16.975,160.885,6.894,234.708c22.95,70.38,235.773,258.876,263.006,258.876c27.234,0,244.801-188.267,267.751-258.876C561.595,160.732,521.509,81.631,448.069,57.839z'/></svg>";?>
                            <?php $corazonAzul = "<svg class='heart' version='1.1' x='0px' y='0px' viewBox='0 0 490.4 490.4' style='enable-background:new 0 0 490.4 490.4;' xml:space='preserve' width='20px' height='20px' fill='blue'><path d='M222.5,453.7c6.1,6.1,14.3,9.5,22.9,9.5c8.5,0,16.9-3.5,22.9-9.5L448,274c27.3-27.3,42.3-63.6,42.4-102.1c0-38.6-15-74.9-42.3-102.2S384.6,27.4,346,27.4c-37.9,0-73.6,14.5-100.7,40.9c-27.2-26.5-63-41.1-101-41.1c-38.5,0-74.7,15-102,42.2C15,96.7,0,133,0,171.6c0,38.5,15.1,74.8,42.4,102.1L222.5,453.7z M59.7,86.8c22.6-22.6,52.7-35.1,84.7-35.1s62.2,12.5,84.9,35.2l7.4,7.4c2.3,2.3,5.4,3.6,8.7,3.6l0,0c3.2,0,6.4-1.3,8.7-3.6l7.2-7.2c22.7-22.7,52.8-35.2,84.9-35.2c32,0,62.1,12.5,84.7,35.1c22.7,22.7,35.1,52.8,35.1,84.8s-12.5,62.1-35.2,84.8L251,436.4c-2.9,2.9-8.2,2.9-11.2,0l-180-180c-22.7-22.7-35.2-52.8-35.2-84.8C24.6,139.6,37.1,109.5,59.7,86.8z'/></svg>";?>
                            
                            <form class="formulario_producto" action="catalogoUsuarioRegistrado.php" method="get">
                                <input type="hidden" name="favorito" value="<?php echo $row['nombre'];?>">
                                
                                <button class="botonFavoritos" type="submit" value="" name="botonFavoritos">
                                
                                    <?php
                                        include_once "datosConexion.php"; 
                                        $conexion3 = mysqli_connect($db_host,$db_user,$db_pass,$db_database);
                                        
                                        ini_set("display_errors",1);//quitando la tabla con errores para evitar ataques
                                        ini_set("display_startup_errors",1);//quitando la tabla con errores para evitar ataques
                                        
                                        if($conexion3==false){
                                            die("Error de conexion a MySQL con el codigo: ".mysqli_connect_errno($conexion3).
                                        "<br>".mysqli_connect_error($conexion3)
                                            );
                                        }
                                        $usuarioS = $_SESSION['usuario'];
                                        $valorABuscar =  $row['nombre'];

                                        $query = "SELECT `favoritos`
                                        FROM `favoritos_$usuarioS`
                                        WHERE `favoritos`='$valorABuscar';
                                        ";
                                        $result2 = mysqli_query($conexion3,$query);
                                        $row2 = mysqli_fetch_assoc($result2);

                                        if ($row2) {
                                            echo "$corazonAzulRelleno";
                                        }else{
                                            echo "$corazonAzul";
                                        }
                                        
                                        mysqli_close($conexion3);
                                    ?>
                                    
                                </button>
                                <button class="botonQuitarFavorito"  name="quitarFavorito" value="<?php echo $row['nombre'];?>">Quitar de favoritos</button>
                            </form>
                            
                            <img  name='imageProducto' src='imagenesproductos/<?php echo $row['imagen']; ?>' width="190px" height="253px">
                             
                            <div  class="detail-title" name='detailtitle'><?php echo $row['nombre']; ?></div>
                            <div  class="detail-description" name='detaildescription'>Categoría &nbsp <?php echo $row['categoria']; ?></div>
                            <div  class="detail-price" name='detailprice'>$/ <?php echo $row['precioVenta']; ?> . <span class="spanDelPrecio"  name='spanprecio'>99</span></div> 
                            
                        </div>
                    </a>

                    <?php
                    }
                    ?>

                    <?php mysqli_close($conexion); ?>

                    
                </div>

            </div>
        </div>
    </div>

    <div id="rowF">
        <div >
            <footer>
                <div id="divDelFooter1" >
                    <div id="divDelFooter">
                        <p class="footer1">
                            Instagram: <svg viewBox="0 0 48 48" width="20px" height="20px"><radialGradient id="yOrnnhliCrdS2gy~4tD8ma" cx="19.38" cy="42.035" r="44.899" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#fd5"/><stop offset=".328" stop-color="#ff543f"/><stop offset=".348" stop-color="#fc5245"/><stop offset=".504" stop-color="#e64771"/><stop offset=".643" stop-color="#d53e91"/><stop offset=".761" stop-color="#cc39a4"/><stop offset=".841" stop-color="#c837ab"/></radialGradient><path fill="url(#yOrnnhliCrdS2gy~4tD8ma)" d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z"/><radialGradient id="yOrnnhliCrdS2gy~4tD8mb" cx="11.786" cy="5.54" r="29.813" gradientTransform="matrix(1 0 0 .6663 0 1.849)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#4168c9"/><stop offset=".999" stop-color="#4168c9" stop-opacity="0"/></radialGradient><path fill="url(#yOrnnhliCrdS2gy~4tD8mb)" d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z"/><path fill="#fff" d="M24,31c-3.859,0-7-3.14-7-7s3.141-7,7-7s7,3.14,7,7S27.859,31,24,31z M24,19c-2.757,0-5,2.243-5,5	s2.243,5,5,5s5-2.243,5-5S26.757,19,24,19z"/><circle cx="31.5" cy="16.5" r="1.5" fill="#fff"/><path fill="#fff" d="M30,37H18c-3.859,0-7-3.14-7-7V18c0-3.86,3.141-7,7-7h12c3.859,0,7,3.14,7,7v12	C37,33.86,33.859,37,30,37z M18,13c-2.757,0-5,2.243-5,5v12c0,2.757,2.243,5,5,5h12c2.757,0,5-2.243,5-5V18c0-2.757-2.243-5-5-5H18z"/></svg>
                            <a href="https://www.instagram.com/savicyborg/" class="las_a_DelFooter" target="blank">@SaviCyborg</a></br>
                            Facebook: <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 48 48" width="20px" height="20px"><linearGradient id="Ld6sqrtcxMyckEl6xeDdMa" x1="9.993" x2="40.615" y1="9.993" y2="40.615" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#2aa4f4"/><stop offset="1" stop-color="#007ad9"/></linearGradient><path fill="url(#Ld6sqrtcxMyckEl6xeDdMa)" d="M24,4C12.954,4,4,12.954,4,24s8.954,20,20,20s20-8.954,20-20S35.046,4,24,4z"/><path fill="#fff" d="M26.707,29.301h5.176l0.813-5.258h-5.989v-2.874c0-2.184,0.714-4.121,2.757-4.121h3.283V12.46 c-0.577-0.078-1.797-0.248-4.102-0.248c-4.814,0-7.636,2.542-7.636,8.334v3.498H16.06v5.258h4.948v14.452 C21.988,43.9,22.981,44,24,44c0.921,0,1.82-0.084,2.707-0.204V29.301z"/></svg>
                            <a href="https://www.facebook.com/savicyborg" class="las_a_DelFooter" target="blank">@SaviCyborg</a></br>
                            PaginaFacebook: <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 48 48" width="20px" height="20px"><linearGradient id="Ld6sqrtcxMyckEl6xeDdMa" x1="9.993" x2="40.615" y1="9.993" y2="40.615" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#2aa4f4"/><stop offset="1" stop-color="#007ad9"/></linearGradient><path fill="url(#Ld6sqrtcxMyckEl6xeDdMa)" d="M24,4C12.954,4,4,12.954,4,24s8.954,20,20,20s20-8.954,20-20S35.046,4,24,4z"/><path fill="#fff" d="M26.707,29.301h5.176l0.813-5.258h-5.989v-2.874c0-2.184,0.714-4.121,2.757-4.121h3.283V12.46 c-0.577-0.078-1.797-0.248-4.102-0.248c-4.814,0-7.636,2.542-7.636,8.334v3.498H16.06v5.258h4.948v14.452 C21.988,43.9,22.981,44,24,44c0.921,0,1.82-0.084,2.707-0.204V29.301z"/></svg>
                            <a href="https://www.facebook.com/SaviCyborgService" class="las_a_DelFooter" target="blank">@SaviCyborg</a></br>
                            
                            Correo: royergarofalo64@gmail.com</br>
                            Número de contacto: ####-###-##-##</br>
                            Dirección: #################</br>
                        </p>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <script src="codigojs/catalogoUsuarioRegistrado.js"></script>
</body>
</html>