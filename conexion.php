<?php
// Datos de conexion a la base de datos
$servidor='jw0ch9vofhcajqg7.cbetxkdyhwsb.us-east-1.rds.amazonaws.com';
$usuario='h8cjb86ehdfndlf0';
$pass='dqvysgpx037gym5w';
$bd='ceokb2uwqrp7o8et';

// Nos conectamos a la base de datos
$conexion = new mysqli($servidor, $usuario, $pass, $bd);	

// Definimos que nuestros datos vengan en utf8
$conexion->set_charset('utf8');

// verificamos si hubo algun error y lo mostramos
if ($conexion->connect_errno) {
	echo "Error al conectar la base de datos {$conexion->connect_errno}";
}

?>
