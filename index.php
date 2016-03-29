<html>
<head>
	<title></title>
</head>
<body>
Hola Mundo
<?php
$nombre="Matias";
$numero= 15;

echo "<br>";
echo "Hola";
echo "<br>";

echo $nombre;
echo "<br>";
print("su nombre es :  ".$nombre);
echo "<br>";echo "<br>";

if ($numero > 5)
{

	echo "Es Mayor";
}
else {echo " Es Menor";}


echo "<h1>".$nombre."</h1>";


$miArray= array(15,2,4,6,7);
foreach ($miArray as $elemento ) {
	 echo $elemento;
	 echo "-";
}
var_dump($miArray);
echo "<br>";echo "<br>";
$minuevoArray =array("pizza"=>20,"cocacola"=>25,"empanada"=>15);
var_dump($minuevoArray);
echo "<br>";echo "<br>";
$arrayClaveValor=array("nombre" => $nombre, "Apellido" => "DS", "Soltero" =>true,"Fecha de NAcimiento"=> "12-102-12"   );

var_dump($arrayClaveValor);


echo "<br>";echo "<br>";



$arrayVacio=array();
$arrayVacio[0]="Hola";
$arrayVacio[]="Chau";
$arrayVacio[]=$minuevoArray;
echo "<br>";echo "<br>";
$arrayVacio["Productos"]= $minuevoArray ;



var_dump($arrayVacio);
echo "<br>";echo "<br>";
echo $arrayVacio["Productos"]["pizza"];

echo "<br>";echo "<br>";


$miobjeto= new stdclass();

$miobjeto->nombre="MAtias";
$miobjeto->estadoCivil="Soltero";
$miobjeto->FechaNacimiento="12-12-012";




var_dump($miobjeto);

echo "<br>";echo "<br>";echo "<br>";echo "<br>";

$miobjeto->Productos=$minuevoArray;

var_dump($miobjeto);
echo "<br>";echo "<br>";echo "<br>";echo "<br>";

include"mascota.php";
require_once"Alumno.php";

#_once incluye una sola vez.
# include sino funciona me devuelve un warning
#require siosi necesito el archivo. termina con fatAL ERROR

$yo=new Alumno();
$yo->nombre="Juan";
$yo->apellido="Rios";


var_dump($yo);

$yo->fechaDeNacimiento ="12-12-12";
echo "<br>";echo "<br>";echo "<br>";echo "<br>";

var_dump($yo);


echo "<br>";echo "<br>";echo "<br>";echo "<br>";

$yo->Mostrar();


echo "<br>";echo "<br>";echo "<br>";echo "<br>";

$yo->soltero=true;
Alumno::MostrarSta($yo);
echo "<br>";echo "<br>";
echo $yo->nombre;

echo "<br>";echo "<br>";
foreach ($yo as $atrinuto) {
	var_dump($atrinuto);
}

#echo $yo["nombre"];  no funciona pq trato al objeto como array

#echo $minuevoArray->pizza; viceversa



?>




</body>
</html>