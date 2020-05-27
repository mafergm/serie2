<?php
	Class Conexion extends mysqli
	{
	
		 public function __construct()
		 {
			 parent::__construct("localhost", "root", "", "registro");
			 $this->query("SET NAMES 'utf8';");
			
		 }
	}
?>