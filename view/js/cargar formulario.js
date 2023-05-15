addEvent(window,'load',inicializarEventos,false);
// evento keyup
function inicializarEventos()
{
  var ob=document.getElementById('afiliacion');
  addEvent(ob,'change',presionBoton,false);
  
 
}

function presionBoton(e)
{
    var ob=document.getElementById('afiliacion');
  cargarDatos(ob.value);
  
  
  	}
var conexion1;
//************
function  cargarDatos(afiliacion) 
{
	
  conexion1=crearXMLHttpRequest();
  conexion1.onreadystatechange = procesarEventos;
  
  if(afiliacion=="Empresa"){
  conexion1.open('GET','empresa.php?afiliacion='+afiliacion, true);
  }
  
  else if(afiliacion=="Aprendiz SENA"){
	   conexion1.open('GET','aprendiz.php?afiliacion='+afiliacion, true);
	  }
else if(afiliacion=="Estudiante Universitario"){
	   conexion1.open('GET','estudiante.php?afiliacion='+afiliacion, true);
	  }
	  else if(afiliacion=="Emprendedor"){
	   conexion1.open('GET','emprendedor.php?afiliacion='+afiliacion, true);
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