<?php 

include 'conection.php';


$id = $_GET['id'];

$sql = $conectar -> query("SELECT * FROM Books WHERE id=$id");

$newTitle = $_POST['title'];
$newWriter = $_POST['writer'];
$newDescription = $_POST['description'];


$update = $conectar->prepare("UPDATE Books SET title = '$newTitle', writer = '$newWriter', description = '$newDescription' WHERE id = $id");


$update->execute();


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
<body class="row vh-100 justify-content-center align-items-center body-edit">
    <section class="col-auto form-container">
        <h1>Editing form</h1>

        <form action="" method="post">
        <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Book title</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="title">
       
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Writer</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="writer">

            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Description</label>
              <input type="text" class="form-control description" id="exampleInputEmail1" aria-describedby="emailHelp" name="description">

            </div>
          
            <button type="submit" class="btn-send-edit m-5">Send
            </button>
            <button type="button" class="btn btn-warning" onclick="window.location.href = '../index.php'">Return</button>
          </form>
    </section>
    <script src="../JS/bootstrap.js"></script>
</body>
</html>


