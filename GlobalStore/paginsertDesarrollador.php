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
  <div id="Encabezado"></div>
  <div id="Menu"><a href="Index.php"><img src="Imagenes/boton_gs_principal.jpeg" alt="btn_principal" width="225" height="60" border="0" /></a><a href="MiCuenta.php"><img src="Imagenes/boton_gs_cuenta.jpeg" alt="btn_vehiculos" width="225" height="60" border="0" /></a><a href="Nosotros.php"><img src="Imagenes/boton_gs_nosotros.jpeg" alt="btn_micuenta" width="225" height="60" border="0" /></a><a href="Contactenos.php"><img src="Imagenes/boton_gs_contacto.jpeg" alt="btn_nosotros" width="225" height="60" border="0" /></a></div>
	<div id="Contenido">
    	<div id="Texto">
   		  <h1>Crear Desarrollador</h1>
    <form id="InsertAccion" name="InsertAccion" action="insertDesarrollador.php" method="POST">
    
      	<p>
      	  <label for="DENombre" style="margin-left:45px" s> Nombre:    </label> 
      	  <input type="text" name="txtnombre" />
      	  
      	  <label for="DECorreo" style="margin-left:45px" s> <br />
      	    Correo:  </label> 
      	  <input type="text" name="txtcorreo" />
      	  
      	  <label for="DEWebSite" style="margin-left:45px" s> <br />
      	    WebSite: </label> 
      	  <input type="text" name="txtwebsite" />
      	</p>
      	<p>
      	  
      	  <label for ="DETipo">Tipo: </label>
      	  <select name ="DETipo" size="1">
      	    <option value ="1">Empresa</OPTION> 
      	    <option value ="2">Persona</OPTION> 
   	      </select>
      	  <input type="submit" name="Crear" value="Crear" style="margin-left:50px" />
   	    </p>
                
                                                                                                                             
          </form>
    
    
   	</div>
	</div>
<div id="Pie">Universidad Catolica Andres Bello | Base de Datos I | Elaborado por Christian Vidal, Alberto Reveron, Johan De Freitas</div>
</div>
</body>
</html>
