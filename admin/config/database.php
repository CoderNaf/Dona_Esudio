<?php

function connection($query) { //creamos una función que recibe un parámetro llamado $query que será la consulta que queremos ejecutar
    // Definir los parámetros de la base de datos
    $db_name = 'dona_dashboard';  // Nombre de la base de datos
    $db_user = 'root';            // Nombre de usuario (en tu caso 'root')
    $db_pass = '3312';            // Contraseña del usuario
    $db_server = 'localhost';     // Servidor MySQL, 'localhost' en este caso

    // Crear la conexión
    $conexion = new mysqli($db_server, $db_user, $db_pass, $db_name); // Crear la conexión con los datos de la base de datos, new es una palabra reservada para crear una nueva instancia de una clase en este caso para crear una nueva conexión a la base de datos

    // Verificar si hubo un error en la conexión
    if ($conexion->connect_error) {
        // Si hay un error de conexión, imprimir el error y salir
        die('Error en la conexión: ' . $conexion->connect_error);
    }

    // Ejecutar la consulta
    $result = $conexion->query($query); // Ejecutar la consulta y guardar el resultado en la variable $result, query es un método de la clase mysqli que ejecuta una consulta en la base de datos y la $query es la consulta que queremos ejecutar

    // Verificar si la consulta fue exitosa
    if ($result) {
        // Si la consulta es SELECT o similar, devolvemos el resultado
        return $result;
    } else {
        // Si hubo un error en la consulta, puedes devolver false o gestionar el error
        return false;
    }
    
    // Devolver la conexión para poder cerrarla después
    // Cerrar la conexión después de la consulta
    $conexion->close();
}


?>
