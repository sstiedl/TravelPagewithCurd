<?php
    require_once 'components/db_connect.php';
    require_once 'components/RESTful.php';
    if($_GET["id"]) {
        $id = $_GET["id"];
        $sql= "SELECT * FROM destinations WHERE id = {$id}";
        $result = mysqli_query($connect, $sql);
        
        if(mysqli_num_rows($result) == 1) {
            $data = mysqli_fetch_assoc($result);
        } else {
            header("location: error.php");
        }
 
    } else {
        header("location: error.php");
    }

    $content="";

    $content .= '
        <div class="shadow-lg">
        <div class="p-0 card bg-dark mb-3">
        <img src=pictures/'.$data["picture"].' class="card-img-top" alt="...">
        <div class="card-body bg-dark mb-2 col col-12  text-light">
          <h5 class="card-title">'.$data["name"].'</h5>
          <hr>
          <p class="card-text"><b>Price: &euro;</b>  '.$data["price"].'</p>
          <p class="card-text"><b>Description: </b>'.$data["description"].'</p>
          <a href="index.php" class="btn btn-dark border-white">Back</a>
          <div class="btn btn-dark border-white" id="show-weather">Show Forecast</div>
          <div id="weather-text"></div>
          <p class="card-text" id="content"></p>
          </div> 
        </div>
      </div>
   
      ';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once 'components/boot.php' ?>
    <title>Details</title>
</head>
<body>
<div class="container">
<?php require_once'components/navbar.php'; ?>

    
<div class="mt-3">
<?=$content?>

</div>
    




</div>

<div class="container">
<div class="shadow-lg"id="map" style="height: 500px;">
</div>

<script>
let showWeather = false;


    
document.getElementById('show-weather').addEventListener("click", loadDoc);
function loadDoc() {
    if(showWeather == false){
    var xhttp = new XMLHttpRequest();
            xhttp.onload = function() {
                if (this.status == 200) {
                     document.getElementById("content").innerHTML = this.responseText;
                }
            }
            let url = "actions/weather.php?lat=" + <?= $data['latitude'] ?> + "&long=" + <?= $data['longitude'] ?>;
            xhttp.open("GET", url, true);
            xhttp.send();
            document.getElementById("show-weather").innerHTML = "Hide Forecast";
        showWeather = true;
        }else{
            document.getElementById("content").innerHTML = "";
            document.getElementById("show-weather").innerHTML = "Show Forecast6";
            showWeather = false;

        }  
        
    }
</script>

<script>
var map;
function initMap() {
    var location = {
        lat: <?= $data["latitude"] ?>,
        lng: <?= $data["longitude"] ?>
        };

    map = new google.maps.Map(document.getElementById('map'), {

    center: location, zoom: 8

    });
    var pinpoint = new google.maps.Marker({
            position: location,
            map: map
        });

}
</script>
<div class="mb-5"></div>
</div>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtjaD-saUZQ47PbxigOg25cvuO6_SuX3M&callback=initMap" async defer></script>
<?php require_once 'components/boot-js.php'; ?> 
</body>
</html>