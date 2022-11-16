<?php

session_start();
if(!$_SESSION['email']){
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
 header("Location: index.php");
     exit();
}
?>
<html>
    <head>
        <title> lista </title>
        <link rel="stylesheet"  href="hola2.css">
    </head>
    
         <nav class="menu">
            <ul>
              <a href="cerrar.php" class="nav-enlace">Salir</a>
                 <div class="organizar">
                 <p>Te doy la bienvenida <strong><?php echo $_SESSION['email'];?></strong></p>
                </div>  
            </ul>
        </nav>
    
      <body>
           <h1 class="titulo"> Mira tu Pókemon Favorito</h2>
        <div class="contenedor">
<?php

$identificador=19;
for($i=0;$i<=$identificador;$i++)
{


$url = curl_init();
curl_setopt($url,CURLOPT_URL ,"https://pokeapi.co/api/v2/pokemon/");
curl_setopt($url, CURLOPT_ENCODING, 'gzip3');
curl_setopt($url, CURLOPT_RETURNTRANSFER, true);
$respuesta = curl_exec($url);
curl_close($url);

$stats = json_decode($respuesta,true);

?>

  <div class="lista">
            
        <form action="detalle.php" method="post">
        <input type="hidden" value="<?php print_r($stats['results'][$i]["url"]);?>" name="pokimon">
        <input type="submit" value=" <?php print_r($stats['results'][$i]['name']);?>">
        </form>

   </div>
    

<?php
}
?>
        </div>
    </body>
    
</html>