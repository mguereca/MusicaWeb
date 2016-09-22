<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="x-windows-874">
        <meta name="viewport" content="width-device-width, initial-scale=1.0">
      <title>MusicaViva.mus</title>
      
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" media="screen">
    
      </head>
    <body>
        <div id="logo" style="background-image: url('images/background.jpg')">
            <table>
                <tr>
                    <td><img class="img-responsive" src="images/logo.png" alt="logo" /></td>
                    <td><h2 style="color: white">MusicaViva.net</h2></td>
                </tr>
            </table>
        </div>
        <div id="menu">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    
                    <ul class="nav navbar-nav">
                        <li> <a href="index.php">Inicio</a></li>
                        <li><a href="estilos.php">Estilos Musicales</a></li>
                        <li><a href="artistas.php">Artistas</a></li>
                        <li><a href="registro.php">Registro</a></li>
                        <li><a href="eventos.php">Eventos</a></li>
                    </ul>
            
                    <form action="login.php" method="post" class="navbar-form navbar-right">
                        <div class="form-group">
                            <input type="text" placeholder="login" name="l" />
                            <input type="password" placeholder="password" name="p" />
                        </div>
                <input type="submit" value="Ingresar" class="btn-default" />
            </form>
                </div>
            </nav>
        </div>
        
        <div id="contenido" class="container">
            
            <!--- Carrusel ----------------->
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    
    <!--<li data-target="#myCarousel" data-slide-to="3"></li> -->
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
        <img src="images/foto1.jpg" alt="Eventos" class="img-responsive" >
    </div>

    <div class="item">
      <img src="images/foto2.jpg" alt="Estilos" class="img-responsive">
    </div>

    <div class="item">
      <img src="images/foto3.jpg" alt="Artistas" class="img-responsive">
    </div>
<!--
    <div class="item">
      <img src="img_flower2.jpg" alt="Flower">
    </div>
-->
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
            <!--- fin Carrusel -------------->
            <hr/>
            <div class="row">
            
                <div id="columna1" class="col-sm-4">
                <p>
                    <img src="images/foto1.jpg" alt="Eventos" style="width: 100%; height: 100%">
                <h3>Eventos</h3>
                Proximo concierto de JuanGabriel desde Ultratumba. No se lo pierdan. Esta de infarto.
                Precio: 1000 bitcoints.
                </p>
                
                </div>
                <div id="columna2" class="col-sm-4">
                <p>
                    <img src="images/foto2.jpg" alt="Estilos" style="width: 100%; height: 100%">
                <h3>Estilos</h3>
                    El Country es un estilo de musica 100% Gringo. Disfrutalo con nuestros Artistas
                    Internacionales.
                </p>
                
            </div>
                <div class="col-sm-4">
                    <p>
                        <img src="images/foto3.jpg" alt="Artistas" style="width: 100%; height: 100%">
                    <h3>Artistas</h3>
                    News: La Banda del Recodo decide hacer un encuentro con la Banda Militar de Inglaterra. No 
                    se pierda esta guerra de bandas. No Cover. Damas 2x1 en Kawasakys. Riguroso chaleco antibalas.
                    </p>
                </div>
            </div>
            
            <!--- otro renglon -->
            <div class="row">
            
                <div id="columna1" class="col-sm-4">
                <p>
                    Esta es la informaci&Oacute;n de la primera columna.
                </p>
                
                </div><div id="columna2" class="col-sm-4">
                <p>
                    Esta es la informaci&Oacute;n de la Segunda columna.
                </p>
                
            </div>
                <div class="col-sm-4">
                    <p>
                    Tercera columna.
                    </p>
                </div>
            </div>
        <!--     fin del container -->
        </div>
        <footer>
        <div id="footer" class="panel-body">
            <!-- info referente a otras paginas o links redes sociales -->
            <ul class="list-group">
                <li class="list-group-item"><a href="informacion.html">Informacion</a></li>
                <li class="list-group-item"><a href="nosotros.html">Nosotros</a></li>
                <li class="list-group-item"><a href="mapa_sitio.html">Mapa del sitio</a></li>
                <li class="list-group-item"><a href="https://www.facebook.com">Facebook</a></li>
                <li class="list-group-item"><a href="https://www.twitter.com">Twitter</a></li>
            </ul>
            
        </div>
            </footer>
        <!-- Seccion de bootstrap y jquery -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        
    </body >
</html>
