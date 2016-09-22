<!DOCTYPE html>
<html>
    <head>
        <meta charset="x-windows-874">
      <title>MusicaViva.mus Registro</title>
    </head>
    <body>
        <div id="logo">
            <img src="images/logo.png" alt="logo" />
        </div>
        <div id="menu">
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="estilos.php">Estilos Musicales</a></li>
                <li><a href="artistas.php">Artistas</a></li>
                <li><a href="registro.php">Registro</a></li>
                <li><a href="eventos.php">Eventos</a></li>
            </ul>
            
            <form action="login.php" method="post">
                <input type="text" placeholder="login" name="l" />
                <input type="password" placeholder="password" name="p" />
                <input type="submit" value="Ingresar" />
            </form>
        </div>
        
        <div id="contenido">
            
            <div id="columna1">
                <h1>Registro de Artistas</h1>
                <form action="guardar.php" method="post">
                <table>
                    <tr>
                        <td>e-mail: </td>
                        <td><input type="text" placeholder="micorreo@correo.com" name="u" id="u"/></td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td><input type="password" name="p1" id="p1" /></td>
                    </tr>
                    <tr>
                        <td>Confirma el Password:</td>
                        <td><input type="password" name="p2" id="p2" /></td>
                    </tr>
                    <tr>
                        <td> </td>
                        <td> <input type="submit" value="Registrate" /></td>
                    </tr>
                </table>    
            </form>
            
        </div>
        
        <div id="footer">
            <!-- info referente a otras paginas o links redes sociales -->
            <ul>
                <li><a href="informacion.html">Informacion</a></li>
                <li><a href="nosotros.html">Nosotros</a></li>
                <li><a href="mapa_sitio.html">Mapa del sitio</a></li>
                <li><a href="https://www.facebook.com">Facebook</a></li>
                <li><a href="https://www.twitter.com">Twitter</a></li>
            </ul>
            
        </div>
        
    </body>
</html>

