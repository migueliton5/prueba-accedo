<?php

include("bd.php");


$id = $_POST['id'];
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$pass = $_POST['pass'];
//Procedimiento

$query = "INSERT INTO usuario (id, nombre, email, pass) VALUES ('$id','$nombre', '$email', '$pass')"; //consulta, aquí se define la consulta
$resultado = $conexion->query($query);
if($resultado){
    header("location:index.php");
    
} else {
    
    echo "No se guardó";
}

?>