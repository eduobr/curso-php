<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>practica</title>
		<meta name="author" content="Eduardo" />
		<!-- Date: 2013-02-25 -->
	</head>
	<body>
		<?php
		$a = 100;
		$b = &$a; //la & es para que la variable tome el que se modifique al ultimo
		$a = 220;		
		echo $b;
		?>
	</body>
</html>

