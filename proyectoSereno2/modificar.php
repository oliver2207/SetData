<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

<style>

    body{
        background-color: #234523;
    }
.container{
background-color:blanchedalmond;
height: 350px;
width: 500px;
margin-left: 400px;
margin-top: 100px;
padding: 30px;
 border-radius: 70px;
border: solid 2px red;
 color:#234523;

}

 .container input{
    width: 90%;
height: 25px;
}
#btn{
height:35px;

}


</style>
</head>
<body>



<?php

use LDAP\Result;

require_once('db.php');

if(isset($_GET['id'])){

$id=$_GET['id'];


    $query="SELECT * FROM usuario WHERE id='$id'";

    $result=mysqli_query($conexion,$query);
if(mysqli_num_rows($result)==1){
$row=mysqli_fetch_assoc($result);
$nombre=$row['nombre'];
$apellido=$row['apellido'];
$cedula=$row['cedula'];
$contraseña=$row['contraseña'];
}



}



?>







<div  class="container">
   <form action="insertarUsuario.php" method="post"><br>

<label>nombre</label>
<input type="text" name="nombre" id="nombre" required placeholder="Nombre">
<br>
<label>apellido</label>
<input type="text" name="apellido" id="apellido"  value=""required placeholder="apellido">
<br>
<label>cedula</label>
<input type="text" name="cedula" id="cedula" required placeholder="cedula">
<br>

<label>password</label>
<input type="password" name="contraseña" id="contraseña" required placeholder="password">
<input  id="btn"type="submit" value=" Agregar"> 

</form>
</div> 
  

 


</body>
</html>


