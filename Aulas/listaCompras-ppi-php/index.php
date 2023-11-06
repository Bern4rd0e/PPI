<?php

$conn = new PDO("sqlite:listaCompras");
$conn->setAttribute(
    PDO::ATTR_DEFAULT_FETCH_MODE, 
    PDO::FETCH_OBJ 
);
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Lista de Compras</title>
</head>
<body>
<h1>Lista de Compras</h1>
    <nav>
        <ul>
            <li><a href="index.php">Casinha</a></li>
            <li><a href="form.php">Criar</a></li>
        </ul>
    </nav>
    <main>
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Item</th>
                <th>Valor</th>
                <th>Quantidade</th>
               
            </tr>
            <?php 
            $q = $conn->query("SELECT * FROM compras;");
            $compras = $q->fetchAll();
            foreach($compras as $c):            
            ?>
            <tr>
                <td><?= $c->id ?></td>
                <td><?= $c->item ?></td>
                <td><?= $c->valor ?></td>
                <td><?= $c->qtdd ?></td>
                
            </tr>
            <?php endforeach; ?> 
        </table>
    </main> 
</body>
</html>


