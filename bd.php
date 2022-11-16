<?php

// conexion con la Base de Datos

$conexion = new mysqli('localhost', 'root', '', 'pokeapi'); 

 if ($conexion){
     
     //echo "Se conectó";
     echo "";
 }  
    else {
        
        echo "No se conectó";
    }

