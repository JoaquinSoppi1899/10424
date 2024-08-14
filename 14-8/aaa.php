<?php
session_start();

var_dump($_SESSION);
//var_dump($_SERVER['HTTP_USER:AGENT']);

$usuario = [
    "nombre" => "Juan",
    "pais" => "Uganda",
    "contraseña" => "contraseña1234",

];

$_SESSION['user'] = $usuario;
var_dump($_SESSION);

?>