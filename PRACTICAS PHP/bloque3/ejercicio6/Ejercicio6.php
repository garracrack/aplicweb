<html>
	<head>
		<title>Ejercicio 9</title>
		<script>
		function sumar(elementos)
		{
			let total=0;
			for (let i=0;i<elementos;i++)
				if(formCompra["precio"+i].value==""){
					alert("Error debe insertar todos los precios");
					return false;
				}
			for (let i=0;i<elementos;i++)
				total=total+parseInt(formCompra["precio"+i].value);
			formCompra.total.value=total;
		}
		</script>
	</head>
	<body>
		<h1>EJERCICIO 6. CAJA COMPRA</h1>
		<form name="formCompra" action="Ejercicio6_2.php" method="post">
			<?php
			$elementos=$_REQUEST['cantidad'];
			for ($i=0;$i<$elementos;$i++)
			{
				if ($i!=$elementos-1)
				{
					echo "Artículo$i"?>:<input type="text" name="articulo<?=$i?>">
			   <?php echo "Precio$i"?>:<input "text" name="precio<?=$i?>"><br>
				<?php
				}
				else
				{
					?>Artículo<?php echo $i?>:<input "text" name="articulo<?php echo $i?>"> Precio<?php echo $i?>:<input "text" name="precio<?php echo $i?>" onblur="sumar(<?php echo $elementos?>);"><br>
				<?php
				}
			}
			?>
			Total:<input name="total" type="text"/>
			<input type="hidden" name="cantidad" value="<?=$elementos?>">
			<input type="submit" name="enviar" value="ENVIAR">
		</form>
	</body>
</html>