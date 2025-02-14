<?php  include('./templates/header.php')  ?>
<?php require('./config/database.php') ?>

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


 ?>



<section class="dashboardInitial">
    <div class="section-heroTitle">
        <h1>
            Gestión de Proyectos
        </h1>
        <button class="button">
            ➕ Nuevo Proyecto
            <div class="hoverEffect">
                <div></div>
            </div>
        </button>

    </div>
    <section class="info-tables-dates">
        <article class="sectionInfo-sectionDashboard">
            <h4>Nuevos Proyectos Este Mes</h4>
            <div>
                <div>
                    <h5></h5>
                    <p></p>
                </div>
                <div class="SectionDateNum">
                    <p> 
                        <?php echo $totalProyectos?>
                    </p>
                </div>
            </div>

        </article>
        <article class="sectionInfo-sectionDashboard">
            <h4>Recapitulacion de proyectos</h4>
            <div>
                <div>
                    <h5></h5>
                    <p></p>
                </div>
                <div class="SectionDateNum" >
                    <p> 
                        <?php 
                            echo $totalProjectsReviw;
                        ?>
                    </p>
                </div>
            </div>

        </article>
        <article class="sectionInfo-sectionDashboard">
            <h4>Predupuesto anual</h4>
            <div>
                <div>
                    <h5></h5>
                    <p></p>
                </div>
                <div class="SectionDateNum" >
                    <p>86</p>
                </div>
            </div>

        </article>
    </section>
</section>

<section class="table-info-projects">
    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Logo</th>
                    <th scope="col">nombre del cliente</th>
                    <th scope="col">proyecto</th>
                    <th scope="col">update</th>
                    <th scope="col">status</th>
                </tr>
            </thead>
            <tbody>
                <tr class="">
                    <td scope="row">R1C1</td>
                    <td>R1C2</td>
                    <td>lorem3</td>
                    <td>R1C3</td>
                    <td>R1C3</td>
                    <td>R1C3</td>
                </tr>
                <tr class="">
                    <td scope="row">Item</td>
                    <td>Item</td>
                    <td>Item</td>
                    <td>Item</td>
                    <td>Item</td>
                    <td>Item</td>
                </tr>
                <tr class="">
                    <td scope="row">Item</td>
                    <td>Item</td>
                    <td>Item</td>
                    <td>Item</td>
                    <td>Item</td>
                    <td>Item</td>
                </tr>
                <tr class="">
                    <td scope="row">Item</td>
                    <td>Item</td>
                    <td>Item</td>
                    <td>Item</td>
                    <td>Item</td>
                    <td>Item</td>
                </tr>
                <tr class="">
                    <td scope="row">Item</td>
                    <td>Item</td>
                    <td>Item</td>
                    <td>Item</td>
                    <td>Item</td>
                    <td>Item</td>
                </tr>
                
            </tbody>
        </table>
    </div>
    
</section>



<?php  include('./templates/footer.php')  ?>
