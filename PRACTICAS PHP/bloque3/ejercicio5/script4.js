	function buscarDireccion(){
		let formu=document.forVivienda;
		
		if(formu.direccion.value=="")
			alert("Error la dirección no puede estar vacía");
		else
			location.href="ejercicio4todoEn1.php?tipo="+formu.tipo.value+"&zona="+formu.zona.value+"&direccion="+formu.direccion.value+"&origen=buscar&enviar=";
		
	}
	
	window.onload=function(){
		let formu=document.forVivienda;
		formu.buscar.onclick=buscarDireccion;	
	}