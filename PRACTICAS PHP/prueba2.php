<!DOCTYPE html>
<html>
<head>
	<title>Prueba PHP</title>
</head>
<body>
	<h1>PRIMERA PRUEBA <?="PHP(generado)"?></h1>
	<?php
		function suma ($x, $y=0)
		{
			$s = $x + $y;
			return $s;
		}
		$a=1;
		$b=2;
		$c=suma($a);
		print $c;
		
		$arrayValores=array("pos1"=>5,"pos2"=>8,"pos3"=>3);
		echo "<ul>\n";
		foreach($arrayValores as $val)
			echo "<li>".$val."</li>\n";
		echo "</ul>\n";
		echo "<ol>\n";
		foreach($arrayValores as $pos=>$val)
			echo "<li>$pos $val</li>\n";
		echo "</ol>\n";		
		
		
		
		
	?>
</body>
</html>

