<?php


	$LUTipo = $_POST[('LUTipo')];
	
	$LUNombre = $_POST[('LUNombre')];
	
	 $LUCodigo_Postal = $_POST[('LUCodigo_Postal')];
	
	 $FKLUId = $_POST[('FKLUId')];
	
	
	if($LUTipo=="" OR $LUNombre=="" OR $LUCodigo_Postal=="" OR  $FKLUId=="")
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
 	 	$Respuesta = mysql_query("SELECT * FROM gs.lugar as C ");
		$arreglo = mysql_fetch_row($Respuesta);
		if (( $arreglo[1]==$LUTipo) AND ($arreglo[2]==$LUNombre )	AND( $arreglo[3]==$LUCodigo_Postal))
		{
			echo'El lugar que intenta insertar ya existe';
		
		}
		else
		{ 
			$id= mysql_query("SELECT * FROM gs.lugar as C");
			$numero = mysql_num_rows($id);
			$numnuevo = $numero +1;
			echo 'Se ha insertado exitosamente con el ID:';
			echo $numnuevo;  
		
			$query=("insert into gs.lugar(LUId,LUTipo,LUNombre,LUCodigo_Postal,FKLUId) values ('$numnuevo','$LUTipo','$LUNombre','$LUCodigo_Postal','$FKLUId')");
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