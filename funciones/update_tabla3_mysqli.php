<?php
require_once("../conexionMYSQLI.php");

$i = strtoupper($_POST['id']);
$n = $_POST['nombre'];
$p = $_POST['precio'];
$s = $_POST['stock'];
$c = $_POST['caducidad'];

$res = mysqli_query($con, "UPDATE productos SET nombre='$n', precio='$p', stock='$s', caducidad='$c' WHERE id='$i'");
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