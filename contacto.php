<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<?php
$pageTitle = "Asesoría Torrents - Contacto";
$pageDesc = "";
$mode = "black";
include 'header.php'; 
//$_SESSION["formInfo"] = "HELLO SER";

if (isset($_SESSION["formInfo"])) {
  echo '<div class="formmessage">' . $_SESSION["formInfo"] . '</div>';
}
?>

<main class="center">


<div class="imagebg">
<div class="overlay">
<span class="subtitle whiteshadow"><?php echo $contactoSubTitulo?></span>
<h1><?php echo $contactoTitulo?></h1>

<p class="narrow whiteshadow">
<?php echo $contactoTexto?>
</p>

<table class="contact whiteshadow">
  <tr>
      <th><h3><?php echo $contactoTitulos[0]?></h3><p><a href="tel:<?php echo $contactoDatos[0]?>" title="Llamar"><?php echo $contactoDatos[0]?></a></p></th>
      <th><h3><?php echo $contactoTitulos[1]?></h3> <p><a href="tel:<?php echo $contactoDatos[1]?>" title="<?php echo $contactoTitulos[1]?>"><?php echo $contactoDatos[1]?></a></p></th>
      <th><h3><?php echo $contactoTitulos[2]?></h3><p><a target="_blank" title="Abrir Google Maps" href="<?php echo $contactoGoogleMapsEnlace?>"> <?php echo $contactoDatos[2]?></a></p> </th>
      <th><h3><?php echo $contactoTitulos[3]?></h3><p> <a title="Enviar correo" href="mailto:<?php echo $contactoDatos[3]?>"><?php echo $contactoDatos[3]?></a> </p></th>
  </tr>
</table>

<!--

<h2><?php echo $formTitulo?></h2>

<p class="narrow whiteshadow">
<?php echo $formTexto?>
</p><br>



<form action="app/sendform.php" method="post">

<input type="text" id="name" name="name" placeholder="Nombre *" required maxlength="100">
<br>

<input type="email" id="email" name="email" placeholder="Email *" required maxlength="100">
<br>

<input type="tel" id="phone" name="phone" placeholder="Teléfono " maxlength="30">
<br>

<textarea name="message" rows="10" cols="30" placeholder="Vuestra consulta *" required maxlength="500">
</textarea>
<br>

<input type="checkbox" required id="conditions" name="conditions" value="Accepto">
<label for="conditions">Acepto los <a target="_blank" href="terminosycondiciones.pdf" title="Abrir documento">términos y condiciones general de uso </a> de Asesoría Torrents </label><br>


<input type="submit" value="Enviar">

</form>

-->

<div class="smallspace"></div>

<img class="social_icon" alt="instagram link" src="img/instagram.png">
<a href="https://www.linkedin.com/in/lucianatorrents" title="Linkedin"><img class="social_icon" alt="linkedin link" src="img/linkedin.png"></a>
<img class="social_icon" alt="facebook link" src="img/facebook.png">


</div>
</div>


</main>
<?php
include 'footer.php';
?>

</body>
</html>
<?php  
session_unset();
?>