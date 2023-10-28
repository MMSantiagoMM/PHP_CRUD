<?php 

include 'conexion.php';


$id = $_GET['id'];

$sql = $conectar -> query("SELECT * FROM Usuario WHERE id=$id");

$registro = $sql->fetch(PDO::FETCH_LAZY);

$correo = $registro['correo'];


$nuevoCorreo = $_POST['email'];

$nuevaContraseña = $_POST['contraseña'];

$passwordHash1 = password_hash($nuevaContraseña,PASSWORD_BCRYPT);



$update = $conectar->prepare("UPDATE Usuario SET correo = '$nuevoCorreo', contraseña = '$passwordHash1' WHERE id = $id");


$update->execute();




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/bootstrap.css">
</head>
<body class="row vh-100 justify-content-center align-items-center">
    <section class="col-auto">
        <h1>Formularia de edicion</h1>

        <form action="" method="post">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name="contraseña">
            </div>
            
            <button type="submit" class="btn btn-primary">Enviar
            </button>
            <button type="button" class="btn btn-warning" onclick="window.location.href = '../index.php'">Retornar</button>
          </form>
    </section>
    <script src="../JS/bootstrap.js"></script>
</body>
</html>


