<?php

class Alumno 
{
	
	public $nombre;
	 public $apellido;
	
public function Mostrar()

	{
			$this->RetornarDatos();
	}	

private function RetornarDatos()
	{
			echo  "Su nombre es " .$this->nombre."Apellido".$this->apellido; 
	}
public static function MostrarSta ( $alumno)
{
	$alumno->Mostrar();

}
}

?>
