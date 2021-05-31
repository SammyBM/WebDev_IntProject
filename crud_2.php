<?php
require_once("conexion.php");
$id = $_GET['nid'];
$res = mysqli_query($con, "DELETE FROM usuarios where id=$id");
if(mysqli_affected_rows($con)>0)
{
    $r= "Operación Exitosa";
}
else
{
    $r= "Operación no Exitosa";
}
header("Location: crud_2.php?r=$r");
?>