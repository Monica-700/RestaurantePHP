<?php
ob_start();
?>

<?php
include_once 'conexion.php';

$conn = mysqli_connect($host, $user, $pw, $db);

/*if(isset($_SESSION['idcliente'])==false){
    header(location: 'index.php');
}*/

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurante M.P</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="shortcut icon" href="Img/LOGO-removebg-preview-_1_.ico" type="image/x-icon">
</head>

<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark"> <!--fixed-top se usa esta clase para que el menú quede fijo-->
        <div class="container-fluid">
            <a class="navbar-brand navegacion " href="index.php"> <img src="Img/LOGO-removebg-preview (1).png" class="logotipo" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto me-2">
                    <!--permite ajustar el menu de navegación hacia la izq de la antalla y separarlo del logo-->
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

    <!--consulta de productos-->
    <div class="row row-cols-1 row-cols-md-3 g-4 p-5" id="productos">
        <H2>Productos</H2>
        <?php
        include_once "conexion.php";
        //crear la conexión a la bd
        $conn = mysqli_connect($host, $user, $pw, $db);
        //crear una consulta a la base de datos
        $sql = "SELECT * FROM productos;";
        //preparar el array de resultados
        $resul = mysqli_query($conn, $sql);
        //estructura de loop para imprimir n datos while
        while ($row = mysqli_fetch_assoc($resul)) {
        ?>
            <div class="col">
                <div class="card">
                    <?php echo "<img src='Img/" . $row['imagen'] . "' class='img-responsive rounded img'>";
                    "" ?>
                    <div class="card-body">
                        <h5 class="card-tittle"><?php echo $row['nombreProducto'] ?></h5>
                        <?php echo $row['descripcion'] ?>
                        <p><span>$<?php echo $row['precio'] ?></span></p>
                        <a href="https://wa.me/3008504573?text=%C2%BFDe%20qu%C3%A9%20te%20deseas%20antojar%20hoy%3F" class="btn btn-danger" target="_blank"> Pedir</a>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>

    <footer class="cover">
        &copy;2023. Todos los derechos reservados M.P restaurant. Creado por <a href="https://www.instagram.com/pineda.700/" target="_blank">Mónica Pineda</a>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>

</html>

<?php
ob_end_flush(); //cerrar el buffer, poner como recomendacin a todos los archivos php para evitar problemas.
?>

<!--shift + alt + f para alinear todo el código-->