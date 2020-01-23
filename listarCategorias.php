<?php

$link = new PDO(
    'mysql:host=localhost;dbname=catalogo',
    'root',
    'root',
    $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8')
);
$link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

$sql = "SELECT idCategoria, catNombre 
            FROM categorias";
$stmt = $link->prepare($sql);
$stmt->execute();

$categorias = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!doctype html>
<html lang="es">
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
        <h1>listado del mal</h1>
        <ul class="list-group">
<?php
            foreach ( $categorias as $categoria ){
?>
            <li class="list-group-item"><?php echo $categoria['idCategoria'], ' ', $categoria['catNombre']; ?></li>
<?php
            }
?>
        </ul>
    </main>

</body>
</html>
