<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Contrato</title>
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
								  <h1>Crear Contrato</h1>
							


							<form id="InsertContrato" name="InsertContrato" action="InsertContrato.php" method="POST">

											
												</br>
												<label for ="CONFechaI"> Insertar Fecha inicio: </label>
												<input type="date" name="CONFechaI" maxlength="15" id="CONFechaI" />
												 </br>
							  <label for ="CONFechaF"> Insertar fecha fin : </label>
												<input type="date" name="CONFechaF" maxlength="15" id="CONFechaF"  />
												</br>
							  <label for ="CONCausa"> Insertar causa: </label>
												<input type="text" name="CONCausa" maxlength="15" min="1" />
												</br>
												
												
												
												<label for ="FKPERId"> Persona: </label>
													<select name="FKPERId" >
												
																			<?php 
																				$enlace =  mysql_connect('127.0.0.1', 'root', '');
																				if (!$enlace) 
																					{
																						die('No pudo conectarse: ' . mysql_error());
																					}
																				$Us 	= mysql_query("SELECT * FROM gs.persona");	
																				$num_registros = mysql_num_rows($Us);
																				for ($i=0;$i<=$num_registros;$i++)
																					{
																						$modelo 	= mysql_query("SELECT * FROM gs.persona as L WHERE L.PERId='$i'");
																						$arreglo 	= mysql_fetch_row($modelo);
																						$row_codigo = $arreglo	[0]; 
																						$row_nombre = $arreglo	[1];
																						$row_nombre1 = $arreglo	[2];
																						$row_nombre2 = $arreglo	[3];
																						//printf ("$row_codigo");
																						echo("<option value=$row_codigo>$row_nombre $row_nombre1 $row_nombre2</h2></option>");
																					}
																				mysql_close($enlace);	
																			?>
																		</select>
													</br>
													
													
												<label for ="FKCAId"> Cargo: </label>
													<select name="FKCARId" >
												
																			<?php 
																				$enlace =  mysql_connect('127.0.0.1', 'root', '');
																				if (!$enlace) 
																					{
																						die('No pudo conectarse: ' . mysql_error());
																					}
																				$Us 	= mysql_query("SELECT * FROM gs.cargo");	
																				$num_registros = mysql_num_rows($Us);
																				for ($i=0;$i<=$num_registros;$i++)
																					{
																						$modelo 	= mysql_query("SELECT * FROM gs.cargo as L WHERE L.CARId='$i'");
																						$arreglo 	= mysql_fetch_row($modelo);
																						$row_codigo = $arreglo	[0]; 
																						$row_nombre = $arreglo	[1];
																						//printf ("$row_codigo");
																						echo("<option value=$row_codigo>$row_nombre</option>");
																					}
																				mysql_close($enlace);	
																			?>
																		</select>
												</br>
												
												
												<input type="submit" name="Crear" value="Crear"  />
                
																																					 
								  </form>
							
							

									</div>
	</div>
	
	
	
<div id="Pie">Universidad Catolica Andres Bello | Base de Datos I | Elaborado por Christian Vidal, Alberto Reveron, Johan De Freitas
</div></div>
</body>
</html>