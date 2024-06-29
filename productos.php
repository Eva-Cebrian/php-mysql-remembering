<?php
require_once('conectar.php');

$d = new Datos();
$datos = $d->getDatos("SELECT * FROM `PRODUCTOS`");
print_r($datos);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="card border-primary mb-3">
            <div class="card-header bg-primary text-white">
                <h1>PDO PHP</h1>
            </div>
            <div class="card-body text-primary">
                <p>
                    <a href="add.php" class="btn btn-success">Crear</a>
                </p>
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Precio</th>
                            <th>Fecha</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($datos as $dato) {
                        ?>
                            <tr>
                                <td> <?php echo $dato['ID'] ?></td>
                                <td> <?php echo $dato['nombre'] ?></td>
                                <td> <?php echo $dato['precio'] ?></td>
                                <td> <?php echo $dato['fecha'] ?></td>
                                <td>
                                    <a href="">EDITAR</a>
                                </td>
                                <td>
                                    <a href="">BORRAR</a>
                                </td>
                            </tr>
                        <?php

                        }

                        ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>

</body>

</html>