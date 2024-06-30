<?php
require_once('conectar.php');

$d = new Datos();

if (isset($_POST['nombre'])) {
} else {
    $categorias = $d->getDatos("SELECT * FROM CATEGORIAS");
}
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
                <h1>AÑADIR PRODUCTO</h1>
            </div>
            <div class="card-body text-primary">
                <form action="">
                    <div class="mb-s">
                        <label for="categoria_id">Categoria</label>
                        <select name="categoria_id" id="categoria_id" class="form-control">
                            <?php
                            foreach ($categorias  as $categoria) {
                            ?>
                                <option value="<?php echo $categoria['id'] ?>">
                                    <?php echo $categoria['nombre'] ?>
                                </option>

                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="nombre" id="nombre">
                    </div>
                    <div class="mb-3">
                        <label for="precio" class="form-label">Precio</label>
                        <input type="text" class="form-control" name="precio" id="precio">
                    </div>
                    <hr>
                    <a href="javascript:void(0)" onclick="document.form.submit()" class="btn btn-primary">Enviar</a>

                </form>

            </div>
        </div>
    </div>

</body>

</html>