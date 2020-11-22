<?php
$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$password = hash('sha256', $_POST['password']);
$date = $_POST['date'];

$conn = new mysqli('localhost', 'id15459358_admon', '{zplc@-zxD$lI0@2', 'id15459358_green_guide');
    if($conn->connect_error){
        echo 'error'.$conn->connect_error;
    }
    else{
        echo "connect successfully  <br>";
    }

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