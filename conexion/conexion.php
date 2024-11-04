<?php
$servername = "localhost"; 
$username = "root";
$password = "";
$db = "prueba_pelisweb";

try {
    $conexion = new PDO("mysql:host=$servername;dbname=".$db.";charset=utf8", $username, $password);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    die();
}
?>