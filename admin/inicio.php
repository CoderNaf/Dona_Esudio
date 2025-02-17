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
            <div>
                <div>
                
                </div>
                <div class="SectionDateNum">
                    <p> 
                        <?php echo $totalProyectos?>
                    </p>
                </div>
            </div>

        </article>
        <article class="sectionInfo-sectionDashboard">
            <h4>Recapitulación de proyectos</h4>
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
            <h4>Presupuesto anual</h4>
            <div>
                <div>
                    <h5></h5>
                    <p></p>
                </div>
                <div class="SectionDateNum" >
                    <p class="budget-price">
                        <?php echo '$ '.$budget ?>
                    </p>
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
                    <td>
                        <?php echo  $value['id_proyect']  ?>
                    </td>
                    <td>
                         <img src="./assets/logosClients/logo dj esteban romero.png" 
                         alt="<?php echo($value['name_company']);?>" class="logoCompany">
                    </td>

                    <td>
                        <?php echo $value['name_company'] ?>
                    </td>
                    <td>
                        <?php echo $value['name_proyect'] ?>
                    </td>
                    <td>
                        <?php echo $value['updated_at'] ?>
                    </td>
                    <td>
                        <?php echo $value['status'] ?>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    
</section>

<?php  include('./templates/footer.php')  ?>