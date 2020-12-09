<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>outdoor Store</title>
        <link rel="icon" type="image/png" href="img/logo.jpg"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="estilos.css">
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="index.php">BIENVENIDO</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="administracion.php">Administración</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="listadoProductos.php">Catálogo de Productos</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="header-content d-flex justify-content-center p-2">
            <img src="img/logo.jpg" alt="" id="header-logo">
            <div id="header-msg" class="ml-5 align-self-center">Outdoor Store</div>            
        </div>
        </header>
        <main class="dark">
        <h2 class="negritaycolor text-center">EL HOGAR DE LOS AVENTUREROS</h2>
        
        <p class="parrafo1 text-justify">En OUTDOOR STORE encontrarás un catálogo de productos que te serán de gran utilidad si eres una amante de la aventura, la vida al aire libre y la exploración; te traemos los mejores articulos para campistas, deportistas y para todo tipo de hobbies aventureros.</p>
</div>    
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/campismo.jpg" class="img-fluid mx-auto d-block w-100 imagen" alt="imagen1">
          </div>
          <div class="carousel-item">
            <img src="img/montañismo.JPG" class="img-fluid mx-auto d-block w-100 imagen" alt="imagen2">
          </div>
          <div class="carousel-item">
            <img src="img/escalada.JPG" class="img-fluid mx-auto d-block w-100 imagen " alt="imagen3">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
</main>
<footer class="bg-primary text-white mt-5">
<div class="row justify-content-around text-center ">
     <div class="col-md-3 mt-5">
     <img src="img/liseth.jpg" alt="Liseth Giraldo" class="img-fluid w-100 rounded-circle">
     <p>Liseth Arelis Giraldo Morales </p>
     <p>Lisethgiraldo628@gmail.com</p>
     <p>Rionegro - Antioquia</p>
     <p>© Colombia - 2020 Copyright</p>
 </div>
</footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
</body>

</html>