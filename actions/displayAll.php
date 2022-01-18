<?php

/****************************************
*######## RESTful WEB SERVICE ##########*
*                                         *
* Client process the request VIA URL      *
* http://address.com/displayAll.php  *
* and gets the JSON result.               *
*                                         *
*******************************************/

header("Content-Type:application/json");

require_once '../components/db_connect.php';

$sql = '';


    $sql = "SELECT * FROM destinations";


$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_all($result, MYSQLI_ASSOC);
mysqli_close($connect);

if($result->num_rows > 0){
    response(200, "Data found" , $row);
} else {
    response(400, "Invalid request", NULL);
}


function response($status,$status_message, $array){
      

   $response['status']=$status;
   $response['status_message']=$status_message;
   $response['data']=$array;

   
   $json_response=json_encode($response);

  
   echo $json_response;
}

?>