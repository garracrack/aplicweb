<!DOCTYPE html>
<html>
  <head>
    <title>Proyecto</title>
	<meta charset="utf-8">
	<style>
		label{
			display:block;
			padding:5px;
		}
	</style>
  </head>
  <body>
	<h1>INSERTAR UN JUGADOR</h1>
	<?php
		include "conectar.php";
		
		$idConexion=conectar();
	
		$ficha=$_REQUEST['ficha'];
		$sql="select num_ficha, nombre from jugadores where num_ficha=$ficha";
		echo $sql;
		$resultado=mysqli_query($idConexion,$sql);
		
		if(mysqli_num_rows($resultado)==1)
		{
		
			$arr=mysqli_fetch_array($resultado);
	?>
	
			<form name="for6" action="insertar.php" method="get">
				<fieldset>
					<legend>Acceso Página</legend>
					<label>Número de ficha:<input name="ficha" type="number" readonly required value="<?php echo $arr['num_ficha'];?>"></label>
					<label>Nombre del Jugador:<input name="jugador" type="text" required value="<?=$arr['nombre'];?>"></label>
					<input type="submit" value="MODIFICAR" name="acceder">
				</fieldset>
			</form>
	<?php
		}
		else
		{
		?>
			<script>alert('El número de ficha indicado no existe'); location.href='modificar.html';</script>
		<?php 
		}
	
	?>
  </body>
</html>