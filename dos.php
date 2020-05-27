<?php
	include('uno.php');
	class validar
	{
		public function vuser($Usuario, $Contra)
		{
		  $us = new Conexion();
		  $q= "SELECT * FROM `USUARIOS` WHERE `User` = '$Usuario' AND `Password` = '$Contra';";
	      $use=$us->query($q);
		  $us->close();
		  return $use;
		}
	}


?>
