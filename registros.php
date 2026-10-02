<?php
include_once 'conexion.php';

$nombreUsuario = $datos['nombre'];
$emailUsuario = $datos['email'];
$generoUsuario = $datos['genero'];




$consulta = mysqli_query($conexion,'INSERT INTO registros (nombre,email,genero) VALUES("'.$nombreUsuario.'","'.$emailUsuario.'","'.$generoUsuario.'")');


$res =["res"=> "ko", "message" => "Ha ocurrido un error"];


if($conexion->affected_rows > 0){
  $res =["res"=> "ok", "message" => "Registrado correctamente"];
}

echo json_encode($res);

mysqli_close($conexion);
?>