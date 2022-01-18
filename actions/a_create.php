<?php

require_once '../components/db_connect.php';
require_once '../components/file_upload.php';

if ($_POST) {   
    $destination = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];
    
   
   
    $uploadError = '';
    $picture = file_upload($_FILES['picture']);  
    
        $sql = "INSERT INTO destinations( name, description, price, latitude, longitude, picture ) VALUES ('$destination','$description','$price','$latitude', '$longitude', '$picture->fileName')";
   
    

    if (mysqli_query($connect, $sql) === true) {
        $class = "success";
        $message = "The entry below was successfully created <br>
            <table class='table w-50'><tr>
            <td> $destination </td>
            <td> $description </td>
            </tr></table><hr>";
            header("refresh:3;url=../index.php");
        $uploadError = ($picture->error !=0)? $picture->ErrorMessage :'';
    } else {
        $class = "danger";
        $message = "Error while creating record. Try again: <br>" . $connect->error;
        $uploadError = ($picture->error !=0)? $picture->ErrorMessage :'';
    }
    mysqli_close($connect);
} else {
    header("location: ../error.php");
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Add Destinations</title>
        <?php require_once '../components/boot.php'?>
    </head>
    <body>
        <div class="container">
            <div class="mt-3 mb-3">
                <h1>Create request response</h1>
            </div>
            <div class="alert alert-<?=$class;?>" role="alert">
                <p><?php echo ($message) ?? ''; ?></p>
                <p><?php echo ($uploadError) ?? ''; ?></p>
                <a href='../index.php'><button class="btn btn-dark border-white" type='button'>Home</button></a>
                <a href='../create.php'><button class="btn btn-dark border-white" type='button'>Back</button></a>
            </div>
        </div>
        <?php require_once '../components/boot-js.php'; ?> 
    </body>
</html>