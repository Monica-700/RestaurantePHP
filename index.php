
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurante M.P</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style.css">
</head>

<body>

        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark"> <!--fixed-top se usa esta clase para que el menú quede fijo-->
            <div class="container-fluid">
                <a class="navbar-brand navegacion " href="index.php"> <img src="Img/LOGO-removebg-preview (1).png" class="logotipo" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto me-2">
                        <!--permite ajustar el menu de navegación hacia la izq de la antalla y separarlo del logo-->
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#carta"> La carta</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="consultarProductos.php">Consultar productos </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#servicios">Servicios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contacto">Contáctanos </a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </nav>
    
        <!--slider o carrusel-->
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="Img/salmon.jpg" class="d-block w-100 alto " alt="...">
              </div>
              <div class="carousel-item">
                <img src="Img/postre.jpg" class="d-block w-100 alto" alt="...">
              </div>
              <div class="carousel-item">
                <img src="Img/pasta.jpg" class="d-block w-100 alto" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>

    <!--La carta-->
    <main>
        <div class="row ow-cols-1 row-cols-md-3 g-4 p-5" id="carta">
            <!--metodo abreviado para agregar etiquetas con clases o id
            clase ejem h2.titulo (el punto asigna de una vez la clase y con el # agrega el id)-->
            <h2 class="titulo">La carta</h2>
            <div class="col">
                <div class="card">
                    <img src="Img/hamburger.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Hamburguesa integral</h5>
                        <p class="card-text">Deliciosa hamburguesa saludable con pan integral y vegetales frescos.</p>
                        <a href="https://wa.me/3008504573?text=%C2%BFDe%20qu%C3%A9%20te%20quieres%20antojar%20hoy%3F"
                            class="btn btn-primary" target="_blank">Agregar al menú</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <img src="Img/costilla.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a href="https://wa.me/3008504573?text=%C2%BFDe%20qu%C3%A9%20te%20quieres%20antojar%20hoy%3F"
                            class="btn btn-primary" target="_blank">Agregar al menú</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <img src="Img/Casuela.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a href="https://wa.me/3008504573?text=%C2%BFDe%20qu%C3%A9%20te%20quieres%20antojar%20hoy%3F"
                            class="btn btn-primary" target="_blank">Agregar al menú</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <img src="Img/Casuela.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a href="https://wa.me/3008504573?text=%C2%BFDe%20qu%C3%A9%20te%20quieres%20antojar%20hoy%3F"
                            class="btn btn-primary" target="_blank">Agregar al menú</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <img src="Img/Casuela.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a href="https://wa.me/3008504573?text=%C2%BFDe%20qu%C3%A9%20te%20quieres%20antojar%20hoy%3F"
                            class="btn btn-primary" target="_blank">Agregar al menú</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <img src="Img/Casuela.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a href="https://wa.me/3008504573?text=%C2%BFDe%20qu%C3%A9%20te%20quieres%20antojar%20hoy%3F"
                            class="btn btn-primary" target="_blank">Agregar al menú</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <img src="Img/Casuela.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a href="https://wa.me/3008504573?text=%C2%BFDe%20qu%C3%A9%20te%20quieres%20antojar%20hoy%3F"
                            class="btn btn-primary" target="_blank">Agregar al menú</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <img src="Img/Casuela.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a href="https://wa.me/3008504573?text=%C2%BFDe%20qu%C3%A9%20te%20quieres%20antojar%20hoy%3F"
                            class="btn btn-primary" target="_blank">Agregar al menú</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!--Servicios-->
    <div class="row ow-cols-1 row-cols-md-2 g-4 p-5" id="servicios">
        <h2 class="tituloser">Servicios</h2>
        <div class="col">
            <div class="card">
                <img src="Img/descarga.jfif" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text">Haz la reserva en cualquiera de nuestros restaurantes.</p>
                    <a href="https://wa.me/3008504573?text=%C2%BFDe%20qu%C3%A9%20te%20quieres%20antojar%20hoy%3F"
                        class="btn btn-primary" target="_blank">Reservación</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <img src="Img/domicilio.jfif" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text">Pide tu comida favorita para los días que no quieras salir de casa.</p>
                    <a href="https://wa.me/3008504573?text=%C2%BFDe%20qu%C3%A9%20te%20quieres%20antojar%20hoy%3F"
                        class="btn btn-primary" target="_blank">Domicilio</a>
                </div>
            </div>
        </div>
    </div>

        <!--contacto-->
        <section class="" id="contacto">
            <h2 class="titulo">contacto</h2>
                 <form action="mailto:monicaeducate@gmail.com" method="post">
            <!--para que los datos que llene la persona lleguen en formato dee excel al correo ya sea de la empresa o personal-->
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
                        <textarea name="mensaje" id="" cols="30" rows="10"  placeholder="mensaje"></textarea>
                    </div>

                    <div>
                        <button type="submit" class="btn btn-warning">Enviar</button>
                        <button type="reset" class="btn btn-danger">Limpiar</button>
                    </div>
                </form>

                <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdf0gnW31FAwfPWlwVJcFTOroDuZQjrgqhK8H-ofgWrqnQFAg/viewform?embedded=true" width="640" height="500" frameborder="0" marginheight="0" marginwidth="0">Cargando…</iframe>
        </section>

        <footer class="cover">
            &copy;2023. Todos los derechos reservados M.P restaurant. Creado por <a href="https://www.instagram.com/pineda.700/" target="_blank">Mónica Pineda</a>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
            integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
            crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
            integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
            crossorigin="anonymous">
        </script>
</body>
</html>

<!--shift + alt + f para alinear todo el código-->