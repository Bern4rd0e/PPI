<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <?php
    
    $n1 = $_GET["n1"];
    $n2 = $_GET["n2"];
    $n3 = 1; 

    for($i = 1; $i <= $n1; $i++){
        echo $n3 . " ";
        $n3 += $n2;
    }

    ?>
</body>
</html>