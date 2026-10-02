<?php
$conexion = mysqli_connect("localhost","root","","buscador") OR DIE("problema de conexion");
$datos = json_decode(file_get_contents("php://input"), true);
?>