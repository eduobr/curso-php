<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>control-de-tiposvariable</title>
		<meta name="author" content="Eduardo" />
		<!-- Date: 2013-02-28 -->
	</head>
	<body>
		<?php
		$a = 32;
		echo gettype($a)."<br>"; //muestra el tipo que es una veriable
		settype($a,double); //cambia el tipo de una variable
		echo gettype($a)
				
		?>
	</body>
</html>

