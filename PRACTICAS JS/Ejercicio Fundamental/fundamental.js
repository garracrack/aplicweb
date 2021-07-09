	window.onload=function(){
		
		let h1=document.getElementsByTagName("h1")[0];
		//h1.onclick=saludar;
		h1.onclick=function(){
			saludar("PABLO");
		}
		
		//h1.addEventListener("click",saludar);
		h1.addEventListener("click",function(){
										saludar("PABLO");
									});
		
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
		
		
	}

	function saludar(m){
		alert('Bien!, '+m+', has pulsado el título');
	}

	function reconstruirEstructura(elemento,tabla,filas){
		elemento.parentElement.removeChild(elemento);

		if(elemento.nodeName=="UL")
			hacerTabla(tabla,filas);
		else
			hacerLista(tabla,filas);
	}

	function hacerTabla(tabla,filas){
		let table;
		let tr;
		let td1;let td2; let td3;
		let cont1; let cont2; let cont3;
		
		table=document.createElement("table");
		table.setAttribute("id","idTabla");
		table.style.border="1px solid black";
		table.style.borderCollapse="collapse";
		table.addEventListener("dblclick",function(){
							reconstruirEstructura(this,tabla,filas);
						  });


		for(let i=1;i<=filas;i++){
			tr=document.createElement("tr");
			
			td1=document.createElement("td");
			cont1=document.createTextNode(tabla+"x"+i);
			td1.appendChild(cont1);
			tr.appendChild(td1);
			td1.style.border="1px solid black";

			td2=document.createElement("td");
			cont2=document.createTextNode("=");
			td2.appendChild(cont2);
			tr.appendChild(td2);
			td2.style.border="1px solid black";
			
			td3=document.createElement("td");
			cont3=document.createTextNode(tabla*i);
			td3.appendChild(cont3);		
			tr.appendChild(td3);
			td3.style.border="1px solid black";			

			table.appendChild(tr);
		}
		document.body.appendChild(table);
		
		/*document.write("<table>");
		for(let i=1;i<=filas;i++){
			document.write("<tr>");
			document.write("<td>"+tabla+"x"+i+"</td><td>=</td><td>"+(tabla*i)+"</td>");
			document.write("</tr>");
		}
			
		document.write("</table>");*/
	}
	
	function hacerLista(tabla,filas){
		let ul=document.createElement("ul");
		let li;
		let contenidoLi;
		ul.id="idLista";
		ul.ondblclick=function(){
						reconstruirEstructura(this,tabla,filas);
						}
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


	
	
	