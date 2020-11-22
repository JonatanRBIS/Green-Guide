<?php
    require_once("../models/connection.php");
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $password = hash('sha256', $_POST['password']);
    $birthdate = $_POST['date'];

    $conn=conn();
    insert_user($conn, $name, $email, $address, $password, $birthdate);
    connection_close($conn);
    header("Location:http://localhost/Green-Guide/brayan/components/login.php");
?>