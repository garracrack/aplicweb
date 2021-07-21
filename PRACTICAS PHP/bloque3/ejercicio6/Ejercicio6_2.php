<html>
	<head>
		<title>Ejercicio 6_2</title>
		<style>
			table, th, td{
				border:1px solid black;
			}
		</style>
	</head>
	<body>
		<h1>EJERCICIO 6_2. CAJA COMPRA</h1>
		<?php
			$elementos=$_REQUEST['cantidad'];
			echo "<table>";
			echo "<tr>";
			echo "<th>ARTICULOS</th><th>PRECIOS</th>";
			echo "</tr>";
			for ($i=0;$i<$elementos;$i++)
			{
				$articulo=$_REQUEST['articulo'.$i];
				$precio=$_REQUEST['precio'.$i];
				echo "<tr>";
				echo "<td>$articulo</td><td>$precio</td>";
				echo "</tr>";
			}
			echo "<tr><td colspan='2'>PRECIO TOTAL:".$_REQUEST['total']."</td></tr>";
			echo "</table>";
		?>
		
	</body>
</html>