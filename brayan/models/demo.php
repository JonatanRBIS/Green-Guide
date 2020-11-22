<?php
    $conn = new mysqli('localhost', 'id15459358_admon', '{zplc@-zxD$lI0@2', 'id15459358_green_guide');
    if($conn->connect_error){
        echo 'error'.$conn->connect_error;
    }
    else{
        echo "connect successfully";
    }
 $pass = hash("sha256","basecobra1");
 $sql = "INSERT INTO users(user_name,email,address,password) VALUES ('Brayan', 'basecoco1@gmail.com','NA','".$pass."');";
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
    
    $conn ->close();
?>
    
    