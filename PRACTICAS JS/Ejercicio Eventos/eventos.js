function borrarTitulo(){
	this.parentNode.removeChild(this);	
}

function generarTitulo(){
	let titulo=document.createElement("h1");
	let texto=document.createTextNode("TÍTULO GENERADO");
	titulo.appendChild(texto);
	document.body.appendChild(titulo);
	titulo.onclick=generarTitulo;
	titulo.addEventListener("auxclick",borrarTitulo);
	//titulo.addEventListener("contextmenu",borrarTitulo);
}

window.onload=function(){
	generarTitulo();
}