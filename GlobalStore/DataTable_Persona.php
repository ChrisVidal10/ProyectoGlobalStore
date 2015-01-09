
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
	height: 540px;
	width: 800px;
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
		
		

            <th width="auto">Id persona</th> 
            <th width="auto">Cedula de identidad</th> 
            <th width="auto">Primer nombre</th> 
			<th width="auto">Primer apellido</th> 
            <th width="auto">Segundo nombre</th> 
			<th width="auto">Segundo apellido</th>
            <th width="auto">Rif</th>  
            <th width="auto">Fecha de nacimiento</th> 
            <th width="auto">Telefono</th> 
            <th width="auto">Correo</th>  
            <th width="auto">Tipo persona</th>  
            <th width="auto">Empleado nivel educativo</th>  
            <th width="auto">Grupo sanguineo</th>  
            <th width="auto">Estado civil</th>  
            <th width="auto">Fecha de registro</th>  
            <th width="auto">Usuario</th> 
            <th width="auto">Contraseña</th>  
        </tr> 
    </thead> 
    <tbody> 
    <?php 

	   $g=1;
	   $resultado = mysql_query("SELECT * FROM gs.persona");
       $num_registros = mysql_num_rows($resultado); 
	   
                 	while ($g<=$num_registros)
                   	{
					
					

					
							$Persona 	= mysql_query("SELECT * FROM gs.persona as p WHERE p.PERId='$g'");
							$arreglo 	= mysql_fetch_row($Persona);
                 			$id = $arreglo[0]; 
                  			$PERCedula = $arreglo[1]; 
							$PERPnombre = $arreglo[2]; 
							$PERPapellido = $arreglo[3];
							$PERSnombre = $arreglo[4];
							$PERSapellido = $arreglo[5];
                  			$PERRif = $arreglo[6]; 
							$PERFecha_nacimiento = $arreglo[7]; 
							$PERCorreo = $arreglo[9]; 
							$PERTelefono = $arreglo[8]; 
							
							$PERTipo = $arreglo[10];
							switch ($PERTipo) 
							{
    							case 1:
        							$PERTipo = 'Empleado';
       							 	break;
   								 case 2:
       								$PERTipo = 'Cliente';
       								 break;
							} 
							$PEMNivelEducativo = $arreglo[11]; 
							switch ($PEMNivelEducativo) 
							{
    							case 1:
        							$PEMNivelEducativo = 'NA';
       							 	break;
   								 case 2:
       								$PEMNivelEducativo = 'Primaria';
       								 break;
									 case 3:
        							$PEMNivelEducativo = 'Secundaria';
       							 	break;
   								 case 4:
       								$PEMNivelEducativo = 'Tecnico';
       								 break;
									 case 5:
        							$PEMNivelEducativo = 'Licenciado';
       							 	break;
   								 case 6:
       								$PEMNivelEducativo = 'Postgrado';
       								 break;
							} 
							$PEMGrupoSanguineo = $arreglo[12];
							switch ($PEMGrupoSanguineo) 
							{
    							case 1:
        							$PEMGrupoSanguineo = 'A';
       							 	break;
   								 case 2:
       								$PEMGrupoSanguineo = 'B';
       								 break;
									 case 3:
        							$PEMGrupoSanguineo = 'AB';
       							 	break;
   								 case 4:
       								$PEMGrupoSanguineo = 'O';
       								 break;	 
							}  
							$PECLEdoCivil = $arreglo[13]; 
							switch ($PECLEdoCivil) 
							{
    							case 1:
        							$PECLEdoCivil = 'Soltero';
       							 	break;
   								 case 2:
       								$PECLEdoCivil = 'Casado';
       								 break;
									 case 3:
        							$PECLEdoCivil = 'Divorciado';
       							 	break;
   								 case 4:
       								$PECLEdoCivil = 'Viudo';
       								 break;	 
							}
							$PECLFechaRegistro = $arreglo[14]; 
							$PUSUsername = $arreglo[15]; 
							$PUSContraseña = $arreglo[16]; 
							 
							
							
							echo "<tr class='gradeA'> 
							<td width='auto' class='center'>".$id."</td> 
							<td width='auto' class='center'>".$PERCedula."</td> 
							<td width='auto' class='center'>".$PERPnombre."</td>
							<td width='auto' class='center'>".$PERPapellido."</td>   
							<td width='auto' class='center'>".$PERSnombre."</td>   
							<td width='auto' class='center'>".$PERSapellido."</td>   
							<td width='auto' class='center'>".$PERRif."</td> 
							<td width='auto' class='center'>".$PERFecha_nacimiento."</td> 
							<td width='auto' class='center'>".$PERTelefono."</td> 
							<td width='auto' class='center'>".$PERCorreo."</td> 
							<td width='auto' class='center'>".$PERTipo."</td> 
							<td width='auto' class='center'>".$PEMNivelEducativo."</td> 
							<td width='auto' class='center'>".$PEMGrupoSanguineo."</td> 
							<td width='auto' class='center'>".$PECLEdoCivil."</td> 
							<td width='auto' class='center'>".$PECLFechaRegistro."</td> 
							<td width='auto' class='center'>".$PUSContraseña."</td> 
							<td width='auto' class='center'>".$PUSContraseña."</td> 
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