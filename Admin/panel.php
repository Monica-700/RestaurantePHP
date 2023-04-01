<?php
 session_start();
 //cerrar sesion
 session_regenerate_id(true);

 //recarga el id de la sesion, como un random para evitar el sucuestro de la sesion del usuario final
 if(isset($_REQUEST['sesion']) && $_REQUEST['sesion']=="salir"){
   session_destroy();
   header("Location: index.php");
 }


 if(isset($_SESSION['idusuario'])==false){
   header('location: index.php');
 }

 $modulo = $_REQUEST['modulo'] ?? '';

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
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
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
     
        <a class="nav-link text-dark"  title="Editar Usuario" href="panel.php?modulo=editarUsuario&idusuario=<?php echo $_SESSION['idusuario'];?>">
         <i class="fas fa-user"></i> 
        </a>
        <a class="nav-link text-danger"  title="Salir" href="panel.php?modulo=&sesion=salir">
        <i class="fas fa-sign-out-alt"></i> 
        </a>
      
      </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="panel.php" class="brand-link">
      
      <span class="brand-text font-weight-light">restaurantephp</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
         
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION['nombre'];?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
            <i class="fas fa-book-open nav-icon"></i>
              <p>
                Panel
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                
          </li>
          <li class="nav-item">
            <a href="panel.php?modulo=usuarios" class="nav-link <?php echo ($modulo=="usuarios" || $modulo=="crearUsuario" || $modulo=="editarUsuario")? " active ":" ";?>">
            <i class="fas fa-user nav-icon"></i>
              <p>
                Usuarios                
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="panel.php?modulo=productos" class="nav-link <?php echo ($modulo=="productos" || $modulo=="crearProducto" || $modulo=="editarProducto")? " active":" ";?>">
             <i class="fas fa-book nav-icon"></i>
              <p>
                Productos
                
              </p>
            </a>           
          </li><!--fin Productos-->
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
    <!--incluir archivos php-->
    <?php
     if(isset($_REQUEST['mensaje'])){
       ?>

       <div class="alert alert-primary alert-dimissible fade show float-right" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
           <span aria-hidden="true">&times;</span>
           <span class="sr-only">Close</span>
           </button>
           <?php echo $_REQUEST['mensaje'] ?>
       </div>
       <?php
     }
     //usuarios
     if($modulo =="usuarios"){
       include_once "consultaUsuarios.php";
     }

     if($modulo =="crearUsuario"){
      include_once "crearUsuario.php";
    }

    if($modulo =="editarUsuario"){
      include_once "editarUsuario.php";
    }

    //Productos
    if($modulo=="productos"){
      include_once "productos.php";
    }

    if($modulo=="crearProducto"){
      include_once "crearProductos.php";
    }

    if($modulo=="editarProducto"){
      include_once "editarproductos.php";
    }   


    ?>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2023 <a href="#">Mónica Pineda</a>.</strong>
   Todos los derechos reservados.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>    <!--validar campos vacios del form crear usuario-->
<script>
  $('#crearUsuario').submit(function()
     {
       if($('#nombre').val()=='' ||
          $('#email').val()=='' ||
          $('#pass').val()=='')
          {
            alert('Digitar los campos de Nombre, email y la clave')
            return false
          }
     })

</script>

<script>
$('#crearProductos').submit(function(){
  if($('#nombreProducto').val()=='' ||    
    $('#precio').val()=='' || 
    $('#descripcion').val()=='' 
      ){ 
    alert('Digitar los campos de Nombre, precio y descripcion del producto') 
    return false 
  } 
  })
  </script>

<!--confirmacion de eliminacion de usuarios-->
<script>
  $(document).ready(function(){
    $(".borrar").click(function (e){
      e.preventDefault();
      var eliminar=confirm("¿Desea eliminar el usuario?");
      if(eliminar==true){
        var link=$(this).attr("href");
        window.location=link;
      }
    });
  });

</script>


<!--confirmacion de eliminacion de producto-->
<script>
  $(document).ready(function(){
    $(".borrarProducto").click(function (e){
      e.preventDefault();
      var eliminar=confirm("¿Desea eliminar el Producto?");
      if(eliminar==true){
        var link=$(this).attr("href");
        window.location=link;
      }
    });
  });

</script>

<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script type="text/javascript">
$(document).ready(function(){setTimeout(function(){
  $(".contents").fadeOut(1500);},1000);});
</script>
</body>

</html>