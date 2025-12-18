<?php
$servername = "db";
$username = "user";
$password = "password";
$dbname = "demo";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Comprobar conexión
if ($conn->connect_error) {
    die("Connexió fallida: " . $conn->connect_error);
} 
echo "<h1>Connexió amb MySQL exitosa!</h1>";

$conn->close();
