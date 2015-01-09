<?php

    $Nombre = $_POST[('txtnombre')];
	$Correo = $_POST[('txtcorreo')];
	$WebSite = $_POST[('txtwebsite')];
	$Tipo = $_POST[('DETipo')];
	
	if($Nombre=="" or $Correo=="" or $WebSite=="" or $Tipo=="")
	{
		echo"Una de las casillas esta vacia";
	}
	else
	{
		$enlace =  mysql_connect('127.0.0.1', 'root', '');
   		if (!$enlace) 
		{
    		die('No pudo conectarse: ' . mysql_error());
   		}
 	 	$Respuesta = mysql_query("SELECT * FROM gs.desarrollador as a where DENombre = '$Nombre' or DECorreo = '$Correo';");
		$arreglo = mysql_fetch_row($Respuesta);
		if (( $arreglo!=NULL))
		{
			echo'Ya existe este desarrollador con este correo asociado';
			echo'Su Id es:';
			echo $arreglo[0];
		}
		else
		{ 
			$id= mysql_query("SELECT * FROM gs.desarrollador as a");
			$numero = mysql_num_rows($id);
			$numnuevo = $numero +1;
			echo 'Se ha insertado exitosamente con el ID:';
			echo $numnuevo;  
			$query=("insert into gs.desarrollador(DEId,DENombre, DECorreo,DEWebSite, DETipo) values ('$numnuevo','$Nombre','$Correo','$WebSite','$Tipo')");
			$insert = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
			//header("Location:Paginsert.php");
		}			                                       		
		mysql_close($enlace);
	}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Global Store</title>
	<br>
	<a href="LoginSuccess.php">              Volver al administrador</a></li>
	
	
</div>
</head>