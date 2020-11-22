<?php
    $conn = new mysqli('localhost', 'root', 'helloworld', 'green_guide');
    if($conn->connect_error){
        echo 'error'.$conn->connect_error;
    }
    else{
        echo "connect successfully";
    }
    $conn ->close();
?>
    
    