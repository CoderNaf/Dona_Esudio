<?php include('./config/database.php') ?>


<?php 
// variables de secion
session_start();
if($_POST){

    $username = $_POST['username']; // recupera el valor del input username
    $password = $_POST['password'];// recupera el valor del input password

    $objectConnection = new conecction(); // creamos un objeto de la clase conecction

    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'"; //creamos la consulta
    $result = $objectConnection->consultar($query); // ejecutamos la consulta

    
    if(count($result) > 0){ // si el resultado de la consulta es mayor a 0
        $_SESSION['username'] = $result[0]['username']; // almacenamos el username en la variable de sesión
        header('Location: inicio.php'); // redireccionamos a la página inicio.php
    }else{
        echo "Usuario o contraseña incorrectos"; // si el resultado de la consulta es 0, mostramos un mensaje de error.
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
                            <input class="flip-card__input" name="username" placeholder="Username o Email" type="text">
                            <input class="flip-card__input" name="password" placeholder="Contraseña" type="password">
                            <button class="flip-card__btn" type="submit">Ingresar!</button>
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