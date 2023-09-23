<?php 
require_once 'db.php';

$nombre =$_POST['nombre'];
$apellido=$_POST['apellido'];
$cedula=$_POST['cedula'];
$contraseña=$_POST['contraseña'];
 $conexion;

$query ="INSERT INTO usuario(nombre,apellido,cedula,contraseña)VALUES('$nombre','$apellido','$cedula','$contraseña')";

$result=mysqli_query($conexion, $query);
if(!$result) {
  die("Query Failed.");
}

 
 
?>