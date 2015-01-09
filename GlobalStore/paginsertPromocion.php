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
    <div id="Menu"><a href="Index.php"><img src="Imagenes/boton_gs_principal.jpeg" alt="btn_principal" width="225" height="60" border="0" /></a><a href="MiCuenta.php"><img src="Imagenes/boton_gs_cuenta.jpeg" alt="btn_vehiculos" width="225" height="60" border="0" /></a><a href="Nosotros.php"><img src="Imagenes/boton_gs_nosotros.jpeg" alt="btn_micuenta" width="225" height="60" border="0" /></a><a href="Contactenos.php"><img src="Imagenes/boton_gs_contacto.jpeg" alt="btn_nosotros" width="225" height="60" border="0" /></a></div>
	
	<div id="Contenido">
	
								<div id="Texto">
								  <h1>Crear Promocion</h1>


							<form id="InsertPromocion" name="InsertPromocion" action="InsertPromocion.php" method="POST">

												<br>
												<label for ="PRNombre"> Insertar nombre de promocion: </label>
												<input type="text" name="PRNombre"  />
												
												</br>
												<label for ="PRFechaInicio"> Insertar Fecha inicio: </label>
												<input type="date" name="PRFechaInicio" />
													</br>
												<label for ="PRFechaFin"> Insertar Fecha fin: </label>
												<input type="date" name="PRFechaFin"  />
												
												 </br>
												<label for ="PRValor"> Valor de la promocion: </label>
												<input type="number" name="PRValor"  />
												</br>
												
												<br>
												<label for ="PREstado">Estado: </label>
												 <select name ="PREstado" size="1">
															<option value ="1">Activo</OPTION> 
															<option value ="2">Inactivo</OPTION> 
												</select>			
												
												<br>
												<label for ="PRDescripcion"> Descripcion: </label>
												<input type="text" name="PRDescripcion"  />
												
																			
												<br>
												<label for ="PRCondiciones"> Condiciones: </label>
												<input type="text" name="PRCondiciones"  />
												
																			
												<br>
                                                <br>
												<input type="submit" name="Crear" value="Crear"  />
                
																																					 
								  </form>
							
							

									</div>
	</div>
	
	
	
<div id="Pie">Universidad Catolica Andres Bello | Base de Datos I | Elaborado por Christian Vidal, Alberto Reveron, Johan De Freitas</div>
</div>
</body>
</html>