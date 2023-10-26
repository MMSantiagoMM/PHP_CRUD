<?php
/* Comentario en bloque
//Comentario en linea

print("Hello");
echo " <h1> PHP </h1>";

$edad = 28;
$nombre = 'Santiago';

echo "Esta es la edad $edad años";

echo "<br> EL nombre es: ".$nombre;


for ($i=0; $i < 5 ; $i++) { 
    echo "<br> Numero $i ";
};
*/

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