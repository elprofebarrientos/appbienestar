<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Bienestar Universitario</title>
   <script src="../view/assets/vendors/js/vendor.bundle.base.js"></script>

    <script src="../view/assets/vendors/chart.js/Chart.min.js"></script>
    


  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../view/plugins/fontawesome-free/css/all.min.css">
   <!-- Theme style -->
  <link rel="stylesheet" href="../view/dist/css/adminlte.min.css">
</head>
 <body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
         
    </ul>

    <!-- Right navbar links -->
    
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="controlador.php" class="brand-link">
      
      <span class="brand-text font-weight-light">Bienestar UPCA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Servicios bienestar
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link" onclick="CrearPlato()">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Crear plato</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link" onclick="verPedidos()">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ver pedidos</p>
                </a>
              </li>
               
            </ul>
          </li>
    
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Servicios Bienestar Universitario UPCA  </h1>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
           
          <div class="col-lg" id="cargar"> 
            <div class="row">
                      
                            <div class="col-lg-12 grid-margin stretch-card">
                               <div class="card">
                                 <div class="card-body">
                                   <h4 class="card-title">Pedidos comida</h4>
                                     <canvas id="teminterior" style="height:230px"></canvas>
                                   </div>
                                 </div>
                               </div>
                      
              </div>
<!-- otra grafica exterior-->

<div class="row">
                                     
                            <div class="col-lg-12 grid-margin stretch-card">
                               <div class="card">
                                 <div class="card-body">
                                   <h4 class="card-title">Pedidos almuerzo</h4>
                                     <canvas id="temexterior" style="height:230px"></canvas>
                                   </div>
                                 </div>
                               </div>
                      
              </div>

<div class="row">
                           
                            <div class="col-lg-12 grid-margin stretch-card">
                               <div class="card">
                                 <div class="card-body">
                                   <h4 class="card-title">Pedidos Desayuno</h4>
                                     <canvas id="humedad" style="height:230px"></canvas>
                                   </div>
                                 </div>
                               </div>
                      
              </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Bienestar universitario UPCA </strong>
     
    <div class="float-right d-none d-sm-inline-block">
      <b>SENA</b>
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="../view/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../view/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="../view/dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="../view/plugins/chart.js/Chart.min.js"></script>
<script src="../view/dist/js/demo.js"></script>
<script src="../view/dist/js/pages/dashboard3.js"></script>

<script src="operaciones.js"></script>


</body>
</html>
