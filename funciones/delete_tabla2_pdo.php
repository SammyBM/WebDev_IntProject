<?php
require_once("conexion_PDO.php");
$id = $_GET['nid'];

$sql = "DELETE FROM productos where id=?";
//la consulta

//Preparamos la consulta sql
$sentencia = $cn->prepare($sql);

//Ejecutamos la consulta
$resultado = $sentencia->execute([$id]);
if($resultado === TRUE)
 $r= "Operación Exitosa";
 else
  $r= "Operación no Exitosa";
header("Location: crud_1_PDO.php?r=$r");
?>