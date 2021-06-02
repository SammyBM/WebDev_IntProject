<?php
require_once("../conexionPDO.php");

$n = strtoupper($_POST['nombre']);
$a = $_POST['apellido'];
$i = $_POST['imagen'];


$res = mysqli_query($con, "INSERT INTO usuarios(id, nombre, apellido, imagen) VALUES(NULL, '$n', '$a', '$i'");
if(mysqli_affected_rows($con)>0)
{
    $r = "Operacion Exitosa"
}
else
{
    $r = "Operacion Fallida"
}
header("Location: crud1.php?r=$r");

?>  