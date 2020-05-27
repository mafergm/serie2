<?php
	include('dos.php');
	$v=new validar();

	$U=$_POST['username'];
	$C=$_POST['password'];
	
	var_dump($_POST);

    $final=$v->vuser($U, $C);

	var_dump($final);

	if($final->num_rows==1)
	{
		header("location: creacion.php");
	}

	else
	{
		header("location: index.php");
		
	}

?>