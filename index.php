<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Emergencia Municipal</title>
    <!-- CSS / bootstrap y fontawesome-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/3a6fb73ca2.js" crossorigin="anonymous"></script>

</head>

<body>
    <h1 class="text-center p-3">Panel de Funcionarios</h1>
    <div class="container-fluid row">
        <!-- se declara formulario para registrar nuevo funcionario-->
        <form class="col-3 p-3" method="POST">
            <h3 class="text-center text-secondary">Formulario de Registro Funcionario</h3>
            <!-- validacion de campos -->
            <?php
            //se valida que no se haya pulsado el boton registrar
            include "modelo/conexion.php";
            include "controlador/registro_persona.php";
            ?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre Funcionario</label>
                <input type="text" class="form-control" name="nombre">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Apellido Funcionario</label>
                <input type="text" class="form-control" name="apellido">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">CI Funcionario</label>
                <input type="text" class="form-control" name="ci">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Fecha de Nacimiento</label>
                <input type="date" class="form-control" name="fecha">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Correo Funcionario</label>
                <input type="text" class="form-control" name="correo">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Unidad</label>
                <input type="text" class="form-control" name="unidad">
            </div>
            <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>
        </form>
        <div class="col-8 p-4">
            <table class="table">
                <thead class="bg-primary">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">CI</th>
                        <th scope="col">Fecha Nacimiento</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Unidad</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <!-- se realiza consulta a la base de datos-->
                    <?php
                    include "modelo/conexion.php";
                    $sql = $conexion->query("SELECT * FROM funcionarios");
                    while ($datos = $sql->fetch_object()) { ?>
                        <tr>
                            <td><?= $datos->id_funcionario ?></td>
                            <td><?= $datos->nombre ?></td>
                            <td><?= $datos->apellido ?></td>
                            <td><?= $datos->c_identidad ?></td>
                            <td><?= $datos->fecha_nacimiento ?></td>
                            <td><?= $datos->correo ?></td>
                            <td><?= $datos->unidad ?></td>
                            <td>
                                <a href="#" class="btn btn-small btn-primary"><i
                                        class="fa-regular fa-pen-to-square"></i></a>
                                <a href="#" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>