<?php
$msj = "";

if (isset($_POST['submit'])){
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    if ($usuario == 'admin' && $password == 'admin'){
        header("location: index.php");
    }else {
        $msj = "Credenciales incorrectas"??"";
    }

}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            margin: 50vh;
        }

    </style>
</head>
<body>
 <fieldset >
   <legend></legend>
   <form action="login.php" method="post">
       Nombre usuario: <input name="usuario" type="text" required >
       Password: <input name="password" type="password" required>
       <button type="submit" name="submit" value="Iniciar">Iniciar</button>

   </form>
     <?php
     echo "<p>$msj</p>";
     ?>
  </fieldset>


</body>
</html>
