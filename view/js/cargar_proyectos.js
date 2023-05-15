addEvent(window,'load',inicializarEventos,false);
var conexion1;
//************
function  cargarProyectos() 
{
  alert("llamo");
	var documento=document.getElementById('documento').value;
  conexion1=crearXMLHttpRequest();
  conexion1.onreadystatechange = procesarEventos;
  
  conexion1.open('GET','emprendedor.php?documento='+documento, true);
	  }
	     
	  
	  
 
  conexion1.send(null);
  
}

//**********************************************

function procesarEventos()
{
  var cargar = document.getElementById("cargar");
  if(conexion1.readyState == 4)
  {
    cargar.innerHTML = conexion1.responseText;
  } 
  else 
  {
    cargar.innerHTML = 'Cargando...';
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