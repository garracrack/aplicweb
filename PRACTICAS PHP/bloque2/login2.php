<!DOCTYPE html>
<html>
  <head>
    <title>Login2</title>
	<meta charset="utf-8">
  </head>
  <body>
  
	<?php
		$usuario=$_REQUEST["login"];
		$pass=$_REQUEST["password"];
	?>
	<p>Bienvenido <?=$usuario?> tu contraseña <?=$pass?> es correcta</p>
	<p>Acceso concedido</p>
	<p><a href="login.html">Volver</a></p>
  </body>
 </html>