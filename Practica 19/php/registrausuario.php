<?php

	//Nos conectamos a la base de datos y obtenemos el usuario
	require_once("bd.inc");
	$conexion=new mysqli($host,$user,$pass,$bd);

	//Limpiar variables
	$usuario=$_GET['nickname'];
	$encriptada = $_GET['pass_md5'];
	$correo = $_GET['mail'];
	
	//Ejecutamos la Consulta/Insert
	$consulta= "insert into 
					usuario(nick, password, email)
				values (
				'$usuario',
				'$encriptada',
				'$correo',
				)";

	//En caso de ser query se guarda en una variable el resultado
	$conexion -> query($consulta) or 
							die ("Problema con query");
	//Email
	$to = $_GET["mail"];
	$subject = $_GET["nickname"];
	$message = '<!DOCTYPE html>
				<html lang="es">
				<head>
		  		<title>Confirmacion</title>
				</head>
				<body>
		  		<pre>Gracias por registrarte</pre>
		  		</body>
		  		</html>';
				
	$header  = 'MIME-Version: 1.0' . "\r\n";
	$header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	mail($to, $subject, $message, $header);
	
	//Cerramos la base de datos
	$conexion -> close();

	header("Location: ../registro.html?status=1");
?>
