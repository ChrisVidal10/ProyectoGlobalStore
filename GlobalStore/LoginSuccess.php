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
                             <li><a href="paginsertComentario.php"> Comentario </a></li>
                             <li><a href="paginsertContrato.php"> Contrato </a></li>
                               <li><a href="paginsertHistorial.php"> Historial </a></li>
                               <li><a href="paginsertImagen.php"> Imagen </a></li>
                               <li><a href="paginsertVideo.php"> Video </a></li>
                               <li><a href="paginsertCategoria.php"> Categoria </a></li>
                             <li><a href="paginsertDirector.php"> Director </a></li>
                             <li><a href="paginsertDisquera.php"> Disquera </a></li>
                             <li><a href="paginsertEditorial.php"> Editorial </a></li>
                             <li><a href="paginsertGenerol.php"> Generol </a></li>
                             <li><a href="paginsertGenerom.php"> Generom </a></li>
                             <li><a href="paginsertRol.php"> Rol </a></li>
                             <li><a href="paginsertSubtitulo.php"> Subtitulo </a></li>
                             <li><a href="paginsertTipo_so.php"> Tipo_so </a></li>
                             <li><a href="paginsertTipo_tarjeta.php"> Tipo_tarjeta </a></li>
                             <li><a href="paginsertActor_Pelicula.php"> Actor_Pelicula </a></li>
                             <li><a href="paginsertCalificacion.php"> Calificacion </a></li>
                             <li><a href="paginsertDirector_Pelicula.php"> Director_Pelicula </a></li>
                             <li><a href="paginsertGenero_Libro.php"> Genero_Libro </a></li> 
                             <li><a href="paginsertGenero_Musica.php"> Genero_Musica </a></li>
                             <li><a href="paginsertLeng_Pel.php"> Leng_Pel </a></li> 
                             <li><a href="paginsertLibro_Autor.php"> Libro_Autor </a></li>
                             <li><a href="paginsertMusic_Can.php"> Music_Can </a></li>
                             <li><a href="paginsertPeli_Catego.php"> Peli_Catego </a></li>
                             <li><a href="paginsertPromo_Conte.php"> Promo_Conte </a></li>
                             <li><a href="paginsertSo_App.php"> So_App </a></li>
                             <li><a href="paginsertSub_Pelicula.php"> Sub_Pelicula </a></li>
                             <li><a href="paginsertSo_Carac.php"> So_Carac </a></li> 
                             <li><a href="paginsertFactura.php"> Factura </a></li>
                             <li><a href="paginsertLugar.php"> Lugar </a></li>
                             <li><a href="paginsertTarjeta_Credito.php"> Tarjeta_Credito </a></li>
                             <li><a href="paginsertUsuario_Roll.php"> Usuario_Roll </a></li>
                             <li><a href="paginsertVer_Cara.php"> Ver_Cara </a></li>
                               <li><a href="Index.php"> Salir </a></li>
                               
							
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
                            <li><a href="DataTable_Comentario.php"> Comentario </a></li>
                            <li><a href="DataTable_Contrato.php"> Contrato </a></li>
                            <li><a href="DataTable_Historial.php"> Historial </a></li>
                            <li><a href="DataTable_Imagen.php"> Imagen </a></li>
                            <li><a href="DataTable_Video.php"> Video </a></li>
                            <li><a href="DataTable_Categoria.php"> Categoria </a></li>
                            <li><a href="DataTable_Director.php"> Director </a></li>
                            <li><a href="DataTable_Disquera.php"> Disquera </a></li>
                            <li><a href="DataTable_Editorial.php"> Editorial </a></li>
                            <li><a href="DataTable_Generol.php"> Generol </a></li>
                            <li><a href="DataTable_Generom.php"> Generom </a></li>
                            <li><a href="DataTable_Rol.php"> Rol </a></li>
                            <li><a href="DataTable_Subtitulo.php"> Subtitulo </a></li>
                            <li><a href="DataTable_Tipo_so.php"> Tipo_so </a></li>	
                            <li><a href="DataTable_Tipo_tarjeta.php"> Tipo_tarjeta </a></li>
                            <li><a href="DataTable_Actor_Pelicula.php"> Actor_Pelicula </a></li>
                            <li><a href="DataTable_Calificacion.php"> Calificacion </a></li>
                            <li><a href="DataTable_Director_Pelicula.php"> Director_Pelicula </a></li>
                            <li><a href="DataTable_Genero_Libro.php"> Genero_Libro </a></li>
                            <li><a href="DataTable_Genero_Musica.php"> Genero_Musica </a></li>
                            <li><a href="DataTable_Leng_Pel.php"> Leng_Pel </a></li>
                            <li><a href="DataTable_Libro_Autor.php"> Libro_Autor </a></li>
                            <li><a href="DataTable_Music_Can.php"> Music_Can </a></li>
                            <li><a href="DataTable_Peli_Catego.php"> Peli_Catego </a></li>
                            <li><a href="DataTable_Promo_Conte.php"> Promo_Conte </a></li>
                            <li><a href="DataTable_So_App.php"> So_App </a></li>
                            <li><a href="DataTable_Sub_Pelicula.php"> Sub_Pelicula </a></li>	
                            <li><a href="DataTable_So_Carac.php"> So_Carac </a></li>
                            <li><a href="DataTable_Factura.php"> Factura </a></li>
                            <li><a href="DataTable_Lugar.php"> Lugar </a></li>
                            <li><a href="DataTable_Tarjeta_Credito.php"> Tarjeta_Credito </a></li>	
                            <li><a href="DataTable_Usuario_Rol.php"> Usuario_Roll </a></li>	
                            <li><a href="DataTable_Ver_Cara.php"> Ver_Cara </a></li>
                            <li><a href="Index.php"> Salir </a></li>				
                             
                             
                    </div>     
                </div>
            
            	<div id="reportes" style="margin-top:0px">
                	<div class="pestañas">
                    <li><a href="Reporte1.php">R1</a></li>	
                    <li><a href="Reporte2.php">R2</a></li>	
                    <li><a href="Reporte3.php">R3</a></li>
                    <li><a href="Reporte4.php">R4</a></li>
                    <li><a href="Reporte6.php">R6</a></li>
                    <li><a href="Reporte10.php">R10</a></li>
                    <li><a href="Reporte11.php">R11</a></li>
                    <li><a href="Reporte12.php">R12</a></li>
                     <li><a href="Reporte13.php">R13</a></li>
                      <li><a href="Reporte14.php">R14</a></li>
                       <li><a href="Reporte15.php">R15</a></li>
                        <li><a href="Reporte16.php">R16</a></li>
                         <li><a href="Reporte17.php">R17</a></li>
                    
                            <li><a href="Index.php"> Salir </a></li>			
                        
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
                       <li><a href="pagdelete_Comentario.php"> Comentario</a></li>
                       <li><a href="pagdelete_Contrato.php"> Contrato</a></li>
                        <li><a href="pagdelete_Historial.php"> Historial</a></li>
                         <li><a href="pagdelete_Imagen.php"> Imagen</a></li>
                          <li><a href="pagdelete_Video.php"> Video</a></li>
                          <li><a href="pagdelete_Categoria.php"> Categoria </a></li>
                      <li><a href="pagdelete_Director.php"> Director </a></li>
                      <li><a href="pagdelete_Disquera.php"> Disquera </a></li>
                      <li><a href="pagdelete_Editorial.php"> Editorial </a></li>
                      <li><a href="pagdelete_Generol.php"> Generol </a></li>
                      <li><a href="pagdelete_Generom.php"> Generom </a></li>
                      <li><a href="pagdelete_Rol.php"> Rol </a></li>
                      <li><a href="pagdelete_Subtitulo.php"> Subtitulo </a></li>
                      <li><a href="pagdelete_Tipo_so.php"> Tipo_so </a></li>
                      <li><a href="pagdelete_Tipo_tarjeta.php"> Tipo_tarjeta </a></li>
                      <li><a href="pagdelete_Actor_Pelicula.php"> Actor_Pelicula </a></li>
                      <li><a href="pagdelete_Calificacion.php"> Calificacion </a></li>
                      <li><a href="pagdelete_Director_Pelicula.php"> Director_Pelicula </a></li>
                      <li><a href="pagdelete_Genero_Libro.php"> Genero_Libro </a></li>
                      <li><a href="pagdelete_Genero_Musica.php"> Genero_Musica </a></li>
                      <li><a href="pagdelete_Leng_Pel.php"> Leng_Pel </a></li>
                      <li><a href="pagdelete_Libro_Autor.php"> Libro_Autor </a></li>
                      <li><a href="pagdelete_Music_Can.php"> Music_Can </a></li>
                      <li><a href="pagdelete_Peli_Catego.php"> Peli_Catego </a></li>
                      <li><a href="pagdelete_Promo_Conte.php"> Promo_Conte </a></li>
                      <li><a href="pagdelete_So_App.php"> So_App </a></li>
                      <li><a href="pagdelete_Sub_Pelicula.php"> Sub_Pelicula </a></li>
                      <li><a href="pagdelete_So_Carac.php"> So_Carac </a></li>
                      <li><a href="pagdelete_Factura.php"> Factura </a></li>
                      <li><a href="pagdelete_Lugar.php"> Lugar </a></li>
                      <li><a href="pagdelete_Tarjeta_Credito.php"> Tarjeta_Credito </a></li>
                      <li><a href="pagdelete_Usuario_Roll.php"> Usuario_Roll </a></li>
                      <li><a href="pagdelete_Ver_Cara.php"> Ver_Cara </a></li>
                      <li><a href="Index.php"> Salir </a></li>
                    </div>
                </div>
               
		</div>
	  
	  <div id="Pie" >Universidad Catolica Andres Bello | Base de Datos I | Elaborado por Christian Vidal, Alberto Reveron, Johan De Freitas</div>
</div>
</body>
</html>
