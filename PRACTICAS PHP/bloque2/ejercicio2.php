<!DOCTYPE html>
<html>
<head>
	<title>Bloque II PHP</title>
</head>
<body>
	<?php
		function ListaDes($items){
			echo "<ul>";
			for($i=1;$i<=$items;$i++)
				echo "<li>Elemento $i</li>";
			echo "</ul>";	
		}
		function ListaOrd($items){
			echo "<ol>";
			$i=1;
			while($i<=$items){
				echo "<li>Elemento $i</li>";
				$i++;
			}
			echo "</ol>";	
		}	
		function ListaTabla($items){
			echo "<table style='border:1px solid black'>";
			for($i=1;$i<=$items;$i++)
				echo "<tr><td style='border:1px solid black'>Elemento $i</td></tr>";
			echo "</table>";	
		}	
		function ListaDespl($items){
			echo "<select>";
			for($i=1;$i<=$items;$i++)
				echo "<option>Elemento $i</option>";
			echo "</select>";	
		}
		
		$numero=8;
		$eleccion=4;
		
		switch($eleccion){
			case 1: ListaDes($numero);
					break;
			case 2: ListaOrd($numero);
					break;			
			case 3: ListaTabla($numero);
					break;			
			case 4: ListaDespl($numero);
					break;			
			default: echo "Opción NO válida";			
		}
		
		//EJERCICIO ARRAYS
		
		//FORMA 1
		$array1=array("Argentina","Uruguay","Brasil","Chile"); 
		
		//FORMA 2
		$array2=array();
		$array2[0]="Argentina";$array2[1]="Uruguay";
		$array2[2]="Brasil";$array2[3]="Chile";
		
		//FORMA 3
		$array2=array();
		$array2[]="Argentina";$array2[]="Uruguay";
		$array2[]="Brasil";$array2[]="Chile";
		
		for($i=0;$i<count($array2);$i++)
			echo $array2[$i]." ";
		
		
		
		
		
		
		
	?>
</body>
</html>