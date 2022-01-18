<?php 
require_once 'components/db_connect.php';



   $class = 'd-none';

   if ($_GET['id']) {
   $id = $_GET['id'];
   $sql = "SELECT * FROM destinations WHERE id = {$id}" ;
   $result = mysqli_query($connect, $sql);
   $data = mysqli_fetch_assoc($result);
   if (mysqli_num_rows($result) == 1) {
    $destination = $data['name'];
    $description = $data['description'];
    $price = $data['price'];
    $latitude = $data['latitude'];
    $longitude = $data['longitude'];
    
    $picture = $data['picture'];
} }
//the POST method will actually delete the user permanently
if ($_POST) {
    $id = $_POST['id'];
    $picture = $_POST['picture'];
    ($picture =="destination.jpg")?: unlink("pictures/$picture");

   $sql = "DELETE FROM destinations WHERE id = {$id}";
   if ($connect->query($sql) === TRUE) {
    $class = "alert alert-success";
    $message = "Successfully Deleted!";
    header("refresh:3;url=index.php");
} else {
    $class = "alert alert-danger";
    $message = "The entry was not deleted due to: <br>" .             $connect->error;
}
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Trip</title>
    <?php require_once 'components/boot.php'?>
    <style type= "text/css">
       fieldset {
            margin: auto;
            margin-top: 100px;
            width: 70% ;
        }     
        .img-thumbnail{
            width: 70px !important;
            height: 70px !important;
        }    
   </style>
</head>
<body>
    <div class="container">
<?php require_once'components/navbar.php'; ?>
<div class="<?php echo $class; ?>" role="alert">
        <p><?php echo ($message) ?? ''; ?></p>           
</div>
<fieldset>
<legend class='h2 mb-3'>Delete request <img class='img-thumbnail rounded-circle' src='pictures/<?php echo $picture ?>' alt="<?php echo $destination ?>"></legend>
<h5>You have selected the data below:</h5>
<table class="table w-75 mt-3">
<tr>
            <td><?php echo"Destination: " . $destination?></td>
            <td><?php echo"ID:" . $id?></td>
            
</tr>
</table>

<h3 class="mb-4">Do you really want to delete this destination?</h3>
<form method="post">
   <input type="hidden" name="id" value="<?php echo $id ?>" />
   <input type="hidden" name="picture" value="<?php echo $picture ?>" />
   <button class="btn btn-dark" type="submit">Delete</button >
   <a href="index.php"><button class="btn btn-dark" type="button">Cancel</button></a>
</form>
</fieldset>
</div>
<?php require_once 'components/boot-js.php'; ?> 
</body>
</html>