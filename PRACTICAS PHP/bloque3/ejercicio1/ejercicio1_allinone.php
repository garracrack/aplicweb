<!DOCTYPE html>
<html>
  <head>
    <title>Bebidas</title>
	<meta charset="utf-8">
  </head>
  <body>
  
	<?php
		if(isset($_REQUEST["enviar"])){
			$bebida=$_REQUEST["opcion"];
			$cantidad=$_REQUEST["cantidad"];
			$total=0;
			if($cantidad!="" && is_numeric($cantidad)){
				switch($bebida){
					case "cocacola": $total=1*$cantidad;
									 break;
					case "pepsi": $total=0.8*$cantidad;
									 break;			
					case "fanta": $total=0.9*$cantidad;
									 break;			
					case "trina": $total=1.2*$cantidad;
									 break;
				}
				echo "<p>Has pedido $cantidad botellas de $bebida que hacen un total de $total €";
			}
			else
				echo "<p style='color:red;'>Error la cantidad no puede estar vacía</p>";
		}
		else
		{
	?>	
	<h1>ELIGE TU BEBIDA</h1>
	<form name="f1" action="<?=$_SERVER['PHP_SELF']?>" method="get">
		<label>Bebida:
		<select name="opcion">
			<option value="cocacola">Coca Cola</option>
			<option value="pepsi">Pepsi Cola</option>
			<option value="fanta">Fanta Naranja</option>
			<option value="trina">Trina Manzana</option>
		</select>
		</label><br> 
		<label>Cantidad:<input required type="number" name="cantidad"></label><br> 
		<input type="submit" name="enviar" value="SOLICITAR">
	</form>
	<?php
		}
	?>
  </body>
 </html>