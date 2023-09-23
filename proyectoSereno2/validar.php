<?php

use LDAP\Result;

$nombre=$_POST['nombre'];
$contraseña=$_POST['contraseña'];

echo $nombre ."  ". $contraseña;
require_once('db.php');

 $query="select * from usuario where nombre='".$nombre."'and contraseña='".$contraseña ."'";
$result=mysqli_query($conexion,$query);

if($result->num_rows > 0){
    
	header('location:index.html');
}elseif($Result->num_rows == 0){
    header('location:login.php?error='."hay un error");
}


?>