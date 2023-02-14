--codigo SQL

--Para crear usuarios:

CREATE USER 'clienteA'@'%' IDENTIFIED VIA mysql_native_password USING '***';GRANT ALL PRIVILEGES ON *.* TO 
'clienteA'@'%' REQUIRE NONE WITH GRANT OPTION MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 
MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;GRANT ALL PRIVILEGES ON `cliente`.* TO 'clienteA'@'%';
--------------------------------------------------------------------------------------------------------------
--hacer consultas
SELECT `favoritos`
FROM `favoritos_pepe`
WHERE `favoritos`='rueda';
--------------------------------------------------------------------------------------------------------------
--eliminar tablas
DROP TABLE `prueba`.`alumnos`;
--------------------------------------------------------------------------------------------------------------
--eliminar registros:
DELETE FROM `prueba`.`salon` WHERE id='1';
--------------------------------------------------------------------------------------------------------------
use nombreBaseDeDatos; --para seleccionar en una base de datos
-------------------------------------------------------------------------------------------------
SHOW TABLES; 
--------------------------------------------------------------------------------------------------------------

SHOW COLUMNS FROM nombreDeLaTabla;
--------------------------------------------------------------------------------------------------------------

SHOW CREATE TABLE nombreDeLaTabla; --para ver el codigo con el que fue creada la tabla.
--------------------------------------------------------------------------------------------------------------

RENAME TABLE nombreDeLaTable TO nuevoNombreDeLaTabla;
--------------------------------------------------------------------------------------------------------------

ALTER TABLE nombreDeLaTabla ADD nombreDelNuevoCampo_o_Columna int not null; --Colocar un nuevo campo a la tabla
--------------------------------------------------------------------------------------------------------------

ALTER TABLE nombreDeLaTabla CHANGE nombreDelCampo nuevoNombreDelCampo smallint not null; --Cambiar nombre y demas a un campo_o_Columna
--------------------------------------------------------------------------------------------------------------

ALTER TABLE nombreDeLaTabla DROP COLUMN nombreDelCampo; --borrar campo_o_Columna
--------------------------------------------------------------------------------------------------------------
--Para crear tablas

-- ejemplos:
CREATE TABLE `prueba`.`alumnos` (`id` int(6) PRIMARY KEY AUTO_INCREMENT, `idSalon` smallint(3), `nombre` varchar(100), `fechaDeIngreso` date DEFAULT '2022-01-01');

CREATE TABLE `prueba`.`usuarios` (`id` int(6) PRIMARY KEY AUTO_INCREMENT, `nombre` varchar(50), `apellido` varchar(50),  `usuario` varchar(50), `correo` varchar(50), `contrasena` varchar(50));

CREATE TABLE `prueba`.`salon` (`id`  smallint(3) PRIMARY KEY AUTO_INCREMENT, `grado` smallint(2), `grupo` varchar(2), `nombreSalon` varchar(100) );
--------------------------------------------------------------------------------------------------------------
-- insertar registros en una tabla
--ejemplos:
INSERT INTO `epiz_32478908_empresa`.`park` 

(`id`,          `nombre`                                              , `categoria`        ,`fechaDeIngreso`,`fechaDeVenta`,`imagen`)

VALUES                         
(''  ,        'Pinta Caritas'                                         , 'Atracción'        , '2022-01-01'   , '2022-01-01' ,'atraccionPintaCaritas.jpg'),
(''  ,        'Dale a la Pelota'                                      , 'Atracción'        , '2022-01-01'   , '2022-01-01' ,'atraccionPelota.jpg'),
(''  ,'Rueda de la Fortuna'                                           , 'Atracción'        ,'2022-01-01'    ,'2022-01-01'  ,'atraccionRuedaDeLaFortuna.jpg'),
(''  ,           'Spa'                                                , 'Atracción'        , '2022-01-01'   , '2022-01-01' ,'atraccionSpa.jpg'),
(''  ,           'Spa'                                                , 'Atracción'        , '2022-01-01'   , '2022-01-01' ,'atraccionSpa2.jpg'),
(''  ,         'Trensito'                                             , 'Atracción'        , '2022-01-01'   , '2022-01-01' ,'atraccionTrensito.jpg'),
(''  , 'Decoración con Globos'                                        , 'Atracción'        , '2022-01-01'   , '2022-01-01' ,'decoracionGlobos.jpg'),
(''  , 'Decoración con Muñecas de Trapo'                              , 'Atracción'        ,'2022-01-01'    ,'2022-01-01'  ,'decoracionMunecasTrapo.jpg'),
(''  , 'Decoración con Muñecas de Trapo'                              , 'Atracción'        , '2022-01-01'   , '2022-01-01' ,'decoracionMunecasTrapo2.jpg'),
(''  , 'Decoración con Muñecas de Trapo'                              , 'Atracción'        , '2022-01-01'   , '2022-01-01' ,'decoracionMunecasTrapo3.jpg'),
(''  , 'La feria de Comida'                                           , 'Feria de Comida'  , '2022-01-01'   , '2022-01-01' ,'feriaDeComida.jpg'),
(''  , 'Torta de los Avengers'                                        , 'Postres y Dulces' , '2022-01-01'   , '2022-01-01' ,'feriaTortaAvengers.jpg'),
(''  , 'Torta Muñeca de Trapo'                                        , 'Postres y Dulces' , '2022-01-01'   , '2022-01-01' ,'feriaTortaMunecaTrapo.jpg'),
(''  , 'Pulsera del Equipo de Argentina'                              , 'Productos'        , '2022-01-01'   , '2022-01-01' ,'pulseraFutbolEquipoArgentina.jpg'),
(''  , 'Pulsera del Equipo de Brasil'                                 , 'Productos'        , '2022-01-01'   , '2022-01-01' ,'pulseraFutbolEquipoBrasil.jpg'),
(''  , 'pulsera del Equipo de Venezuela'                              , 'Productos'        , '2022-01-01'   , '2022-01-01' ,'pulseraFutbolEquipoVenezuela.jpg'),
(''  , 'Pulseras Equipos de Futbol'                                   , 'Productos'        , '2022-01-01'   , '2022-01-01' ,'pulserasEquiposFutbol.jpg'),
(''  , 'Pulseras Equipos de Futbol'                                   , 'Productos'        , '2022-01-01'   , '2022-01-01' ,'pulserasEquiposFutbol2.jpg'),
(''  , 'Salon de Fiesta'                                              , 'Servicios'        , '2022-01-01'   , '2022-01-01' ,'salonDeFiesta.jpg'),
(''  , 'Todas las Atracciones'                                        , 'Atracción'        , '2022-01-01'   , '2022-01-01' ,'todasLasAtracciones.jpg');

INSERT INTO `epiz_32478908_empresa`.`park` (`id`,          `nombre`            , `categoria`,`fechaDeIngreso`,`fechaDeVenta`,`imagen`)
VALUES                         (''  ,'Colchon Inflable para Futbol', 'Atracción',       ''       ,       ''     ,'atraccionColchonFutbol.jpg');
INSERT INTO `prueba`.`salon` (`id`,  `grado`,  `grupo`, `nombreSalon`)
VALUES                       (''  ,    '1'  ,    'a'  ,  'ciencias 1er Grado'),
                             (''  ,    '1'  ,    'b'  ,  'humanidades 1er Grado'),
                             (''  ,    '2'  ,    'a'  ,  'ciencias 2do Grado'),
                             (''  ,    '2'  ,    'b'  ,  'humanidades 2do Grado'),
                             (''  ,    '3'  ,    'a'  ,  'ciencias 3er Grado'),
                             (''  ,    '3'  ,    'b'  ,  'humanidades 3er Grado'),
                             (''  ,    '4'  ,    'a'  ,  'ciencias 4to Grado' ),
                             (''  ,    '4'  ,    'b'  ,  'humanidades 4to Grado'),
                             (''  ,    '5'  ,    'a'  ,  'ciencias 5to Grado'),
                             (''  ,    '5'  ,    'b'  ,  'humanidades 5to Grado'); 

INSERT INTO `prueba`.`alumnos` (`id`, `idSalon`, `nombre`    , `fechaDeIngreso`)
VALUES                         (''  ,    '1'   ,  'Samantha' ,  '2022-10-24'),
							   (''  ,    '1'   ,  'Augustine',  '2022-10-24'),
                               (''  ,    '1'   ,  'Carlos'   ,  '2022-10-24'),
                               (''  ,    '2'   ,  'Jessica'  ,  '2022-10-24'),
                               (''  ,    '2'   ,  'María'    ,  '2022-10-24'),
                               (''  ,    '2'   ,  'Joaquín'  ,  '2022-10-24'),
                               (''  ,    '5'   ,  'Joaquín'  ,  '2022-10-24'),
                               (''  ,    '6'   ,  'Mateo'    ,  '2022-10-24'),
                               (''  ,    '6'   ,  'Jessica'  ,  '2022-10-24'),
                               (''  ,    '7'   ,  'Lucas'    ,  '2022-10-24'),
                               (''  ,    '7'   ,  'Hugo'     ,  '2022-10-24'),
                               (''  ,    '8'   ,  'Lucia'    ,  '2022-10-24'),
                               (''  ,    '8'   ,  'Paula'    ,  '2022-10-24'),
                               (''  ,    '9'   ,  'Martín'   ,  '2022-10-24'),
                               (''  ,    '9'   ,  'Isabella' ,  '2022-10-24'),
                               (''  ,    '10'  ,  'Sara'     ,  '2022-10-24'),
                               (''  ,    '10'  ,  'Carla'    ,  '2022-10-24');

INSERT INTO `epiz_32478908_empresa`.`usuarios` (`nombre` ,`apellido` ,`usuario` ,`correo` ,`contrasena`)
VALUES                             ('$nombre','$apellido','$usuario','$correo','$pass');

INSERT INTO `epiz_32478908_empresa`.`usuarios` (`nombre` ,`apellido` ,`usuario` ,`correo`   ,           `contrasena`        ,       `fecha`      )
VALUES                             ('$nombre','$apellido','$usuario','$correo'  ,to_base64(AES_ENCRYPT('$pass')),'".date('Y-d-m')."' );
--------------------------------------------------------------------------------------------------------------

--actualizar
UPDATE `ccct_land`.`favoritos_$nombreUsuario` SET `favoritos`='NULL' WHERE `id`='15';
--------------------------------------------------------------------------------------------------------------

--Para establecer una relacion entre una tabla y otra
--ejemplos:

ALTER TABLE `prueba`.`alumnos` ADD CONSTRAINT fk_idSalon FOREIGN KEY (`idSalon`) REFERENCES `prueba`.`salon` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
