<?php
	
	$Genero_Libro = ($_POST['Genero_Libro']);
	$enlace =  mysql_connect('127.0.0.1', 'root', '');
   	if (!$enlace) 
	{
    	die('No pudo conectarse: ' . mysql_error());
   	}
 	$query=("delete from gs.Genero_Libro where fkGELId='$Genero_Libro';");
	$insert = mysql_query($query) or die('Consulta fallida:' . mysql_error());
	header("Location:LoginSuccess.php");
	mysql_close($enlace);
?>