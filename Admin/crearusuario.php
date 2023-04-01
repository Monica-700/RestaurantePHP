<?php
if (isset($_REQUEST['guardar'])) {
  require_once('conexion.php');
  $conn = mysqli_connect($host, $user, $pw, $db);

  $nombre = mysqli_real_escape_string($conn, $_REQUEST['nombre'] ?? '');
  // $isbn=mysqli_real_escape_string($conn,$_REQUEST['isbn'] ?? '');
  $email = mysqli_real_escape_string($conn, $_REQUEST['email'] ?? '');
  $clave = md5(mysqli_real_escape_string($conn, $_REQUEST['clave'] ?? ''));

  $veriuser = "SELECT * FROM usuarios WHERE nombre='" . $nombre . "' OR email='" . $email . "';";
  $verResult = $conn->query($veriuser);
  $verRow = $verResult->num_rows;

  //para evitar injection sql 
  if ($nombre != '' &&  $email != '' && $verRow == null) {
    //$nom_archivo = $_FILES['file1']['name']; // Para conocer el nombre del archivo
    //$ruta = "imagen/" . $nom_archivo;  // La ruta del archivo contiene el nuevo nombre y el tipo de extension
    //$archivo = $_FILES['file1']['tmp_name']; //el arhivo a subir
    //$subir=move_uploaded_file($archivo, $ruta); //se sube el archivo
    $sql = "INSERT INTO usuarios(nombre,email,clave)
        VALUES('" . $nombre . "','" . $email . "','" . $clave . "');";

    $result = mysqli_query($conn, $sql);

    if ($result) {
      echo '<meta http-equiv="refresh" content="0; url=panel.php?modulo=usuarios&mensaje=usuario Creado">';
    } else {
?>

      <div class="alert alert-danger" role="alert">
        Error al crear usuario <?php echo mysqli_error($conn); ?>
      </div>
<?php
    }
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
          <h1>Crear usuario</h1>
        </div><!-- /.col -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <!--crear usuario-->
            <div class="card-body">
              <form action="panel.php?modulo=crearUsuario" method="post" id="crearUsuario" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="Nombre">Nombre </label>
                  <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre">
                </div>

                <!--<div class="form-group">
                                <label for="ISBN">ISBN</label>
                                <input type="text" name="isbn" id="isbn" class="form-control" placeholder="ISBN">
                            </div>-->
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="text" name="email" id="email" class="form-control" placeholder="email">
                </div>
                <div class="form-group">
                  <label for="clave">Clave</label>
                  <input type="password" name="clave" id="clave" class="form-control" placeholder="clave" />
                </div>
            </div>
            <div class="form-group">
              <button type="submit" name="guardar" class="btn btn-primary">Crear usuario</button>
              <button type="reset" class="btn btn-danger">Cancelar usuario</button>

            </div>
            </form>
          </div>


        </div>
      </div>
  </div>
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->