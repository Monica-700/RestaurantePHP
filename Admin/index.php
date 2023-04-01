<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurante M.P</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="admin/dist/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="Img/LOGO-removebg-preview-_1_.ico" type="image/x-icon">



</head>

<body>
    <?php
    //verificar si existe el usuario
    if (isset($_REQUEST['login'])) {
      session_start();
      $email = $_REQUEST['email'] ?? '';
      $clave = $_REQUEST['clave'] ?? '';
      $clave =md5($clave);
      
      //consultar
      include_once "conexion.php";
      $conn = mysqli_connect($host, $user, $pw, $db);
      $sql = "SELECT * FROM usuarios WHERE email ='".$email."' and clave = '".$clave."'; ";
      
      //resultado de la peticion de consulta
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_array($result);
      
      //si el usuario es correcto, va ir a la pagina del panel adaministrador
      if($row){
        $_SESSION['idusuario'] = $row['idusuario'];
        $_SESSION['nombre'] = $row['nombre'];
        $_SESSION['email'] = $row['email'];
        
        header("Location:panel.php");
      }else{
        ?>
    <div class="alert alert-danger" role="alert">
        <strong>Error en login <img src="images/Error.svg.png" width="50" alt=""></strong>

    </div>
    <?php
       }
      }
    ?>
    <!-- iniciar sesión -->
    <div class=" row row-cols-1 row-cols-md-1 g-4 p-5" id="login">
        <h2 class="tituloSer">Login</h2>
        <form class="row g-3" method="post">
            <div class=" col-md-6">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="inputEmail4">
            </div>
            <div class="col-md-12">
                <label for="inputPassword4" class="form-label">Password</label>
                <input type="password" class="form-control" name="clave" id=" inputPassword4">
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary" name="login">Ingresar</button>
            </div>
        </form>
    </div>

    <!-- footer -->
    <footer class=" cover">
        &copy;2023. Todos los derechos reservados M.P Restaurant. Creado por:<a href="#" target="_blank">Mónica Pineda.</a>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>

</html>