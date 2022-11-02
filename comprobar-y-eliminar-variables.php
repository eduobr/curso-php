<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>comprobar-y-eliminar-variables</title>
		<meta name="author" content="Eduardo" />
		<!-- Date: 2013-02-28 -->
	</head>
	<body>
		<?php
		$totalarticulo = 0;
		echo isset ($totalarticulo)."<br>"; //comprueba si existe la variable y si asi es devuelve un 1
		echo empty ($totalarticulo);//comprueba si una variable se encuentra vacia de ser asi devuelve un 1
		unset ($totalarticulo); //elimina una variable
		?>

	</body>
</html>

