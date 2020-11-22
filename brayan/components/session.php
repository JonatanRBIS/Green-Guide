<?php
// Start the session
session_start();
require("../components/connection.php");
$email = $_POST['email'];
$sql = "SELECT email, password FROM users WHERE email = ''"

?>