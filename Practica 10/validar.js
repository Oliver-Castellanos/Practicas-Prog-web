
function checkform ( form )
{
	var ck_email = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
	var ck_telefono = /^[0-9]/;
//Validar nickname
	if (form.nickname.value == "") 
	{
    	alert( "Por favor inserta tu nickname" );
    	form.nickname.focus();
    	return false ;
  	}
  	if (form.nickname.value.length > 8)
  	{
  		alert( "Por favor inserta tu nickname con menos de 9 caracteres" );
    	form.nickname.focus();
    	return false ;
  	}
//Validar email
	if (form.email.value == "") {
    	alert( "Por favor inserta tu email" );
    	form.email.focus();
    	return false ;
   	}
   	if (!ck_email.test(form.email.value)) {
  		alert( "Por favor inserta un email valido" );
   		form.email.focus();
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
    if(form.password1.value != form.password2.value)
  	{
    	alert( "Los password no coinciden" );
    	form.password.focus();
    	form.password2.focus();
    	return false ;
  	}
//Validar nombre
	if (form.nombre.value == "") 
	{
    	alert( "Por favor inserta tu nombre" );
    	form.nombre.focus();
    	return false ;
  	}
  	if (form.nombre.value.length > 30)
  	{
  		alert( "Por favor inserta tu nombre con menos de 31 caracteres" );
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
  	if (form.apellido.value.length > 30)
  	{
  		alert( "Por favor inserta tu apellido con menos de 31 caracteres" );
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
    	alert( "Por favor inserta solo digitos" );
    	form.phone.focus();
    	return false ;
  	}
  	if (form.phone.value.length > 15)
  	{
  		alert( "Por favor inserta tu telefono con menos de 15 digitos" );
    	form.phone.focus();
    	return false ;
  	} 	
  	
    return true ;
}