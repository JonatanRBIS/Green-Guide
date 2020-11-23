<?php

// Start the session
require("connection.php");
$email = $_POST['email'];
$pass = hash('sha256',$_POST['password']);
$sql = "SELECT user_id FROM users WHERE email = '".$email."' AND password = '".$pass."';";

if($data = $conn->query($sql)){
    if ($data->num_rows > 0){
        session_start();
        $id = $data->fetch_assoc();
        $_SESSION["user_id"] = $id["user_id"];
        header("Location: http://localhost/Green-Guide/brayan/views/home.php");
    }
    else{
        header("Location: http://localhost/Green-Guide/brayan/components/login.php?a=2");
    }
}

?>