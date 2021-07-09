'use strict';

function sumar(x,y=5){
	let resultado=x+y;
	console.log(resultado);
	return resultado;
}



sumar();
sumar(2,3);
sumar(5);

let res=sumar(10,2);
alert(sumar(8,2,4,5,6,4,2,"JAJAJAJAJAJAJAJAAJ"));


console.log("HOLA ESTOY EN OTRO FICHERO");
alert("Hola soy javaScript");
let x=prompt("Dame tu nombre","sin nombre");
alert(x);

let nombre;
let NOMBRE;

let fechaNacimiento;

console.log(typeof nombre); 
nombre="Pablo";
console.log(typeof nombre); 
nombre=5;
console.log(typeof nombre); 
nombre=true;
console.log(typeof nombre); 


if(confirm("Estas seguro de hacer esto????")){
	var variable;
	variable=4;
	document.write("<h2>TITULO GENERADO POR JAVASCRIPT</h2>");
}
else
	document.write("<a href='http://www.google.es'>Acción cancelada, vamos a google?</a>");

console.log(variable);