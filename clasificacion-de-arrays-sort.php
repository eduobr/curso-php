<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>clasificacion-de-arrays</title>
		<meta name="author" content="Eduardo" />
		<!-- Date: 2013-03-18 -->
	</head>
	<body>
		<?php
		$libros = array("Action","Photo","Flash");
		echo $libros[1]."<br>";
		
		sort($libros)."<br>"; //lo que hace esta funcion es ordenar los arrays ascendentemente alfabeticamente y numericamente
		
		echo $libros[1];
		?>

	</body>
</html>

