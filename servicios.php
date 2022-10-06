<!DOCTYPE html>
<html lang="es">
<?php
$pageTitle = "Asesoría Torrents - Servicios y areas de trabajo";
$pageDesc = "";
include 'header.php'; ?>


<main class="services">

<h1><?php echo $serviciosTitulo?></h1>
<p class=""><?php echo $serviciosIntro?></p>
<p class=""><a href="contacto.php" class="button bluebg"><?php echo $serviciosBoton?></a></p>

<div class="servicebox">
    <div class="servicepic floatl" data-src="img/plane.jpg">
        <div class="serviceoverlay">
            <h2><?php echo $extranjeriaTitulo?></h2> </div>
    </div>
    <p class="smaller servicetext servicepicLeft">
    <?php echo $extranjeriaTexto?></p>

    <ul class="servicelist padding20">
    <?php echo $extranjeriaListado?>
    </ul>

    
</div>

<div class="servicebox moving">
    <div class="servicepic floatr servicepicLeft" data-src="img/laboral.jpg"> 
        <div class="serviceoverlay"><h2><?php echo $laboralTitulo?></h2></div>
    </div>

    <p class="smaller servicetext"><?php echo $laboralTexto?>
    </p>

    <ul class="servicelist">
    <?php echo $laboralListado?>
    </ul>
</div>


<div class="servicebox moving">
    <div class="servicepic floatl " data-src="img/laptop1.jpg">
        <div class="serviceoverlay"><h2><?php echo $ssTitulo?></h2></div>
    </div>

    <ul class="servicelist">
    <?php echo $ssListado?>
    </ul>
</div>

<div class="servicebox moving">
    <div class="servicepic floatr servicepicLeft" data-src="img/gestoria"> 
        <div class="serviceoverlay"><h2><?php echo $gestoriaTitulo?></h2></div>
    </div>
    <p class="smaller servicetext"><?php echo $gestoriaTexto?></p>
    <ul class="servicelist">
    <?php echo $gestoriaListado?>
    </ul>
</div>

<div class="servicebox moving">
    <div class="servicepic floatl" data-src="img/square.jpeg"> 
    <div class="serviceoverlay">
        <h2><?php echo $otrosTitulo?></h2></div>
    </div>
    <ul class="servicelist">
    <?php echo $otrosListado?>
    </ul>
</div>

<div class="smallspace"></div>

<div class="servicesShort">
  <h2><?php echo $paisesTitulo?></h2>
  <p class="subtitle "><?php echo $paisesSubTitulo?><p>

  <p class="smaller ">
  <?php echo $paisesTexto?>
    </p>

    <p class=""><a href="contacto.php" class="button bluebg"><?php echo $paisesBoton?></a></p>

</div>



<!--
<h1>Servicios y <br>areas de trabajo</h1>
    <p class="">Aqui un poco sobre los servicios. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor les. 
        <br>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>

    <div class="smallspace"></div>


<p class="subtitle ">Haz Click sobre un servicio</p>

<button class="collapsible "><span class="numbermini"> Extranjería e inmigración</span></button>

<div class="content">
    <h2>Extranjería e inmigración</h2>
    
    
<ul class="servicelist">
    
<li> Asesoría jurídica integral en materia de inmigración</li>
<li> Obtención de NIE de no residente</li>
<li> Certificado de registro Ciudadano de la Unión Europea</li>
<li> Gestión de residencia por causas excepcionales: Arraigo social, arraigo laboral y arraigo familiar</li>
<li> Permisos de residencia y trabajo</li>
<li> Obtención de citas en policía nacional</li>
<li> Obtención y renovación de autorizaciones de residencia y trabajo</li>
<li> Obtención y renovación de autorización de residencia no lucrativa</li>
<li> Residencia de larga duración</li>
<li> Reagrupación familiar<br>&nbsp;</li>
<li> Tramitación de Nacionalidad española</li>
<li> Permiso de trabajo para trabajadores altamente cualificados por la Ley 14/2013 de apoyo a emprendedores y por la normativa de extranjería: tramitación y renovación</li>
<li> Certificado de concordancia NIE- DNI</li>
<li> Tarjeta de residencia de familiar de ciudadano de la Unión</li>
<li> Formalización de pareja de hecho</li>
<li> Estancia por estudios /Visa de estudios</li>
<li> Carta de invitación</li>
<li> Realización de recursos ante denegaciones de extranjería</li>
<li> Tramitación de Golden visa.</li>
</ul>

    
 </div>
 
<button class="collapsible"><span class="numbermini"> Laboral</span></button>
<div class="content">
    
    <h2>Laboral</h2>
   
    <ul class="servicelist">
        <li> Asesoría integral en derecho laboral</li>
        <li> Defensa jurídica: redacción, presentación y defensa de CMAC, demandas y recursos</li>
        <li> Despidos</li>
        <li> Excedencias</li>
        <li> Sanciones laborales</li>
        <li> Reclamaciones de cantidad</li>
        <li> Permisos, licencias y vacaciones</li>
        <li> ERES y ERTES</li>
        <li> Accidentes laborales</li>
        <li> Reconocimiento de derecho</li>
        <li> Inspección de Trabajo</li>
        <li> Revisión documental y cálculos</li>
    </ul>
  

</div>
<button class="collapsible"><span class="numbermini"> Seguridad social</span></button>
<div class="content">

    <h2>Seguridad social</h2>

    <ul class="servicelist">
         <li> Asesoría integral en materia de Seguridad Social</li>
        <li> Prestaciones por desempleo (paro)</li>
        <li> Subsidios por desempleo (ayudas)</li>
        <li> Maternidad/paternidad</li>
        <li> Incapacidad laboral temporal y permanente</li>
        <li> Jubilaciones</li>
    </ul>
  
 </div>
<button class="collapsible"><span class="numbermini"> Gestoría</span></button>
<div class="content">

    <h2>Gestoría</h2>
   
    <ul class="servicelist">
    <li> Revisión de nóminas</li>
    <li> Cálculo de finiquitos e indemnizaciones</li>
    <li> Revisión documental en general</li>
    <li> Alta en seguridad social de trabajadores</li>
    <li> Redacción y revisión de todo tipo de contratos de trabajo</li>
    <li> Obtención de núm. de seguridad social para trabajadores</li>
    <li> Obtención de código cuenta cotización para empleadores</li>
    </ul>
    

</div>

<button class="collapsible"><span class="numbermini">  Otros</span></button>
<div class="content">

    <h2>Otros</h2>
  
    <ul class="servicelist">
    <li> Asesoría jurídica y gestoría de empleadas/os del hogar</li>
    <li> Servicios de notaría</li>
    <li> Redacción y envío de burofax</li>
    <li> Cancelación de antecedentes penales y policiales</li>
    <li> Civil:<br>
    &bull; Revisión de contrato de alquiler<br>
    &bull; Reclamación de fianzas de alquiler<br>
    &bull; Reclamación de responsabilidad civil<br>
    &bull; Reclamación de vicios ocultos en compra-ventas<br>   
    </li> 
    </ul>
  

</div>
<br>
<p class="right"><a href="contacto.php" class="button bluebg">Pide presupuesto ya!</a></p>
-->


<div class="smallspace"></div>
</main>

<!--
<div class="moving fullimage"></div>-->

<?php
include 'footer.php';
?>



</body>
</html>
