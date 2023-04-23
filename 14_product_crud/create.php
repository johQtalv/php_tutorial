<?php

$pdo  = new PDO('mysql:host=localhost;port=3306;dbname=products_crud', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// image=&title=&description=&price=   method="get" = url:ään tulee infoo, method="post", ei tule infoo url:ään.

echo $_SERVER['REQUEST_METHOD'].'<br>';
if($_SERVER['REQUEST_METHOD'] === 'POST') {

$title = $_POST['title']; //test
$description = $_POST['description'];
$price = $_POST['price'];
$date = date('Y-m-d H:i:s');

if(!$title)

$statement = $pdo->prepare("INSERT INTO products (title, image, description, price, create_date)
              VALUES (:title, :image, :description, :price, :date)");
$statement->bindValue(':title', $title);
$statement->bindValue(':image', '');
$statement->bindValue(':description', $description);
$statement->bindValue(':price', $price);
$statement->bindValue(':date', $date);
$statement->execute();

}

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel ="stylesheet" href ="app.css">


    <title>Products CRUD</title>
  </head>
  <body>
    <h1>Create new Product</h1>

    

    <form action="" method="post">
  <div class="form-group">
    <label>Product Image</label>
    <br>
    <input type="file" name="image">
  </div>
  <div class="form-group">
    <label>Product Title</label>
    <input type="text" name="title" class="form-control">
  </div>
  <div class="form-group">
    <label>Product Description</label>
    <textarea class="form-control" name="description"></textarea>
  </div>
  <div class="form-group">
    <label>Product Price</label>
    <input type="number" step=".01" name="price" class="form-control">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

    
  </body>
</html>