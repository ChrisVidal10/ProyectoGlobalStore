<?php

    $USROHistorial = $_POST[('USROHistorial')];
	
	$FKPERId = $_POST[('FKPERId')];
	
	$FKACId = $_POST[('FKACId')];
	
	$FKROd = $_POST[('FKROd')];
	
	
	
	if($USROHistorial=="" OR $FKPERId=="" OR $FKACId=="" OR $FKROd=="" )
	{
		echo"Una de las casilla esta vacia	";
		echo 'Se ha insertado:	';
		echo $USROHistorial;  
		echo 'Se ha insertado:	';
		echo $FKPERId;  
		echo 'Se ha insertado:	';
		echo $FKACId;
		echo 'Se ha insertado:  ';
		echo $FKROd;  
		
	}
	else
	{
		$enlace =  mysql_connect('127.0.0.1', 'root', '');
   		if (!$enlace) 
		{
    		die('No pudo conectarse: ' . mysql_error());
   		}
 	 	$Respuesta = mysql_query("SELECT * FROM gs.usuario_rol as C ");
		$arreglo = mysql_fetch_row($Respuesta);
		if (( $arreglo[1]==$USROHistorial) AND ($arreglo[2]==$FKPERId) AND ($arreglo[3]==$FKACId) AND ($arreglo[4]==$FKROd))
		{
			echo'Este Rol para Usuario ya fue creado';
		
		}
		else
		{ 
			$id= mysql_query("SELECT * FROM gs.usuario_rol as C");
			$numero = mysql_num_rows($id);
			$numnuevo = $numero +1;
			echo 'Se ha insertado exitosamente con el ID:';
			echo $numnuevo;  
		
			$query=("insert into gs.usuario_rol values ('$numnuevo','$USROHistorial','$FKPERId','$FKACId','$FKROd')");
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