<!DOCTYPE html>
<html lang="es">
<head>
<title> Ejercicios 7 </title>
<meta charset="UTF-8">
<script>
// Función del Formulario 2. Validaciones.
function comprobar(cantidad)
{
   nombre = "";
   region = "";
   i=0;
   error_nom = "";
   error_reg = "";
   
   while (i<cantidad)
   {
      nombre = document.getElementById("pais"+i).value;
      region = document.getElementById("continente"+i).value;
      if (nombre.length==0)
      {
        error_nom = error_nom + "En Texto"+i+" se debe indicar el país\n";
      }
      if (region.length==0)
      {
        error_reg = error_reg + "En Texto"+i+" se debe indicar el continente\n";
      }
      i++;
   }
   if (error_reg!=="" || error_nom!=="")
   {
      alert(error_reg+error_nom);
      return false;
   }

}
// Función del Formulario 3
function cambiar(region) 
{
   document.getElementById("region").value=region;
}
</script>
</head>
<body>
<?php 

	$cantidad = $_REQUEST['cantidad'];
	$c = 0;
	echo "<h1>Generador de Formularios (Formulario 2)</h1>";
	echo "<p>Define los controles a mostrar en el Formulario (es necesario rellenar todos los campos)</p>";

	$c = 0;
	echo "<table border=1>\n
	<form name='paises' action='ejer_7_f3.php' method='get' onsubmit='return comprobar($cantidad)'>\n";//comienzo de tabla y formulario
	while($c<$cantidad)
	{
		echo "
		   <tr>
			  <td>Texto$c:</td>
			  <td><input type='text' name='pais".$c."' id='pais".$c."' /></td>\n
			  <td><input type='text' name='continente".$c."' id='continente".$c."'/></td>\n
		   </tr>";
		$c++;
	}
	echo "
	</table><br/>\n
	<input type='hidden' name='cantidad' value='$cantidad' />
	<input type='submit' name='mostrar' value='Enviar' />
	<input type='reset' name='resetear' value='Borrar' />\n
	</form>\n
	";

?>
</body>
</html>