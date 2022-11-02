<html>
  <head>
  	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />    
  	<title>Mi quinta pagina con php</title>
  </head>
  <body>
    	<h1>Libreria Online</h1>
    	<h2>Resumen del Pedido</h2>
  	<?php
  	/*olaaa ke hace */
  	echo "<p>orden procesada a las: ";
	echo date ("H:i ");
	echo "del dia ";
	echo date ("j ");
	echo "de ";
	echo date ("F ");
	echo "del año ";
	echo date ("Y");
	echo "<br>";	
	echo "<p>su pedido es el siguiente:</p>"; 
			
	$totalqty=0;
    $totalamount = 0.00;
	
	define ("PRECIOACTION", 100);
	define ("PRECIOPHOTO", 10);
	define ("PRECIOFLASH", 4);
	
    $totalqty = $actionqty + $photoqty + $flashqty;
	
    $totalamount = $actionqty * PRECIOACTION 
                   + $photoqty * PRECIOPHOTO 
                   + $flashqty * PRECIOFLASH;
	
	
	if($totalqty == 0){
		echo "<font color=red>";
		echo "No escribiste ningun valor en el formulario";
		exit;
		echo "</font>";
	}
	else{
		if($actionqty>0){
		    echo $actionqty = $_POST["actionqty"]." ActionScript <br>";
		}    
	    if($photoqty>0){
	    	echo $photoqty = $_POST["photoqty"]." Photoshop <br>";
		}
	    if($flashqty>0){
	    	echo $flashqty = $_POST["flashqty"]." Flash <br>";
	
		}
	}
	
	if($actionqty < 10){
		$descuento = 0;
	}
	else{
		if($actionqty >= 10 && $actionqty <= 49){
			$descuento = 5;
		}
		if($actionqty >= 50 && $actionqty <= 99){
			$descuento = 10;
		}
		if($actionqty >= 100){
			$descuento = 15;
		}
	}
				
    echo "el descuento de actionscript ".$descuento."%";
    
    switch($find){
		case "a":
			echo"<p>Se trata de un cliente habitual</p>";
			break;
		case "b":
			echo"<p>este cliente nos ha conocido por anuncios de television</p>";
			break;
		case "c":
			echo"<p>este cliente nos ha conocido por informaciones en internet</p>";
			break;	
		case "d":
			echo"<p>Este cliente nos ha conocido por aviso de un amigo</p>";
			break; 										
    }
	$direcc=$_POST["direcc"];
	echo "La direccion de envio es ".$direcc;
	
	$date = date("H:i,j F");
	
	$stringsalida = $date."\t".$actionqty."actionscript \t".$photoqty."photoshop \t".$flashqty."flash \t\$".$totalqty."\t".$direcc."\n";
	
	//abrir archivo añadiendo
@	$fp = fopen ("../pedidos/pedidos.txt" , a); // la @ es para silenciar los codigos no para desactivarlos
@	flock ($fp, 2);
	
	if(!$fp){
		echo "<p><strong> su orden no a podido ser procesada en este momento intentelo mas tarde. ";
		echo "Por favor intentelo denuevo mas tarde</strong></p></body></html>";
		exit;
	}
		
	fwrite($fp, $stringsalida);
	flock($fp, 3);
	fclose($fp);
	
	echo "<p>Su orden ha sido enviada y recibida</p>";
	
	  	
	?>  
  </body>
</html>