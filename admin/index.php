<?php 
session_start();
if($_POST){
    if(($_POST['username']=="Fabian Dev") && ($_POST['password']=="3312")){ // esta es una de las maneras de validar sin bases de datos relacionales, pero llamando a las bases de datos no relacionales, puede funcionar de manera mas segura ya que llamariamos a la base en formato json, con firebase, mogodb o node.
        $_SESSION['username']="Fabian Silva";
        header("location:inicio.php"); //esta funcion redirecciona a la persona a donde quiero que se redireccione
    }else{
        echo "<script> alert('usuario o contraseña incorrecto') </script>";
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
                            <input class="flip-card__input" name="username" placeholder="Username o Dirección de correo" type="text">
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