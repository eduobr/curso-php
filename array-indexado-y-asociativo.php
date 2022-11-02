<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>array-indexado-y-asociativo</title>
		<meta name="author" content="Eduardo" />
		<!-- Date: 2013-03-11 -->
	</head>
	<body>
		<?php
		//ejemplo de array indexado numericamente
		$productos = array("Action","Photoshop","Flash");
		echo "$productos[0] , $productos[1] , $productos[2]";
		
		
		//ejemplo de array asociativo
		$precios = array("Action"=>100, "Photoshop"=>10,"Flash"=>25);
		echo "<p>$precios[Action]</p>";
		?>

	</body>
</html>

