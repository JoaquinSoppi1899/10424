<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $contraseña = $_POST['contraseña'];

    $usuarioConectado - [
        "nombre" => $nombre, 
        "correo" => $correo, 
        "contraseña" => $contraseña, 
    ];
    session_start();
    $_SESSION["user"] = $usuarioConectado

}