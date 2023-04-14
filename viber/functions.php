<?php

function dbConnect()
{
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $db = "viber";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "<script> console.log('Connected successfully');</script>";
    } catch (PDOException $e) {
        echo "<script> console.log('Connection failed: " . $e->getMessage() . "' );</script>";
    }

    return $conn;
}
