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
	<h1>Eliminar Director Pelicula</h1>
	<form id="Delete_Director_Pelicula" name="DeleteDirector_Pelicula" action="delete_Director_Pelicula.php" method="POST">
	</br>
	</br>	
	<label for ="LUDescripcion"> Director Pelicula: </label>
	</br>
	</br>
    <select name="Director_Pelicula">
	<?php 
		$enlace =  mysql_connect('127.0.0.1', 'root', '');
		if (!$enlace) 
		{
			die('No pudo conectarse: ' . mysql_error());
		}
		$Us 	= mysql_query("SELECT * FROM gs.Director_Pelicula");	
		$num_registros = mysql_num_rows($Us);
		for ($i=0;$i<=$num_registros;$i++)
		{
		$modelo 	= mysql_query(" SELECT DINombre, CONombre, FKDIId FROM gs.Director_Pelicula ap, gs.director as a, (SELECT * FROM gs.contenido where COTipo = 2) as p WHERE ap.FKDIId=a.DIId and ap.fkCOId=COId and ap.fkDIId='$i'");
		$arreglo 	= mysql_fetch_row($modelo);
		$row_codigo = $arreglo	[2];
		$row_nombre = $arreglo	[0];
		$row_nombre2 = $arreglo	[1];
		if (($row_nombre!= '') and ($row_nombre2!=''))
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