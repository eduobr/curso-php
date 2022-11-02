<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>array-tridimensional</title>
		<meta name="author" content="Eduardo" />
		<!-- Date: 2013-03-18 -->
	</head>
	<body>
		<?php
		$categorias = array(array(array("A","Action","20"),
		                          array("F","Flash","10"),
								  array("P","photoshop","9"),
								 ),
						    array(array("H","Homero","50"),
							      array("A","Aristitoteles","40"),
								  array("P","Platon","37")
								 ),
						    array(array("G","Gabriela","90"),
							      array("P","Pablo","54"),
								  array("M","Marquez","23")));
						
		for($capa=0;$capa<3;$capa++){
			echo "capa $capa<br>";
			for($fila=0;$fila<3;$fila++){				
				for($columna=0;$columna<3;$columna++){
					echo "|".$categorias[$capa][$fila][$columna];
				}
				echo "<br>";
			}
		}
						    
						    
		?>

	</body>
</html>

