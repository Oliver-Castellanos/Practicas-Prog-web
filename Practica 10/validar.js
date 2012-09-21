
function checkform ( form )
{
	var ck_email = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
	var ck_pass = /^[A-Za-z0-9!@#$%^&*()_]{6,20}$/;
	var ck_nombre =/^[A-Za-z]{6,30}$/;
//Validar nickname
	if (form.nickname.value == "") 
	{
    	alert( "Por favor inserta tu nickname" );
    	form.nickname.focus();
    	return false ;
  	}
  	if (!ck_nombre.test(form.nickname.value))
  	{
    	alert( "Por inserte un nickname valido menor a 31 caracteres" );
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
  	
    return true ;
}