<!DOCTYPE html>
<html lang="es">
<?php
$pageTitle = "Asesoría Torrents - Inicio";
$pageDesc = "";
include 'header.php'; 
?>


<main class="home">
<!--<img class="homepic" src="img/diary.jpg">-->
  <div class="homepicbg"></div>

  <div class="welcomemessage">
    <br>
    <p class="subtitle"><?php echo $iTituloMini?><p>
    <h1><?php echo $iTituloGrande?></h1>
    <p><?php echo $iIntro?></p>
    <br>
    <a href="nosotros.php" class="button">Leér más</a><br>

  </div>

<img class="homepicmobile moving" alt="writing notes" src="img/diary.jpg">


<div class="blackbox moving">
<span class="subtitle "><?php echo $iPublicidadMini?></span>
    <h3 class="leftin"><?php echo $iPublicidadGrande?>
</h3>
  <a href="contacto" class="button"><?php echo $iPublicidadBoton?></a><br>
</div>

<div class="bigspace"></div>

<p class="subtitle center "><?php echo $servMini?><p>
<h2 class="center"><?php echo $servGrande?></h2>

<p class="center"><?php echo $servTexto?></p>
<div class="smallspace"></div>



<table class="homesevices2 center moving" style="width:100%">
    <tr><!--<span class="number">03.</span>-->
      <td><h3><?php echo $servTitulos[0]?></h3><p><?php echo $servTextos[0]?></p></td>
      <td><h3><?php echo $servTitulos[1]?></h3>    <p><?php echo $servTextos[1]?></p></td>
      <td><h3><?php echo $servTitulos[2]?></h3>   <p><?php echo $servTextos[2]?></p></td>
      <td><h3><?php echo $servTitulos[3]?></h3>   <p><?php echo $servTextos[3]?></p></td>
    </tr>
  </table>



<br>
<p class="center moving"><a href="servicios" class="button bluebg">Ver todos servicios >> </a><br></p>

</main>


<?php
include 'footer.php';
?>



</body>
</html>
