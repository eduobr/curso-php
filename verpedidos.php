<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>verpedidos</title>
		<meta name="author" content="Eduardo" />
		<!-- Date: 2013-03-07 -->		
	</head>
	<body>
		<h1>Libros libres</h1>
		<h2>Peticiones de Clientes</h2>
		<?php
		$fp = fopen ("../pedidos/pedidos.txt", r);
		
		flock ($fp, 1);
		
		if(!$fp){
			echo "<p><strong>No hay ordenes pendientes en este momento.";
			     "porfavor prueba denuevo mas tarde.<strong></p></body></html>";
				 exit;			
		}
		while(!feof($fp)){
			$pedidos = fgets($fp, 100);
			echo $pedidos."<br>";
		}
		flock($fp, 3)
		?>

	</body>
</html>

