<?php
$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$password = hash('sha256', $_POST['password']);
$date = $_POST['date'];

require_once("../models/connection.php");

$sql = "INSERT INTO users (user_name, email, address, password, birthdate) VALUES '".$name."', '".$email."', '".$address."', '".$password."', '".$date."';";

    if ($conn->query($sql) === TRUE) {
        echo "New User created successfully";
    } 
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

$conn->close();

header("http://localhost/Green-Guide/loginPris/login2.html");
?>