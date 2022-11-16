
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
else{

$pokemon=$_POST['pokimon'];
$poke= strval($pokemon);
$url = curl_init("$pokemon");
curl_setopt($url, CURLOPT_RETURNTRANSFER, true);
curl_setopt($url, CURLOPT_ENCODING, 'gzip3');
$respuesta = curl_exec($url);
curl_close($url);
$stats = json_decode($respuesta);

?>
<html>
    <head>
        <title> cartas </title>
        <link rel="stylesheet"  href="hola.css">
        
    </head>
    <body>
        
    <div>
          <p>Te doy la bienvenida <strong><?php echo $_SESSION['email'];?></strong></p>
    </div>
        <div class="cartas">
<div class="carta-completa">
    <div class="pokemon-card">
        <div class="contenedor">
        <?php 
 
            echo '<img loading="lazy" class="imagen" src="'.$stats->sprites->front_default.'">';
            ?>
        </div>
      
    <div class="pokemon-stats">
        <h1 class="nombre"><?php    echo $stats->name; ?></h1>
        <span class="numero">pokemón #<?php echo $stats->id;?></span>
        
        <div class="habilidades"> <?php
          
                foreach($stats->abilities as $k => $v) {
                ?> <p><?php echo $v->ability->name;?></p>
                <?php
            }
            ?>
                <br>
                <a href="cerrar.php">Cerrar Sesión</a>
            </div>
    </div>
 </div>
</div> 
        </div>

</li>
<div align="center">
  

</body>
</html>

    <?php
}
?>