<!DOCTYPE html>
<html>
  <head>
    <title>Proyecto</title>
	<meta charset="utf-8">
  </head>
  <body>
	<h1>INSERTAR UN JUGADOR</h1>
	<?php
		
		include "conectar.php";
		
		$idConexion=conectar();
		
		$ficha=$_REQUEST['ficha'];
		$nombre=$_REQUEST['jugador'];
		
		$sql="insert into jugadores (num_ficha, nombre) values ($ficha,'$nombre')";

		if(mysqli_query($idConexion,$sql)){
			echo "<br>Se han insertado al jugador $nombre correctamente";
			mysqli_commit($idConexion);
		}
		else
			echo "<br>Hay un error al insertar ".mysqli_error($idConexion);
		
		echo "<p><a href='insertar.html'>Volver</a></p>";
		mysqli_close($idConexion);
	?>
	
	</body>
</html>