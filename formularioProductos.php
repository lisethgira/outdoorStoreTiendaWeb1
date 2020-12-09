<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Administrador de Productos</title>
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
                            <a class="nav-link" href="listarProductos.php">Catálogo de Productos</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="header-content d-flex justify-content-center p-2">
            <img src="img/logo.jpg" alt="" id="header-logo">
            <div id="header-msg" class="ml-5 align-self-center">ADMINISTRADOR DE PRODUCTOS</div>            
        </div>
        </header>
        <main class="dark">
            <br>
        <div class="container col-6 ">
            <form action="registrarProductos.php" method="POST">
                <h1>FORMULARIO REGISTRO</h1>
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Nombre Producto" name="nombre">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Marca Producto" name="marca">
                    </div>
                </div>
                <div class="row mt-3"> 
                    <div class="col">
                           <input type="text" class="form-control" placeholder="Precio Producto" name="precio">
                    </div>
                </div>
                <div class="row mt-3"> 
                    <div class="col">
                      <textarea class="form-control" rows="4" name="descripcion" placeholder="Descripción"></textarea>
                    </div>
                </div>
                <div class="row mt-3"> 
                    <div class="col"> 
                        <label class="font-weight-bold">Foto:</label> 
                            <input type="text" class="form-control" placeholder="Foto URL" name="foto">
                    </div>
                </div>
                <br>    
                <div class="col text-center">
                    <button type="submit" class="btn btn-info" name="botonEnvio">Registrar Producto</button>
                </div>
            </form>
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