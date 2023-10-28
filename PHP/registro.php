<?php

include 'conection.php';

$title = $_POST['title'];
$writer = $_REQUEST['writer'];
$description = $_POST['description'];

/*
$sql = "INSERT INTO Usuario VALUES(null,'$correo','$passwordHash1')";
*
$conectar -> query($sql);
*/

$enviar = $conectar-> prepare("INSERT INTO Books VALUES (null,?,?,?)"); 

//$enviar->execute(array($correo,$passwordHash1)); más seguro


$enviar->execute([$title,$writer,$description]);


header('Location: ../index.php');

?>