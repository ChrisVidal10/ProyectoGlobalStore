<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Global Store</title>
<link href="CCS/Estilo_Principal.css" rel="stylesheet" type="text/css" />
<link href="CCS/Textos.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="Principal">
		  <div id="Encabezado">
		  </div>
    <div id="Menu"><a href="Index.php"><img src="Imagenes/boton_gs_principal.jpeg" alt="btn_principal" width="225" height="60" border="0" /></a><a href="Vehiculos.php"><img src="Imagenes/boton_gs_cuenta.jpeg" alt="btn_vehiculos" width="225" height="60" border="0" /></a><a href="MiCuenta.php"><img src="Imagenes/boton_gs_nosotros.jpeg" alt="btn_micuenta" width="225" height="60" border="0" /></a><a href="Nosotros.php"><img src="Imagenes/boton_gs_contacto.jpeg" alt="btn_nosotros" width="225" height="60" border="0" /></a></div>
	
	<div id="Contenido">
	  
	
								<div id="Texto">
								  <h1>Crear Contenido</h1>


							<form id="InsertContenido" name="Insert	Contenido" action="InsertContenido.php" method="POST">

							    <p>
							      <label for ="CONombre">  *Nombre: </label>
							      <input type="varchar" name="CONombre" id="CONombre" style="margin-left:250"  />
							      
							      
							      <label for ="PERNombre"> *Costo: </label>
							      <input type="float" name="COCosto" id="COCosto" />
						      </p>
							    <p>	
							      
							      <label for ="COVecesValorada"> *Veces Valorada: </label>
							      <input type="number" name="COVecesValorada" id="COVecesValorada"  />
							      
							      
							      
							      <label for ="CAPDescripcion">  *Veces Descargada: </label>
							      <input type="number" name="COVecesDescargada" id="COVecesDescargada" />
							      
							      
							      
							      <label for ="PERTipo"> <br />
							        *Tipo: </label>
							      <select name ="COTipo" size="1">
							        <option value ="1">App</OPTION> 
							        <option value ="2">Pelicula</OPTION> 
							        <option value ="3">Musica</OPTION> 
							        <option value ="4">Libro</OPTION> 
						          </select>
							      
							      
							      
							      <label for ="CAPDescripcion">  App Descripcion: </label>
							      <input name="CAPDescripcion" type="varchar" id="CAPDescripcion" />
						      </p>
							    <p>	 
							      
							      <label for ="CAPDescripcion">Ultima Actualizacion : </label>
							      <input name="CAPUltimaActualizacion" type="date" id="CAPUltimaActualizacion" /> 
							      
							      <label for ="CAPDescripcion">Tamaño: </label>
							      <input name="CAPTamaño" type="varchar" id="CAPTamaño" />
						      </p>
							    <p> 
							      
							      <label for ="CAPDescripcion">Version Actual: </label>
							      <input name="CAPVersionActual" type="varchar" id="CAPVersionActual" /> 
							      
							      <label for ="CAPDescripcion">Version SO: </label>
							      <input name="CAPVersionSO" type="varchar" id="CAPVersionSO" />
						      </p>
							    <p> 
							      
							      <label for ="CAPDescripcion">Clasificacion: </label>
							      <input name="CAPClasificacion" type="varchar" id="CAPClasificacion" /> 
							      
							      <label for ="CAPDescripcion">Desarrollador: </label>
							      <select name ="FKDEId" id="FKDEId">
							        <?php
								 $enlace =  mysql_connect('127.0.0.1', 'root', '');
									if (!$enlace) 
									{
										die('No pudo conectarse: ' . mysql_error());
									}
									$Us 	= mysql_query("SELECT * FROM gs.desarrollador");	
									$num_registros = mysql_num_rows($Us);
									for ($i=0;$i<=$num_registros;$i++)
									{
									$modelo 	= mysql_query("SELECT * FROM gs.desarrollador as L WHERE L.DEId='$i'");
									$arreglo 	= mysql_fetch_row($modelo);
									$row_codigo = $arreglo	[0]; 
									$row_nombre = $arreglo	[1];
									echo("<option value=$row_codigo>$row_nombre</option>");
									}
									mysql_close($enlace);	
											 ?>
						          </select>
							      
							      <label for ="CAPDescripcion"><br />
						          Fecha de Estreno: </label>
							      <input name="CPEFechaEstreno" type="date" id="CPEFechaEstreno" /> 
							      
							      <label for ="CAPDescripcion">Pelicula Descripcion: </label>
							      <input name="CPEDescripcion" type="varchar" id="CPEDescripcion" />
						      </p>
							    <p> 
							      
							      <label for ="CAPDescripcion">Duracion: </label>
							      <input name="CPEDuracion" type="number" id="CPEDuracion" /> 
						      </p>
							    <p>
							      <label for ="CAPDescripcion">Fecha de Produccion: </label>
							      <input name="CMUFechaProduccion" type="date" id="CMUFechaProduccion" /> 
							      
							      <label for ="CAPDescripcion"># Canciones: </label>
							      <input name="CMUNumeroCanciones" type="number" id="CMUNumeroCanciones" /> 
						      </p>
							    <p>
							      <label for ="CAPDescripcion">Formato: </label>
							      <input name="CMUFormato" type="varchar" id="CMUFormato" /> 
							      
							      <label for ="CAPDescripcion">Disquera: </label>
							      <select name ="FKDISQId" id="FKDISQId">
							        <?php
								 $enlace =  mysql_connect('127.0.0.1', 'root', '');
									if (!$enlace) 
									{
										die('No pudo conectarse: ' . mysql_error());
									}
									$disq 	= mysql_query("SELECT * FROM gs.disquera");	
									$num_registros = mysql_num_rows($disq);
									for ($i=0;$i<=$num_registros;$i++)
									{
									$modelo 	= mysql_query("SELECT * FROM gs.disquera as L WHERE L.DISQId='$i'");
									$arreglo 	= mysql_fetch_row($modelo);
									$row_codigo = $arreglo	[0]; 
									$row_nombre = $arreglo	[1];
									echo("<option value=$row_codigo>$row_nombre</option>");
									}
									mysql_close($enlace);	
											 ?>
						          </select>
						      </p>
							    <p>
							      
							      <label for ="CAPDescripcion">Reseña: </label>
							      <input name="CLBReseña" type="varchar" id="CLBReseña" /> 
						      </p>
							    <p>
							      <label for ="CAPDescripcion">Fecha de Publicacion: </label>
							      <input name="CLBFechaPublicacion" type="date" id="CLBFechaPublicacion" /> 
							      
							      <label for ="CAPDescripcion">Descripcion: </label>
							      <input name="CLBDescripcion" type="varchar" id="CLBDescripcion" /> 
						      </p>
							    <p>
							      <label for ="CAPDescripcion"># Paginas: </label>
							      <input name="CLBCantidadPaginas" type="number" id="CLBCantidadPaginas" /> 
							      
							      
							      <label for ="CAPDescripcion">ISBN: </label>
							      <input name="CLBCodigoISBN" type="varchar" id="CLBCodigoISBN" />
						      </p>
							    <p> 
							      
							      
							      <label for ="CAPDescripcion">Editorial: </label>
							      <select name ="FKEDId" id="FKEDId">
							        <?php
								 $enlace =  mysql_connect('127.0.0.1', 'root', '');
									if (!$enlace) 
									{
										die('No pudo conectarse: ' . mysql_error());
									}
									$Us 	= mysql_query("SELECT * FROM gs.editorial");	
									$num_registros = mysql_num_rows($Us);
									for ($i=0;$i<=$num_registros;$i++)
									{
									$modelo 	= mysql_query("SELECT * FROM gs.editorial as L WHERE L.EDId='$i'");
									$arreglo 	= mysql_fetch_row($modelo);
									$row_codigo = $arreglo	[0]; 
									$row_nombre = $arreglo	[1];
									echo("<option value=$row_codigo>$row_nombre</option>");
									}
									mysql_close($enlace);	
											 ?>
						          </select>
						      </p>
							    <p>
							      
							      
							      
							      <input type="submit" name="Crear" value="Crear"  />
							      <label for ="Campos"> *Campos Obligatorios </label>
						      </p>
						      </p>
							    
						    
																																					 
								  </form>
							
							

									</div>
	</div>
	
	
	
<div id="Pie">Universidad Catolica Andres Bello | Base de Datos I | Elaborado por Christian Vidal, Alberto Reveron, Johan De Freitas</div>
</div>
</body>
</html>