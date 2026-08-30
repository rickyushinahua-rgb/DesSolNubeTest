<?php
include("conexion.php");
$con = conexion();

$sql = "SELECT * FROM persona ORDER BY idpersona ASC";
$resultado = pg_query($con, $sql);
?>

<!doctype html>
<html lang="es">
<head>
    <title>Lista de Personas</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet"
    href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>

<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom">

    <h5 class="my-0 mr-md-auto font-weight-normal">
        Registros
    </h5>

    <nav>
        <a class="p-2 text-dark" href="index.php">Registrar</a>
        <a class="p-2 text-dark" href="listar.php">Listar</a>
    </nav>

</div>

<div class="container">

    <h1 class="text-center mt-5">Personas Registradas</h1>
    <p class="text-center lead">PostgreSQL + PHP</p>

    <div class="card mt-4">

        <div class="card-body">

            <table class="table table-bordered table-striped">

                <thead class="thead-dark">

                    <tr>
                        <th>ID</th>
                        <th>Documento</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Dirección</th>
                        <th>Celular</th>
                        <th>Acciones</th>
                    </tr>

                </thead>

                <tbody>

                <?php while ($fila = pg_fetch_assoc($resultado)) { ?>

                    <tr>

                        <td><?php echo $fila["idpersona"]; ?></td>

                        <td><?php echo $fila["documento"]; ?></td>

                        <td><?php echo $fila["nombre"]; ?></td>

                        <td><?php echo $fila["apellido"]; ?></td>

                        <td><?php echo $fila["direccion"]; ?></td>

                        <td><?php echo $fila["celular"]; ?></td>

                        <td>

                            <a class="btn btn-warning btn-sm"
                               href="editar.php?id=<?php echo $fila["idpersona"]; ?>">
                                Editar
                            </a>

                            <a class="btn btn-danger btn-sm"
                               href="eliminar.php?id=<?php echo $fila["idpersona"]; ?>"
                               onclick="return confirm('¿Deseas eliminar este registro?');">
                                Eliminar
                            </a>

                        </td>

                    </tr>

                <?php } ?>

                </tbody>

            </table>

            <a href="index.php" class="btn btn-primary">
                Registrar nueva persona
            </a>

        </div>

    </div>

</div>

</body>
</html>