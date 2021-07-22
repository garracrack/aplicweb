<?php
	
	function conectar(){
		if(!@$con=mysqli_connect("localhost","root","","proyecto"))
			die("Ha habido algún fallo ".mysqli_connect_error()); 
		echo "Conectado a la BD correctamente";
		
		return $con;
	}
?>