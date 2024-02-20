<!-- page single -->
<?php
    include 'header.php';
?>

    <!-- champs acf a récupérer -->
    <?php
        $title = get_field('titre');
        $descr = get_field('description');
        $posted = get_field('poster');
        $organisme = get_field('organisme');
        $liens = get_field('lien');
        $contact = get_field('contact');
        $tel = get_field('tel');
        $date = get_field('date');
        $ref = get_field('reference');
    ?>
    <!-- champs acf a récupérer -->

    <!-- mise en page -->
    <section class='container d-flex flex-column'>
        <div class="vide"></div>

        <!-- bannière de la page -->
        <div class="hero-banner-formation d-flex justify-content-center mb-5">
            <img class="img-fluid" src="<?php echo $posted?>" alt="">    
        </div>
        <!-- bannière de la page -->

        <!-- titre de la formation -->
        <h1 class="col-12 text-uppercase text-decoration-underline pb-4"><?php echo $title?></h1>
        <!-- titre de la formation -->

        <div class="maformation col-12 col-sm-8 d-flex flex-column">
            
        <!-- contenu de la formation -->
            <div class="contenu">
                <?php the_content()?>
            </div>
        <!-- contenu de la formation -->

        </div>
        <div class=" col-sm-8 col-12 d-flex flex-column flex-sm-row">

            <!-- contact -->
            <div class="col-12 col-sm-4 d-flex flex-column content-button">
                <div class="col-4">
                    <h2>Contact</h2>
                    <a class="text-decoration-none d-flex flex-column" href="tel:<?php echo $tel?>"><?php echo $contact?></a>
                </div>
                <a href="https://greta.1.lopia.fr/nous-contacter/"><button class="btn btn-danger">envoyer un message</button></a>
                <h2>Mafor-pro</h2>
                <a href="<?php echo $liens ?>" target="_blank"><button class="btn btn-danger">plus d'information</button></a>
            </div>
            <!-- contact -->

            <!-- plus d'information -->
            <div class="col-12 col-sm-4 d-flex flex-column content-button">
                <h2>Organisme :</h2>
                <?php echo $organisme?>
                <h2>Date :</h2>
                <?php echo $date?>
                <h2>Référence :</h2>
                <?php echo $ref?>
            </div>
            <!-- plus d'information -->


        </div>
    </section>
    <!-- mise en page -->

<?php
    include 'footer.php';
?>
<!-- page single -->