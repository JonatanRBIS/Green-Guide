<?php

$connection = connect_db

function connect_db()
{
    $connection = msqli("localhost", "root", "helloworld", "green_guide");
    if (!$connection) {
        die("Error al conectar la base de datos".msql_error());
    }
    return $connection;
}

?>