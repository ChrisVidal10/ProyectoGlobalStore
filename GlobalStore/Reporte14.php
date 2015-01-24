
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


<?php 
		$enlace =  mysql_connect('127.0.0.1', 'root', '');
   		if (!$enlace) 
		{
    		die('No pudo conectarse: ' . mysql_error());
   		}
?>
 
<html> 
<head> 
        <title>Reporte14</title> 
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
	height: 540px;
	width: 800px;
	overflow: auto;
	left: 45px;
} 
</style> 

</head> 
    
<body id="dt_example"> 

<label style="margin-left:450px">Reporte 14</label>

            <div id="demo"> 
<font size=1> 
<div id="main_table_area"> 
<table cellpadding="0" cellspacing="0" border="0" class="display" id="example" class="data_table"> 
    <thead> 
        <tr> 
            <th width="auto">Nombre</th>
            <th width="auto">Apellido</th>
            <th width="auto">ci</th>
          <th width="auto">Fecha</th>
          <th width="auto">Hora</th> 
         
           
                    
        </tr> 
    </thead> 
    <tbody> 
     <?php
		$control = 0;	
		$enlace = mysql_connect("localhost", "root", "");
		mysql_select_db("GS", $enlace);
		$resultado = mysql_query("SELECT p.PERPnombre, p.PERPapellido, p.PERCedula, c.COMFecha, c.COMHora
FROM gs.persona p, gs.comentario c 
where c.FKPERId=p.PERId and p.PERTipo=2 ", $enlace);			
	
	   	$fields			=	mysql_num_rows($resultado);
	   	$cont			=	mysql_num_fields($resultado);   
	   	for ($i=0; $i < $cont ; $i++) //Table Header
 		{ 
			while ($row = mysql_fetch_row($resultado)) //Table body
			{
 				for ($f=1; $f <= $fields; $f++) 
				{
					if($control==0)
					{				
						$nombre 			= 	$row[0];
						$apellido 			= 	$row[1];
						$ci 			= 	$row[2];
						$fecha				=  	$row[3];
						$hora				=  	$row[4];
						
						echo "<tr class='gradeA'> 
						<td width='auto' class='center'>".$nombre."</td> 
						<td width='auto' class='center'>".$apellido."</td> 
						<td width='auto' class='center'>".$ci."</td> 
						 
						<td width='auto' class='center'>".$fecha."</td> 
						<td width='auto' class='center'>".$hora."</td> 
						      
            			</tr>";	
						$control = 1;
					}
					else
					{
						$row 	=   mysql_fetch_row ($resultado);
								
						$nombre 			= 	$row[0];
						$apellido 			= 	$row[1];
						$ci 			= 	$row[2];
						$fecha				=  	$row[3];
						$hora				=  	$row[4];
						
						echo "<tr class='gradeA'> 
						<td width='auto' class='center'>".$nombre."</td> 
						<td width='auto' class='center'>".$apellido."</td> 
						<td width='auto' class='center'>".$ci."</td> 
						 
						<td width='auto' class='center'>".$fecha."</td> 
						<td width='auto' class='center'>".$hora."</td> 
						      
            			</tr>";			
						
					}
				}
			}
		} 			
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