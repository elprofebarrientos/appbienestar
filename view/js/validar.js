addEvent(window,'load',inicializarEventos2,false);
// evento keyup
function inicializarEventos2()
{ 
  var ob=document.getElementById('nit');
  addEvent(ob,'onblur',presionBoton,false);
  
 
}

function presionBoton2(e)
{
    var ob2=document.getElementById('nit');
  cargarDatos2(ob2.value);
  
  
  	}
var conexion2;
//************
function  cargarDatos2(nit) 
{
	
  conexion2=crearXMLHttpRequest();
  conexion2.onreadystatechange = procesarEventos2;
  
  
  conexion2.open('GET','validar.php?nit='+nit, true);
   
 
  conexion2.send(null);
  
}

//**********************************************

function procesarEventos2()
{
  var cargar2 = document.getElementById("cargar2");
  if(conexion2.readyState == 4)
  {
    cargar2.innerHTML = conexion2.responseText;
  } 
  else 
  {
    carga2.innerHTML = 'Cargando...';
  }
}

//***************************************
//Funciones comunes a todos los problemas
//***************************************
function addEvent(elemento,nomevento,funcion,captura)
{
  if (elemento.attachEvent)
  {
    elemento.attachEvent('on'+nomevento,funcion);
    return true;
  }
  else  
    if (elemento.addEventListener)
    {
      elemento.addEventListener(nomevento,funcion,captura);
      return true;
    }
    else
      return false;
}

function crearXMLHttpRequest() 
{
  var xmlHttp=null;
  if (window.ActiveXObject) 
    xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
  else 
    if (window.XMLHttpRequest) 
      xmlHttp = new XMLHttpRequest();
  return xmlHttp;
}
// JavaScript Document