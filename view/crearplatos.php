<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Nombre del plato</label>

  <input type="text" class="form-control" id="nombre" placeholder="Nombre">

</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Precio</label>

  <input type="email" class="form-control" id="precio" placeholder="Precio de venta">
  
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Tipo de plato</label>
  <select class="form-control" aria-label=".form-select-lg example" id="tipo">

  <option selected>Seleccionar</option>


  <option value="1">Desayuno</option>
  <option value="2">Almuerzo</option>
  <option value="3">Comida</option>

</select>
</div>
<div class="mb-3">
  
<button type="button" class="btn btn-primary" 
        onclick="insertarPlato(document.getElementById('nombre').value,
                               document.getElementById('precio').value,
                               document.getElementById('tipo').value, 
        )" >Guardar</button>

</div>
<table class="table">


  <thead>
  <tr>
      <th scope="col" colspan="4" alig >Platos registrados en el sistema</th>
      
    </tr>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre del plato</th>
      <th scope="col">Precio</th>
      <th scope="col">Tipo de plato</th>
    </tr>
  </thead>
  <tbody>

  <?php


require_once("../model/gestionBienestar.php");


$platos=new gestionBienestar();

$listaplatos=$platos->consultarPlatos();

foreach($listaplatos as $registro){
echo '
<tr>
      <th scope="row">'.$registro["id"].'</th>


      <td>'.$registro["nombre"].'</td>
      <td>'.$registro["precio"].'</td>
      <td>';
      
      if($registro["tipo"] == "1" ){
        echo "Desayuno";
      }
      elseif($registro["tipo"] == "2" ){
        echo "Almuerzo";
      }
      else{
        echo "Comida";

      }
      echo'</td>
    </tr>';

}
?>
    
    
  </tbody>
</table>