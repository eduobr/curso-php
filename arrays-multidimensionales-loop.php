<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>arrays-multidimensionales-loop</title>
		<meta name="author" content="Eduardo" />
		<!-- Date: 2013-03-13 -->
	</head>
	<body>
		<?php						
	    $libros = array(array("A","Action","100"),
	                    array("F","Flash", "10"),
			            array("P","Photo","4"));
				  
		for($i=0;$i<3;$i++){			 
			for($j=0;$j<3;$j++){
			echo $libros[$i][$j].", ";	 								
			}
			echo "<br>";
		}		  
		?>			
	</body>
</html>

