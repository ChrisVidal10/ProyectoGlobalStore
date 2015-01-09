<?php

    $Autor = $_POST[('textAutor')];
	if($Autor=="")
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
 	 	$Respuesta = mysql_query("SELECT a.AUId, a.AUNombre FROM gs.autor as a WHERE a.AUNombre='$Autor';");
		$arreglo = mysql_fetch_row($Respuesta);
		if (( $arreglo[1]==$Autor))
		{
			echo'Ya existe esta autor';
			echo'Su Id es:';
			echo $arreglo[0];
			echo'Su Nombre es:';
			echo $arreglo[1];
		}
		else
		{ 
			$maxvalor = mysql_query("SELECT * FROM gs.autor where AUId = (select max(AUId) from gs.autor)");
			$arreglo 	= mysql_fetch_row($maxvalor);
			$max = $arreglo[0];
			$numnuevo = $max + 1;
			echo 'Se ha insertado exitosamente con el ID:';
			echo $numnuevo;  
			$query=("insert into gs.autor(AUId,AUNombre) values ('$numnuevo','$Autor')");
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