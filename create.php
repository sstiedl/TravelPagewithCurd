<?php

require_once "components/db_connect.php";


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php require_once 'components/boot.php' ?>
  <title>Add Destination</title>

<body>
  <div class="container">
    <?php require_once "components/navbar.php"; ?>

    <fieldset>
      <legend class='h2'>Add a Destination</legend>
      <form action="actions/a_create.php" method="post" enctype="multipart/form-data">
        <table class='table'>
          <div class="input-group mb-3">
            <fieldset>
              <form action="actions/a_create.php" method="post" enctype="multipart/form-data">
                <table class='table'>
                  <tr>
                    <th>Destination Name</th>
                    <td><input class='form-control' type="text" name="name" /></td>
                  </tr>
                  <tr>
                    <th>Description</th>
                    <td><input class='form-control' type="text" name="description" /></td>
                  </tr>
                  <tr>
                    <th>Price</th>
                    <td><input class='form-control' type="text" name="price" /></td>
                  </tr>
                  <tr>
                    <th>Latitude</th>
                    <td><input class='form-control' type="text" name="latitude" /></td>
                  </tr>
                  <tr>
                    <th>Longitude</th>
                    <td><input class='form-control' type="text" name="longitude" /></td>
                  </tr>
                  <tr>
                    <th>Picture</th>
                    <td><input class='form-control' type="file" name="picture" /></td>
                  </tr>
                  <tr>
                    <td><button class='btn btn-dark text-light' type="submit">Add</button>
                      <a href="index.php"><button class='btn btn-dark text-light' type="button">Back</button></a>
                    </td>
                  </tr>
                </table>
              </form>
            </fieldset>
          </div>
  </div>



  <?php require_once 'components/boot-js.php'; ?> 
</body>

</html>