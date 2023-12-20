<?php
//Se establece la conexion con la base de datos, se agrega el puerto 3310 para establecer la conexion con la base de datos
$conexion = new mysqli("localhost", "root", "", "db_emergencia","3310");
$conexion->set_charset("utf8");

?>