<h1>Mostrar Datos Rec.</h1>
Mostrar php
<?php 

echo "<br> Reci.  por  Post <br>"   ; 

$nombreuser =$_POST["nombre"];
$contrauser =$_POST["contrasenia"];
//var_dump($nombreuser);
//echo  "get <br>"   ; 
//var_dump($_GET);
if ($nombreuser == "admin" && $contrauser=="1234")
{
	//echo  "Nombre es : ".$nombreuser;
	//echo  "<br> Contrasenia es : ".$contrauser;
include_once "Logueado.html";
//include_once "NoLogueado.php"


}else { include "NoLogueado.html";}



 ?>