<?php
require_once('conexion.php');
$conn = mysqli_connect($host, $user, $pw, $db);

if (isset($_SESSION['idusuario']) == false) {
  header('location: index.php');
}


if (isset($_REQUEST['guardar'])) {


  $nombreProducto = mysqli_real_escape_string($conn, $_REQUEST['nombreProducto'] ?? '');
  $precio = mysqli_real_escape_string($conn, $_REQUEST['precio'] ?? '');
  $descripcion = mysqli_real_escape_string($conn, $_REQUEST['descripcion'] ?? '');
  $idproducto = mysqli_real_escape_string($conn, $_REQUEST['idproducto'] ?? '');


  $sql = "UPDATE productos SET
        nombreProducto='" . $nombreProducto . "',
        precio='" . $precio . "',descripcion='" . $descripcion . "'
        WHERE idproducto='" . $idproducto . "';";

  if ($_FILES["file1"]["error"] > 0) {
  } else {

    $nom_archivo = $_FILES['file1']['name']; // Para conocer el nombre del archivo
    $ruta = "Img/" . $nom_archivo;  // La ruta del archivo contiene el nuevo nombre y el tipo de extension
    $archivo = $_FILES['file1']['tmp_name']; //el arhivo a subir
    $subir = move_uploaded_file($archivo, $ruta); //se sube el archivo
    include 'conexion.php';
    $sql = "UPDATE productos SET imagen='$ruta' WHERE idproducto='" . $idproducto . "' ";
    //$conexion->query($sentencia_img) or die ("Error al actualizar datos".mysqli_error($conexion));
  }


  $result = mysqli_query($conn, $sql);

  if ($result) {
    echo '<meta http-equiv="refresh" content="0; url=panel.php?modulo=productos&mensaje=productos ' . $nombreProducto . ' Actualizado">';
  } else {
?>

    <div class="alert alert-danger" role="alert">
      Error al actualizar producto <?php echo mysqli_error($conn); ?>
    </div>
<?php
  }
}

//consulta a la tabla producto
$idproducto = mysqli_real_escape_string($conn, $_REQUEST['idproducto'] ?? '');
$sql = "SELECT idproducto, nombreProducto, precio, descripcion,imagen
      FROM productos WHERE idproducto = '" . $idproducto . "';";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);


?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Editar productos</h1>
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
              <form action="panel.php?modulo=editarProducto" method="post" id="editarProducto" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="NombreProducto">Nombre</label>
                  <input type="text" name="nombreProducto" id="nombreProducto" class="form-control" placeholder="Nombre" value="<?php echo $row['nombreProducto'] ?>">
                </div>

                <!--<div class="form-group">
                                <label for="ISBN">ISBN</label>
                                <input type="text" name="isbn" id="isbn" class="form-control" placeholder="ISBN" value="<?php echo $row['isbn'] ?>">
                            </div>-->
                <div class="form-group">
                  <label for="Precio">Precio</label>
                  <input type="text" name="precio" id="precio" class="form-control" placeholder="Precio" value="<?php echo $row['precio'] ?>">
                </div>

                <div class="form-group">
                  <label for="Descripcion">Descripcion</label>
                  <textarea name="descripcion" id="descripcion" class="form-control" cols="30" rows="10" placeholder="Descripción"><?php echo $row['descripcion'] ?></textarea>
                </div>
            </div>
            <div class="form-group">
              <label for="Imagen">Imagen</label>
              <input type="file" name="file1" id="file1">
            </div>
            <div class="form-group">
              <input type="hidden" name="idproducto" value="<?php echo $row['idproducto'] ?>">
              <button type="submit" name="guardar" class="btn btn-primary">Crear producto</button>
              <button type="reset" class="btn btn-danger">Cancelar producto</button>

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