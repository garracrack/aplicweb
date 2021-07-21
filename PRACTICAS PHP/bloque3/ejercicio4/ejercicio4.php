<!DOCTYPE html>
<html>
  <head>
    <title>Resultado Vivienda</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="estilos.css">
  </head>
  <body>
 	<h1>Inserción de Vivienda</h1>
	
	<?php
		$tipo=$_REQUEST["tipo"];
		$zona=$_REQUEST["zona"];
		$dire=$_REQUEST["direccion"];
		if(isset($_REQUEST["dormitorios"]))
			$dormitorios=$_REQUEST["dormitorios"];
		else
			$dormitorios="";
		$precio=$_REQUEST["precio"];
		$tam=$_REQUEST["tamanyo"];
		if(isset($_REQUEST["extra"]))
			$extras=$_REQUEST["extra"];
		else
			$extras=array("Sin extras");
		
		$observ=$_REQUEST["observaciones"];
		
		$error=false;
		$errores="";
		if($dire==""){
			$error=true;
			$errores.="<li>La dirección no puede ser vacía</li>\n";
		}
		if($dormitorios==""){
			$error=true;
			$errores.="<li>Debe marcar los dormitorios</li>\n";
		}
		if($precio=="" || !is_numeric($precio)){
			$error=true;
			$errores.="<li>El precio debe ser numérico</li>\n";
		}
		if($tam=="" || !is_numeric($tam)){
			$error=true;
			$errores.="<li>El tamaño debe ser numérico</li>\n";
		}
		if($error)
		{
			echo "<p>No se ha podido realizar la inserción debido a los siguientes errores:</p>"; 
			echo "<ul>";
			echo $errores;
			echo "</ul>";
			echo "<p>[<a href='ejercicio4.html'>Volver</a>]</p>";
		}
		else{
			echo "<p>Estos son los datos introducidos:</p>"; 
			echo "<ul>";
			echo "<li>Tipo:$tipo</li>";
			echo "<li>Zona:$zona</li>";
			echo "<li>Dirección:$dire</li>";
			echo "<li>Número de dormitorios:$dormitorios</li>";
			echo "<li>Precio:$precio</li>";
			echo "<li>Tamaño:$tam</li>";
			echo "<li>Extras:";
			foreach($extras as $elemento)
				echo $elemento." ";
			echo "</li>";
			echo "<li>Observaciones:$observ</li>";
			echo "</ul>";	
			echo "<p>[<a href='ejercicio4.html'>Introducir otra vivienda</a>]</p>";
		}
	?>
	
	
  </body>
 </html>