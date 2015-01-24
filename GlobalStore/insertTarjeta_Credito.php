<?php



    $FKTTId = $_POST[('FKTTId')];
	
	$TDCNumeroTarjeta = $_POST[('TDCNumeroTarjeta')];
	
	 $TDCNombreImpreso = $_POST[('TDCNombreImpreso')];
	
	$TDCFechaV = $_POST[('TDCFechaV')];
	
	$TDCStatus = $_POST[('TDCStatus')];
	
	$FKBANId = $_POST[('FKBANId')];
	
	
	
	
	if($FKTTId=="" OR $TDCNumeroTarjeta=="" OR $TDCNombreImpreso=="" OR $TDCFechaV=="" OR $TDCStatus=="" OR $FKBANId=="")
	{
		echo"Una de las casilla esta vacia";
		echo 'Se ha insertado:			';
		echo $FKTTId;  
		echo 'Se ha insertado:			';
		echo $TDCNumeroTarjeta;  
		echo 'Se ha insertado:			';
		echo $TDCNombreImpreso;  
		echo 'Se ha insertado:			';
		echo $TDCFechaV;
		echo 'Se ha insertado:			';
		echo $TDCStatus;  		
		echo 'Se ha insertado:			';
		echo $FKBANId;  		
		
	}
	else
	{
		$enlace =  mysql_connect('127.0.0.1', 'root', '');
   		if (!$enlace) 
		{
    		die('No pudo conectarse: ' . mysql_error());
   		}
 	 	$Respuesta = mysql_query("SELECT * FROM gs.tarjeta_credito as C ");
		$arreglo = mysql_fetch_row($Respuesta);
		if (( $arreglo[6]==$FKTTId) )
		{
			echo'La tarjeta ya existe';
		
		}
		else
		{ 
			$id= mysql_query("SELECT * FROM gs.tarjeta_credito as C");
			$numero = mysql_num_rows($id);
			$numnuevo = $numero +1;
			echo 'Se ha insertado exitosamente con el ID:';
			echo $numnuevo;  
		
			$query=("insert into gs.tarjeta_credito values ('$numnuevo','$TDCNombreImpreso','$TDCFechaV','TDCStatus','$TDCNumeroTarjeta','$FKBANId','$FKTTId')");
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