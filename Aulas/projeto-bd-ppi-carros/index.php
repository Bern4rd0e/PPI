<?php

//connection
$conn = new PDO("sqlite:carros");

$q = $conn->query("SELECT * FROM carros;");
$carros = $q->fetchAll();

print_r($carros);

?>