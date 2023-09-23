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



<div  class="container">
   <form action="insertarUsuario.php" method="post"><br>

<label>nombre</label>
<input type="text" name="nombre" id="nombre" required placeholder="Nombre">
<br>
<label>apellido</label>
<input type="text" name="apellido" id="apellido" required placeholder="apellido">
<br>
<label>cedula</label>
<input type="text" name="cedula" id="cedula" required placeholder="cedula">
<br>

<label>password</label>
<input type="password" name="contraseña" id="contraseña" required placeholder="password">
<input  id="btn"type="submit" value=" Agregar"> 

</form>
</div> 
        <table class="table table-dark table-striped">

            <thead>
          <tr>
        <th>id</th>
        <th>nombre</th>
        <th>apellido</th>
        <th>cedula</th>
        <th>eliminar</th>
        

    </tr>
           
            </thead>
                <tbody>
           <?php 
           require_once('db.php');

           $query="SELECT * FROM usuario";
           $result_taks=mysqli_query($conexion,$query);

           while($row =mysqli_fetch_assoc($result_taks)){          
           echo $row['cedula'];
           ?>         
                <tr>
                                
                          <td><?php echo $row['id'];?></td>      
                          <td><?php echo $row['nombre'];?></td>     
                          <td><?php echo $row['apellido'];?></td>      
                          <td><?php echo $row['cedula'];?></td>     
                          <td><a href="eliminar.php?id=<?php echo $row['id'];?>"> <button>eliminar</button></a></td>
                         
                        </tr>
                            

             <?php 
           }
             
             ?>
                </tbody>


</table>


</body>
</html>


