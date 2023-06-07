<?php 


$id = $_GET['id'];

require_once('Database.php');

$ordenador = new Database();
$ordenadorData = $ordenador->findById($id);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styleedit.css">
</head>
<body>
    <form action="update.php" method="POST">
        <?php echo 'ESTAMOS EN edit.PHP'; ?>
        <?php echo 'Hemos recogido el valor del id : '. $_GET['id']; ?>
        <input type="hidden" name="id" value="<?php echo $ordenadorData['id']; ?>">
        <input type="text" name="modelo" value="<?php echo $ordenadorData['modelo']; ?>" placeholder="Actualiza la modelo">
        <input type="text" name="marca" value="<?php echo $ordenadorData['marca']; ?>" placeholder="Actualiza el marca">
        <input type="text" name="precio" value="<?php echo $ordenadorData['precio']; ?>" placeholder="Actualiza el precio">
        <input type="text" name="descripcion" value="<?php echo $ordenadorData['descripcion']; ?>" placeholder="Actualiza la descripcion">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
