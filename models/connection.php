<?php

function connection(){
    /*
    $servername="localhost";
    $username="id15459358_admon";
    $password='{zplc@-zxD$lI0@2';
    $dbname = "id15459358_green_guide";
    */
    $servername="localhost";
    $username="root";
    $password='helloworld';
    $dbname = "green_guide";
    $mysqli = new mysqli($servername, $username, $password, $dbname);
    if ($mysqli->connect){
        return $mysqli;
    }
    else{
        die("Error al conectarse con la base de datos".$mysqli->error);
    }
}

function connection_close($mysqli){
    $mysqli->close();
}

function insert_user($mysqli,$name,$email,$address,$password,$date){
    $query = "INSERT INTO users (user_name, email, address, password, birthdate) VALUES '".$name."', '".$email."', '".$address."', '".$password."', '".$date."';";
    $mysqli->query($query);
}

?>