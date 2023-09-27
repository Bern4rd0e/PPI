<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes</title>
</head>
<body>
    <h1>Criando Objetos</h1>

    <?php

    // include "";
    // include_once "";
    // require "";
    require_once "Computador.php";



    $vixeMaria = new Computador();

    $vixeMaria->setProcessador("Intel i9 13ª");
    $vixeMaria->setRam("128GB");
    $vixeMaria->setArmazenamento("20YB");

    echo "<pre>";
    print_r($vixeMaria);
    echo "</pre>";

    ?>

</body>
</html>