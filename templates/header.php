<?php

include 'database.php'

?>
 
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Te enseñamos a posicionar tu marca en internet </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Aprende a posicionar tu marca, llegar a tu público objetivo, crear embudos de venta efectivos y hacer crecer tu negocio con nuestra ayuda. ¡Conviértete en un experto en marketing digital!"/>
    <link rel="icon" href="../assets/img/iconfly.png" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,200..800&family=Dela+Gothic+One&family=Titan+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/loaderStyle.css">
    <link rel="stylesheet" href="../css/tablet.css" media="(min-width:750px)">
    <link rel="stylesheet" href="../css/descktop.css" media="(min-width:1000px)">
    
</head>
<body class="body">
    <header>
        <section class="sectionMenu">
            <div class="logo">
                <p>Dona Estudio</p>
                <span></span>
            </div>
            <label class="hamburger">
            <input type="checkbox">
            <svg viewBox="0 0 32 32">
                <path class="line line-top-bottom" d="M27 10 13 10C10.8 10 9 8.2 9 6 9 3.5 10.8 2 13 2 15.2 2 17 3.8 17 6L17 26C17 28.2 18.8 30 21 30 23.2 30 25 28.2 25 26 25 23.8 23.2 22 21 22L7 22"></path>
                <path class="line" d="M7 16 27 16"></path>
            </svg>
            </label>
        </section>
        <!-- <menu>
            <ul>
                <?php foreach ($menu as $item => $link){ ?>
                     <li>
                         <a href="<?php echo $link['ruta'];?>" class="button"><?php echo $item;?>
                         </a>
                     </li>
                <?php }  ?>
                <button>
                    Contáctanos
                 </button>
            </ul>
        </menu> -->
    </header>
    <section class="loaderPage">
        <div id="loader">
            <div class="ls-particles ls-part-1"></div>
            <div class="ls-particles ls-part-2"></div>
            <div class="ls-particles ls-part-3"></div>
            <div class="ls-particles ls-part-4"></div>
            <div class="ls-particles ls-part-5"></div>
            <div class="lightsaber ls-left ls-green"></div>
            <div class="lightsaber ls-right ls-red"></div>
        </div>  
        <div class="loadingtext">
            <p>Cargando</p>
        </div>

    </section>
    
    