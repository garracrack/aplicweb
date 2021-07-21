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
			$errorDire="";
			$errorDorm="";
			$errorPrecio="";
			$errorTam="";
			
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
			$url=$_SERVER["PHP_SELF"];
			if($dire==""){
				$error=true;
				$errorDire="<p>La dirección no puede ser vacía</p>\n";
			}
			if($dormitorios==""){
				$error=true;
				$errorDorm="<p>Debe marcar los dormitorios</p>\n";
			}
			if($precio=="" || !is_numeric($precio)){
				$error=true;
				$errorPrecio="<p>El precio debe ser numérico</p>\n";
			}
			if($tam=="" || !is_numeric($tam)){
				$error=true;
				$errorTam="<p>El tamaño debe ser numérico</p>\n";
			}			
			
		}
	
		if(isset($_REQUEST['enviar']) && !$error){
			
			echo "<p class='texto'>Estos son los datos introducidos:</p>"; 
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
		else{
	?>
			<script src="script4.js"></script>
			<p class="texto">Introduzca los datos de la vivienda:</p>
			<form name="forVivienda" action="<?=$_SERVER['PHP_SELF']?>" method="get">
				<label>Tipo de Vivienda:
					<select name="tipo">
						<option value="Piso"
						<?php 
						if(isset($_REQUEST['enviar'])) 
								if($tipo=="Piso")
									echo "selected";
						?>						
						>Piso</option>
						<option value="Adosado"
						<?php 
						if(isset($_REQUEST['enviar'])) 
								if($tipo=="Adosado")
									echo "selected";
						?>						
						>Adosado</option>
						<option value="Chalet"
						<?php 
						if(isset($_REQUEST['enviar'])) 
								if($tipo=="Chalet")
									echo "selected";
						?>						
						>Chalet</option>
						<option value="Casa"
						<?php 
						if(isset($_REQUEST['enviar'])) 
								if($tipo=="Casa")
									echo "selected";
						?>						
						>Casa</option>
					</select>
				</label> 
				<label>Zona:
					<select name="zona">
						<option value="Centro" 
						<?php 
						if(isset($_REQUEST['enviar'])) 
								if($zona=="Centro")
									echo "selected";
						?>
						>Centro</option>
						<option value="Nervión"
						<?php 
						if(isset($_REQUEST['enviar'])) 
								if($zona=="Nervión")
									echo "selected";
						?>						
						>Nervión</option>
						<option value="Triana"
						<?php 
						if(isset($_REQUEST['enviar'])) 
								if($zona=="Triana")
									echo "selected";
						?>
						>Triana</option>
						<option value="Aljarafe"
						<?php 
						if(isset($_REQUEST['enviar'])) 
								if($zona=="Aljarafe")
									echo "selected";
						?>						
						>Aljarafe</option>
						<option value="Macarena"
						<?php 
						if(isset($_REQUEST['enviar'])) 
								if($zona=="Macarena")
									echo "selected";
						?>						
						>Macarena</option>
					</select>
				</label> 		
				<label>Dirección:<input type="text" name="direccion"
							<?php
								if(isset($_REQUEST['enviar'])){
									if($errorDire=="")
										echo "value='$dire'></label>";
									else
										echo "></label>".$errorDire;
								}
								else
									echo "></label>";
							?>
				<label>Número de dormitorios:
					<input type="radio" name="dormitorios" value="1" 
					<?php 
						if(isset($_REQUEST['enviar'])) 
								if($dormitorios==1)
									echo "checked";
					?>
					>1
					<input type="radio" name="dormitorios" value="2"
					<?php 
						if(isset($_REQUEST['enviar'])) 
								if($dormitorios==2)
									echo "checked";
					?>					
					>2
					<input type="radio" name="dormitorios" value="3"
					<?php 
						if(isset($_REQUEST['enviar'])) 
								if($dormitorios==3)
									echo "checked";
					?>					
					>3
					<input type="radio" name="dormitorios" value="4"
					<?php 
						if(isset($_REQUEST['enviar'])) 
								if($dormitorios==4)
									echo "checked";
					?>					
					>4
					<input type="radio" name="dormitorios" value="5"
					<?php 
						if(isset($_REQUEST['enviar'])) 
								if($dormitorios==5)
									echo "checked";
					?>					
					>5
				</label>
				<?php
					if(isset($_REQUEST['enviar']) && $errorDorm!="")
						echo $errorDorm;
				?>
				<label>Precio:<input type="text" name="precio"
							<?php
								if(isset($_REQUEST['enviar'])){
									if($errorPrecio=="")
										echo "value='$precio'>€</label>";
									else
										echo ">€</label>".$errorPrecio;
								}
								else
									echo ">€</label>";
							?>				
				<label>Tamaño:<input type="text" name="tamanyo"
							<?php
								if(isset($_REQUEST['enviar'])){
									if($errorTam=="")
										echo "value='$tam'>metros cuadrados</label>";
									else
										echo ">metros cuadrados</label>".$errorTam;
								}
								else
									echo ">metros cuadrados</label>";
							?>					
				<label>Extras(marque los que proceda):
					<input type="checkbox" name="extra[]" value="Piscina" 
					<?php 
						if(isset($_REQUEST['enviar'])) 
								foreach($extras as $item)
									if($item=="Piscina")
										echo "checked";
					?>								
					>Piscina
					<input type="checkbox" name="extra[]" value="Jardin" 
					<?php 
						if(isset($_REQUEST['enviar'])) 
								foreach($extras as $item)
									if($item=="Jardin")
										echo "checked";
					?>						
					>Jardín
					<input type="checkbox" name="extra[]" value="Garaje" 
					<?php 
						if(isset($_REQUEST['enviar'])) 
								foreach($extras as $item)
									if($item=="Garaje")
										echo "checked";
					?>					
					>Garaje
				</label>
				<label>Observaciones:<textarea name="observaciones"><?php 
						if(isset($_REQUEST['enviar'])) 
							echo $observ;
					?></textarea></label>
				<input type="hidden" name="origen" value="insertar">
				<input type="button" name="buscar" value="buscarDireccion">
				<input type="submit" name="enviar" value="Insertar Vivienda">
			</form>
		<?php
		}
		?>
  </body>
 </html>