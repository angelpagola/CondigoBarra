<?php

require_once "../conexion.php";
$conexion = conexion();

$nombre = $_POST['codigo'];

$sql = "INSERT into t_productos (nombre) values ('$nombre')";

$result = mysqli_query($conexion, $sql);

$id = mysqli_insert_id($conexion); //obtemos el ultimo ID de inserción
$codigo = $id . date('is'); //Maneja los milisegundos

$sql = "UPDATE t_productos set codigo='$codigo' where id_producto='$id'";
mysqli_query($conexion, $sql);

header('Location:../index.php');
