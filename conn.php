<?php
$servername = "localhost";
$username = "id5956478_elma";
$password = "2161997";

try {
    $conn = new PDO("mysql:host=$servername;dbname='id5956478_projekat'", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>
