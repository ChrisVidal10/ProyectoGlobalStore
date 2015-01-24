<?php


    $CONFechaI = $_POST[('CONFechaI')];
	
	$CONFechaF = $_POST[('CONFechaF')];
	
	 $CONCausa = $_POST[('CONCausa')];
	
	$FKPERId = $_POST[('FKPERId')];
	
	$FKCARId = $_POST[('FKCARId')];
	
	if($CONFechaI=="" OR $CONCausa=="" OR $FKPERId=="" OR $FKCARId=="")
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
 	 	$Respuesta = mysql_query("SELECT * FROM gs.contrato as C ");
		$arreglo = mysql_fetch_row($Respuesta);
		if (( $arreglo[4]==$FKPERId) AND ($arreglo[5]==$FKCARId))
		{
			echo'Ya existe este contrato';
		
		}
		else
		{ 
			$id= mysql_query("SELECT * FROM gs.contrato as C");
			$numero = mysql_num_rows($id);
			$numnuevo = $numero +1;
			echo 'Se ha insertado exitosamente con el ID:';
			echo $numnuevo;  
		
			$query=("insert into gs.contrato values ('$numnuevo','$CONFechaI','$CONFechaF','$CONCausa','$FKPERId','$FKCARId')");
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