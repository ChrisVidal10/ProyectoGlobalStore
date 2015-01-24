<?php


    $FKGEMId = $_POST[('FKGEMId')];
	$FKCOId = $_POST[('FKCOId')];


	if($FKGEMId=="" 	and $FKCOId=="")
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
 	 	$Respuesta = mysql_query("SELECT AP.* FROM gs.genero_musica AP WHERE AP.FKGEMId='$FKGEMId' and  AP.FKCOId='$FKCOId'  ;");
		$arreglo = mysql_fetch_row($Respuesta);
		if (( $arreglo[0]==$FKGEMId) and ( $arreglo[1]==$FKCOId) )
		{
			echo'Ya existe este par ';
			
		}
		else
		{ 
			echo 'Se ha insertado exitosamente con el ID:';
			$query=("insert into gs.genero_musica(FKGEMId,FKCOId) values ('$FKGEMId','$FKCOId')");
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