
	function validar(formulario) {
	
    
        
	var usuario = document.getElementById("usr");
	var password = document.getElementById("pass");
        
        
	if (usuario.value!==""){
	}else{
		alert("Ingrese Nombre");
                formulario.usr.focus();
                
	}
	
	if (password.value!==""){
	}else{
		alert("Ingrese Contraseña");
                formulario.pass.focus();
	}
	
	if(password.value!=="") {
			if(usuario.value!=="administrador") {
				alert("Usuario incorrecto. Escribalo de nuevo.");
			}
	
	}
	
	if(password.value!=="123456") {
				alert("Password incorrecto. Escribalo de nuevo.");
			}
			
			
			if(usuario.value==="administrador" && password.value==="123456") {
				alert("Bienvenido administrador.");
				nuevaVentana = window.open("menu.html");
			}
}

function CursorCarga()
 {
  document.forms[0].elements[0].focus();
 } 