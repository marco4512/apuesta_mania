<?php 
include('open_conection.php');
include('validar.php');
    $result->query("SELECT * FROM `users` WHERE `email`=$email");
include('close_conection.php');
?>