
  <html>
<head>

<script>
  //Cuando la página esté cargada completamente
  $(document).ready(function(){
    //Cada 10 segundos (10000 milisegundos) se ejecutará la función refrescar
    setTimeout(refrescar, 400000);
  });
  function refrescar(){
    //Actualiza la página
    location.reload();
  }
</script>


</head>

  
  <link rel="stylesheet" href="../view/plugins/fontawesome-free/css/all.min.css">
   <!-- Theme style -->
  <link rel="stylesheet" href="../view/dist/css/adminlte.min.css">
 
<script src="../view/dist/js/jquery.min.js"></script>
 

<body onload="refrescar()">

<table class="table table-hover">
<tr><td colspan="4">Monitoreo en tiempo real para la nevera : <?php echo $ChipId=$_GET['ChipId']; ?> </td></tr>
<tr>
<th>Chipld</th> <th>Fecha</th> <th>Temperatura Ext</th><th>Temperatura Int</th><th>Humedad</th><th>Estado puerta</th> <th></th>
</tr>

<?php

require_once("../model/gestionDispensador.php");

$neveras=new gestionUsuarios();

$listadatos=$dispositivo->gestionDispensador($ChipId);

foreach($listadatos as $registro){

echo '<tr>
<td>'.$registro['ChipId'].'</td>
<td>'.$registro['Fecha'].'</td>
<td>'.$registro['TempExt'].'</td>
<td>'.$registro['TempInt'].'</td>
<td>'.$registro['Humedad'].'</td>
<td>'.$registro['estadoPuerta'].'</td>
<td> </td>
</tr>';
}
?>


</table></body></html>
