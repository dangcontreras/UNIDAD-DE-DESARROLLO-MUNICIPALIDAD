<?php
//Se realizan las validaciones correspondientes
if (!empty($_POST['btnregistrar'])) {
    if (!empty($_POST["nombre"]) &&!empty($_POST["apellido"]) &&!empty($_POST["ci"]) &&!empty($_POST["fecha"]) &&!empty($_POST["correo"]) &&!empty($_POST["unidad"])) {
    $nombre = $_POST["nombre"];    
    $apellido = $_POST["apellido"];    
    $ci = $_POST["ci"];    
    $fecha = $_POST["fecha"];
    $correo = $_POST["correo"];
    $unidad = $_POST["unidad"];    


    //Se crea variable sql para insertar los datos.
    $sql = $conexion->query( "INSERT INTO funcionarios (nombre, apellido, c_identidad, fecha_nacimiento, correo, unidad) VALUES ('". $_POST["nombre"]. "','". $_POST["apellido"]. "','". $_POST["ci"]. "','". $_POST["fecha"]. "','". $_POST["correo"]. "','". $_POST["unidad"]. "')");
        if ($sql==1) {
            //se valida el ingreso con el mensaje de registro exitoso 
            echo '<div class="alert alert-success" role="alert">Registro Exitoso</div>';    
        } else {
            echo'<div class="alert alert-danger" role="alert">Error al Registrar</div>';
        }
                
    }else {
            echo "Faltan datos, hay campos vacios";
            
    }
       
}

?>