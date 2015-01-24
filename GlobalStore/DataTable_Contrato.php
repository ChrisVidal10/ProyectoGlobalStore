
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
        <title>Contrato</title> 
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

    <label style="margin-left:450px">Contrato</label>

            <div id="demo"> 
<font size=1> 
<div id="main_table_area"> 
<table cellpadding="0" cellspacing="0" border="0" class="display" id="example" class="data_table"> 
    <thead> 
        <tr> 
            <th width="auto">Id</th> 
            <th width="auto">Fecha Inicio</th> 
			<th width="auto">Fecha Fin</th> 
            <th width="auto">Causa</th> 
			<th width="auto">Cedula</th>
            <th width="auto">Nombre</th>
            <th width="auto">Apellido</th>
            <th width="auto">Cargo</th>  
        </tr> 
    </thead> 
    <tbody> 
    <?php 

	   $g=1;
	   $resultado = mysql_query("SELECT * FROM gs.contrato");
       $num_registros = mysql_num_rows($resultado); 
	   
                 	while ($g<=$num_registros)
                   	{
							$contrato 	= mysql_query("SELECT * FROM gs.contrato as e WHERE e.CONId='$g'");
							$arreglo 	= mysql_fetch_row($contrato);
                 			$id = $arreglo[0]; 
                  			$fechai = $arreglo[1]; 
							$fechaf = $arreglo[2]; 
							$cau = $arreglo[3];
                  			
							$fkpers = $arreglo[4];
							$per = mysql_query("SELECT PERCedula, PERPNombre, PERPApellido FROM gs.persona where PERId = '$fkpers'");
							$persona = mysql_fetch_row($per);
							$Cedula = $persona[0];
							$Nombre = $persona[1];
							$Apellido = $persona[2];
							
							$fkcar = $arreglo[5];
							$car = mysql_query("SELECT CARNombre FROM gs.cargo where CARId = '$fkcar'");
							$cargoarray = mysql_fetch_row($car);
							$Cargo = $cargoarray[0];
						
							
							echo "<tr class='gradeA'> 
							<td width='auto' class='center'>".$id."</td> 
							<td width='auto' class='center'>".$fechai."</td> 
							<td width='auto' class='center'>".$fechaf."</td>
							<td width='auto' class='center'>".$cau."</td> 
							<td width='auto' class='center'>".$Cedula."</td> 
							<td width='auto' class='center'>".$Nombre."</td>
							<td width='auto' class='center'>".$Apellido."</td> 
							<td width='auto' class='center'>".$Cargo."</td> 
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