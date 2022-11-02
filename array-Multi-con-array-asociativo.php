<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>array-Multi-con-array-asociativo</title>
		<meta name="author" content="Eduardo" />
		<!-- Date: 2013-03-13 -->
	</head>
	<body>
		<?php
		$libros = array(array(cod => "A",
		                      descrip => "Action",
							  precio => "100"),
						array(cod => "F",
						      descrip => "Flash",
							  precio => "10"),
						array(cod => "P",
						      descrip => "Photo",
							  precio => "4"	)
							  );
		
		for($fila=0;$fila<3;$fila++){
			echo $libros[$fila]["cod"].", ".$libros[$fila]["descrip"].", ".$libros[$fila]["precio"]."<br>";
		}					  
		?>

	</body>
</html>

