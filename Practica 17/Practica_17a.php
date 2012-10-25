<!DOCTYPE html>
<html lang="es">
<head>
	<title>Practica 5</title>
	<meta name="description" content="Formulario Practica 5" />
	<meta name="keywords" content="HTML5,Practica_5" />
	<meta name="author" content="Oliver Castellanos" />
	<meta charset="UTF-8" />
	<script type="text/javascript" src="validar.js" ></script>
	<link rel="stylesheet" type="text/css" href="style.css"></link>
</head>
<body>
	<h1>Formulario</h1>
	<p>
	En seguida se le presentará un formulario para crear su usuario.
	</p>
	<fieldset>
	<form name="myform" method="post" action="mail.php">
		<label for="nickname">Nickname</label>
		<input type="text" id="nickname" name="nickname" required="required" placeholder="Ingrese su nombre" /><br />
		
		<div id="error_nick" class="error">
		<p>Por inserte un nickname valido menor a 31 caracteres.</p>
		</div>
		
		<label for="mail">Correo</label>
		<input type="email" id="mail" name="mail" required="required" placeholder="Ingrese su correo" /><br />
		
		<div id="error_mail" class="error">
		<p>Por inserte un email valido.</p>
		</div>
		
		<label for="password">Contraseña</label>
		<input type="password" id="password" name="password" required="required" placeholder="Ingrese su contraseña" /><br />
		
		<div id="error_pass" class="error">
		<p>Por favor inserte su password en el formato correcto</p>
		</div>
		
		<div id="error_pass2" class="error">
		<p>Por favor inserta tu password de nuevo.</p>
		</div>
		
		<label for="password2">Confirme contraseña</label>
		<input type="password" id="password2" name="password2" required="required" placeholder="Ingrese su contraseña" /><br />
		<input type="hidden" id="pass_md5" name="pass_md5" value="pass_md5" /><br />
		<input type="button" value="Enviar" onclick="checkform()" / >
		<button type="reset">Limpiar</button>
	</form>
	</fieldset>
	<br />


<a href="mailto:omewin@gmail.com">
Si usted tiene alguna duda, haga click aqui para contactarnos
</a>		
</body>
</html>