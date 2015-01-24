<?php


    $HISTFechaI = $_POST[('HISTFechaI')];
	
	$HISTFechaF = $_POST[('HISTFechaF')];
	
	 $HISTTipo = $_POST[('HISTTipo')];
	
	$FKPERId = $_POST[('FKPERId')];
	
	$FKACId = $_POST[('FKACId')];
	
	$FKROId = $_POST[('FKROId')];
	
	
		$enlace =  mysql_connect('127.0.0.1', 'root', '');
   		if (!$enlace) 
		{
    		die('No pudo conectarse: ' . mysql_error());
   		}
 	 	$Respuesta = mysql_query("SELECT * FROM gs.historial as C where HISTFechaI = '$HISTFechaI' ");
		$arreglo = mysql_fetch_row($Respuesta);
		if ($arreglo!=NULL)
		{
			echo'Ya existe este historial';
		
		}
		else
		{ 
			$id= mysql_query("SELECT * FROM gs.historial as C");
			$numero = mysql_num_rows($id);
			$numnuevo = $numero +1;
			echo 'Se ha insertado exitosamente con el ID:';
			echo $numnuevo;  
		
			$query=("insert into gs.historial values ('$numnuevo','$HISTFechaI','$HISTFechaF','$HISTTipo','$FKPERId','$FKACId','$FKROId')");
			$insert = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
			//header("Location:Paginsert.php");
		}			                                       		
		mysql_close($enlace);

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