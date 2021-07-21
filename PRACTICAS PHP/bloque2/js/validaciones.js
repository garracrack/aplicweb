	function anyadirError(mensaje){
		let div=document.getElementById("errores");
		div.style.border="1px solid black";

		let p=document.createElement("p");
		let contenido=document.createTextNode(mensaje);
		p.appendChild(contenido);
		div.appendChild(p);
		p.style.color="red";
	}
	
	function eliminarErrores(){
		let div=document.getElementById("errores");
		let hijos=div.children;
		
		if(hijos.length!=0)
			while(hijos.length!=0) //hijos!=null
				div.removeChild(hijos[0]);
	}
	
	function validarNickPassword(f){
		
		if(f.login.value==f.password.value){
			//alert("La contraseña no puede ser igual al login");
			anyadirError("La contraseña no puede ser igual al login");
			return false;
		}
		return true;
		
	}
	
	function validarNick(f){
		let ok=true;
		
		if(f.login.value.length>10){
			//alert("El login no puede tener más de 10 caracteres");
			anyadirError("El login no puede tener más de 10 caracteres");
			ok=false;
		}	
		for(let i=0;i<f.login.value.length;i++)
			if((f.login.value.toLowerCase().charAt(i)<'a' 
		        || f.login.value.toLowerCase().charAt(i)>'z') &&
				(f.login.value.toLowerCase().charAt(i)<'0' 
		        || f.login.value.toLowerCase().charAt(i)>'9'))
			{
				//alert("El login solo puede tener letras y números");
				anyadirError("El login solo puede tener letras y números");
				ok=false;
				break;
			}
		return ok;
	}		

	function validarPassword(f){
		let tieneLetra=false;
		let tieneNumero=false;
		
		for(let i=0;i<f.password.value.length;i++){
			if((f.password.value.toLowerCase().charAt(i)>='a' 
		        && f.password.value.toLowerCase().charAt(i)<='z')
		       )
			   tieneLetra=true;
			if(!isNaN(f.password.value.charAt(i)))
			   tieneNumero=true;
		}
		
		if(tieneLetra && tieneNumero)
			return true;
		else{
			//alert("El password debe tener al menos 1 letra y 1 número");
			anyadirError("El password debe tener al menos 1 letra y 1 número");
			return false;
		}
	}
	
	function validarLogin(){
		let fo=document.forLogin;
		let div=document.getElementById("errores");
		let ok=true;
		
		eliminarErrores();
		if(!validarNickPassword(fo))
			ok=false;
		if(!validarNick(fo))
			ok=false;
		if(!validarPassword(fo))
			ok=false;
		
		return ok;
	}
	
	function validarPassRepe(f){
		
		if(f.password.value!=f.repePassword.value){
			anyadirError("La contraseña debe coincidir con repetir contraseña");
			return false;
		}
		
		return true;
		
	}
	
	function validarRegistro(){
		let fo=document.forRegistro;
		let ok=true;
		
		eliminarErrores();
		if(!validarNickPassword(fo))
			ok=false;
		if(!validarNick(fo))
			ok=false;
		if(!validarPassword(fo))
			ok=false;
		
		if(!validarPassRepe(fo))
			ok=false;
		
		return ok;
	}