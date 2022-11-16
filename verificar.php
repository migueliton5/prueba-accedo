<?php

$id=$_POST['email'];
$pass=$_POST['pass'];

session_start();
$_SESSION['email']=$id;

include("bd.php");

$consulta="SELECT * FROM usuario WHERE email='$id' and pass='$pass'";
$resultado= mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    
    header("location:vistalogeado.php");
    
} else {
      header("location:vistaprincipal.php");

    ?>
    <!--aqui va el html-->
    <?php
    
}
mysqli_free_result($resultado);
mysqli_close($conexion);


?>