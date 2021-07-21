<!DOCTYPE html>
<html>
  <head>
    <title>Viviendas</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="estilos.css">
  </head>
  <body>
	<h1>Inserción de Vivienda</h1>
	<?php
		if(isset($_REQUEST['enviar'])){
			$tipo=$_REQUEST["tipo"];
			$zona=$_REQUEST["zona"];
			$dire=$_REQUEST["direccion"];
			$origen=$_REQUEST["origen"];
			
			
			if($origen=="buscar"){
				echo "<p>Elige una calle</p>";
			?>
				<ul>	
					<li>CALLE 1</li>
					<li>CALLE 2</li>
					<li>CALLE 3</li>
					<li>CALLE 4</li>
					<li>CALLE 5</li>
				</ul>
			<?php
			}
			else{
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
				$url=$_SERVER["PHP_SELF"];
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
					echo "<p>[<a href='$url'>Volver</a>]</p>";
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
					echo "<p>[<a href='$url'>Introducir otra vivienda</a>]</p>";
				}	
			}
		}
		else{
	?>
			<script src="script4.js"></script>
			<p>Introduzca los datos de la vivienda:</p>
			<form name="forVivienda" action="<?=$_SERVER['PHP_SELF']?>" method="get">
				<label>Tipo de Vivienda:
					<select name="tipo">
						<option value="Piso">Piso</option>
						<option value="Adosado">Adosado</option>
						<option value="Chalet">Chalet</option>
						<option value="Casa">Casa</option>
					</select>
				</label> 
				<label>Zona:
					<select name="zona">
						<option value="Centro">Centro</option>
						<option value="Nervión">Nervión</option>
						<option value="Triana">Triana</option>
						<option value="Aljarafe">Aljarafe</option>
						<option value="Macarena">Macarena</option>
					</select>
				</label> 		
				<label>Dirección:<input type="text" name="direccion"></label>
				<label>Número de dormitorios:
					<input type="radio" name="dormitorios" value="1">1
					<input type="radio" name="dormitorios" value="2">2
					<input type="radio" name="dormitorios" value="3">3
					<input type="radio" name="dormitorios" value="4">4
					<input type="radio" name="dormitorios" value="5">5
				</label>
				<label>Precio:<input type="text" name="precio">€</label>
				<label>Tamaño:<input type="text" name="tamanyo">metros cuadrados</label>
				<label>Extras(marque los que proceda):
					<input type="checkbox" name="extra[]" value="Piscina">Piscina
					<input type="checkbox" name="extra[]" value="Jardin">Jardín
					<input type="checkbox" name="extra[]" value="Garaje">Garaje
				</label>
				<label>Observaciones:<textarea name="observaciones"></textarea></label>
				<input type="hidden" name="origen" value="insertar">
				<input type="button" name="buscar" value="buscarDireccion">
				<input type="submit" name="enviar" value="Insertar Vivienda">
			</form>
		<?php
		}
		?>
  </body>
 </html>