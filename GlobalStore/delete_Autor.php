<?php
	
	$Autor = ($_POST['Autor']);
	$enlace =  mysql_connect('127.0.0.1', 'root', '');
   	if (!$enlace) 
	{
    	die('No pudo conectarse: ' . mysql_error());
   	}
 	$query=("delete from gs.autor where AUId='$Autor';");
	$insert = mysql_query($query) or die('Consulta fallida:' . mysql_error());
	header("Location:LoginSuccess.php");
	mysql_close($enlace);
?>