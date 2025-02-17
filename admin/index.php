<?php include('./config/database.php') ?>


<?php 
// variables de secion
session_start();
if($_POST){


    $username = $_POST['username']; // recupera el valor del input username
    $password = $_POST['password'];// recupera el valor del input password

    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'"; //creamos la consulta

    $result = connection($query); // ejecutamos la consulta

    if($result->num_rows ===  1){ // si la consulta devuelve un resultado
        $row = $result->fetch_assoc(); // almacenamos el resultado en la variable row el cusl es un array asociativo, y en este se guarda el resultado de la consulta
        $_SESSION['username'] = $row['username']; // creamos una variable de secion con el valor de la columna username de la tabla users, en este caso el valor de la columna username es el valor del input username. la estuctura $_session[aqui va el nombre de la variable de secion] = $row[aqui va el nombre de la columna de la tabla]. 
        $_session['password'] = $row['password']; // creamos una variable de secion con el valor de la columna password de la tabla users, en este caso el valor de la columna password es el valor del input password. la estuctura $_session[aqui va el nombre de la variable de secion] = $row[aqui va el nombre de la columna de la tabla]. 
        header('location:inicio.php');
    }else{
        echo "<script>alert('Usuario o contraseña incorrectos')</script>";
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