<?php

  if($_POST){
    
    $name_company = $_POST['name_company'];
    $name_proyect = $_POST['name_proyect'];
    $observation = $_POST['observation'];
    $status = $_POST['status'];
    $price_pass = $_POST['price_pass'];
    $price = $_POST['price_proyect'];
   


    $objectConnection= new conecction();

    $sql = "INSERT INTO proyects (`name_company`, `name_proyect`,`updated_at`,`status`,`observation`,`price_proyect`,`price_pass`)
    VALUES ('$name_company', '$name_proyect',NOW(),'$status','$observation',$price,$price_pass);";

    $objectConnection->ejecutar($sql);

    
  }
  

    $objectConnection= new conecction();
    $querieProyects = $objectConnection->consultar( "SELECT * FROM proyects");
    //consulta de presupuesto

    // $pass = $objectConnection->consultar('SELECT SUM(price_pass) AS precio_abonado FROM proyects');
    // $pass = $pass[0]['pass'];

    $budget = $objectConnection->consultar("SELECT SUM(price_proyect) as budget FROM proyects"); // consulta para obtener el presupuesto total, esto me devolverá un array asociativo.
    $budget = $budget[0]['budget']; // obtenemos el presupuesto total por medio de la posición 0 y el campo budget. el 0 es la posición del array y el campo budget es el campo que queremos obtener.

    //consulta de proyectos
    $proyectsTotal = $objectConnection->consultar("SELECT COUNT(*) as totalProjects FROM proyects"); // consulta para obtener el total de proyectos, esto me devolverá un array asociativo.

    //recapitulacion de proyectos
    $totalProjectsReviw = $proyectsTotal[0]['totalProjects']; // obtenemos el total de proyectos por medio de la posición 0 y el campo totalProjects. el 0 es la posición del array y el campo totalProjects es el campo que queremos obtener.

    //proyectos anuales
    $proyectsAnual = $objectConnection->consultar("SELECT COUNT(*) as totalProjectsAnual FROM proyects WHERE updated_at BETWEEN '2025-01-01' AND '2025-12-31'"); // consulta para obtener el total de proyectos anuales, esto me devolverá un array asociativo. el between es para obtener los proyectos que se crearon entre esas fechas.
    $readproyectsAnual = $proyectsAnual[0]['totalProjectsAnual']; // obtenemos el total de proyectos anuales por medio de la posición 0 y el campo totalProjectsAnual. el 0 es la posición del array y el campo totalProjectsAnual es el campo que queremos obtener.

   


 ?>