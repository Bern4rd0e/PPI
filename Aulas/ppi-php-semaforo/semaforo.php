<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700;800&display=swap" rel="stylesheet">
    <title>Semáforo</title>
</head>
<body>
    <h1>O semáforo indica</h1>

    <?php

    $color = strtolower($_GET["semaphore"]);

    //verde 
    //vermelho
    //amarelo

    if ($color == "verde") {
        $acao = "Avance";
    }elseif ($color == "vermelho") {
        $acao = "Pare";
    }elseif ($color == "amarelo") {
        $acao = "Diminua";
    }
    echo "<p>Ação $acao </p>";

    ?>
</body>
</html>