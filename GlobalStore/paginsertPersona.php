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
								  <h1>Crear Persona</h1>


							<form id="InsertPersona" name="InsertPersona" action="InsertPersona.php" method="POST">

							  <p><br>
												  <label for ="PERCedula">  *Cedula: </label>
												  <input type="number" name="PERCedula"  />
												  
												  </br>
							 
												  <label for ="PERNombre"> *Nombre: </label>
												  <input type="varchar" name="PERPnombre" />
												  </br>
												  <label for ="PERPapellido"> *Apellido: </label>
												  <input type="varchar" name="PERPapellido"  />
												  
												  
												  </br>
												  <label for ="PERSnombre"> S Nombre: </label>
												  <input type="varchar" name="PERSnombre" />
												  
												  </br>
												  <label for ="PERSapellido"> S Apellido: </label>
												  <input type="varchar" name="PERSapellido"  />
							 					  </br>
												  <label for ="PERRif"> Rif: </label>
												  <input type="varchar" name="PERRif"  />
												  </br>
												  
												  <label for ="PERFecha_nacimiento"> *Fecha de nacimiento: </label>
												  <input type="date" name="PERFecha_nacimiento"  />
												  </br>
												  
												  <label for ="PERTipo"> <br />
											      Telefono: </label>
												  <input type="number" name="PERTelefono" min='1' max='2'/>
												  </br>
												  
												  <label for ="PERTipo"> *Correo: </label>
												  <input type="number" name="PERCorreo" min='1' max='2'/>
												  </br>
												  
												  <label for ="PERTipo"> *Tipo: </label>
                                                  <select name ="PERTipo" size="1">
                                                    <option value ="1">Empleado</OPTION> 
                                                    <option value ="2">Cliente</OPTION> 
                                                  </select>
												  </br>
												  <label for ="PEREMNivel_Educativo"> Nivel educativo: </label>
                                                  <select name ="PEMNivelEducativo" size="1">
                                                    <option value ="1">NA</OPTION> 
                                                    <option value ="2">Primaria</OPTION> 
                                                    <option value ="3">Secundaria</OPTION> 
                                                    <option value ="4">Tecnico</OPTION> 
                                                    <option value ="5">Licenciado</OPTION> 
                                                    <option value ="6">Postgrado</OPTION> 
                                                  </select>
												  </br>
												  
												  <label for ="PEREMGrupo_sanguineo"> <br />
											      Grupo sanguineo: </label>
                                                  <select name ="PEMGrupoSanguineo" size="1">
                                                    <option value ="1">A</OPTION> 
                                                    <option value ="2">B</OPTION> 
                                                    <option value ="3">AB</OPTION> 
                                                    <option value ="4">O</OPTION> 
                                                  </select>
												  </br>
												  
      	  
                                                  
												  <label for ="PERCLEdo_Civil"> Estado civil : </label>
                                                  <select name ="PECLEdoCivil" size="1">
                                                    <option value ="1">Soltero</OPTION> 
                                                    <option value ="2">Casado</OPTION> 
                                                    <option value ="3">Divorciado</OPTION> 
                                                    <option value ="4">Viudo</OPTION> 
                                                  </select>
												  </br>
							  
												  
												  <label for ="PERCLFecha_Registro"> Fecha de registro: </label>
												  <input type="date" name="PECLFechaRegistro" min='1' />
												  </br>
							  
												  <label for ="PERCLFecha_Registro"> *Username: </label>
												  <input type="date" name="PUSUsername" min='1' />
												  </br>
												  
												  <label for ="PERCLFecha_Registro"> *Contraseña </label>
												  <input type="date" name="PUSContraseña" min='1' />
							  </p>
							  <p>
							    
							    
							    <input type="submit" name="Crear" value="Crear"  />
                                <label for ="Campos"> *Campos Obligatorios </label>
							    
						      </p>
																																					 
								  </form>
							
							

									</div>
	</div>
	
	
	
<div id="Pie">Universidad Catolica Andres Bello | Base de Datos I | Elaborado por Christian Vidal, Alberto Reveron, Johan De Freitas</div>
</div>
</body>
</html>