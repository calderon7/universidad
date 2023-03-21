<?php 
session_start();

$conexion = new mysqli("localhost","root","","alumnos");

if(mysqli_connect_errno()){
    echo 'Conexion Fallida : ', mysqli_connect_error();
    exit();
}
?>