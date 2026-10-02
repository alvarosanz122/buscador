<?php
require 'conexion.php';

$email = trim($datos['email'] ?? '');

$emailUsuario = filter_var($email, FILTER_SANITIZE_EMAIL);


$res = ["res" => 'ko',"message"=>'No existe el correo a buscar'];


if(filter_var($emailUsuario, FILTER_VALIDATE_EMAIL)){
    $consulta = mysqli_query($conexion,'SELECT nombre,genero FROM registros WHERE email ="'.$emailUsuario.'" LIMIT 1');
 if($conexion->affected_rows > 0){
    $arr = $consulta->fetch_assoc();
    $res = ["res" => 'ok',"email"=>$emailUsuario,"nombre"=>$arr['nombre'],"genero"=>$arr['genero']];

    }

}
echo json_encode($res);
mysqli_close($conexion);

?>