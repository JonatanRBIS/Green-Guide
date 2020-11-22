<?php
require_once("credentials.php");

$conn = new mysqli($host, $user, $password, $db);
    
if($conn->connect_error){
    die('error'.$conn->connect_error);
}


?>