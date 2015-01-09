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
  <div id="Menu"><a href="Index.php"><img src="Imagenes/boton_gs_principal.jpeg" alt="btn_principal" width="225" 			height="60" border="0" /></a><a href="MiCuenta.php"><img src="Imagenes/boton_gs_cuenta.jpeg" alt="btn_vehiculos" width="225" height="60" border="0" /></a><a href="Nosotros.php"><img src="Imagenes/boton_gs_nosotros.jpeg" alt="btn_micuenta" width="225" height="60" border="0" /></a><a href="Contactenos.php"><img src="Imagenes/boton_gs_contacto.jpeg" alt="btn_nosotros" width="225" height="60" border="0" /></a></div>
  <div id="Contenido">
    <div id="Texto">
      <h1>Bienvenido      </h1>
      <p>Inicie sesion para obtener informacion mas detallada...</p>
      <p><img src="Imagenes/login.jpg" width="346" height="346" alt="login" /></p>
    </div>
    <div id="Imagenes">
   	  <div>
      <form id="CrearEmpleado" name="CrearEmpleado" action="Conexion.php" method="POST">
        <p>
        <p>
        <label for="Usuario" style="margin-left:45px" s>Usuario: </label>
        <input type="text" name="Usuario" />
        <br/>
        <br/>
        <label for="Password" style="margin-left:45px" >Password: </label>
        <input type="password" name="Password" />
        <input type="submit" name="Login" value="Login" style="margin-left:200px" />
      	</p>
        <br/>
       	</p>
      	</form>
		</div>
    	</div>    
		</div>
<div id="Pie">Universidad Catolica Andres Bello | Base de Datos I | Elaborado por Christian Vidal, Alberto Reveron, Johan De Freitas</div>
</div>
</body>
</html>
