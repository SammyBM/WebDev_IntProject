<?php
require_once("../conexionPDO.php");

$i = strtoupper($_POST['id']);
$n = $_POST['nombre'];
$t = $_POST['tipo'];
$p = $_POST['precio'];
$e = $_POST['existencia'];

$res = mysqli_query($con, "UPDATE usuarios SET nombre='$n', tipo='$t', precio='$p', existencia='$e' WHERE id='$i'");
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