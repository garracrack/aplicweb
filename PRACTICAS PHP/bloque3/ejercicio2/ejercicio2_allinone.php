<!DOCTYPE html>
<html>
  <head>
    <title>Bebidas</title>
	<meta charset="utf-8">
  </head>
  <body>
	<h1>Conversor de Monedas</h1>
	<?php
		if(isset($_REQUEST['enviar'])){
			$moneda=$_REQUEST["moneda"];
			$cantidad=$_REQUEST["cantidad"];
			$total=0;
			if($cantidad!="" && is_numeric($cantidad)){
				switch($moneda){
					case "pesetas": $total=166.386*$cantidad;
									 break;
					case "dolares": $total=1.325*$cantidad;
									 break;			
					case "libras": $total=0.927*$cantidad;
									 break;			
					case "yenes": $total=118.232*$cantidad;
									 break;
					case "francos": $total=1.515*$cantidad;
									 break;
				}
				echo "<p>$cantidad € equivales a $total $moneda";
			}
			else
				echo "<p style='color:red;'>Error la cantidad no puede estar vacía y debe ser numérica</p>";
		?>
		<p>[<a href="<?=$_SERVER['PHP_SELF']?>">Volver</a>]</p>
	<?php }
	else {?>

	<form name="f1" action="<?=$_SERVER['PHP_SELF']?>" method="get">
		<label>Cantidad Euros:<input type="text" name="cantidad"></label>
		<label>Convertir a:
		<select name="moneda">
			<option value="pesetas">Pesetas</option>
			<option value="dolares">Dólares USA</option>
			<option value="libras">Libras esterlinas</option>
			<option value="yenes">Yenes Japoneses </option>
			<option value="francos">Francos Suizos </option>
		</select>
		</label><br> 
		<input type="submit" name="enviar" value="SOLICITAR">
	</form>
	<?php } ?>	
  </body>
 </html>