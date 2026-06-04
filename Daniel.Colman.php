<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conociendo variables en php</title>
</head>
<body>
    <h1>Detalles del Producto</h1>
<?php
$nombreProducto = "pixel 8 pro";

$precio = 15000;

$disponibilidad ="11 Unidades";

?>

<ol>
<li><p><strong>Producto: </strong><?php echo $nombreProducto?></p></li>
<li><p><strong>Precio: </strong><?php echo $precio?></p></li>
<li><p><strong>Disponibilidad: </strong><?php echo $disponibilidad; ?></p> </li>

</ol>
</body>
</html>
