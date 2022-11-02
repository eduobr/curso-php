<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>array-asociativo</title>
		<meta name="author" content="Eduardo" />
		<!-- Date: 2013-03-12 -->
	</head>
	<body>
		<?php
		$precios = array("Action"=>100, "Flash"=>10, "Photoshop"=>25);
		while($elementos = each($precios)){
			echo $elementos["key"];
			echo "-";
			echo $elementos["value"];
			echo "<br>";
		}
		reset($precios);//esta funcion es para que each vuelva al inicio del bucle
		
		//una segunda forma de hacer lo mismo seria	
		while(list($producto,$precio) = each($precios))
        echo "$producto - $precio<br>";			
		
		?>

	</body>
</html>

