<?php
include 'contenido.php'; 
?>
<head>
    <meta charset="utf-8">
    <title><?php echo $pageTitle?></title>
    <meta name="description" content="Somos especialistas en Derecho Laboral, de la Seguridad Social y Extranjería. Nuestro objetivo principal es la búsqueda de soluciones eficaces para cada caso, diseñando para cada cliente una estrategia adecuada y personalizada a su situación y necesidades. <?php echo $pageDesc?>">
    <meta name="author" content="Lisa Veltman">
    <meta name="keywords" content="asesoría, jurídica, abogado, extranería, visados, inmigración, legal, derecho laboral, seguridad social, Barcelona, Madrid, España">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/normalize.css" type="text/css">
    <link rel="stylesheet" href="style/style.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/jquery.visible.js"></script>
    <script src="js/jqueryFuncs.js"></script>
    <?php
    include 'favicons.php'; 
    ?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-69CR725TK6"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-69CR725TK6');
    </script>
</head>
<body class="fade-in">
    
<header>
    <a href="index" title="Página incial">
    <div class="logo"><?php echo $nombre[0]?> <span class="logoItalic"><?php echo $nombre[1]?></span>
    </div> 
    
    <span class="slogan"><?php echo $eslogan?></span></a><br>
    <img class="logoicon" src="img/balance.png" title="Logo">

    <nav>
    <div class="logo onlyMobile smaller"><?php echo $nombre[0]?> <br><span class="logoItalic"><?php echo $nombre[1]?></span></div>
    <img class="logoiconmobile" src="img/balance.png" title="Logo">
    <ul>
        <li><a class="<?= basename($_SERVER['SCRIPT_NAME']) == "index" ? "current" : ""; ?>" href="index"><?php echo $menu[0]?></a></li>
        <li><a class="<?= basename($_SERVER['SCRIPT_NAME']) == "nosotros" ? "current" : ""; ?>" href="nosotros"><?php echo $menu[1]?></a></li>
        <li><a class="<?= basename($_SERVER['SCRIPT_NAME']) == "servicios" ? "current" : ""; ?>" href="servicios"><?php echo $menu[2]?></a></li>
        <li><a class="<?= basename($_SERVER['SCRIPT_NAME']) == "contacto" ? "current" : ""; ?>" href="contacto"><?php echo $menu[3]?></a></li>
    </ul>
    </nav>

   
    <div class="menubtn openmenu"><img alt="abrir menu" class="menuicon" src="img/bars.svg"></div>
    <div class="menubtn closemenu"><img alt="cierrar menu" class="menuicon" src="img/close.svg"></div>

</header>




