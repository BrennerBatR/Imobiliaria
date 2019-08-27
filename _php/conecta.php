<?php
    $servername = "localhost";
    $database = "imobiliaria";
    $username = "root";
    $password = "";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Check connection
    if (!$conn) {
        die("Não conectado: " . mysqli_connect_error());
    }
?>