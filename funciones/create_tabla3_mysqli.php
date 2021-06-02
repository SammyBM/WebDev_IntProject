<?php
require_once("../conexionMYSQLI.php");

$n = strtoupper($_POST['nombre']);
$t = $_POST['nombre'];
$p = $_POST['precio'];
$e = $_POST['stock'];
$c = $_POST['caducidad'];

$res = mysqli_query($con, "INSERT INTO productos(id, nombre, precio, stock, caducidad) VALUES(NULL, '$n', '$t', '$p', '$e', '$c')");
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