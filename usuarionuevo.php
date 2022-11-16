<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cuenta nueva</title>
    <link rel="stylesheet" href="fondologin.css">
    <!--<link rel="stylesheet" href="../css/master1.css">-->
  </head>
  <?php
      //include("consultas/verificar.php");
      ?>
  <body>
  <center>
      <div class="login-box">
          <h1>Crea tu cuenta</h1>
          <p>Aquí puedes crear un usuario nuevo para acceder a los detalles de los pokemón</p><br>
          <h4>Ingrese sus datos aquí</h4>
              <form action="guardarnuevousuario.php" method="post">
                  <input type="text" id="id" name="id" placeholder="Tu Id..." required>
                  <input type="text" id="name" name="nombre" placeholder="Tu nombre..." required>
                  <input type="email" id="email" name="email" placeholder="Tu email..." required>
                  <input type="password" id="pass" name="pass" placeholder="Tu contraseña..." required>
                  <input type="submit" value="Crear" required> 
                  <a class="letra" href="index.php">volver</a>
              </form>
    </div>
   </center>
  </body>
</html>
