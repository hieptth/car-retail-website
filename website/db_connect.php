<?php
    $servername = "localhost";
    $username = "root";
    $password = "noPassword";
    $db = "onlinestore";

    //Create connection
    $conn = new mysqli($servername, $username, $password);
    if ($conn->connect_error) {die("Connection failed: " . $conn->connect_error);}

    //Create Database
    $sql = "CREATE DATABASE IF NOT EXISTS OnlineStore;";
    if (!$conn->query($sql)) { echo "Error creating database." . $conn->connect_error; }
    $conn->select_db('onlinestore');
?>