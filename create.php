<?php 
require_once('Database.php');
$database = new Database();
$resultado = $database->getAll();

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styleCreate.css">
</head>
<body>
    <form action="save.php" method="POST">
        <input type="text" name="modelo" placeholder="Inserta una modelo">
        <input type="text" name="marca" placeholder="Inserta un marca">
        <input type="text" name="precio" placeholder="Inserta un precio">
        <input type="text" name="descripcion" placeholder="Inserta una descripcion">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
