<?php 


$servidor = 'localhost';
$BD = 'myFirstDataBaseFromUbuntu';
$usuario = "black-programmer";
$password = 'N3wPassw0rd*';

$conectar = new PDO("mysql: server= $servidor; dbname=$BD", $usuario, $password);

echo "Conectada";









?>