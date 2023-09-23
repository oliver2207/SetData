<?php

use LDAP\Result;

require_once('db.php');
$id=$_GET['id'];
$query="DELETE FROM usuario WHERE id='$id'";

$Result=mysqli_query($conexion,$query);

if(!$Result){
    die('error al eliminar');
}
header('location:registrar.php');

?>