<?php

   
   $Nombre = $_POST[('CONombre')];
	
	$Costo = $_POST[('COCosto')];
	
	 $VecesValorada = $_POST[('COVecesValorada')];
	
	$VecesDescargada = $_POST[('COVecesDescargada')];
	
	$Tipo = $_POST[('COTipo')];

	if ($Tipo == 1)
	{
		header("Location:LoginSuccess.php");
	}
	
	
	
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
			
	
	
	
	
	
	
	
	
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Global Store</title>
	<br>
    
	
	
</div>
</head>



switch ($COTipo) 
							{
    							case 1:
        							/*$query=("insert into gs.contenido (COId,COFechaRegistro,CONombre,COCosto,COVecesValorada,COVecesDescagada,COTipo,CAPDescripcion,CAPUltimaActualizacion,CAPTamaño,CAPVersionActual,CAPVersionSO,CAPClasificacion,FKDEId,CPEFechaEstreno,CPEDescripcion,CPEDuracion,CMUFechaProduccion,CMUNumeroCanciones,CMUFormato,FKDISQId,CLBReseña,CLBFechaPublicacion,CLBDescripcion,CLBCantidadPaginas,CLBCodigoISBN,FKEDId) values ('$numnuevo','$fecha','$CONombre','$COCosto','$COVecesValorada','$COVecesDescagada','$COTipo','$CAPDescripcion','$CAPUltimaActualizacion','$CAPTamaño','$CAPVersionActual','$CAPVersionSO','$CAPClasificacion','$FKDEId',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL)");*/
									$query=("insert into gs.contenido (COId,COFechaRegistro,CONombre,COCosto,COVecesValorada,COVecesDescagada,COTipo,CAPDescripcion,CAPUltimaActualizacion,CAPTamaño,CAPVersionActual,CAPVersionSO,CAPClasificacion,FKDEId,CPEFechaEstreno,CPEDescripcion,CPEDuracion,CMUFechaProduccion,CMUNumeroCanciones,CMUFormato,FKDISQId,CLBReseña,CLBFechaPublicacion,CLBDescripcion,CLBCantidadPaginas,CLBCodigoISBN,FKEDId) values (1,14/06/12,'Candy Crush',10.99,10,5,1,'Descarga gratis Candy Crush y disfruta de mas de 140 niveles y nuevos modos de juego',11/11/14,15,'1.2.04','Windows 8','25',1,NULL,NULL,NULL,NULL,NULL,NULL,2,NULL,NULL,NULL,NULL,NULL,3)");
 
			$insert = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
			echo 'Se ha insertado exitosamente con el ID:';
			echo $numnuevo; 
       							 	break;
   								 case 2:
       								$query=("insert into GS.CONTENIDO (COId,COFechaRegistro,CONombre,COCosto,COVecesValorada,COVecesDescagada,COTipo,CAPDescripcion,CAPUltimaActualizacion,CAPTamaño,CAPVersionActual,CAPVersionSO,CAPClasificacion,FKDEId,CPEFechaEstreno,CPEDescripcion,CPEDuracion,CMUFechaProduccion,CMUNumeroCanciones,CMUFormato,FKDISQId,CLBReseña,CLBFechaPublicacion,CLBDescripcion,CLBCantidadPaginas,CLBCodigoISBN,FKEDId) values ('$numnuevo','$fecha','$CONombre','$COCosto','$COVecesValorada','$COVecesDescagada','$COTipo',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$CPEFechaEstreno','$CPEDescripcion,'$CPEDuracion',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL)");
			$insert = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
			echo 'Se ha insertado exitosamente con el ID:';
			echo $numnuevo; 
       								 break;
									 case 3:
        							$query=("insert into GS.CONTENIDO (COId,COFechaRegistro,CONombre,COCosto,COVecesValorada,COVecesDescagada,COTipo,CAPDescripcion,CAPUltimaActualizacion,CAPTamaño,CAPVersionActual,CAPVersionSO,CAPClasificacion,FKDEId,CPEFechaEstreno,CPEDescripcion,CPEDuracion,CMUFechaProduccion,CMUNumeroCanciones,CMUFormato,FKDISQId,CLBReseña,CLBFechaPublicacion,CLBDescripcion,CLBCantidadPaginas,CLBCodigoISBN,FKEDId) values ('$numnuevo','$fecha','$CONombre','$COCosto','$COVecesValorada','$COVecesDescagada','$COTipo',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$CMUFechaProduccion','$CMUNumeroCanciones','$CMUFormato','$FKDISQId',NULL,NULL,NULL,NULL,NULL,NULL)");
			$insert = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
			echo 'Se ha insertado exitosamente con el ID:';
			echo $numnuevo; 
       							 	break;
   								 case 4:
       							$query=("insert into GS.CONTENIDO (COId,COFechaRegistro,CONombre,COCosto,COVecesValorada,COVecesDescagada,COTipo,CAPDescripcion,CAPUltimaActualizacion,CAPTamaño,CAPVersionActual,CAPVersionSO,CAPClasificacion,FKDEId,CPEFechaEstreno,CPEDescripcion,CPEDuracion,CMUFechaProduccion,CMUNumeroCanciones,CMUFormato,FKDISQId,CLBReseña,CLBFechaPublicacion,CLBDescripcion,CLBCantidadPaginas,CLBCodigoISBN,FKEDId) values ('$numnuevo','$fecha','$CONombre','$COCosto','$COVecesValorada','$COVecesDescagada','$COTipo',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$CLBReseña','$CLBFechaPublicacion','$CLBDescripcion','$CLBCantidadPaginas','$CLBCodigoISBN','$FKEDId')");	
								$insert = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
			echo 'Se ha insertado exitosamente con el ID:';
			echo $numnuevo; 
       								 break;
							}  