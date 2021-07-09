	
	
	function validarNickPassword(){
		let f=document.forLogin;
		
		if(f.login.value==f.password.value){
			alert("La contraseña no puede ser igual al login");
			return false;
		}
		return true;
		
	}
	
	function validarNick(){
		let f=document.forLogin;
		if(f.login.value.length>10){
			alert("El login no puede tener más de 10 caracteres");
			return false;
		}	
		for(let i=0;i<f.login.value.length;i++)
			if((f.login.value.toLowerCase().charAt(i)<'a' 
		        || f.login.value.toLowerCase().charAt(i)>'z'))
			{
				alert("El login solo puede tener letras y números");
				return false;
			}
		return true;
	}		

	function validarPassword(){
		let f=document.forLogin;
		let tieneLetra=false;
		let tieneNumero=false;
		
		for(let i=0;i<f.password.value.length;i++){
			if((f.password.value.toLowerCase().charAt(i)>='a' 
		        || f.password.value.toLowerCase().charAt(i)<='z')
		       )
			   tieneLetra=true;
			if(!isNaN(f.password.value.charAt(i)))
			   tieneNumero=true;
		}
		
		if(tieneLetra && tieneNumero)
			return true;
		else{
			//alert("El password debe tener al menos 1 letra y 1 número");
			let div=document.getElementById("errores");
			
			let p=
			let contenido="El password debe tener al menos 1 letra y 1 número";
			
			
			
			
			
			return false;
			
		}
	}
	
	function validarLogin(){
		
		let div=document.getElementById("errores");
		
		
		
		if(!validarNickPassword())
			return false;
		if(!validarNick())
			return false;
		if(!validarPassword())
			return false;
	}
	
	function validarPassRepe(){
		let f=document.forLogin;
		
		if(f.password.value!=f.repePassword.value){
			
			return false;
		}
		
		return true;
		
	}
	
	function validarRegistro(){
		if(!validarNickPassword())
			return false;
		if(!validarNick())
			return false;
		if(!validarPassword())
			return false;
		
		if(!validarPassRepe())
			return false
	}