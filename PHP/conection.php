<?php 


$servidor = 'localhost';
$BD = 'LibraryDB';
$usuario = "root";
$password = 'n3wpassw0rd';

$conectar = new PDO("mysql: server= $servidor; dbname=$BD", $usuario, $password);


?>