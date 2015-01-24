<?php

   
   $CONombre = $_POST[('CONombre')];
	
	$COCosto = $_POST[('COCosto')];
	
	 $COVecesValorada = $_POST[('COVecesValorada')];
	
	$COVecesDescargada = $_POST[('COVecesDescargada')];
	
	$COTipo = $_POST[('COTipo')];
	
	$CAPDescripcion = $_POST[('CAPDescripcion')];
		if ($CAPDescripcion =="")
			$CAPDescripcion=NULL;
			
	$CAPUltimaActualizacion = $_POST[('CAPUltimaActualizacion')];
		if ($CAPUltimaActualizacion =="")
			$CAPUltimaActualizacion=NULL;
			
	 $CAPVersionActual = $_POST[('CAPVersionActual')];
	 	if ($CAPVersionActual =="")
			$CAPVersionActual=NULL;
			
	 $CAPVersionSO = $_POST[('CAPVersionSO')];
	 	if ($CAPVersionActual =="")
			$CAPVersionActual=NULL;
	 
	 $CAPClasificacion = $_POST[('CAPClasificacion')];
			if ($CAPClasificacion =="")
			$CAPClasificacion=NULL;
			
	$FKDEId = $_POST[('FKDEId')];
	
	$CPEFechaEstreno = $_POST[('CPEFechaEstreno')];
		if ($CPEFechaEstreno =="")
			$CPEFechaEstreno=NULL;
	
	$CPEDescripcion = $_POST[('CPEDescripcion')];
		if ($CPEDescripcion =="")
			$CPEDescripcion=NULL;
			
	$CPEDuracion = $_POST[('CPEDuracion')];
		if ($CPEDuracion =="")
			$CPEDuracion=NULL;
			
	$CMUFechaProduccion = $_POST[('CMUFechaProduccion')];
		if ($CMUFechaProduccion =="")
			$CMUFechaProduccion=NULL;
			
	$CMUNumeroCanciones = $_POST[('CMUNumeroCanciones')];
		if ($CMUNumeroCanciones =="")
			$CMUNumeroCanciones=NULL;
			
	 $CMUFormato = $_POST[('CMUFormato')];
	 	if ($CMUFormato =="")
			$CMUFormato=NULL;
			
	 $FKDISQId = $_POST[('FKDISQId')];
			
	$CLBReseña = $_POST[('CLBReseña')];
		if ($CLBReseña =="")
			$CLBReseña=NULL;
			
	$CLBFechaPublicacion = $_POST[('CLBFechaPublicacion')];
	if ($CLBFechaPublicacion =="")
			$CLBFechaPublicacion=NULL;
			
	$CLBDescripcion = $_POST[('CLBDescripcion')];
		if ($CLBDescripcion =="")
			$CLBDescripcion=NULL;
			
	$CLBCantidadPaginas = $_POST[('CLBCantidadPaginas')];
		if ($CLBCantidadPaginas =="")
			$CLBCantidadPaginas=NULL;
			
	$CLBCodigoISBN = $_POST[('CLBCodigoISBN')];
		if ($CLBCodigoISBN =="")
			$CLBCodigoISBN=NULL;
			
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
				echo "entro";
			$query=("insert into gs.contenido values ('$numnuevo','$fecha','$CONombre','$COCosto','$COVecesValorada','$COVecesDescagada','$COTipo','$CAPDescripcion','$CAPUltimaActualizacion','$CAPTamaño','$CAPVersionActual','$CAPVersionSO','$CAPClasificacion','$FKDEId',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL)");
 
			$insert = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
			echo 'Se ha insertado exitosamente con el ID:';
			echo $numnuevo; 
			}
			
			else if ($COTipo==2)
			{
			 $query=("insert into GS.CONTENIDO values ('$numnuevo','$fecha','$CONombre','$COCosto','$COVecesValorada','$COVecesDescagada','$COTipo',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$CPEFechaEstreno','$CPEDescripcion','$CPEDuracion',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL)");
			$insert = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
			echo 'Se ha insertado exitosamente con el ID:';
			echo $numnuevo; 
			}
			else if ($COTipo==3)
			{
				$query=("insert into GS.CONTENIDO values ('$numnuevo','$fecha','$CONombre','$COCosto','$COVecesValorada','$COVecesDescagada','$COTipo',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$CMUFechaProduccion','$CMUNumeroCanciones','$CMUFormato','$FKDISQId',NULL,NULL,NULL,NULL,NULL,NULL)");
			$insert = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
			echo 'Se ha insertado exitosamente con el ID:';
			echo $numnuevo; 
			}
			else if ($COTipo==4)
			{
				$query=("insert into GS.CONTENIDO values ('$numnuevo','$fecha','$CONombre','$COCosto','$COVecesValorada','$COVecesDescagada','$COTipo',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$CLBReseña','$CLBFechaPublicacion','$CLBDescripcion','$CLBCantidadPaginas','$CLBCodigoISBN','$FKEDId')");	
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