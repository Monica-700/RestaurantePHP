<?php
 include_once 'conexion.php';
 $conn = mysqli_connect($host, $user, $pw, $db);

 if(isset($_SESSION['idusuario'])==false){
  header('location: index.php');
}

//borrar usuario
if(isset($_REQUEST['idBorrar'])){
  $idusuario=mysqli_real_escape_string($conn,$_REQUEST['idBorrar']??'');
  //instruccion para eliminar con lenguaje sql
  $sql="DELETE FROM usuarios WHERE idusuario='".$idusuario."';";
  $result=mysqli_query($conn,$sql);
  if($result){
    ?>
    <div class="alert alert-success contents float-right" role="alert">
      Usuario Eliminado!!     
     </div>
     <?php
  }else{
    ?>
     <div class="alert alert-warning float-right" role="alert">
      Error en eliminar usuario!! <?php echo $mysqli_error($conn);?>    
     </div>
     <?php
  }
}
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Usuarios</h1>
          </div><!-- /.col -->          
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">      
        <div class="row">
          <div class="col-12">
            <div class="card">
          <!--tabla para mostrar datos de usuario-->
            <table id="" class="table table-bordered table-hover">
              <thead>
               <tr>
                  <th>Nombre</th>
                  <th>Email</th>
                  <th>Crear Usuario
                   <a title="Crear Usuario" href="panel.php?modulo=crearUsuario"><i class="fas fa-user-plus" aria-hidden="true"></i></a>
                  </th>
               </tr>
              </thead>
              <tbody>
               <?php
                 include_once "conexion.php";
                 $conn=mysqli_connect($host, $user, $pw, $db);
                 $sql="SELECT * FROM usuarios;";
                 $result=mysqli_query($conn,$sql);

                 //estructura bucle while
                 while ($row = mysqli_fetch_assoc($result)){

                 
               ?>
                <tr>
                  <td><?php echo $row['nombre'] ?> </td>
                  <td><?php echo $row['email'] ?></td>
                  <td>
                    <a href="panel.php?modulo=editarUsuario&idusuario=<?php echo $row['idusuario']?>"style="margin-right:10px"><i class="fas fa-user-edit" title="Editar usuario"></i></a>
                    <a href="panel.php?modulo=usuarios&idBorrar=<?php echo $row['idusuario']?>" style="margin-right:10px" class="fas fa-user-times borrar" title="Borrar usuario"></a>
                    
                  </td>
                </tr>
                <?php
                 }
                ?>
              </tbody>

            </table>
            </div>
          </div>
        </div>            
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->