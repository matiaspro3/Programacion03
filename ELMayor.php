<html>
<head>
	<title> EL Mayor</title>
</head>
<body>

	<form 	method = "post">
	<input type="text" name ="elPrimero"> 		
	<input type="text" name ="elSegundo">
	<input type="text" name ="elTercero">
	<input type ="submit" value ="Calcular" name="calcular">

	</form>

<?php 
	$primero=$_POST["elPrimero"];
	$segundo=$_POST["elSegundo"];
	$tercero=$_POST["elTercero"];


	if ( $primero>$segundo) {

		if ($primero>$tercero){
			echo "MAYOR :    ".$primero;
		}else  echo "MAYOR :    ".$tercero;

	}elseif ( $segundo>$tercero) {echo "MAYOR :    ".$segundo;} else {echo "MAYOR :    ".$tercero;
}




 ?>


</body>
</html>