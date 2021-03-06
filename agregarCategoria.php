<?php
    require 'clases/Conexion.php';
    require 'clases/Categoria.php';
    $objCategoria = new Categoria;

    $chequeo = $objCategoria->agregarCategoria();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<main class="container">
<?php
        $mensaje = 'No pudo agregarse la Categoria';
        $clase = 'danger';
        if( $chequeo ){
            $mensaje = 'Categoria: '.$objCategoria->getCatNombre();
            $mensaje .= ' agregada corectamente';
            $clase = 'success';
        }
?>
    <div class="alert alert-<?= $clase ?>">
        <?= $mensaje; ?>
    </div>
</main>

</body>
</html>
