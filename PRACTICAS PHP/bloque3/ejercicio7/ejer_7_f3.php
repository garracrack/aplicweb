<!DOCTYPE html>
<html lang="es">
<head>
<title> Ejercicios 7 </title>
<meta charset="UTF-8">
<script>

// Función del Formulario 3

window.onload = function(){
	let desplPais=document.getElementById("pais");
	desplPais.addEventListener("change", cambiar);
	
}

function cambiar() 
{
   document.getElementById("continente").value=formu3.pais.value;
}
</script>
</head>
<body>
<?php 

   $veces = $_REQUEST["cantidad"];
   echo "<h1>Generador de Formularios (Formulario 3)</h1>\n";
   echo "<form name='formu3'>";
   echo "País <select id='pais'>\n";
      for($v=0;$v<$veces;$v++)
      {
         echo "<option value='".$_REQUEST['continente'.$v ]."'>".$_REQUEST["pais".$v]."</option>\n";
      }  
   echo "</select>\n
      Continente:<input type='text' name='continente' id='continente' value='".$_REQUEST["continente0"]."' />\n
      <br><br><br><br><p><a href='ejer_7.html'>Volver a empezar</a></p></form>\n
   ";

