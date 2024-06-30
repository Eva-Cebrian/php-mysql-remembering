<?php
$CONFIG = [
    'host' => 'localhost',
    'usuario' => 'root',
    'clave' => '',
    'socket' => '/Applications/XAMPP/xamppfiles/var/mysql/mysql.sock'
];

function conectarDB($host, $usuario, $clave, $socket)
{
    $con = mysqli_connect($host, $usuario, $clave, null, 3306, $socket);
    if (!$con) {
        die("Error de conexión: " . mysqli_connect_error());
    }
    return $con;
}
