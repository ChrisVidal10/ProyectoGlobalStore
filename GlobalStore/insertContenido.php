<?php

   
   $CONombre = $_POST[('CONombre')];
	
	$COCosto = $_POST[('COCosto')];
	
	 $COVecesValorada = $_POST[('COVecesValorada')];
	
	$COVecesDescargada = $_POST[('COVecesDescargada')];
	
	$COTipo = $_POST[('COTipo')];
	
	$CAPDescripcion = $_POST[('CAPDescripcion')];
	
	$CAPUltimaActualizacion = $_POST[('CAPUltimaActualizacion')];
	
	 $CAPVersionActual = $_POST[('CAPVersionActual')];
	 
	 $CAPVersionSO = $_POST[('CAPVersionSO')];
	 
	 $CAPClasificacion = $_POST[('CAPClasificacion')];
	
	$FKDEId = $_POST[('FKDEId')];
	
	$CPEFechaEstreno = $_POST[('CPEFechaEstreno')];
	
	$CPEDescripcion = $_POST[('CPEDescripcion')];
	
	$CPEDuracion = $_POST[('CPEDuracion')];
	
	$CMUFechaProduccion = $_POST[('CMUFechaProduccion')];
	
	$CMUNumeroCanciones = $_POST[('CMUNumeroCanciones')];
	
	 $CMUFormato = $_POST[('CMUFormato')];
	 
	 $FKDISQId = $_POST[('FKDISQId')];
	
	$CLBReseña = $_POST[('CLBReseña')];
	
	$CLBFechaPublicacion = $_POST[('CLBFechaPublicacion')];
	
	$CLBDescripcion = $_POST[('CLBDescripcion')];
	
	$CLBCantidadPaginas = $_POST[('CLBCantidadPaginas')];
	
	$CLBCodigoISBN = $_POST[('CLBCodigoISBN')];
	
	$FKEDId = $_POST[('FKEDId')];

	$fecha = date("Y-m-d");
	
	if($CONombre=="" OR $COCosto=="" OR $COVecesValorada=="" OR $COVecesDescargada=="" OR $COTipo=="")
	{
		echo"Ningun campo obligatorio puede estar vacio";
	}
	else
	{
		$enlace =  mysql_connect('127.0.0.1', 'root', '');
   		if (!$enlace) 
		{
    		die('No pudo conectarse: ' . mysql_error());
   		}
 	 	$Respuesta = mysql_query("SELECT * FROM gs.contenido as C where CONombre = '$CONombre' ");
		$arreglo = mysql_fetch_row($Respuesta);
		if (( $arreglo!=NULL) )
		{
			echo'La persona ya existe en la base de datos';
		
		}
		else
		{ 
			$id= mysql_query("SELECT * FROM gs.contenido as C");
			$numero = mysql_num_rows($id);
			$numnuevo = $numero +1;
			
			if  ($COTipo==1)
			{
			$query=("insert into gs.contenido (COId,COFechaRegistro,CONombre,COCosto,COVecesValorada,COVecesDescagada,COTipo,CAPDescripcion,CAPUltimaActualizacion,CAPTamaño,CAPVersionActual,CAPVersionSO,CAPClasificacion,FKDEId,CPEFechaEstreno,CPEDescripcion,CPEDuracion,CMUFechaProduccion,CMUNumeroCanciones,CMUFormato,FKDISQId,CLBReseña,CLBFechaPublicacion,CLBDescripcion,CLBCantidadPaginas,CLBCodigoISBN,FKEDId) values (1,14/06/12,'Candy Crush',10.99,10,5,1,'Descarga gratis Candy Crush y disfruta de mas de 140 niveles y nuevos modos de juego',11/11/14,15,'1.2.04','Windows 8','25',1,NULL,NULL,NULL,NULL,NULL,NULL,2,NULL,NULL,NULL,NULL,NULL,3)");
 
			$insert = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
			echo 'Se ha insertado exitosamente con el ID:';
			echo $numnuevo; 
			}
			
			else if ($COTipo==2)
			{
			 $query=("insert into GS.CONTENIDO (COId,COFechaRegistro,CONombre,COCosto,COVecesValorada,COVecesDescagada,COTipo,CAPDescripcion,CAPUltimaActualizacion,CAPTamaño,CAPVersionActual,CAPVersionSO,CAPClasificacion,FKDEId,CPEFechaEstreno,CPEDescripcion,CPEDuracion,CMUFechaProduccion,CMUNumeroCanciones,CMUFormato,FKDISQId,CLBReseña,CLBFechaPublicacion,CLBDescripcion,CLBCantidadPaginas,CLBCodigoISBN,FKEDId) values ('$numnuevo','$fecha','$CONombre','$COCosto','$COVecesValorada','$COVecesDescagada','$COTipo',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$CPEFechaEstreno','$CPEDescripcion,'$CPEDuracion',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL)");
			$insert = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
			echo 'Se ha insertado exitosamente con el ID:';
			echo $numnuevo; 
			}
			else if ($COTipo==3)
			{
				$query=("insert into GS.CONTENIDO (COId,COFechaRegistro,CONombre,COCosto,COVecesValorada,COVecesDescagada,COTipo,CAPDescripcion,CAPUltimaActualizacion,CAPTamaño,CAPVersionActual,CAPVersionSO,CAPClasificacion,FKDEId,CPEFechaEstreno,CPEDescripcion,CPEDuracion,CMUFechaProduccion,CMUNumeroCanciones,CMUFormato,FKDISQId,CLBReseña,CLBFechaPublicacion,CLBDescripcion,CLBCantidadPaginas,CLBCodigoISBN,FKEDId) values ('$numnuevo','$fecha','$CONombre','$COCosto','$COVecesValorada','$COVecesDescagada','$COTipo',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$CMUFechaProduccion','$CMUNumeroCanciones','$CMUFormato','$FKDISQId',NULL,NULL,NULL,NULL,NULL,NULL)");
			$insert = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
			echo 'Se ha insertado exitosamente con el ID:';
			echo $numnuevo; 
			}
			else
			{
				$query=("insert into GS.CONTENIDO (COId,COFechaRegistro,CONombre,COCosto,COVecesValorada,COVecesDescagada,COTipo,CAPDescripcion,CAPUltimaActualizacion,CAPTamaño,CAPVersionActual,CAPVersionSO,CAPClasificacion,FKDEId,CPEFechaEstreno,CPEDescripcion,CPEDuracion,CMUFechaProduccion,CMUNumeroCanciones,CMUFormato,FKDISQId,CLBReseña,CLBFechaPublicacion,CLBDescripcion,CLBCantidadPaginas,CLBCodigoISBN,FKEDId) values ('$numnuevo','$fecha','$CONombre','$COCosto','$COVecesValorada','$COVecesDescagada','$COTipo',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$CLBReseña','$CLBFechaPublicacion','$CLBDescripcion','$CLBCantidadPaginas','$CLBCodigoISBN','$FKEDId')");	
								$insert = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
			echo 'Se ha insertado exitosamente con el ID:';
			echo $numnuevo; 
			}
			
		
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