<script>
      $(function () {
   'use strict';
  var data = {
    labels: [
    <?php
require_once("../model/gestionUsuarios.php");
$temperaturaint=new gestionUsuarios();
$listaneverasTi=$temperaturaint->getConsultarTemint();
foreach($listaneverasTi as $registroTi){
echo '"Nevera '.$registroTi["ChipId"].'"'.',';
}
?>
],
    datasets: [{
      label: '# Pormedio Temperatura',
      data: [
<?php 
  foreach($listaneverasTi as $registroTi){

    echo $registroTi["proTempInt"].',';
    }
  ?>

      ],
      backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(255, 159, 64, 0.2)'
      ],
      borderColor: [
        'rgba(255,99,132,1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)',
        'rgba(153, 102, 255, 1)',
        'rgba(255, 159, 64, 1)'
      ],
      borderWidth: 1,
      fill: false
    }]
  };
  
  var options = {
    scales: {
      yAxes: [{
        ticks: {
          beginAtZero: true
        }
      }]
    },
    legend: {
      display: false
    },
    elements: {
      point: {
        radius: 0
      }
    }

  };
  
  if ($("#teminterior").length) {
    var barChartCanvas = $("#teminterior").get(0).getContext("2d");
    var barChart = new Chart(barChartCanvas, {
      type: 'bar',
      data: data,
      options: options
    });
  }
 
});</script>

<script>
      $(function () {
   'use strict';
  var data = {
    labels: [
    <?php

$temperaturaext=new gestionUsuarios();
$listaneverasTe=$temperaturaext->getConsultarTemExt();
foreach($listaneverasTe as $registroTe){
echo '"Nevera '.$registroTe["ChipId"].'"'.',';
}
?>
],
    datasets: [{
      label: '# Promedio Temperatura',
      data: [
<?php 
  foreach($listaneverasTe as $registroTe){
    echo $registroTe["proTempExt"].',';
    }
  ?>

      ],
      backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(255, 159, 64, 0.2)'
      ],
      borderColor: [
        'rgba(255,99,132,1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)',
        'rgba(153, 102, 255, 1)',
        'rgba(255, 159, 64, 1)'
      ],
      borderWidth: 1,
      fill: false
    }]
  };
  
  var options = {
    scales: {
      yAxes: [{
        ticks: {
          beginAtZero: true
        }
      }]
    },
    legend: {
      display: false
    },
    elements: {
      point: {
        radius: 0
      }
    }

  };
  
  if ($("#temexterior").length) {
    var barChartCanvas = $("#temexterior").get(0).getContext("2d");
    var barChart = new Chart(barChartCanvas, {
      type: 'bar',
      data: data,
      options: options
    });
  }
 
});</script>
<!-- Grafica humedad-->
<script>
      $(function () {
   'use strict';
  var data = {
    labels: [
    <?php

$humedad=new gestionUsuarios();
$listahumedad=$humedad->getConsultarHumedad();
foreach($listahumedad as $registroh){
echo '"Nevera '.$registroh["ChipId"].'"'.',';
}
?>
],
    datasets: [{
      label: '# Promedio Humedad',
      data: [
<?php 
  foreach($listahumedad as $registroh){
    echo $registroh["proHumedad"].',';
    }
  ?>

      ],
      backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(255, 159, 64, 0.2)'
      ],
      borderColor: [
        'rgba(255,99,132,1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)',
        'rgba(153, 102, 255, 1)',
        'rgba(255, 159, 64, 1)'
      ],
      borderWidth: 1,
      fill: false
    }]
  };
  
  var options = {
    scales: {
      yAxes: [{
        ticks: {
          beginAtZero: true
        }
      }]
    },
    legend: {
      display: false
    },
    elements: {
      point: {
        radius: 0
      }
    }

  };
  
  if ($("#humedad").length) {
    var barChartCanvas = $("#humedad").get(0).getContext("2d");
    var barChart = new Chart(barChartCanvas, {
      type: 'bar',
      data: data,
      options: options
    });
  }
 
});</script>

<div class="row">
                      
                            <div class="col-lg-12 grid-margin stretch-card">
                               <div class="card">
                                 <div class="card-body">
                                   <h4 class="card-title">Promedio de temperatura Interior</h4>
                                     <canvas id="teminterior" style="height:230px"></canvas>
                                   </div>
                                 </div>
                            </div>
                      
</div>
<div class="row">
                                     
                            <div class="col-lg-12 grid-margin stretch-card">
                               <div class="card">
                                 <div class="card-body">
                                   <h4 class="card-title">Promedio de temperatura Exterior</h4>
                                     <canvas id="temexterior" style="height:230px"></canvas>
                                   </div>
                                 </div>
                               </div>
                      
              </div>

              <div class="row">
                           
                           <div class="col-lg-12 grid-margin stretch-card">
                              <div class="card">
                                <div class="card-body">
                                  <h4 class="card-title">Promedio de Humedad</h4>
                                    <canvas id="humedad" style="height:230px"></canvas>
                                  </div>
                                </div>
                              </div>
                     
             </div>              