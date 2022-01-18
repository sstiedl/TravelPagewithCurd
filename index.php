<?php
require_once 'components/db_connect.php';

$content = ''; 
$sql = "SELECT * FROM destinations";
$result = mysqli_query($connect ,$sql);

if(mysqli_num_rows($result)  > 0) {     
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){         
        $content .= '
        <div class="card col-lg-3 col-md-6 m-3 col-sm-12 p-0  bg-body shadow-lg bg-dark" style="width: 18rem;">
        <img src="pictures/' .$row["picture"] .'"class="card-img-top" alt="...">
        <div class="card-body bg-dark text-light">
          <p class="card-text">Name: ' .$row["name"] . '</p>
          <p class="card-text">Price: &euro;' .$row["price"]  . '</p> <hr>
          <p><a href="details.php?id=' .$row['id'].'"><button class="btn btn-dark btn-sm border-light" type="button">Show more</button></a></p>
          <p><a href="update.php?id=' .$row['id'].'"><button class="btn ' . ' btn-dark btn-sm border-light" type="button">Edit</button></a>
          <a href="delete.php?id=' .$row['id'].'"><button class="btn ' . ' btn-dark btn-sm border-light" type="button">Delete</button></a>   </p>
          
       
        </div>
      </div>';
    }
} else {
    $content =  "<tr><td colspan='5'><center>No Data Available </center></td></tr>";
}


mysqli_close($connect);
?>
<style></style>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CR12-Sebastian Stiedl</title>
    <style>
        .bgDark{

    background-color: rgba(255, 255, 255, 0.7);
   padding-top: 5vh;
    height: 17vh;
    width: auto;

        }
    .container{
   
    background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url("pictures/bg-image.jpg");
    background-position: center;
    background-attachment: fixed;
    background-repeat: no-repeat;
    background-size: cover;
    
    
}


        


    
    </style>
    <?php require_once 'components/boot.php'; ?>
  
</head>
<body>
    <div class="container m-auto">
    <?php require_once 'components/navbar.php'; ?>

    <div class="text-center bgDark mt-5" >
 <div class="text-dark ">
    <p class ="h-1 fw-bolder rounded"> Travel the most beautiful places <br>
    <span class="h3 ">Lifelong memories just a few clicks away </span><br>

   
 </div>
</div>
   


    <div class="mt-5 row g-3 justify-content-center">
    <?= $content ?>
    </div>
    </div>
    <?php require_once 'components/boot-js.php'; ?> 
</body>
</html>