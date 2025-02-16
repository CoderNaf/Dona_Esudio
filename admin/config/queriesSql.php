<?php

// Consulta para contar los proyectos
$query = 'SELECT COUNT(*) AS total_proyectos FROM proyects';

// Ejecutar la consulta
$result = connection($query); //connection es una funcion propia que se encuentra en el archivo database.php

// Verificar si la consulta fue exitosa
if ($result) {
    $row = $result->fetch_assoc(); // Obtener el resultado de la consulta, el fetch_assoc() convierte el resultado en un array asociativo.
    $totalProyectos = $row['total_proyectos']; // Extraer el número de proyectos
} else {
    $totalProyectos = 0; // Si hubo un error en la consulta, asignamos 0
}

// consulta para contar los proyectos totales

$queryCountProjectsReviw = 'SELECT * FROM proyects';

// Ejecutar la consulta 
$resultCountProjectsReviw = connection($queryCountProjectsReviw);

if($resultCountProjectsReviw){
    $totalProjectsReviw = $resultCountProjectsReviw->num_rows;  // Obtener el número de proyectos
}else{
    $totalProjectsReviw = 0; // Si hubo un error en la consulta, asignamos 0    
}


$tableDates = connection('SELECT * FROM proyects'); // creamos una variable que contenga la consulta de la tabla proyects en donde estamos guardando todos los datos de la tabla proyects

foreach ($tableDates as $key => $value) { // creamos un foreach para recorrer la variable $tableDates y guardar los datos en la variable $variable
    $variable[] = $value;  // guardamos los datos en la variable $variable, en donde $key es el indice y $value es el valor, ejemplo: $variable[0] = $value[0], o sea, $variable[0] = $value['id']
}

$budget = connection('SELECT SUM(price_proyect) AS total_budget FROM proyects');  // creamos una variable que contenga la consulta de la suma de la columna budget de la tabla proyects en donde estamos guardando el total de la suma de la columna budget

if($budget){
    $valorBudget = $budget->fetch_assoc(); // Obtener el resultado de la consulta, el fetch_assoc() convierte el resultado en un array asociativo.
    $budget = $valorBudget['total_budget']; // Extraer el número de proyectos, en donde total_budget es el nombre de la columna que estamos sumando este nombre puede cambiar dependiendo de la base de datos, este nombre se lo asignamos en la consulta $budget.
}else{
    $budget = 0; // Si hubo un error en la consulta, asignamos 0
}
 ?>