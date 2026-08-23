<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo base_url('assets/style-detalle.css'); ?>">
    <title>Document</title>
</head>
<body>
    <h1>Detalle del Producto</h1>

<h2><?php echo htmlspecialchars($producto->nombre); ?></h2>

<p>
    <strong>Precio:</strong>
    <?php echo $producto->precio; ?>
</p>

<p>
    <strong>Stock:</strong>
    <?php echo $producto->stock; ?>
</p>

<p>
    <strong>Código:</strong>
    <?php echo $producto->codigo; ?>
</p>

<a href="<?php echo base_url('index.php/productos'); ?>">
    Volver al listado
</a>
</body>
</html>