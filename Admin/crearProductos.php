<?php
 if(isset($_REQUEST['guardar'])){
     require_once('conexion.php');
     $conn =mysqli_connect($host, $user, $pw, $db);
     
     $nombreProducto=mysqli_real_escape_string($conn,$_REQUEST['nombreProducto'] ?? '');     
    // $isbn=mysqli_real_escape_string($conn,$_REQUEST['isbn'] ?? '');
     $precio=mysqli_real_escape_string($conn,$_REQUEST['precio'] ?? '');    
     $descripcion=mysqli_real_escape_string($conn,$_REQUEST['descripcion'] ?? '');

     $veriuser="SELECT * FROM productos WHERE nombreProducto='" .$nombreProducto."' OR descripcion='".$descripcion."';";
     $verResult=$conn->query($veriuser);
     $verRow=$verResult->num_rows;

     //para evitar injection sql 
       if ($nombreProducto !='' &&  $precio !='' && $verRow==null) {     
        $nom_archivo=$_FILES['file1']['name']; // Para conocer el nombre del archivo
        $ruta = "imagen/" . $nom_archivo;  // La ruta del archivo contiene el nuevo nombre y el tipo de extension
        $archivo = $_FILES['file1']['tmp_name']; //el arhivo a subir
        $subir=move_uploaded_file($archivo, $ruta); //se sube el archivo
        $sql="INSERT INTO productos(nombreProducto,precio,descripcion,imagen)
        VALUES('".$nombreProducto."','".$precio."','".$descripcion."','".$ruta."');";

        $result=mysqli_query($conn,$sql);

        if($result){
            echo '<meta http-equiv="refresh" content="0; url=panel.php?modulo=productos&mensaje=producto Creado">';

        }else{
       ?>

         <div class="alert alert-danger" role="alert">
            Error al crear producto <?php echo mysqli_error($conn); ?>
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
            <h1>Crear producto</h1>
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
                            <form action="panel.php?modulo=crearProducto" method="post" id="crearProductos" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="Nombre">Nombre del producto</label>
                                <input type="text" name="nombreProducto" id="nombreProducto" class="form-control" placeholder="Nombre">
                            </div>
                            
                            <!--<div class="form-group">
                                <label for="ISBN">ISBN</label>
                                <input type="text" name="isbn" id="isbn" class="form-control" placeholder="ISBN">
                            </div>-->
                            <div class="form-group">
                                <label for="Precio">Precio</label>
                                <input type="text" name="precio" id="precio" class="form-control" placeholder="Precio">
                            </div>                           
                            <div class="form-group">
                                <label for="Descripcion">Descripcion</label>
                               <textarea name="descripcion" id="descripcion" class="form-control" cols="30" rows="10" placeholder="Descripción"></textarea>                           </div>
                            </div>
                            <div class="form-group"> 
                            <label for="Seleccionar">Adjuntar una imagen</label>
                               <input type="file" name="file1" id="file1">
                            </div>
                               <div class="form-group">
                                <button type="submit" name="guardar" class="btn btn-primary">Crear producto</button>
                                <button type="reset"  class="btn btn-danger">Cancelar producto</button>
                                
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