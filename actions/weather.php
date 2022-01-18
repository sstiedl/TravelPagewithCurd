<?php
require_once '../components/db_connect.php';
require_once "../components/RESTful.php";
if ($_GET) { 
    $location = "$_GET[lat],$_GET[long]";
    $connection= 'https://api.darksky.net/forecast/e329256a741df2bcccffedd3600287c2/' . $location . '?exclude=minutely,hourly,daily,alerts,flags';
    $result = curl_get($connection);
    $weather = json_decode($result);
    $fahrenheit= $weather->currently->temperature;
    $celsius = round(($fahrenheit - 32) * (5 / 9), 2);
    echo "<div class =' mt-4'> 
            <p>Timezone: {$weather->timezone}</p>
            <p>{$weather->currently->summary}</p>
            <p>{$celsius} &deg;C</p>
            <p>{$fahrenheit} &deg;F</p>
    
        </div>";
    }
 ?>  


       
