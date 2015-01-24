<?php

   
   $PERCedula = $_POST[('PERCedula')];
	
	$PERPnombre = $_POST[('PERPnombre')];
	
	 $PERPapellido = $_POST[('PERPapellido')];
	
	$PERSnombre = $_POST[('PERSnombre')];
	
	$PERSapellido = $_POST[('PERSapellido')];
	
	$PERRif = $_POST[('PERRif')];
	
	$PERFecha_nacimiento = $_POST[('PERFecha_nacimiento')];
	
	 $PERTipo = $_POST[('PERTipo')];
	 
	 $PERCorreo = $_POST[('PERCorreo')];
	 
	 $PERTelefono = $_POST[('PERTelefono')];
	
	$PEMNivelEducativo = $_POST[('PEMNivelEducativo')];
	
	$PEMGrupoSanguineo = $_POST[('PEMGrupoSanguineo')];
	
	$PECLEdoCivil = $_POST[('PECLEdoCivil')];
	
	$PCLFechaRegistro = $_POST[('PCLFechaRegistro')];
	
	$PUSUsername = $_POST[('PUSUsername')];
	
	$PUSContrasena = $_POST[('PUSContrasena')];
	
	$fecha = date("Y-m-d");
	

	
	if($PERCedula=="" OR $PERPnombre=="" OR $PERPapellido=="" OR $PERFecha_nacimiento=="" OR $PERCorreo=="" OR $PERTipo=="" OR $PUSUsername=="" OR $PUSContrasena=="")
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
 	 	$Respuesta = mysql_query("SELECT * FROM gs.persona as C where PERCedula = 'PERCedula' ");
		$arreglo = mysql_fetch_row($Respuesta);
		if (( $arreglo!=NULL) )
		{
			echo'La persona ya existe en la base de datos';
		
		}
		else
		{ 
			$id= mysql_query("SELECT * FROM gs.persona as C");
			$numero = mysql_num_rows($id);
			$numnuevo = $numero +1;
			echo 'Se ha insertado exitosamente con el ID:';
			echo $numnuevo;  
	
			if  ($PERTipo==1)
			{
				if ($PERSnombre=="")
					$PERSnombre==NULL;
				if ($PERSapellido=="")
					$PERSapellido==NULL;	
				if ($PERRif=="")
					$PERRif==NULL;
				if ($PERTelefono=="")
					$PERTelefono==NULL;
							
			$query=("insert into gs.persona(PERId,PERCedula,PERPnombre,PERPapellido,PERSnombre,PERSapellido,PERRif,PERFecha_nacimiento,PERTelefono,PERCorreo,PERTipo,PEMNivelEducativo,PEMGrupoSanguineo,PECLEdoCivil,PCLFechaRegistro,PUSUsername,PUSContrasena) 
			values ('$numnuevo','$PERCedula','$PERPnombre','$PERPapellido','$PERSnombre','$PERSapellido','$PERRif','$PERFecha_nacimiento','$PERTelefono','$PERCorreo','$PERTipo','$PEMNivelEducativo','$PEMGrupoSanguineo',NULL,NULL,'$PUSUsername','$PUSContrasena')");
			
			$insert = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
			//header("Location:Paginsert.php");
			}
			
			else if ($PERTipo==2)
			{
				if ($PERSnombre=="")
					$PERSnombre==NULL;
				if ($PERSapellido=="")
					$PERSapellido==NULL;	
				if ($PERRif=="")
					$PERRif==NULL;
				if ($PERTelefono=="")
					$PERTelefono==NULL;
					
			 $query=("insert into gs.persona(PERId,PERCedula,PERPnombre,PERPapellido,PERSnombre,PERSapellido,PERRif,PERFecha_nacimiento,PERTelefono,PERCorreo,PERTipo,PEMNivelEducativo,PEMGrupoSanguineo,PECLEdoCivil,PCLFechaRegistro,PUSUsername,PUSContrasena) 
			values ('$numnuevo','$PERCedula','$PERPnombre','$PERPapellido','$PERSnombre','$PERSapellido','$PERRif','$PERFecha_nacimiento','$PERTelefono','$PERCorreo','$PERTipo',NULL,NULL,'$PECLEdoCivil','$fecha','$PUSUsername','$PUSContrasena')");
			$insert = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
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