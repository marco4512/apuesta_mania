<?php 
$host="";
$database="";
$usuario="";
$password="";
error_reporting(0);
$conexion=new mysqli($host,$usuario,$password,$database);
if($conexion->connect_errno){
    echo "404";
    exit();
}
?>