function checkform ( form )
{
	var ck_telefono = /^[0-9]{10,15}/;
	var ck_cumple = /([0-9]{2})\/([0-9]{2})\/([0-9]{4})/;
	var ck_pass = /^[A-Za-z0-9!@#$%^&*()_]{6,20}$/;
	var ck_nombre =/^[A-Za-z]{6,30}$/;
//Validar nombre
	if (form.nombre.value == "") 
	{
    	alert( "Por favor inserta tu nombre" );
    	form.nombre.focus();
    	return false ;
  	}
  	if (!ck_nombre.test(form.nombre.value))
  	{
    	alert( "Por inserte un nombre valido menor a 31 caracteres" );
    	form.nombre.focus();
    	return false ;
  	}
//Validar apellido
	if (form.apellido.value == "") 
	{
    	alert( "Por favor inserta tu apellido" );
    	form.apellido.focus();
    	return false ;
  	}
  	if (!ck_nombre.test(form.apellido.value))
  	{
    	alert( "Por inserte un apellido valido menor a 31 caracteres" );
    	form.apellido.focus();
    	return false ;
  	}
//Validar direccion
	if (form.direc.value == "") 
	{
    	alert( "Por favor inserta tu direccion" );
    	form.direc.focus();
    	return false ;
  	}
  	if (form.direc.value.length > 30)
  	{
  		alert( "Por favor inserta tu direccion con menos de 31 caracteres" );
    	form.direc.focus();
    	return false ;
  	}
//Validar telefono
	if (form.phone.value == "") 
	{
    	alert( "Por favor inserta tu telefono" );
    	form.phone.focus();
    	return false ;
  	}
  	if (!ck_telefono.test(form.phone.value))
  	{
    	alert( "Por favor inserta solo digitos y no mas de 16" );
    	form.phone.focus();
    	return false ;
  	}
  	return true ;
}
//Validar cumpleaños
	if (form.bday.value == "") 
	{
    	alert( "Por favor inserta tu cumpleaños" );
    	form.bday.focus();
    	return false ;
  	}
  	if (!ck_cumple.test(form.phone.value))
  	{
    	alert( "Por favor inserte su fecha de nacimiento en el formato correcto" );
    	form.bday.focus();
    	return false ;
  	}
//Validar password
	if (form.password.value == "") {
    	alert( "Por favor inserta tu password" );
    	form.password.focus();
    	return false ;
    }
	if (form.password2.value == "") {
    	alert( "Por favor inserta tu password de nuevo" );
    	form.password2.focus();
    	return false ;
    }
    if (!ck_pass.test(form.password.value))
  	{
    	alert( "Por favor inserte su password en el formato correcto" );
    	form.password.focus();
    	return false ;
  	}
  	if (!ck_pass.test(form.password2.value))
  	{
    	alert( "Por favor inserte su password en el formato correcto" );
    	form.password2.focus();
    	return false ;
  	}
    if(form.password.value != form.password2.value)
  	{
    	alert( "Los password no coinciden" );
    	form.password.focus();
    	form.password2.focus();
    	return false ;
  	}
// Validar 
  	return true ;
}