<?php
$NOMBRE = htmlspecialchars($_POST["nombreLogin"]);
$PASSWORD = htmlspecialchars($_POST["passwordLogin"]);

if (($NOMBRE==$PASSWORD)&& $NOMBRE !="") {
    header("Location: bienvenida.php?nombreLogin=".urlencode($NOMBRE));
    exit;
}else {
    header("Location:error.php");
    exit;
}
?>