	'use strict';
	function hacerParrafo(num){
		let parrafo=prompt("Dame el parrafo"+num);
		document.write("<p>"+parrafo+"</p>");
	}
	
	document.write("<h1>TITULO</h1>");
	/*let numParrafos=+prompt("Dime cuantos párrafos quieres?");
	if(isNaN(numParrafos))
		alert("Error, el campo solicitado debía ser número");
	else
		for(let i=1;i<=numParrafos;i++)
			hacerParrafo(i);
	*/
	
	
	let numParrafos;
	do{
		numParrafos=+prompt("Dime cuantos párrafos quieres?");
		if(isNaN(numParrafos))
			alert("Debes poner un número");
	}while(isNaN(numParrafos));
	
	for(let i=1;i<=numParrafos;i++)
			hacerParrafo(i);
	
	let a=new Array(2,3,4,5,6,7);
	//let b=a;
	let b=new Array();
	for(let i in a)
		b[i]=a[i];
	
	b[0]=50;
	console.log(a[0]);
	
	
	