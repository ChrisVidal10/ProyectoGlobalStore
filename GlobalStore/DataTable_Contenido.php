
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


<?php 
		$enlace =  mysql_connect('127.0.0.1','root','');
   		if (!$enlace) 
		{
    		die('No pudo conectarse: ' . mysql_error());
   		}
?>
 
<html> 
<head> 
        <title>Global Store</title> 
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="shortcut icon" type="image/ico" href="http://www.sprymedia.co.uk/media/images/favicon.ico"> 

        <style type="text/css" title="currentStyle"> 
            @import "DataTables-1.9.4/media/css/demo_page.css"; 
            @import "DataTables-1.9.4/media/css/demo_table_jui.css"; 
            @import "DataTables-1.9.4/examples/examples_support/themes/smoothness/jquery-ui-1.8.4.custom.css"; 
            @import "DataTables-1.9.4/TableTools-2.0.0/media/css/TableTools.css"; 
            @import "DataTables-1.9.4/extras/ColVis/media/css/ColVis.css"; 
        </style> 

        <script type="text/javascript" charset="utf-8" src="DataTables-1.9.4/media/js/jquery.js"></script> 
        <script type="text/javascript" charset="utf-8" src="DataTables-1.9.4/media/js/jquery.dataTables.js"></script> 
        <script type="text/javascript" charset="utf-8" src="DataTables-1.9.4/TableTools-2.0.0/js/ZeroClipboard.js"></script> 
        <script type="text/javascript" charset="utf-8" src="DataTables-1.9.4/TableTools-2.0.0/js/TableTools.js"></script> 
        <script type="text/javascript" charset="utf-8" src="DataTables-1.9.4/extras/ColVis/media/js/ColVis.js"></script> 
<script type="text/javascript" charset="utf-8"> 
var asInitVals = new Array(); 

    $(document).ready(function() { 
                    $('#example').dataTable({ 
                       "bJQueryUI": true, 
                    "sPaginationType": "full_numbers", 
                    "sDom": 'T C lfrtip', 
                    "oTableTools": { 
                    "sSwfPath": "/TableTools-2.0.0/media/swfcopy_cvs_xls_pdf.swf", 
                    "aButtons": [ 
                    "xls", 
                    "pdf", 
                    { 
                    "sExtends": "print", 
                    "sButtonText": "Imprimir", 
                    "sInfo": "<br><center><h1>PRESIONAR ESCAPE AL TERMINAR</h1></center>", 
                    "sMessage": "<center><h2><b>TITULO!</b></h2></center>", 
                    "sTitle": "Listado x Obra Social", 
                    } 
                    ], 
                    }, 
                    "fnInitComplete": function () { 
                        var 
                            that = this, 
                            nTrs = this.fnGetNodes(); 
                        $('td', nTrs).click( function () { 
                            that.fnFilter( this.innerHTML ); 
                        } ); 
                    }, 
                    "oLanguage": { 
"oPaginate": { 
"sPrevious": "Anterior", 
"sNext": "Siguiente", 
"sLast": "Ultima", 
"sFirst": "Primera" 
}, 

"sLengthMenu": 'Mostrar <select>'+ 
'<option value="10">10</option>'+ 
'<option value="20">20</option>'+ 
'<option value="30">30</option>'+ 
'<option value="40">40</option>'+ 
'<option value="50">50</option>'+ 
'<option value="-1">Todos</option>'+ 
'</select> registros', 

"sInfo": "Mostrando del _START_ a _END_ (Total: _TOTAL_ resultados)", 

"sInfoFiltered": " - filtrados de _MAX_ registros", 

"sInfoEmpty": "No hay resultados de búsqueda", 

"sZeroRecords": "No hay registros a mostrar", 

"sProcessing": "Espere, por favor...", 

"sSearch": "Buscar:", 

} 
                }); 

    $("tfoot input").keyup( function () { 
        /* Filter on the column (the index) of this element */ 
        oTable.fnFilter( this.value, $("tfoot input").index(this) ); 
    } ); 


    /* 
     * Support functions to provide a little bit of 'user friendlyness' to the textboxes in 
     * the footer 
     */ 
    $("tfoot input").each( function (i) { 
        asInitVals[i] = this.value; 
    } ); 

    $("tfoot input").focus( function () { 
        if ( this.className == "search_init" ) 
        { 
            this.className = ""; 

            this.value = ""; 
        } 
    } ); 

    $("tfoot input").blur( function (i) { 
        if ( this.value == "" ) 
        { 
            this.className = "search_init"; 
            this.value = asInitVals[$("tfoot input").index(this)]; 
        } 
    } ); 
            });  // Termina document.ready 
        </script> 
<style> 
.data_table { 
font-family: helvetica; 
font-size: 1px; 
} 
#top_of_page { 
position: absolute; 
} 
#main_table_area {
	position: absolute;
	top: 20px;
	height: 550px;
	width: 700	px;
	overflow: auto;
	left: 45px;
} 
</style> 

</head> 
    
<body id="dt_example"> 

<label style="margin-left:450px">Persona</label>

            <div id="demo"> 
<font size=1> 
<div id="main_table_area"> 
<table cellpadding="0" cellspacing="0" border="0" class="display" id="example" class="data_table"> 
    <thead> 
        <tr> 
		
		

            <th width="auto">Id Contenido</th> 
            <th width="auto">Fecha de Registro</th> 
            <th width="auto">Nombre</th> 
			<th width="auto">Costo</th> 
            <th width="auto">Veces Valorada</th> 
			<th width="auto">Veces Descargada</th>
            <th width="auto">Tipo</th>  
            <th width="auto">Descripcion App</th> 
            <th width="auto">Ultima Actualizacion</th> 
            <th width="auto">Tamaño</th>  
            <th width="auto">Version</th>  
            <th width="auto">Sistema Operativo</th> 
            <th width="auto">Clasificacion</th>  
            <th width="auto">Desarrollador</th>  
            <th width="auto">Fecha Estreno</th>  
            <th width="auto">Descripcion Pelicula</th>  
            <th width="auto">Duracion</th> 
            <th width="auto">Fecha Produccion</th>  
            <th width="auto">Numero de Canciones</th> 
            <th width="auto">Formato</th> 
            <th width="auto">Disquera</th> 
            <th width="auto">Reseña</th> 
            <th width="auto">Fecha Publicacion</th> 
            <th width="auto">Descripcion Libro</th> 
            <th width="auto">Cantidad de Paginas</th> 
            <th width="auto">Codigo ISBN</th> 
            <th width="auto">Editorial</th> 
            
        </tr> 
    </thead> 
    <tbody> 
    <?php 

	   $g=1;
	   $resultado = mysql_query("SELECT * FROM gs.contenido");
       $num_registros = mysql_num_rows($resultado); 
	   
                 	while ($g<=$num_registros)
                   	{
					
					

					
							$Persona 	= mysql_query("SELECT * FROM gs.contenido as p WHERE p.COId='$g'");
							$arreglo 	= mysql_fetch_row($Persona);
                 			$COId = $arreglo[0]; 
							$COFechaRegistro = $arreglo[1]; 
                  			$CONombre = $arreglo[2]; 
							$COCosto = $arreglo[3]; 
							$COVecesValorada = $arreglo[4];
							$COVecesDescagada = $arreglo[5];
							$COTipo = $arreglo[6];
							switch ($COTipo) 
							{
    							case 1:
        							$COTipo = 'APP';
       							 	break;
   								 case 2:
       								$COTipo = 'Pelicula';
       								 break;
								case 3:
       								$COTipo = 'Musica';
       								 break;
								case 4:
       								$COTipo = 'Libro';
       								 break;
							} 
                  			$CAPDescripcion = $arreglo[7]; 
							$CAPUltimaActualizacion = $arreglo[8]; 
							$CAPTamaño = $arreglo[9]; 
							$CAPVersionActual = $arreglo[10]; 
							$CAPVersionSO = $arreglo[11]; 
							$CAPClasificacion = $arreglo[12]; 
							
							$FKDEId = $arreglo[13]; 
							$Desa 	= mysql_query("SELECT DENombre FROM gs.desarrollador as p WHERE p.DEId='$FKDEId'");
							$arreglo1 	= mysql_fetch_row($Desa);
							$Desarrollador = $arreglo1[0];		
							
							$CPEFechaEstreno = $arreglo[14]; 
							$CPEDescripcion = $arreglo[15]; 
							$CPEDuracion = $arreglo[16]; 
							$CMUFechaProduccion = $arreglo[17]; 
							$CMUNumeroCanciones = $arreglo[18]; 
							$CMUFormato = $arreglo[19]; 
							
							$FKDISQId = $arreglo[20]; 
							$Disq 	= mysql_query("SELECT DISQNombre FROM gs.disquera as p WHERE p.DISQId='$FKDISQId'");
							$arreglo2 	= mysql_fetch_row($Disq);
							$Disquera = $arreglo2[0];	
							
							$CLBReseña = $arreglo[21]; 
							$CLBFechaPublicacion = $arreglo[22]; 
							$CLBDescripcion = $arreglo[23]; 
							$CLBCantidadPaginas = $arreglo[24]; 
							$CLBCodigoISBN = $arreglo[25]; 
							
							$FKEDId = $arreglo[26]; 
							$Edit 	= mysql_query("SELECT EDNombre FROM gs.disquera as p WHERE p.EDId='$FKEDId'");
							$arreglo3 	= mysql_fetch_row($Edit);
							$Editorial = $arreglo3[0];	
							 
							
							
							echo "<tr class='gradeA'> 
							<td width='auto' class='center'>".$COId."</td> 
							<td width='auto' class='center'>".$COFechaRegistro."</td> 
							<td width='auto' class='center'>".$CONombre."</td>
							<td width='auto' class='center'>".$COCosto."</td>   
							<td width='auto' class='center'>".$COVecesValorada."</td>   
							<td width='auto' class='center'>".$COVecesDescagada."</td>   
							<td width='auto' class='center'>".$COTipo."</td> 
							<td width='auto' class='center'>".$CAPDescripcion."</td> 
							<td width='auto' class='center'>".$CAPUltimaActualizacion."</td> 
							<td width='auto' class='center'>".$CAPTamaño."</td> 
							<td width='auto' class='center'>".$CAPVersionActual."</td> 
							<td width='auto' class='center'>".$CAPVersionSO."</td> 
							<td width='auto' class='center'>".$CAPClasificacion."</td> 
							<td width='auto' class='center'>".$Desarrollador."</td> 
							<td width='auto' class='center'>".$CPEFechaEstreno."</td> 
							<td width='auto' class='center'>".$CPEDescripcion."</td> 
							<td width='auto' class='center'>".$CPEDuracion."</td> 
							<td width='auto' class='center'>".$CMUFechaProduccion."</td> 
							<td width='auto' class='center'>".$CMUNumeroCanciones."</td> 
							<td width='auto' class='center'>".$CMUFormato."</td> 
							<td width='auto' class='center'>".$Disquera."</td>
							<td width='auto' class='center'>".$CLBReseña."</td>
							<td width='auto' class='center'>".$CLBFechaPublicacion."</td>
							<td width='auto' class='center'>".$CLBDescripcion."</td>
							<td width='auto' class='center'>".$CLBCantidadPaginas."</td> 
							<td width='auto' class='center'>".$CLBCodigoISBN."</td> 
							<td width='auto' class='center'>".$Editorial."</td> 
						 	</tr>";
							$g++; 
       				} 
       echo 'Total: ' . $num_registros; 
      ?> 
      <?php
      mysql_close($enlace);
	  ?>
    </tbody> 
</table> 
</div> 
</font> 
</div> 
            <div class="spacer"></div> 
        </div> 
		
		
		
    </body> 
</html>