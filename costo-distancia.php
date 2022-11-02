<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>costo-distancia</title>
		<meta name="author" content="Eduardo" />
		<!-- Date: 2013-03-01 -->
	</head>
	<body>
		<table border="1" cellpadding="3" cellspacing="3" width="200">
			<tr bgcolor="#CCCCCC">
				<td>Costo</td><td>Distancia</td>
			</tr>		
		<?php
		for($distancia = 50;$distancia<=250;$distancia += 50){
			echo "<tr align=right><td>$distancia</td>";
			echo "<td>".$distancia / 10 ."</td></tr>";
		}
		?>
		</table>

	</body>
</html>

