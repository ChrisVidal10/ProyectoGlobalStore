<?php

    $Disquera = $_POST[('textDisquera')];
	if($Disquera=="")
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
 	 	$Respuesta = mysql_query("SELECT ba.DISQId, ba.DISQNombre FROM gs.Disquera as ba WHERE ba.DISQNombre='$Disquera';");
		$arreglo = mysql_fetch_row($Respuesta);
		if (( $arreglo[1]==$Disquera))
		{
			echo'Ya existe esta Disquera';
			echo'Su Id es:';
			echo $arreglo[0];
		}
		else
		{ 
			$id= mysql_query("SELECT * FROM gs.Disquera as ba");
			$numero = mysql_num_rows($id);
			$numnuevo = $numero +1;
			echo 'Se ha insertado exitosamente con el ID:';
			echo $numnuevo;  
			$query=("insert into gs.Disquera(DISQId,DISQNombre) values ('$numnuevo','$Disquera')");
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
<title>CinesKCE</title>
	
	<br>
	<a href="LoginSuccess.php">              Volver al administrador</a></li>
	
	
</div>
</head>