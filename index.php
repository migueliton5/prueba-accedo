<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Inicio Sesion</title>
    <link rel="stylesheet" href="fondologin.css">
  </head>
  <body>

    <div class="login-box">
        
         <center>
      <h1>Acceso</h1>
      <h4>pokeapi</h4>
      </center>
      <form action="verificar.php" method="post">
        <!-- USERNAME INPUT -->
        <label for="username">Email</label>
        <input id="email" type="email" name="email" placeholder="e.g. user@server.com" required>
        <!-- PASSWORD INPUT -->
        <label for="password">Contraseña</label>
        <input id="pass" type="password" name="pass" placeholder="Escribir contraseña..." required>
        <input type="submit" value="Iniciar Sesion">
        <a href="usuarionuevo.php">¿No tienes una cuenta?</a>
        <a href="verificar.php">lista</a>
      </form>
    </div>
  </body>
</html>