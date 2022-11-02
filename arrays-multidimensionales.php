<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>arrays-multidemensionales</title>
	<meta name="author" content="Eduardo" />
	<!-- Date: 2013-03-13 -->
</head>
<body>
	<?php
	$libros = array(array("A","Action","100"),
	                array("F","Flash", "10"),
					array("P","Photo","4"));
	
	echo $libros[0][0].", ".$libros[0][1].", ".$libros[0][2];
	echo $libros[1][0].", ".$libros[1][1].", ".$libros[1][2];
	echo $libros[2][0].", ".$libros[2][1].", ".$libros[2][2];				
	?>

</body>
</html>

