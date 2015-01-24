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
								  <h1>Crear Historial</h1>
							


							<form id="InsertContrato" name="InsertContrato" action="insertHistorial.php" method="POST">

											
												</br>
												<label for ="HISTFechaI"> Insertar Fecha inicio: </label>
												<input type="date" name="HISTFechaI" id="HISTFechaI" />
												 </br>
							  <label for ="HISTFechaF"> Insertar fecha fin : </label>
												<input type="date" name="HISTFechaF" id="HISTFechaF"  />
                                                                                    </br>
                                              <label for ="DETipo">Tipo: </label>
                                              <select name ="HISTTipo" size="1">
                                                <option value ="1">Sesion</OPTION> 
                                                <option value ="2">Accion</OPTION> 
                                                <option value ="3">Modificacion de rol</OPTION> 
                                              </select>
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
													
													
												<label for ="FKCAId"> Accion: </label>
													<select name="FKACId" >
												
																			<?php 
																				$enlace =  mysql_connect('127.0.0.1', 'root', '');
																				if (!$enlace) 
																					{
																						die('No pudo conectarse: ' . mysql_error());
																					}
																				$Us 	= mysql_query("SELECT * FROM gs.accion");	
																				$num_registros = mysql_num_rows($Us);
																				for ($i=0;$i<=$num_registros;$i++)
																					{
																						$modelo 	= mysql_query("SELECT * FROM gs.accion as L WHERE L.ACId='$i'");
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
                                                <label for ="FKCAId"> Rol: </label>
													<select name="FKROId" >
												
																			<?php 
																				$enlace =  mysql_connect('127.0.0.1', 'root', '');
																				if (!$enlace) 
																					{
																						die('No pudo conectarse: ' . mysql_error());
																					}
																				$Us 	= mysql_query("SELECT * FROM gs.rol");	
																				$num_registros = mysql_num_rows($Us);
																				for ($i=0;$i<=$num_registros;$i++)
																					{
																						$modelo 	= mysql_query("SELECT * FROM gs.rol as L WHERE L.ROId='$i'");
																						$arreglo 	= mysql_fetch_row($modelo);
																						$row_codigo = $arreglo	[0]; 
																						$row_nombre = $arreglo	[1];
																						//printf ("$row_codigo");
																						echo("<option value=$row_codigo>$row_nombre</option>");
																					}
																				mysql_close($enlace);	
																			?>
																		</select>
												
												
												<input type="submit" name="Crear" value="Crear"  />
                
																																					 
								  </form>
							
							

									</div>
	</div>
	
	
	
<div id="Pie">Universidad Catolica Andres Bello | Base de Datos I | Elaborado por Christian Vidal, Alberto Reveron, Johan De Freitas
</div></div>
</body>
</html>