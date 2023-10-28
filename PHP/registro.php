<?php

include 'conexion.php';

$correo = $_POST['correo'];
$password = $_REQUEST['password'];
$passwordHash1 = password_hash($password,PASSWORD_BCRYPT);

/*
$sql = "INSERT INTO Usuario VALUES(null,'$correo','$passwordHash1')";
*
$conectar -> query($sql);
*/

$enviar = $conectar-> prepare("INSERT INTO Usuario VALUES (null,?,?)"); 

//$enviar->execute(array($correo,$passwordHash1)); más seguro


$enviar->execute([$correo,$passwordHash1]);


header('Location: ../index.php');

?>