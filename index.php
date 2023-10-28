<?php
    include "PHP/conection.php";

    $sql = $conectar -> query("SELECT * FROM Books");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/bootstrap.css">
</head>
<body class="row vh-100 justify-content-center align-items-center body-index">
    <section class="col-auto form-index">
        
        <h1>Books</h1>
        <button type="submit" class="btn-send-index mb-3" onclick="window.location.href = '../form.html'" >Register</button>
        <table class="table table-css">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Book title</th>
      <th scope="col">Writer</th>
      <th scope="col">Description</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php 
        foreach($sql as $i){?>
      <th scope="row"><?php echo $i['id']; ?> </th>
      <td><?php echo $i['title']; ?></td>
      <td><?php echo $i['writer']; ?></td>
      <td><?php echo $i['description']; ?></td>
      <td><a class="btn btn-primary" href="PHP/edit.php?id=<?php echo $i['id']; ?>">Edit</a></td>
      <td><a class="btn btn-danger" href="PHP/delete.php?id=<?php echo $i['id']; ?>">Delete</a></td>
    </tr>
    <?php }?>
  </tbody>
</table>
    </section>


    <script src="../JS/bootstrap.js"></script>
</body>
</html>