<?php

    $Accion = $_POST[('txtdescripcion')];
	if($Accion=="")
	{
		echo"La casilla esta vacia";
	}
	else
	{
		$enlace =  mysql_connect('127.0.0.1', 'root', '');
   		if (!$enlace) 
		{
    		die('No pudo conectarse: ' . mysql_error());
   		}
 	 	$Respuesta = mysql_query("SELECT a.ACId, a.ACDescripcion FROM gs.accion as a WHERE a.ACDescripcion='$Accion';");
		$arreglo = mysql_fetch_row($Respuesta);
		if (( $arreglo[1]==$Accion))
		{
			echo'Ya existe esta accion';
			echo'Su Id es:';
			echo $arreglo[0];
		}
		else
		{ 
			$id= mysql_query("SELECT * FROM gs.accion as a");
			$numero = mysql_num_rows($id);
			$numnuevo = $numero +1;
			echo 'Se ha insertado exitosamente con el ID:';
			echo $numnuevo;  
			$query=("insert into gs.accion(ACId,ACDescripcion) values ('$numnuevo','$Accion')");
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