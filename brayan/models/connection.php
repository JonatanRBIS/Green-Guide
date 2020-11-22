<?php


function conn(){
    
    $servername="localhost";
    $username="id15459358_admon";
    $password='{zplc@-zxD$lI0@2';
    $dbname = "id15459358_green_guide";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    $conn -> set_charset("utf8");
    if ($conn->connect){
        return $conn;
    }
    else{
        die("Error al conectarse con la base de datos".$conn->error);
    }
}

function conn_close($conn){
    $conn->close();
}

function insert_user($conn,$name,$email,$address,$password,$date){
    $query = "INSERT INTO users (user_name, email, address, password, birthdate) VALUES '".$name."', '".$email."', '".$address."', '".$password."', '".$date."';";
    $conn->query($query);
}

?>