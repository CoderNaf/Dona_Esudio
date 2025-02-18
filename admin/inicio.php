<?php  include('./templates/header.php')  ?>
<?php include('./config/database.php') ?>
<?php include('./config/queriesSql.php') ?>

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
            <div class="sectionGraph-content">
                <div class="SectionDateNum">  
                    <p> 
                        <?php echo $totalProjectsReviw?>
                    </p>
                </div>
                <div class="sectionGraph">
                    <?php if ($totalProjectsReviw < 1) { ?>
                        <img src="./assets/graporange.png" alt="arrow-down" class="arrow-up">
                    <?php }elseif($totalProjectsReviw >= 1){ ?>
                        <img src="./assets/grapGrenn.png" alt="arrow-up" class="arrow-down">
                    <?php } ?> 
                </div>
            </div>

        </article>
        <article class="sectionInfo-sectionDashboard">
            <h4>Recapitulación de proyectos</h4>
            <div class="sectionGraph-content">
                <div class="SectionDateNum" >
                    <p> 
                        <?php 
                            echo $readproyectsAnual;
                        ?>
                    </p>
                </div>
                <div class="sectionGraph">
                    <?php if ($readproyectsAnual < 1) { ?>
                        <img src="./assets/graporange.png" alt="arrow-down" class="arrow-up">
                    <?php }elseif($readproyectsAnual >= 1){ ?>
                        <img src="./assets/grapGrenn.png" alt="arrow-up" class="arrow-down">
                    <?php } ?> 
                </div>
            </div>

        </article>
        <article class="sectionInfo-sectionDashboard">
            <h4>Presupuesto anual</h4>
            <div class="sectionGraph-content">
                <div class="SectionDateNum" >
                    <p class="budget-price">
                        <?php echo '$ '. $budget ?>
                    </p>
                </div>
                <div class="sectionGraph">
                    <?php if ($budget <= '99.000') { ?>
                        <img src="./assets/graporange.png" alt="arrow-down" class="arrow-up">
                    <?php }elseif($budget >= '100.000'){ ?>
                        <img src="./assets/grapGrenn.png" alt="arrow-up" class="arrow-down">
                    <?php } ?> 
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
                 
                <?php foreach($querieProyects as $proyecto){ ?>

                    <tr>
                        <td scope="row"><?php echo $proyecto['id_proyect'] ?></td>
                        <td><img src="./assets/img/<?php echo $proyecto['profile_logo'] ?>" alt="logo"></td>
                        <td><?php echo $proyecto['name_company'] ?></td>
                        <td><?php echo $proyecto['name_proyect'] ?></td>
                        <td><?php echo $proyecto['updated_at'] ?></td>
                        <td><?php echo $proyecto['status'] ?></td>
                    </tr>

                <?php  }  ?>
            </tbody>
        </table>
    </div>
    
</section>

<?php  include('./templates/footer.php')  ?>