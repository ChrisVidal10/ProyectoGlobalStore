<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Global Store</title>
<link href="CCS/Estilo_Principal.css" rel="stylesheet" type="text/css" />
<link href="CCS/Textos.css" rel="stylesheet" type="text/css" />

<script src="js/js-inicio.js"></script>

<script  src="http://www.google.com/jsapi" type="text/javascript"></script>

<script type="text/javascript">

	google.load('jquery','1.4.3');
	google.setOnLoadCallback( function()
	{	
		$('#menu li').click( function(event) 
		{
			var id = $(event.target).index();
			$('.activado').removeClass('activado');
			$(event.target).addClass('activado');
		})
	});
	
</script>

</head>

<body>
<div id="Principal">

		<div id="Encabezado1">
			<img src="Imagenes/enca2.png" alt="Encabezado" width="901" height="200" />
            
     
			<img src="Imagenes/carbonFiber_1680.jpg" width="900" height="5"alt="Encabezado" />
            
		</div>		

	<div id="Contenido1" );>
		<br>
		 	<div id="menu" >
                <ul>
                    <li onClick="ocultarDiv('consultar');ocultarDiv('reportes');ocultarDiv('eliminar');mostrarDiv('insertar')">INSERTAR</li>
                    <li onClick="ocultarDiv('insertar');ocultarDiv('reportes');ocultarDiv('eliminar');mostrarDiv('consultar')">CONSULTAR</li>   
                    <li onClick="ocultarDiv('insertar');ocultarDiv('consultar');ocultarDiv('eliminar');mostrarDiv('reportes')">REPORTES</li>
                    <li onClick="ocultarDiv('insertar');ocultarDiv('consultar');ocultarDiv('reportes');mostrarDiv('eliminar')">ELIMINAR</li>
                    
                          
                </ul>
            </div>
			
			
			<div id="insertar" style="margin-top:0px">
                    <div class="pestañas">
                   
                    
                       <li><a href="paginsertaccion.php">Acción</a></li>
                            <li><a href="paginsertActor.php"> Actor </a></li>
                            <li><a href="paginsertAutor.php"> Autor </a></li>
                            <li><a href="paginsertBanco.php"> Banco </a></li>
                            <li><a href="paginsertCantante.php"> Cantante </a></li>
                             <li><a href="paginsertCaracteristica.php"> Caracteristica </a></li>
                             <li><a href="paginsertCargo.php"> Cargo </a></li>
                             <li><a href="paginsertDesarrollador.php"> Desarrollador </a></li>
                             <li><a href="paginsertLenguaje.php"> Lenguaje </a></li>
                             <li><a href="paginsertPersona.php"> Persona </a></li>
                             <li><a href="paginsertPromocion.php"> Promocion </a></li>
                             <li><a href="paginsertContenido.php"> Contenido </a></li>
                             
							
                    </div>
					</div>
				    <div id="consultar" style="margin-top:0px">  
                	<div class="pestañas">
                      
                      		<li><a href="DataTable_Accion.php">Acción</a></li>
							<li><a href="DataTable_Actor.php"> Actor</a></li>
                            <li><a href="DataTable_Autor.php"> Autor </a></li>
                            <li><a href="DataTable_Banco.php"> Banco </a></li>
                            <li><a href="DataTable_Cantante.php"> Cantante </a></li>
                            <li><a href="DataTable_Caracteristica.php"> Caracteristica </a></li>
                            <li><a href="DataTable_Cargo.php"> Cargo </a></li>
                            <li><a href="DataTable_Desarrollador.php"> Desarrollador </a></li>
                            <li><a href="DataTable_Lenguaje.php"> Lenguaje </a></li>
                            <li><a href="DataTable_Persona.php"> Persona </a></li>
                            <li><a href="DataTable_Promocion.php"> Promocion </a></li>
							<li><a href="DataTable_Contenido.php"> Contenido </a></li>
                    </div>     
                </div>
            
            	<div id="reportes" style="margin-top:0px">
                	<div class="pestañas">
                    <li><a href="DataTable_Accion.php">Acción</a></li>
							<li><a href="DataTable_Actor.php"> Actor</a></li>
                             <li><a href="DataTable_Autor.php"> Autor </a></li>
                             <li><a href="DataTable_Banco.php"> Banco </a></li>
                             <li><a href="DataTable_Cantante.php"> Cantante </a></li>
                             <li><a href="DataTable_Caracteristica.php"> Caracteristica </a></li>
                             <li><a href="DataTable_Cargo.php"> Cargo </a></li>
                             <li><a href="DataTable_Desarrollador.php"> Desarrollador </a></li>
                             <li><a href="DataTable_Lenguaje.php"> Lenguaje </a></li>
							 <li><a href="DataTable_Persona.php"> Persona </a></li>
                              <li><a href="DataTable_Promocion.php"> Promocion </a></li>
                              <li><a href="DataTable_Contenido.php"> Contenido </a></li>
                        
                    </div>
                </div>
                
                <div id="eliminar" style="margin-top:0px">
                	<div class="pestañas">
                     <li><a href="pagdelete_Accion.php">Accion</li>
                     <li><a href="pagdelete_Actor.php">Actor</li>
                      <li><a href="pagdelete_Autor.php"> Autor </a></li>
                      <li><a href="pagdelete_Banco.php"> Banco </a></li>
                      <li><a href="pagdelete_Cantante.php"> Cantante </a></li>
                      <li><a href="pagdelete_Caracteristica.php"> Caracteristica </a></li>
                      <li><a href="pagdelete_Cargo.php"> Cargo </a></li>
                       <li><a href="pagdelete_Desarrollador.php"> Desarrollador</a></li>
                       <li><a href="pagdelete_Lenguaje.php"> Lenguaje</a></li>
                       <li><a href="pagdelete_Persona.php"> Persona</a></li>
                       <li><a href="pagdelete_Promocion.php"> Promocion</a></li>
                       <li><a href="pagdelete_Contenido.php"> Contenido</a></li>
                 
                    </div>
                </div>
               
		</div>
	  
	  <div id="Pie" >Universidad Catolica Andres Bello | Base de Datos I | Elaborado por Christian Vidal, Alberto Reveron, Johan De Freitas</div>
</div>
</body>
</html>
