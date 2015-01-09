<?php

    $Usuario 	= $_POST['Usuario'];	
	$Password 	= $_POST['Password'];
	$Id='';
	
	if(($Usuario=="")||($Password==""))
	{		    
		echo"alguna de las casillas estan vacias";
	}
	else
	{
		$enlace =  mysql_connect('127.0.0.1', 'root', '');
   		if (!$enlace) 
		{
    		die('No pudo conectarse: ' . mysql_error());
   		}
		$Respuesta = mysql_query("SELECT u.PUSUsername, u.PUSContrasena, u.PERTipo  FROM gs.persona as u WHERE 											u.PUSUsername='$Usuario' AND u.PUSContrasena='$Password';");
		$arreglo = mysql_fetch_row($Respuesta);
		if (( $arreglo[0]==$Usuario)&&($arreglo[1]==$Password))
		{
			echo'Usuario y contrasena correctas';
			if ($arreglo[2] == 1) 
			{
			header("Location:LoginSuccess.php");	
			}
			else
			{
			header("Location:Contactenos.php");	
			}
		}
		else
		{ 
			echo'Usuario y contrasena incorrectas';
		}
     mysql_close($enlace);
	}
?>

