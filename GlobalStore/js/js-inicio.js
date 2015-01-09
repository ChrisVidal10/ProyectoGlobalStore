// JavaScript Document

function manejarTipoVehiculo() 
{
	if (document.vehiculo.claseVehiculo.options[2].selected)
		{
			document.getElementById('avion').style.display = 'block';
				
		}
		else
		{
			document.getElementById('avion').style.display = 'none';
		}
}

function terrestre()
{
	var elemento = document.getElementById('terrestres');
	elemento.style.display = 'block';
	
	var elemento1 = document.getElementById('maritimos');
	elemento1.style.display = 'none';
	
	var elemento2 = document.getElementById('aereos');
	elemento2.style.display = 'none';
	
}
	

function maritimo()
{
	var elemento = document.getElementById('maritimos');
	elemento.style.display = 'block';
	
	var elemento1 = document.getElementById('terrestres');
	elemento1.style.display = 'none';
	
	var elemento2 = document.getElementById('aereos');
	elemento2.style.display = 'none';
	
		
}
	
function aereo()
{
	var elemento = document.getElementById('aereos');
	elemento.style.display = 'block';
	
	var elemento1 = document.getElementById('maritimos');
	elemento1.style.display = 'none';
	
	var elemento2 = document.getElementById('terrestres');
	elemento2.style.display = 'none';
	
		
}

function manejoDiv(mostrar, ocultar) 
{
	divOculto = document.getElementById(ocultar);
	divOculto.style.display = 'none';
	
	divMostrado = document.getElementById(mostrar);
	divMostrado.style.display = 'block';
}

function mostrarDiv(mostrar) 
{
	divMostrado = document.getElementById(mostrar);
	divMostrado.style.display = 'block';
}

function ocultarDiv(ocultar) 
{
	divMostrado = document.getElementById(ocultar);
	divMostrado.style.display = 'none';
}

function ocultarTodosLosDivs(mostrar)
{
	var contenedor = document.getElementById('formularios');
	var actual;

  	for ( i = 0; i < contenedor.getElementsByTagName('div').length; i++ )
	{
		actual = contenedor.getElementsByTagName('div')[i];
		
		if (  actual.id == mostrar )
		{
			actual.style.display = 'block';
		}
		else
			actual.style.display = 'none';
	}
	
	divMostrado = document.getElementById('map');
	divMostrado.style.display = 'none';
}

function rutaSimple()
{
	var elemento = document.getElementById('paradasRuta');
	elemento.style.display = 'none';
}

function rutaCombinada()
{
	var elemento = document.getElementById('paradasRuta');
	elemento.style.display = 'block';	
}
