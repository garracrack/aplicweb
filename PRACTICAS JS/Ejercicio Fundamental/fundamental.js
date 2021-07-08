	function hacerTabla(tabla,filas){
		document.write("<table>");
		for(let i=1;i<=filas;i++){
			document.write("<tr>");
			document.write("<td>"+tabla+"x"+i+"</td><td>=</td><td>"+(tabla*i)+"</td>");
			document.write("</tr>");
		}
			
		document.write("</table>");	
	}
	
	function hacerLista(tabla,filas){
		let ul=document.createElement("ul");
		let li;
		let contenidoLi;
		ul.id="idLista";
		for(let i=1;i<=filas;i++){
			li=document.createElement("li");
			contenidoLi=document.createTextNode(tabla+"x"+i+"="+(tabla*i));
			li.appendChild(contenidoLi);
			ul.appendChild(li);
			if(i%2==1)
				li.style.backgroundColor="red";
			else
				li.style.backgroundColor="blue";
		}
		document.body.appendChild(ul);
		/*document.write("<ul>");
		for(let i=1;i<=filas;i++)
			document.write("<li>"+tabla+"x"+i+"="+(tabla*i)+"</li>");
		document.write("</ul>");*/	
	}
	
	function pedirAusuario(cadena, tipo){
		let num;
		if(tipo==1)
			do{
				num=+prompt(cadena);
				if(isNaN(num) || num<=0 || num>10)
					alert("No cumples las condiciones");
			}while(isNaN(num) || num<=0 || num>10);	
		else
			do{
				num=prompt(cadena).toUpperCase();
			}while(num!="TABLA" && num!="LISTA");
		
		return num;
	}
	//location.href="https://iessanvicente.com/";

	let num1;
	let num2;
	let operacion;
	

	num1=pedirAusuario("Dame un número del 1 al 10",1);
	num2=pedirAusuario("Dame otro número del 1 al 10",1);
	operacion=pedirAusuario("Dime una operación (TABLA o LISTA)",2);

	
	let tablaMult; //PEQUEÑO
	let cantidadMult; //GRANDE
	
	if(num1>num2){
		tablaMult=num2;
		cantidadMult=num1;
	}
	else{
		tablaMult=num1;
		cantidadMult=num2;		
	}
	
	if(operacion=="TABLA")
		hacerTabla(tablaMult,cantidadMult);
	else
		hacerLista(tablaMult,cantidadMult);
	
	
	