<!DOCTYPE html>
<html lang="es">
<head>
	<title>Practica 4</title>
	<meta name="description" content="Formulario Practica 4" />
	<meta name="keywords" content="HTML5,Practica_4" />
	<meta name="author" content="Oliver Castellanos" />
	<meta charset="UTF-8" />
</head>
<body>
	<h1>Formulario</h1>
	<p>
	En seguida se le presentará un formulario que deberá llenar para poder continuar con el registro.
	</p>
	<form name="myform" method="post" action="mail2.php">
		<label for="nombre">Nombre:</label>
		<input type="text" id="nombre" name="nombre" required="required" placeholder="Ingrese su nombre" /><br />
		<label for="mail">Correo:</label>
		<input type="email" id="mail" name="mail" required="required" placeholder="Ingrese su correo" /><br />
		<label for="phone">Telefono:</label>
		<input type="tel" id="phone" name="phone" required="required" placeholder="Ingrese su telefono" /><br />
		<p>Estado:</p>
		<select name="estado">
			<option value="Aguascalientes">Aguascalientes</option>
			<option value="Baja California">Baja California</option>
			<option value="Baja California Sur">Baja California Sur</option>
			<option value="Campeche">Campeche</option>
			<option value="Chiapas">Chiapas</option>
			<option value="Chihuahua">Chihuahua</option>
			<option value="Colima">Colima</option>
			<option value="DF">Distrito Federal</option>
			<option value="Durando">Durango</option>
			<option value="Guanajuato">Guanajuato</option>
			<option value="Guerrero">Guerrero</option>
			<option value="Hidalgo">Hidalgo</option>
			<option value="Jalisco">Jalisco</option>
			<option value="Mexico">Mexico</option>
			<option value="Michiacan">Michoacan</option>
			<option value="Michoacan">Michoacan</option>
			<option value="Morelos">Morelos</option>
			<option value="Nayarit">Nayarit</option>
			<option value="Nuevo Leon">Nuevo Leon</option>
			<option value="Oaxaca">Oaxaca</option>
			<option value="Puebla">Puebla</option>
			<option value="Queretaro">Queretaro</option>
			<option value="Quintana Roo">Quintana Roo</option>
			<option value="San Luis Potosi">San Luis Potosi</option>
			<option value="Sinaloa">Sinaloa</option>
			<option value="Sonora">Sonora</option>
			<option value="Tabasco">Tabasco</option>
			<option value="Tamaulipas">Tamaulipas</option>
			<option value="Tlaxcala">Tlaxcala</option>
			<option value="Verazcruz">Veracruz</option>
			<option value="Yucatan">Yucatan</option>
			<option value="Zacatecas">Zacatecas</option>
		</select>
		<br />
		<label for="colonia">Colonia:</label>
		<br />
		<input type="text" id="colonia" name="colonia" placeholder="Ingrese su colonia" /><br />
		<label for="textarea">Comentarios:</label>
		<br />
		<textarea id="textarea" name="comentarios" rows="5" cols="40"> </textarea>
		<br />
		<fieldset>
			<legend>Intereses:</legend>
			<input type="checkbox" name="peliculas[]" value="Accion" />Accion<br />
			<input type="checkbox" name="peliculas[]" value="Drama" />Drama<br />
			<input type="checkbox" name="peliculas[]" value="Comedia" />Comedia<br />
			<input type="checkbox" name="peliculas[]" value="Ciencia-Ficcion" />Ciencia Ficcion<br />
			<input type="checkbox" name="peliculas[]" value="Romance" />Romance<br />
			<input type="checkbox" name="peliculas[]" value="Documental" />Documental<br />
			<input type="checkbox" name="peliculas[]" value="Terror" />Terror<br />
		</fieldset>
		<button type="submit">Enviar</button>	
	</form>
	<br />


<a href="mailto:omewin@gmail.com">
Si usted tiene alguna duda, haga click aqui para contactarnos
</a>		
</body>
</html>
