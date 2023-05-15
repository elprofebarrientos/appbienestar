<div class="container-fluid">
<table class="table table-bordered">
<thead>
<tr>
<th class="text-center" colspan="11" >Control de EFICIENCIA ENERGETICA Dispositivo IOT Panales solares </th>
</tr>
<tr> <form action="#" method="POST" >
  <input type="hidden" name="op" value="3" >
<th class="text-center" colspan="4" >
    <label for="fe">Fecha inicial</label><input type="date" name="fechai" require="yes"> </th>
    <th class="text-center" colspan="4" >
    <label for="fe">Fecha final</label> <input type="date" name="fechaf" require="yes"> </th>
    <th class="text-center" colspan="3" >
     <input type="submit" value="Consultar"> </th>
     </form>
</tr>
<tr>
<th scope="col">Fecha</th>
<th scope="col">Hora</th>
<th scope="col">Voltaje fase 1</th> <th scope="col">Voltaje fase 2</th><th scope="col">Voltaje fase 3</th>
<th scope="col">Corriente fase 1</th> <th scope="col">Corriente fase 2</th><th scope="col">Corriente fase 3</th>
<th scope="col">Consumo fase 1</th> <th scope="col">Consumo fase 2</th><th scope="col">Consumo fase 3</th>
</tr>
</thead>
<tbody>
<?php
$fechai=$_REQUEST['fechai'];
$fechaf=$_REQUEST['fechaf'];
require_once("../model/gestionDispensador.php");

$dispositivo=new gestionDispensador();

if($listadatos=$dispositivo->datosDispositivoFecha($fechai,$fechaf))
{

foreach($listadatos as $registro){

echo '<tr>
<td>'.$registro['fecha'].'</td>
<td>'.$registro['hora'].'</td>
<td>'.$registro['vf1'].'</td>
<td>'.$registro['vf2'].'</td>
<td>'.$registro['vf3'].'</td>
<td>'.$registro['if1'].'</td>
<td>'.$registro['if2'].'</td>
<td>'.$registro['if3'].'</td>
<td>'.$registro['cf1'].'</td>
<td>'.$registro['cf2'].'</td>
<td>'.$registro['cf3'].'</td>
    </tr>';
}}
else{
    echo "<tr><td>No hay datos en las fechas seleccionadas</td></tr>";
}
?>
    
</tbody>
</table>
</div>
