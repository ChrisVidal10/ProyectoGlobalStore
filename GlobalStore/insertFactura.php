<?php
  
   $FAFechaE = $_POST[('FAFechaE')];
	
	$FAMontoTotal = $_POST[('FAMontoTotal')];
	
	 $FKTDCId = $_POST[('FKTDCId')];
	
	$FKPERId = $_POST[('FKPERId')];
	

	
	if($FAFechaE=="" OR $FAMontoTotal=="" OR $FKTDCId=="" OR $FKPERId=="" )
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
 	 	$Respuesta = mysql_query("SELECT * FROM gs.factura ");
		$arreglo = mysql_fetch_row($Respuesta);
		if (( $arreglo[1]==$FAFechaE) AND ($arreglo[2]==$FAMontoTotal) AND ($arreglo[3]==$FKPERId) )
		//VERIFICO EN FACTURA QUE NO ESTE LA COMBINACION DE FECHADEEMISION ,SUBTOTAL Y PERSONA	
		{
			echo'La FACTURA ya existe';
		
		}
		else
		{ 
			$id= mysql_query("SELECT * FROM gs.factura as C");
			$numero = mysql_num_rows($id);
			$numnuevo = $numero +1;
			echo 'Se ha insertado exitosamente con el ID:';
			echo $numnuevo;  
		
			$query=("insert into gs.factura(FAId,FAFechaE,FAMontoTotal,FKTDCId,FKPERId) values ('$numnuevo','$FAFechaE','$FAMontoTotal','$FKTDCId','$FKPERId')");
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