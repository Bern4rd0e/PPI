<?php 
$conn = new PDO("sqlite:../listaCompras");
$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

$item = $_GET["item"];
$valor = $_GET["valor"];
$qtdd = $_GET["qtdd"];

$preparo = $conn->prepare("INSERT INTO compras(item, valor, qtdd) VALUES(:item, :valor, :qtdd);");
$preparo->bindParam(":item", $item);
$preparo->bindParam(":valor", $valor);
$preparo->bindParam(":qtdd", $qtdd);

$preparo->execute();

header("Location:../index.php")
?>