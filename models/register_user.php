<?php
$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$pass = hash('sha256', $_POST['password']);
$date = $_POST['date'];

require_once("connection.php");

$sql = "INSERT INTO users ( user_name, email, address, password, birthdate) VALUES ('".$name."', '".$email."', '".$address."', '".$pass."', '".$date."');";

if ($conn->query($sql) === TRUE) {
    header("Location: http://localhost/Green-Guide/brayan/components/login.php?a=1");
} 
else {
    header("Location: http://localhost/Green-Guide/brayan/components/register.php?a=1");
}


$conn->close();
?>