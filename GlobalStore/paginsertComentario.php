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
								  <h1>Crear comentario</h1>
							
							
												
							
							<form id="InsertComentario" name="InsertComentario" action="InsertComentario.php" method="POST">

											
												</br>
												<label for ="COMDescripcion"> Descripcion del comentario: </label>
												<input type="text" name="COMDescripcion" maxlength="15" id="COMDescripcion" />
										
                                                
												<label for ="FKPERId">  Persona: </label>
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
																						$row_nombre2 = $arreglo	[2];
																						$row_nombre3 = $arreglo	[3];
																						//printf ("$row_codigo");
																						echo("<option value=$row_codigo>$row_nombre $row_nombre2 $row_nombre3</option>");
																					}
																				mysql_close($enlace);	
																			?>
																		</select>
												</br>
												<label for ="FKCOId">  Contenido: </label>
													<select name="FKCOId" id="FKCOId" >
												
																			<?php 
																				$enlace =  mysql_connect('127.0.0.1', 'root', '');
																				if (!$enlace) 
																					{
																						die('No pudo conectarse: ' . mysql_error());
																					}
																				$Us 	= mysql_query("SELECT * FROM gs.contenido");	
																				$num_registros = mysql_num_rows($Us);
																				for ($i=0;$i<=$num_registros;$i++)
																					{
																						$modelo 	= mysql_query("SELECT * FROM gs.contenido as L WHERE L.COId='$i'");
																						$arreglo 	= mysql_fetch_row($modelo);
																						$row_codigo = $arreglo	[0]; 
																						$row_nombre = $arreglo	[2];
																						$row_nombre2 = $arreglo	[6];
																						switch ($row_nombre2) 
							{
    							case 1:
        							$row_nombre2 = 'APP';
       							 	break;
   								 case 2:
       								$row_nombre2 = 'Pelicula';
       								 break;
								case 3:
       								$row_nombre2 = 'Musica';
       								 break;
								case 4:
       								$row_nombre2 = 'Libro';
       								 break;
							} 
																						//printf ("$row_codigo");
																						echo("<option value=$row_codigo>$row_nombre / $row_nombre2</option>");
																					}
																				mysql_close($enlace);	
																			?>
																		</select>
												</br>
												
												<input type="submit" name="Crear" value="Crear"  />
                
																																					 
								  </form>
							
							

									</div>
	</div>
	
	
	
<div id="Pie">Universidad Catolica Andres Bello | Base de Datos I |Elaborado por Christian Vidal, Alberto Reveron, Johan De Freitas</div>
</div>
</body>
</html>