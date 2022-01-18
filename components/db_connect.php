<?php
$hostname = "173.212.235.205";
$username = "sebastia_admin";
$password = "Agdsdrei9022";
$dbname = "sebastia_mount_everest";
            
$connect = new mysqli($hostname, $username, $password, $dbname);
            
// check connection
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
    }/* else {
    echo "Connected successfully";
    } */
?>