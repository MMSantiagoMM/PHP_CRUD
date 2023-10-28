<?php 
include "conexion.php";


$id = $_GET['id'];

$conectar->query("DELETE FROM Usuario WHERE id ='$id'");

header("Location: ../index.php");


?>