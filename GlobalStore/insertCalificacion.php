<?php

    $CALValor = $_POST[('CALValor')];
	
	$CALFecha = $_POST[('CALFecha')];
	
	$CALHora = $_POST[('CALHora')];
	
	 $FKPERId = $_POST[('FKPERId')];
	
	$FKCOId = $_POST[('FKCOId')];
	
	
	if($CALValor=="" OR $CALFecha=="" OR $FKPERId=="" OR $FKCOId=="" )
	{
		echo"Una de las casilla esta vacia	";
		echo 'Se ha insertado:	';
		echo $CALValor;  
		echo 'Se ha insertado:	';
		echo $CALFecha;  
		echo 'Se ha insertado:	';
		echo $CALHora;
		echo 'Se ha insertado:  ';
		echo $FKPERId;  
		echo 'Se ha insertado:	';
		echo $FKCOId;  
		echo 'Se ha insertado:	';
		
	}
	else
	{
		$enlace =  mysql_connect('127.0.0.1', 'root', '');
   		if (!$enlace) 
		{
    		die('No pudo conectarse: ' . mysql_error());
   		}
 	 	$Respuesta = mysql_query("SELECT * FROM gs.calificacion as C ");
		$arreglo = mysql_fetch_row($Respuesta);
		if (( $arreglo[1]==$CALValor) AND ($arreglo[2]==$FKPERId) AND ($arreglo[3]==$FKCOId))
		{
			echo'Esta pelicula ya fue calificada por esta persona';
		
		}
		else
		{ 
			$id= mysql_query("SELECT * FROM gs.calificacion as C");
			$numero = mysql_num_rows($id);
			$numnuevo = $numero +1;
			echo 'Se ha insertado exitosamente con el ID:';
			echo $numnuevo;  
		
			$query=("insert into gs.calificacion(CALId,CALValor,CALFecha,FKPERId,FKCOId) values ('$numnuevo','$CALValor','$CALFecha','$FKPERId','$FKCOId')");
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