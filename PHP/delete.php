<?php 
include "conection.php";


$id = $_GET['id'];

$conectar->query("DELETE FROM Books WHERE id ='$id'");

header("Location: ../index.php");


?>