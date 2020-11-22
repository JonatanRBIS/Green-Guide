<?php
$servername = "localhost";
$username = "id15459358_admon";
$password = '{zplc@-zxD$lI0@2';
$dbname = "id15459358_green_guide";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


$conn -> set_charset("utf8");
$conn -> autocommit(FALSE);
// Check connection
if ($conn->connect_error) {
  die("Connection with MySQL failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE users(
    user_id INTEGER UNSIGNED AUTO_INCREMENT,
    user_name VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL,
    address VARCHAR(100),
    password VARCHAR(20) NOT NULL,
    prof_pic_url VARCHAR(300),
    birthdate DATE,
    creation TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    modify TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY(user_id)
    );";

if ($conn->query($sql) === TRUE) {
    
  echo "Table users created successfully";
  $conn -> commit();
} else {
  echo "Error creating table users: " . $conn->error;
  $conn -> rollback();
}

$sql = "CREATE TABLE plants(
    plant_id INTEGER UNSIGNED AUTO_INCREMENT,
    common_name VARCHAR(60),
    scientific_name VARCHAR(60),
    family VARCHAR (50),
    desciption TEXT,
    cares TEXT,
    img_url VARCHAR(300),
    weather ENUM('1','2','3'),
    PRIMARY KEY(plant_id)
    );";

if ($conn->query($sql) === TRUE) {
    
  echo "Table plants created successfully";
  $conn -> commit();
} else {
  echo "Error creating table plants: " . $conn->error;
  $conn -> rollback();
}
$sql = "CREATE TABLE diseases(
    disease_id INTEGER UNSIGNED AUTO_INCREMENT,
    common_name VARCHAR (60),
    scientific_name VARCHAR(60),
    treatment TEXT,
    img_url VARCHAR(300),
    PRIMARY KEY(disease_id)
    );";

if ($conn->query($sql) === TRUE) {
    
  echo "Table diseases created successfully";
  $conn -> commit();
} else {
  echo "Error creating table diseases: " . $conn->error;
  $conn -> rollback();
}

$sql = "CREATE TABLE gardens(
    garden_id INTEGER UNSIGNED AUTO_INCREMENT,
    garden_name VARCHAR(50),
    user_id INTEGER NOT NULL ,
    weather_id INTEGER,
    PRIMARY KEY(garden_id)
    );";

if ($conn->query($sql) === TRUE) {
    
  echo "Table gardens created successfully";
  $conn -> commit();
} else {
  echo "Error creating table gardens: " . $conn->error;
  $conn -> rollback();
}

$sql = "CREATE TABLE plants_user(
    plants_user_id INTEGER UNSIGNED AUTO_INCREMENT,
    garden_id INTEGER NOT NULL,
    plant_id INTEGER NOT NULL,
    PRIMARY KEY(plants_user_id)
    );";

if ($conn->query($sql) === TRUE) {
    
  echo "Table plants_user created successfully";
  $conn -> commit();
} else {
  echo "Error creating table plants_user: " . $conn->error;
  $conn -> rollback();
}

$sql = "CREATE TABLE symptoms(
    symptom_id INTEGER UNSIGNED AUTO_INCREMENT,
    plant_symptom VARCHAR(200),
    bug_symptom VARCHAR(200),
    PRIMARY KEY(symptom_id)
    );";

if ($conn->query($sql) === TRUE) {
    
  echo "Table symptoms created successfully";
  $conn -> commit();
} else {
  echo "Error creating table symptoms: " . $conn->error;
  $conn -> rollback();
}

$sql = "CREATE TABLE weathers(
    weather_id INTEGER UNSIGNED AUTO_INCREMENT,
    name VARCHAR(50),
    temperature_in_c INT,
    description TEXT,
    PRIMARY KEY(weather_id) 
    );";

if ($conn->query($sql) === TRUE) {
    
  echo "Table weathers created successfully";
  $conn -> commit();
} else {
  echo "Error creating table weathers: " . $conn->error;
  $conn -> rollback();
}

$sql = "CREATE TABLE plants_diseases(
    plant_disease_id INTEGER UNSIGNED AUTO_INCREMENT,
    plant_id INT,
    disease_id INT,
    PRIMARY KEY(plant_disease_id)
    );";

if ($conn->query($sql) === TRUE) {
    
  echo "Table plants_diseases created successfully";
  $conn -> commit();
} else {
  echo "Error creating table plants_diseases: " . $conn->error;
  $conn -> rollback();
}

$sql = "CREATE TABLE diseases_symptoms(
    diseases_symptoms_id INTEGER UNSIGNED AUTO_INCREMENT,
    symptoms INT,
    disease_id INT,
    PRIMARY KEY(diseases_symptoms_id)
    );";

if ($conn->query($sql) === TRUE) {
    
  echo "Table diseases_symptoms created successfully";
  $conn -> commit();
} else {
  echo "Error creating table diseases_symptoms: " . $conn->error;
  $conn -> rollback();
}


$conn->close();
?>