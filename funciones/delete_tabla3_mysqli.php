<?php
require_once("conexion_MYSQLI.php");
$id = $_GET['nid'];

$sql = "DELETE FROM productos where id='$id'";
//la consulta

//Preparamos la consulta sql
$sentencia = $cn->prepare($sql);

//Ejecutamos la consulta
$resultado = $sentencia->execute([$id]);
if($resultado === TRUE)
 $r= "Operación Exitosa";
 else
  $r= "Operación no Exitosa";
header("Location: crud_1_MYSQLI.php?r=$r");
?>