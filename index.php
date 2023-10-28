<?php
    include "PHP/conexion.php";

    $sql = $conectar -> query("SELECT * FROM Usuario");

    /*

    while($dato = $sql ->fetch()){
        echo $dato['correo']."</br>". $dato['contraseña']."</br>";
    }


    foreach($sql as $i){
        echo $i['correo']."</br>". $i['contraseña']."</br>";
    }


    echo $sql;
    */
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
        
        <h1>DATOS</h1>
        <button type="submit" class="btn btn-success" onclick="window.location.href = '../form.html'" >Registrar</button>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">correo</th>
      <th scope="col">contraseña</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php 
        foreach($sql as $i){?>
      <th scope="row"><?php echo $i['id']; ?> </th>
      <td><?php echo $i['correo']; ?></td>
      <td><?php echo $i['contraseña']; ?></td>
      <td><a class="btn btn-primary" href="PHP/editar.php?id=<?php echo $i['id']; ?>">Editar</a></td>
      <td><a class="btn btn-danger" href="PHP/eliminar.php?id=<?php echo $i['id']; ?>">Eliminar</a></td>
    </tr>
    <?php }?>
  </tbody>
</table>
    </section>


    <script src="../JS/bootstrap.js"></script>
</body>
</html>