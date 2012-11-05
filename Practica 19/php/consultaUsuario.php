<?php
	//LOL
	session_start();

	//Nos conectamos a la base de datos y obtenemos el usuario
	require_once("bd.inc");
	$conexion=new mysqli($host,$user,$pass,$bd);

	//Validar que no genere error la conexion
	if($conexion -> connect_error)
		die("Por el momento no se puede acceder");

	//Obtengo variables
	$id_usr=$_REQUEST['id_usuario'];

	//Limpiar variables
	$id_usr=$conexion -> real_escape_string($id_usr);
	
	//Creo consulta
	$mi_query = "select *
				from usuario
				where id_usuario=$id_usr";

	//Ejecuto consulta
	$result = $conexion -> query($mi_query);
	
	//Cerramos la base de datos
	$conexion -> close();

	//Convertir el resultado de consulta en un arreglo
	if($result -> num_rows == 1)
		$datos = $result -> fetch_array(MYSQLI_ASSOC);
	var_dump($datos);
	//LOL2
	$_SESSION["datos"]=$datos;
	
	//var_dump($datos);
	//Me voy a la pagina del form que falta completar
	header("Location: ../usuario_completa.php");
?>
