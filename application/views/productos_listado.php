<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" href="<?php echo base_url('assets/style-tabla.css'); ?>">
        <title>Document</title>
</head>
<body>
        <h1>Listado de Productos</h1>
<table>
    <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Stock</th>
            <th>Precio</th>
            <th>Codigo</th>
    </tr>
    <?php foreach ($productos as $producto): ?>
        <tr>
            <td><?php echo $producto->id; ?></td>
            <td><?php echo htmlspecialchars($producto->nombre); ?></td>
            <td><?php echo $producto->stock; ?></td>
            <td><?php echo $producto->precio; ?></td>
            <td><?php echo $producto->codigo; ?></td>
            <td><a href="<?php echo base_url('index.php/productos/ver/' . $producto->id); ?>">
                    Ver
                </a></td>
        </tr>
        <?php endforeach ?>
</table>
</body>
</html>