<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>clasificacion-de-arrays-multiples</title>
		<meta name="author" content="Eduardo" />
		<!-- Date: 2013-03-18 -->
	</head>
	<body>
		<?php
		$libros = array(array("A","Action","100"),
		                array("P","Photo","40"),
						array("F","Flash","20"));
						echo $libros[1][1]."<br>";
		
		function compara($x, $y){
			if($x[1] == $y[1])
			return 0;
			else if($x[1] < $y[1])
			return -1;
			else
			return 1;
		}
		
		usort($libros, compara);
		echo $libros[1][1];				
		?>

	</body>
</html>

