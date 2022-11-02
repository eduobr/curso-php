<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>clasificacion-de-arrays-asort</title>
		<meta name="author" content="Eduardo" />
		<!-- Date: 2013-03-18 -->
	</head>
	<body>
		<?php
		$precios = array("Action" => 100,"Photo" => 25,"Flash" => 40);
		asort($precios);//clasifica al array deacuerdo a cada uno de los elementos
		ksort($precios);//clasifica por las claves alfabeticamente
		
		?>

	</body>
</html>

