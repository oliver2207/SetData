<?php 
$SERVER = 'localhost';
$USER='root';
$PASSWORD='';
$_DB_='banco';

$conexion = new mysqli($SERVER,$USER,$PASSWORD,$_DB_);
if($conexion->connect_errno){
    echo "conexion Fallida";
}else{
    echo 'conexion Exitosa';
}


?>