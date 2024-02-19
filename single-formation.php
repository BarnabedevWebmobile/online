<?php
    include 'header.php';
?>

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

    <section class='container d-flex flex-column'>
        <div class="vide"></div>
        <div class="hero-banner-formation d-flex justify-content-center mb-5">
            <img class="img-fluid" src="<?php echo $posted?>" alt="">    
        </div>
        <h1 class="col-12 text-uppercase text-decoration-underline pb-4"><?php echo $title?></h1>
        <div class="maformation col-12 col-sm-8 d-flex flex-column">
            
            <div class="contenu">
                <?php the_content()?>
            </div>
            
        </div>
        <div class=" col-sm-8 col-12 d-flex flex-column flex-sm-row">
            <div class="col-12 col-sm-4 d-flex flex-column content-button">
                <div class="col-4">
                    <h2>Contact</h2>
                    <a class="text-decoration-none d-flex flex-column" href="tel:<?php echo $tel?>"><?php echo $contact?></a>
                </div>
                <a href="https://greta.1.lopia.fr/nous-contacter/"><button class="btn btn-danger">envoyer un message</button></a>
                <h2>Mafor-pro</h2>
                <a href="<?php echo $lien ?>" target="_blank"><button class="btn btn-danger">plus d'information</button></a>
            </div>
            <div class="col-12 col-sm-4 d-flex flex-column content-button">
                <h2>Organisme :</h2>
                <?php echo $organisme?>
                <h2>Date :</h2>
                <?php echo $date?>
                <h2>Référence :</h2>
                <?php echo $ref?>
            </div>


        </div>
    </section>

<?php
    include 'footer.php';
?>