
<?php
    $userName = "";
    $contraseña = "";

if ($_POST) {
    // Recupera los datos del formulario
    $userName = $_POST['username'];
    $contraseña = $_POST['password'];

    if (empty($userName) || empty($contraseña)) {
        $error_message = "Por favor, ingresa ambos campos.";
    }
    // Comprobamos si los datos de usuario y contraseña son incorrectos
    if (empty($userName != 'Fabian Dev')  || empty($contraseña != '3312') ) {
        $error_message = "El usuario y la contraseña son incorrectos.";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador | Dona Estudio</title>
    <link rel="stylesheet" href="./css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,200..800&family=Dela+Gothic+One&family=Titan+One&display=swap" rel="stylesheet">
</head>
<body>
    
    
<main class="mainDiv">
        
    <?php if ($userName == 'Fabian Dev' && $contraseña == '3312'): ?>
        <h1 class="h1">Bienvenido</h1>
    <?php endif; ?>

    <?php if (isset($error_message)): ?>
        <p class="h1"><?php echo $error_message; ?></p>
    <?php endif; ?>



    <div class="wrapper">
            <div class="card-switch">
                <label class="switch">
                <input type="checkbox" class="toggle">
                <span class="slider"></span>
                <span class="card-side"></span>
                <div class="flip-card__inner">
                    <div class="flip-card__front">
                        <div class="title">Inicia Seción Aquí</div>
                        <form class="flip-card__form" action="index.php" method="post">
                            <input class="flip-card__input" name="username" placeholder="Username o Dirección de correo" type="text">
                            <input class="flip-card__input" name="password" placeholder="Contraseña" type="password">
                            <button class="flip-card__btn">Ingresar!</button>
                        </form>
                    </div>
                    <div class="flip-card__back">
                        <div class="title">Registrate aquí</div>
                        <form class="flip-card__form" action="">
                            <input class="flip-card__input" placeholder="Username" type="name">
                            <input class="flip-card__input" name="email" placeholder="Correo Electronico" type="email">
                            <input class="flip-card__input" name="password" placeholder="Contraseña" type="password">
                            <button class="flip-card__btn">Confirmar!</button>
                        </form>
                    </div>
                </div>
                </label>
            </div>   
    </div>
</main>

</body>
</html>