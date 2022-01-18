<?php
require_once 'components/db_connect.php';

$sql = '';


    $sql = "SELECT * FROM destinations";


$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_all($result, MYSQLI_ASSOC);
mysqli_close($connect);