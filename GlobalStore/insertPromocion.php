<?php

    $PRNombre = $_POST[('PRNombre')];
	
	$PRFechaInicio = $_POST[('PRFechaInicio')];
	
	 $PRFechaFin = $_POST[('PRFechaFin')];
	
	$PRValor = $_POST[('PRValor')];
	
	$PREstado = $_POST[('PREstado')];
	
	 $PRDescripcion = $_POST[('PRDescripcion')];

	
	 $PRCondiciones = $_POST[('PRCondiciones')];

	


	
	if($PRNombre=="" OR $PRFechaInicio=="" OR $PRFechaFin=="" OR $PRValor=="" OR $PREstado=="" OR $PRDescripcion=="" OR $PRCondiciones=="")
	{
		echo"Una de las casilla esta vacia";
	}
	else
	{
		$enlace =  mysql_connect('127.0.0.1', 'root', '');
   		if (!$enlace) 
		{
    		die('No pudo conectarse: ' . mysql_error());
   		}
 	 	$Respuesta = mysql_query("SELECT * FROM gs.promocion as C where PRFechaI = '$PRFechaInicio' and PRFechaF = '$PRFechaFin' and PRNombre = '$PRNombre' ");
		$arreglo = mysql_fetch_row($Respuesta);
		if ($arreglo != NULL)
		{
			echo'Ya existe esta promocion';
		
		}
		else
		{ 
			$id= mysql_query("SELECT * FROM gs.promocion as C");
			$numero = mysql_num_rows($id);
			$numnuevo = $numero +1;
			echo 'Se ha insertado exitosamente con el ID:';
			echo $numnuevo;  
		
			$query=("insert into gs.promocion(PRId,PRNombre,PRFechaI,PRFechaF,PRValor,PREstado,PRDescripcion,PRCondiciones) values ('$numnuevo','$PRNombre','$PRFechaInicio','$PRFechaFin','$PRValor','$PREstado','$PRDescripcion','$PRCondiciones')");
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