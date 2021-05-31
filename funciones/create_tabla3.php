<?php
require_once("conexion.php");

$n = strtoupper($_POST['nombre']);
$t = $_POST['tipo'];
$p = $_POST['precio'];
$e = $_POST['existencia'];

$res = mysqli_query($con, "INSERT INTO productos(id, descrip, tipo, precio, existencia) VALUES(NULL, '$n', '$t', '$p', '$e')");
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