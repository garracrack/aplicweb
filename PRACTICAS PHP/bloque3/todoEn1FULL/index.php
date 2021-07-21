<!DOCTYPE html>
<html>
  <head>
    <title>Ejemplo Todo en 1</title>
	<meta charset="utf-8">
	<style>
		p{
			color:red;
		}
	</style>
  </head>
  <body>
	<h1>Ejemplo Todo en 1</h1>
	<?php

		
		if(isset($_REQUEST['enviar'])){
			$nombre=$_REQUEST['nombre'];
			$edad=$_REQUEST['edad'];
			$errorNombre="";
			$errorEdad="";
			$error=false;
			
			if($nombre==""){
				$error=true;
				$errorNombre="<p>El nombre no puede estar vacío</p>";
			}
			if($edad=="" || !is_numeric($edad)){
				$error=true;
				$errorEdad="<p>La edad debe ser numérica</p>";
			}			
		}
		
		if(isset($_REQUEST['enviar']) && !$error){
			echo "<ul>";
			echo "<li>Nombre:$nombre</li>";
			echo "<li>Edad:$edad</li>";
			echo "</ul>";
		}
		else{
	?>
			<form name="f1" action="<?=$_SERVER['PHP_SELF']?>" method="get">
				<label>Nombre:<input type="text" name="nombre"
							  <?php
							  if(isset($_REQUEST['enviar'])){
								 if($errorNombre=="")
									echo "></label>";
								 else
									 echo "></label>$errorNombre";
							  }
							  else
								  echo "></label>"
							  ?>
				<br> 
				<label>Edad:<input type="text" name="edad"
							  <?php
							  if(isset($_REQUEST['enviar'])){
								 if($errorEdad=="")
									echo "value='$edad'></label>";
								 else
									 echo "></label>$errorEdad";
							  }
							  else
								  echo "></label>"
							  ?>				
				<br>
				<input type="submit" name="enviar" value="SOLICITAR">
			</form>
	<?php }
		?>
  </body>
 </html>