<?php
require_once "components/db_connect.php";

if ($_GET["id"]) {
  $id = $_GET["id"];
  $sql = "SELECT * FROM destinations WHERE id = {$id}";
  $result = mysqli_query($connect, $sql);
  if (mysqli_num_rows($result) == 1) {
    $data = mysqli_fetch_assoc($result);
  } else {
    header("location: error.php");
  }
  mysqli_close($connect);
} else {
  header("location: error.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=#, initial-scale=1.0">
  <?php require_once "components/boot.php" ?>
  <title>Update</title>
</head>

<body>
  <div class="container">
    <?php require_once "components/navbar.php"; ?>

    <fieldset>
      <legend class='h2'>Update a Destination</legend>
      <form action="actions/a_update.php" method="post" enctype="multipart/form-data">
        <table class='table'>
          <div class="input-group mb-3">
            <fieldset>
              <form action="actions/a_create.php" method="post" enctype="multipart/form-data">
                <table class='table'>
                  <tr>
                    <th>Destination Name</th>
                    <td><input class='form-control' type="text" name="name" value="<?=$data['name']?>" /></td>
                  </tr>
                  <tr>
                    <th>Description</th>
                    <td><input class='form-control' type="text" name="description" value="<?=$data['description']?>" /></td>
                  </tr>
                  <tr>
                    <th>Price</th>
                    <td><input class='form-control' type="text" name="price" value="<?=$data['price']?>"/></td>
                  </tr>
                  <tr>
                    <th>Latitude</th>
                    <td><input class='form-control' type="text" name="latitude" value="<?=$data['latitude']?>" /></td>
                  </tr>
                  <tr>
                    <th>Longitude</th>
                    <td><input class='form-control' type="text" name="longitude" value="<?=$data['longitude']?>" /></td>
                  </tr>
                  <tr>
                    <th>Picture</th>
                    <td><input class='form-control' type="file" name="picture" /></td>
                  </tr>
                  <tr>
                    <td><button class='btn btn-dark text-light' type="submit">Update</button>
                      <a href="index.php"><button class='btn btn-dark text-light' type="button">Back</button></a>
                    </td>
                    <input type="hidden" name="id" value="<?= $data["id"] ?>">
                    <input type="hidden" name="picture" value="<?= $data["picture"] ?>">
                  </tr>
                </table>
              </form>
            </fieldset>
          </div>
  </div>
  <?php require_once 'components/boot-js.php'; ?> 
</body>

</html>