<?php
session_start();

//Son necesarios tanto el unset como el destroy
// Dessetea las variables que guardamos en la variable global SESSION
session_unset();

// destroy the session
session_destroy();

header('Location: /PelisWeb2024/index.php');
?>
