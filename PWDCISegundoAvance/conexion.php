<?php 

$server="localhost";
$user="root";
$pass="admin";
$database="Proyecto_BDM";

$conn = mysqli_connect($server,$user,$pass,$database);

if(!$conn){
die("Conexion Fallida");

}

?>