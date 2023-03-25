<?php
//   funcion para iniciar login o actualizar buffer
ob_start();
?>

<?php
// // utilizar el archivo conexion.php
// include_once 'admin/conexion.php';

// // sincronizar la base de datos con una funcion

// $conn = mysqli_connect($host,$user,$pw,$db);

// // control para confirmar el cliente
// if(isset($_SESSION['idcliente'])==false){
//     header(location:'index.php');
// }


?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Restaurante M.P</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="admin/dist/css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700;900&display=swap" rel="stylesheet">
  <link rel="shortcut icon" href="img/LOGO-removebg-preview-_1_.ico" type="image/x-icon">


</head>

<body>
  <!-- menú -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark menu">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">
        <img src="admin/img/LOGO-removebg-preview(1).png" alt="logo " class="logo"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto me-2">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php#carta"> La carta</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="consultarProductos.php">Consultar productos </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php#servicios">Servicios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php#contacto">Contáctanos </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- info -->
  <div class="row row-cols-1 row-cols-md-3 g-4 p-5" id="libros">
    <h2 class="titulo">Libros</h2>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Nombre</th>
          <th scope="col">Email</th>
          <th scope="col">Teléfono</th>
          <th scope="col">Dirección</th>
        </tr>
      </thead>
      <tbody>
        <?php
        include_once "conexion.php";
        // crear la conexion a la bd
        $conn = mysqli_connect($host, $user, $pw, $db);
        //crear una consulta a la base de datos
        $sql = "SELECT * FROM clientes;";
        //preparar el array de resultados
        $result = mysqli_query($conn, $sql);
        //estructura de loop para imprimir n datos while
        while ($row = mysqli_fetch_assoc($result)) {

        ?>
          <tr>
            <td><?php echo $row['nombre'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td><?php echo $row['telefono'] ?></td>
            <td><?php echo $row['direccion'] ?></td>

          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>

  </div>



  <!-- la carta -->
  <div class="row row-cols-1 row-cols-md-3 g-4 p-5" id="carta">
    <h2 class="titulo">Novedades</h2>
    <div class="col">
      <div class="card">
        <img src="https://planetadelibroscom.cdnstatics2.com/usuaris/libros/fotos/365/m_libros/portada_marcus-pocus-3-titulo-provisional_pedro-manas_202211021757.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Marcus Pocus 3. La maldición de los elfos</h5>
          <p class="card-text">EMarcus Pocus 3. La maldición de los elfos</p>
          <a href="https://wa.me/3105188168?text=Solicita%20tu%20pedido!!" class="btn btn-danger" target="_blank">Pedir</a>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card">
        <img src="https://planetadelibroscom.cdnstatics2.com/usuaris/libros/fotos/361/m_libros/portada_villa-melania_desiree-ruiz_202212071413.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Villa Melania</h5>
          <p class="card-text">Villa Melania es una absorbente saga familiar que evoca otra era de forma realmente bella. Algunas puertas están cerradas por alguna poderosa razón.</p>
          <a href="https://wa.me/3105188168?text=Solicita%20tu%20pedido!!" class="btn btn-danger" target="_blank">Pedir</a>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card">
        <img src="https://planetadelibroscom.cdnstatics2.com/usuaris/libros/fotos/366/m_libros/portada_el-cerebro-depre_anders-hansen_202301231518.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">El cerebro depre</h5>
          <p class="card-text">un libro divulgativo para entender los mecanismos biológicos subyacentes a la depresión y la ansiedad y cómo combatirlos.</p>
          <a href="https://wa.me/3105188168?text=Solicita%20tu%20pedido!!" class="btn btn-danger" target="_blank">Pedir</a>
        </div>
      </div>
    </div>
  </div>

  <!-- servicios -->
  <div class="row row-cols-1 row-cols-md-2 g-4 p-5" id="servicios">
    <h2 class="tituloSer">Servicios</h2>
    <div class="col">
      <div class="card">
        <img src="images/recetas.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Recetas</h5>
          <p class="card-text">Ensalada con pollo y verduras en salsa de soya.</p>
          <a href="https://wa.me/3105188168?text=Solicita%20tu%20pedido!!" class="btn btn-danger" target="_blank">Solicitar</a>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card">
        <img src="images/domicilios.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Domicilio</h5>
          <p class="card-text">Domicilios en horarios de 8:00 am a 10:00pm.</p>
          <a href="https://wa.me/3105188168?text=Solicita%20tu%20pedido!!" class="btn btn-danger" target="_blank">Solicitar</a>
        </div>
      </div>
    </div>
  </div>

  <!-- contacto -->
  <section id="contacto">
    <h2 class="tituloC">Contacto</h2>
    <form action="mailto:aprendesoftware@poliandino.edu.co" method="post">
      <div>
        <input type="text" placeholder="Escribir nombre" required name="nombre">
      </div>

      <div>
        <input type="text" placeholder="Escribir apellido" required name="apellido">
      </div>

      <div>
        <input type="email" placeholder="Escribir email" required name="email">
      </div>

      <div>
        <textarea name="mensaje" id="" cols="30" rows="10" placeholder="Mensaje"></textarea>
      </div>

      <div>
        <button type="submit" class="btn btn-warning">Enviar</button>
        <button type="reset" class="btn btn-danger">Cancelar</button>
      </div>

    </form>

    <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSe8s_36Oc1Ap8BMDQIsby3GECmPQMthR7ni1rh-uP6E-40OOA/viewform?embedded=true" width="640" height="550" frameborder="0" marginheight="0" marginwidth="0">Cargando…</iframe>
  </section>




  <!-- footer -->
  <footer class="cover">
    &copy;2023. Todos los derechos reservados Restaurante Tapitas. Creado por:<a href="#" target="_blank">Jorge Grajales</a>
  </footer>






  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>
<?php
ob_end_flush();
?>