<?php

include("conexion.php");
$con = conexion();

$id = $_GET["id"];

$sql = "SELECT * FROM persona WHERE idpersona='$id'";

$resultado = pg_query($con, $sql);

$fila = pg_fetch_assoc($resultado);

?>

<!doctype html>
<html lang="es">

<head>

    <title>Editar Persona</title>

    <meta charset="utf-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1">

    <link rel="stylesheet"
    href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

</head>

<body>

<div class="container">

    <h1 class="text-center mt-5">
        Actualizar Persona
    </h1>

    <div class="card mt-4">

        <div class="card-body">

            <form action="editar-post.php" method="post">

                <input type="hidden"
                       name="id"
                       value="<?php echo $fila["idpersona"]; ?>">

                <div class="form-group">

                    <label>Nro Documento</label>

                    <input type="text"
                           name="doc"
                           maxlength="8"
                           class="form-control"
                           value="<?php echo $fila["documento"]; ?>">

                </div>

                <div class="form-group">

                    <label>Nombre</label>

                    <input type="text"
                           name="nom"
                           class="form-control"
                           value="<?php echo $fila["nombre"]; ?>">

                </div>

                <div class="form-group">

                    <label>Apellidos</label>

                    <input type="text"
                           name="ape"
                           class="form-control"
                           value="<?php echo $fila["apellido"]; ?>">

                </div>

                <div class="form-group">

                    <label>Dirección</label>

                    <input type="text"
                           name="dir"
                           class="form-control"
                           value="<?php echo $fila["direccion"]; ?>">

                </div>

                <div class="form-group">

                    <label>Celular</label>

                    <input type="text"
                           name="cel"
                           maxlength="9"
                           class="form-control"
                           value="<?php echo $fila["celular"]; ?>">

                </div>

                <button type="submit"
                        class="btn btn-success">

                    Actualizar

                </button>

                <a href="listar.php"
                   class="btn btn-secondary">

                    Cancelar

                </a>

            </form>

        </div>

    </div>

</div>

</body>
</html>