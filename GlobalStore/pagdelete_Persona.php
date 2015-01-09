<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Global Storer</title>
<link href="CCS/Estilo_Principal.css" rel="stylesheet" type="text/css" />
<link href="CCS/Textos.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="Principal">
		  <div id="Encabezado">
		  </div>
    <div id="Menu"><a href="Index.php"><img src="Imagenes/Boton_Cines_Principal.jpeg" alt="btn_principal" width="225" height="60" border="0" /></a><a href="Vehiculos.php"><img src="Imagenes/Boton_Cines_Cines.jpg" alt="btn_vehiculos" width="225" height="60" border="0" /></a><a href="MiCuenta.php"><img src="Imagenes/Boton_Cines_MiCuenta.jpg" alt="btn_micuenta" width="225" height="60" border="0" /></a><a href="Nosotros.php"><img src="Imagenes/Boton_Cines_Nosotros.jpg" alt="btn_nosotros" width="225" height="60" border="0" /></a></div>
	
	<div id="Contenido">
	<div id="Texto">
	<h1>Eliminar Persona</h1>
	<form id="Delete_Persona" name="DeletePersona" action="delete_Persona.php" method="POST">
	</br>
	</br>	
	<label for ="LUDescripcion"> Persona: </label>
	</br>
	</br>
    <select name="Persona">
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
		$row_nombre = $arreglo	[2];
		$row_nombre2 = $arreglo	[3];
		echo("<option value=$row_codigo>$row_nombre $row_nombre2</option>");
		}
		mysql_close($enlace);	
	?>
	<br>
    </select>
    <br/>
    <br/>
    <input type="submit" name="Eliminar" value="Eliminar"  />
    </form>
	</div>
	</div>
    	
<div id="Pie">Universidad Catolica Andres Bello | Base de Datos I | Elaborado por Christian Vidal, Alberto Reveron, Johan De Freitas</div>
</div>
</body>
</html>