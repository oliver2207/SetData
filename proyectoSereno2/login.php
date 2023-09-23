<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="validar.php" method="post">
<label>Usuario</label>
     <input type="text" name="nombre" id="nombre">
     <br>
<label> Contraseña</label>
    <input type="password" name="contraseña" id="contraseña">
<input type="submit" value="Procesar">
    </form>


    <?php 
    
   

    if(isset($_GET['error'])){ $error=$_GET['error'];
echo "<h1>".$error."</h1>";
    }
    ?>
</body>
</html>