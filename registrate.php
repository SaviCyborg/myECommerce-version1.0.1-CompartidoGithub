<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link rel="icon" href="logo/savilogo(width300pxHeight300)T.png">
        <title>Regístrate</title>
        <link rel="stylesheet"  type="text/css" href="estilos/estiloRegistrate.css"> 
    </head>

    <body>
        <form class="form" action="registrate.php" method="post">
            
            <h2 class="form__title">Regístrate</h2>
            <a href="index.php" class="form__link">Inicio</a>

            <div class="form__container">
            

                <div class="form__group">
                    <input type="text" id="nombre" class="form__input" name="nombre" placeholder=" " required>
                    <label for="nombre" class="form__label">Nombre: </label>
                    <span class="form__line"></span>
                </div>

                <div class="form__group">
                    <input type="text" id="apellido" class="form__input" name="apellido" placeholder=" " required>
                    <label for="apellido" class="form__label">Apellido: </label>
                    <span class="form__line"></span>
                </div>

                <div class="form__group">
                    <input type="text" id="user" class="form__input" name="usuario" placeholder=" " required>
                    <label for="user" class="form__label">Usuario: </label>
                    <span class="form__line"></span>
                </div>

                <div class="form__group">
                    <input type="email" id="correo" class="form__input" name="correo" placeholder=" " required>
                    <label for="correo" class="form__label">Correo:</label>
                    <span class="form__line"></span>
                </div>
         
            
                <div class="form__group">
                    <input type="password" id="passwordFirst" class="form__input" name="password" placeholder=" " required>
                    <label for="passwordFirst" class="form__label">Contraseña:</label>
                    <span class="form__line"></span>
                </div>

                <div class="form__group">
                    <input type="password" id="passwordSecond" class="form__input" name="passwordConfirm" placeholder=" " required>
                    <label for="passwordSecond" class="form__label">Confirmar Contraseña:</label>
                    <span class="form__line"></span>
                </div>
           

            </div>

            <input type="submit" class="form__submit" value="Registrate" name="botonRegistrar">
        </form>

        <script src="codigojs/codigoRegistrate.js"></script>
    </body>
</html>

<?php
    include_once "datosConexion.php";

    if(!empty($_POST)){
        if (isset($_POST['botonRegistrar'])) {
            $usuario = $_POST['usuario'];
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $correo = $_POST['correo'];
            $Pass = md5($_POST['password']);
            $PassC = md5($_POST['passwordConfirm']);

            
            if ($Pass == $PassC) {
                $conexion = mysqli_connect($db_host,$db_user,$db_pass,$db_database);

        
                ini_set("display_errors",1);//quitando la tabla con errores para evitar ataques
                ini_set("display_startup_errors",1);//quitando la tabla con errores para evitar ataques
    
                if($conexion==false){
                    die("Error de conexion a MySQL con el codigo: ".mysqli_connect_errno($conexion).
                        "<br>".mysqli_connect_error($conexion)
                    );
                }
                
                $queryU = "SELECT `usuario`,`correo` FROM `epiz_32478908_empresa`.`usuarios`;";
                $ResultU = mysqli_query($conexion,$queryU);
                $rowU = mysqli_fetch_assoc($ResultU);

                while ( ($rowU = mysqli_fetch_assoc($ResultU)) ) {
                    if (($usuario == $rowU['usuario'])) {
                        mysqli_close($conexion);
                        die("<div class='anuncio'> <p> Ya existe ese usuario </p> </div>");
                        
                    } 
                    if (($correo == $rowU['correo'])) {
                        mysqli_close($conexion);
                        die("<div class='anuncio'> <p> Ya existe ese correo </p> </div>");
                        
                    } 
                }

                $query = "INSERT INTO `epiz_32478908_empresa`.`usuarios` (`nombre` ,`apellido` ,`usuario` ,`correo`   ,`contrasena` ,       `fecha`      )
                          VALUES                             ('$nombre','$apellido','$usuario','$correo'  ,   '$Pass'   ,'".date('Y-d-m')."' );

                ";

                $secondQuery = "CREATE TABLE `epiz_32478908_empresa`.`favoritos_$usuario` (
                `id` int(3) NOT NULL primary key auto_increment,
                `favoritos` varchar(80) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
                `nombre` varchar(80) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
                `url` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
                `categoria` varchar(80) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
                `fechaDeIngreso` date DEFAULT NULL,
                `fechaDeVenta` date DEFAULT NULL,
                `precioVenta` int(6) DEFAULT NULL,
                `precioBolivares` int(8) NOT NULL,
                `imagen` varchar(80) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
                `descripcion` varchar(1000) COLLATE utf8mb4_spanish_ci NOT NULL
                ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;";
                
                $tercerQuery = "
                INSERT INTO `epiz_32478908_empresa`.`favoritos_$usuario` (`id`, `nombre`, `url`, `categoria`, `fechaDeIngreso`, `fechaDeVenta`, `precioVenta`, `precioBolivares`, `imagen`, `descripcion`) VALUES
                (1, 'Acelga', 'productos', 'Vegetales', '0000-00-00', '0000-00-00', 5, 40, 'acelga.jpg', 'Acelga'),
                (2, 'Almendras azucaradas con miel', 'productos', 'Chucherias', '2022-01-01', '2022-01-01', 10, 90, 'almendras-azucaradas-con-miel.jpg', 'Almendras azucaradas con miel'),
                (3, 'Cambur', 'productos', 'Frutas', '2022-01-01', '2022-01-01', 5, 45, 'cambur.jpg', 'Cambur'),
                (4, 'Cerezas', 'productos', 'Frutas', '2022-01-01', '2022-01-01', 3, 27, 'cerezas.jpg', 'Cerezas'),
                (5, 'Chocolate Croissants', 'productos', 'Chucheria', '2022-01-01', '2022-01-01', 10, 80, 'ChocolateCroissants.jpg', 'Chocolate Croissants'),
                (6, 'Chorizo iberico', 'productos', 'Charcuteria', '2022-01-01', '2022-01-01', 10, 80, 'chorizo-de-cerdo-de-bellota-iberico.jpg', 'Chorizo de cerdo de bellota iberico'),
                (7, 'Chorizo Picante', 'productos', 'Charcuteria', '2022-01-01', '2022-01-01', 3, 27, 'chorizoPicanteIberico.jpg', 'Chorizo Picante Iberico'),
                (8, 'Costillas De Cerdo', 'productos', 'Carne de Cerdo', '2022-01-01', '2022-01-01', 20, 180, 'costillasDeCerdo.jpg', 'Costillas De Cerdo'),
                (9, 'Croissants', 'productos', 'Panaderia', '2022-01-01', '2022-01-01', 20, 180, 'croissants.jpg', 'Croissants'),
                (10, 'Espinacas', 'productos', 'Vegetales', '2022-01-01', '2022-01-01', 20, 180, 'espinacas.jpg', 'Espinacas'),
                (11, 'Filete De Corvina', 'productos', 'Carne de Res', '2022-01-01', '2022-01-01', 20, 180, 'fileteDeCorvina.jpg', 'Filete De Corvina'),
                (12, 'Guanabana', 'productos', 'Frutas', '2022-01-01', '2022-01-01', 3, 25, 'guanabana.jpg', 'guanabana'),
                (13, 'Helado de mora', 'productos', 'Helados', '2022-01-01', '2022-01-01', 50, 450, 'helado_mora.jpg', 'Helado de mora'),
                (14, 'Helado Artesanal', 'productos', 'Helados', '2022-01-01', '2022-01-01', 50, 450, 'heladoArtesanal.jpg', 'Helado Artesanal'),
                (15, 'Helado Artesanal De Mora', 'productos', 'Helados', '2022-01-01', '2022-01-01', 5, 45, 'heladoArtesanalDeMora.jpg', 'Helado Artesanal De Mora'),
                (16, 'Helado Artesanal de pistacho', 'productos', 'productos', '2022-01-01', '2022-01-01', 5, 45, 'heladoArtesanal-de-pistacho.jpeg', 'Helado Artesanal de pistacho'),
                (17, 'Helado Artesanal de Mango', 'productos', 'productos', '2022-01-01', '2022-01-01', 5, 45, 'heladoArtesanalMango.png', 'Helado Artesanal de Mango'),
                (18, 'Helado Sundae Caramel', 'productos', 'productos', '2022-01-01', '2022-01-01', 5, 45, 'heladoSundaeCaramel.png', 'Helado Sundae Caramel'),
                (19, 'Higos Secos', 'productos', 'productos', '2022-01-01', '2022-01-01', 5, 45, 'higosSecos.jpg', 'Higos Secos'),
                (20, 'Jamon Serrano', 'productos', 'Servicios', '2022-01-01', '2022-01-01', 200, 1800, 'jamonSerrano.jpg', 'Jamon Serrano'),
                (21, 'Langostinos', 'productos', 'Atracción', '2022-01-01', '2022-01-01', 3, 27, 'langostinos.jpg', 'Langostinos'),
                (22, 'Lechosa', 'productos', 'Postres y Dulces', '2022-01-01', '2022-01-01', 50, 450, 'lechosa.png', 'Lechosa'),
                (23, 'Limones', 'productos', 'Postres y Dulces', NULL, NULL, 5, 50, 'limones.jpg', 'Limones'),
                (24, 'Mango', 'productos', 'Frutas', NULL, NULL, 5, 50, 'mango.jpg', 'Mango'),
                (25, 'Manitoba Original Mix', 'productos', 'Chucheria', NULL, NULL, 2, 18, 'manitobaOriginalMix.png', 'Manitoba Original Mix'),
                (26, 'Manzana Amarilla', 'productos', 'Frutas', NULL, NULL, 3, 27, 'manzanaAmarilla.jpg', 'Manzana Amarilla'),
                (27, 'Manzana Roja', 'productos', 'Frutas', NULL, NULL, 3, 27, 'manzanaRoja.jpg', 'Manzana Roja'),
                (28, 'Manzana Verde', 'productos', 'Frutas', NULL, NULL, 3, 27, 'manzanaVerde.jpg', 'Manzana Verde'),
                (29, 'Medallones de lomito', 'productos', 'Carne de Res', NULL, NULL, 20, 180, 'medallones_de_lomito_de_res.jpg', 'Medallones de lomito de res'),
                (30, 'Merey Cashews', 'productos', 'Frutos Secos', NULL, NULL, 20, 180, 'mereyCashews.jpg', 'Merey Cashews'),
                (31, 'Merey Cashews', 'productos', 'Frutos Secos', NULL, NULL, 20, 180, 'mereyGrupoCashew.JPG', 'Merey Grupo Cashews'),
                (32, 'Mermelada', 'productos', 'Dulces', NULL, NULL, 20, 180, 'mermeladaDeArandanos.jpg', 'Mermelada de Arandanos'),
                (33, 'Mixed Nuts', 'productos', 'Frutos Secos', NULL, NULL, 20, 180, 'mixedNuts.png', 'Mixed Nuts'),
                (34, 'Mozzarella', 'productos', 'Quesos', NULL, NULL, 20, 180, 'mozzarella.png', 'Mozzarella'),
                (35, 'Naranja', 'productos', 'Frutas', NULL, NULL, 20, 180, 'naranja.jpg', 'Naranja'),
                (36, 'Nispero', 'productos', 'Frutas', NULL, NULL, 20, 180, 'nispero.jpg', 'Nispero'),
                (37, 'Ocumo', 'productos', 'Vegetales', NULL, NULL, 20, 180, 'ocumo.png', 'Ocumo'),
                (38, 'Ossobuco', 'productos', 'Carne de Res', NULL, NULL, 20, 180, 'ossobuco.jpg', 'Ossobuco carne de Res para sopa'),
                (39, 'Pan Campesino', 'productos', 'Panes', NULL, NULL, 20, 180, 'panCampesino.jpg', 'Pan Campesino'),
                (40, 'Pan Canilla', 'productos', 'Panes', NULL, NULL, 20, 180, 'panCanilla.jpg', 'Pan Canilla'),
                (41, 'Pan Cuadrado', 'productos', 'Panes', NULL, NULL, 20, 180, 'pancuadrado.jpg', 'Pan Cuadrado'),
                (42, 'Pan de perro caliente', 'productos', 'Panes', NULL, NULL, 20, 180, 'pandeperrocaliente.jpg', 'Pan de perro caliente'),
                (43, 'Pan Gallego', 'productos', 'Panes', NULL, NULL, 20, 180, 'panGallego.png', 'Pan Gallego'),
                (44, 'Parmesano Reggiano', 'productos', 'Quesos', NULL, NULL, 20, 180, 'parmesano_Reggiano.jpg', 'Parmesano Reggiano'),
                (45, 'Patilla', 'productos', 'Frutas', NULL, NULL, 20, 180, 'patilla.jpg', 'Patilla'),
                (46, 'Pera', 'productos', 'Frutas', NULL, NULL, 20, 180, 'pera.jpg', 'Pera'),
                (47, 'Perejil', 'productos', 'Vegetales', NULL, NULL, 20, 180, 'perejil.jpg', 'Perejil'),
                (48, 'Chuletas de Cochino', 'productos', 'Frutos Secos', NULL, NULL, 20, 180, 'porkChop.jpg', 'Pork Chop'),
                (49, 'Pringles', 'productos', 'Snacks', NULL, NULL, 20, 180, 'pringlesSourCream&_Onion.JPG', 'Pringles Sour Cream & Onion'),
                (50, 'Queso Brie', 'productos', 'Quesos', NULL, NULL, 20, 180, 'Queso_brie.jpg', 'Queso Brie'),
                (51, 'Queso Fresco', 'productos', 'Quesos', NULL, NULL, 20, 180, 'queso_fresco.jpg', 'Queso Fresco'),
                (52, 'Queso fresco Casero', 'productos', 'Quesos', NULL, NULL, 20, 180, 'quesofrescocasero.jpg', 'Queso fresco casero'),
                (53, 'Queso Gouda', 'productos', 'Quesos', NULL, NULL, 20, 180, 'queso_gouda.jpg', 'Queso Gouda'),
                (54, 'Queso Gouda Ahumado', 'productos', 'Quesos', NULL, NULL, 20, 180, 'queso_gouda_ahumado_artesanal.jpg', 'Queso Gouda Ahumado Artesanal'),
                (55, 'Queso Holandes', 'productos', 'Quesos', NULL, NULL, 20, 180, 'queso_holandes.jpeg', 'Queso Holandes'),
                (56, 'Queso Paisa', 'productos', 'Quesos', NULL, NULL, 20, 180, 'quesoPaisa.jpg', 'Queso Paisa'),
                (57, 'Queso Pecorino', 'productos', 'Quesos', NULL, NULL, 20, 180, 'quesoPecorinoGalbani.jpg', 'Queso Pecorino Galbani'),
                (58, 'Salchicha Alemana', 'productos', 'Charcuteria', NULL, NULL, 20, 180, 'salchicha_Alemana.jpg', 'Salchicha Alemana'),
                (59, 'Salchicha Debrecziner', 'productos', 'Charcuteria', NULL, NULL, 20, 180, 'salchicha_debrecziner.jpeg', 'Salchicha Debrecziner'),
                (60, 'Salchicha Frankfurt', 'productos', 'Charcuteria', NULL, NULL, 20, 180, 'salchichaFrankfurt.jpg', 'Salchicha Frankfurt'),
                (61, 'Salchicha', 'productos', 'Charcuteria', NULL, NULL, 20, 180, 'salchicha_pavo_pollo_tovar.jpeg', 'Salchicha de pavo y pollo Colonia Tovar'),
                (62, 'Salchicha Polaca', 'productos', 'Charcuteria', NULL, NULL, 20, 180, 'salchichaPolaca.jpg', 'Salchicha Polaca Colonia Tovar'),
                (63, 'Salchichon', 'productos', 'Charcuteria', NULL, NULL, 20, 180, 'salchichon.png', 'Salchichon'),
                (64, 'Salmon Ahumado', 'productos', 'Pescados', NULL, NULL, 20, 180, 'salmonAhumado.jpg', 'Salmon Ahumado'),
                (65, 'Camarones', 'productos', 'Mariscos', NULL, NULL, 20, 180, 'shrimps.jpg', 'Camarones Shrimps'),
                (66, 'Chuletas de Cerdo', 'productos', 'Carne de Cerdo', NULL, NULL, 20, 180, 'smokedPorkChops.jpg', 'Chuletas de Cerdo Ahumadas Smoked Pork Chops'),
                (67, 'Calamares', 'productos', 'Mariscos', NULL, NULL, 20, 180, 'squid.jpg', 'Calamares Squid'),
                (68, 'Filete t bone steak', 'productos', 'Carne de Res', NULL, NULL, 20, 180, 't_bone_steak.jpg', 't bone steak'),
                (69, 'Toblerone', 'productos', 'Chucherias', NULL, NULL, 20, 180, 'toblerone_blanco.jpg', 'Toblerone blanco'),
                (70, 'Toblerone de leche', 'productos', 'Chucherias', NULL, NULL, 20, 180, 'tobleroneChocolateLeche.jpg', 'Toblerone Chocolate de Leche'),
                (71, 'Toblerone Chocolate Negro', 'productos', 'Chucherias', NULL, NULL, 20, 180, 'tobleroneChocolateNegro.jpg', 'toblerone de Chocolate Negro'),
                (72, 'Toblerone Almendras Crujientes', 'productos', 'Chucherias', NULL, NULL, 20, 180, 'tobleroneCrunchyAlmonds.jpg', 'Toblerone Crunchy Almonds'),
                (73, 'Toblerone Almendras Saladas', 'productos', 'Chucherias', NULL, NULL, 20, 180, 'tobleroneCrunchySaltedAlmonds.jpg', 'Toblerone Crunchy Salted Almonds'),
                (74, 'Tomates', 'productos', 'Vegetales', NULL, NULL, 20, 180, 'tomates.jpg', 'Tomates'),
                (75, 'Toronja', 'productos', 'Frutas', NULL, NULL, 20, 180, 'toronja.jpg', 'Toronja'),
                (76, 'Zanahorias', 'productos', 'Vegetales', NULL, NULL, 20, 180, 'zanahorias.jpg', 'Zanahorias');

                
                ";
                $result = mysqli_query($conexion,$query);
                
                $secondResult = mysqli_query($conexion,$secondQuery);
                $tercerResult = mysqli_query($conexion,$tercerQuery);

                echo "<div class='anuncioExito'><p>Ha sido Registrado-a con éxito</p></div> ";

                mysqli_close($conexion); 
                
                
                
            }else{
                die("<div class='anuncio'> <p id='pAnuncioContrasena'> Las contraseñas no son iguales. Por favor confirme las contraseñas </p> </div>");
            }
            
            
        }

       



    }



?>