<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Categoria dos atletas</title>
</head>
<body>

    <?php
    echo "<h1>Categoria dos atletas por idade</h1>"; 

    $idade = $_GET["age"];

    if ($idade >= 12 && $idade <= 13) {
        echo "Esse atleta está na categoria mirim";
    }
    else{
        if($idade == 14) {
            echo "Esse atleta está na categoria infantil";
        }
    elseif($idade == 15) {
        echo "Esse atleta pode estar nas categoria infantil ou infanto-juvenil";
    }
    elseif($idade == 16) {
        echo "Esse atleta está na categoria infanto-juvenil";
    }
    elseif ($idade >= 17 && $idade <= 18) {
        echo "Esse atleta está na categoria juvenil ou júnior";
    }
    elseif ($idade >= 19 && $idade <= 20) {
        echo "Esse atleta está na categoria júnior";
    }
    elseif ($idade > 20) {
        echo "Esse atleta está na categoria sênior";
    }
    else{
        echo "Esta pessoa provavelmente não está cadastrada no ifrn";
    }
}

    ?>
    
</body>
</html>