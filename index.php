<?php
  include 'header.php';
?>
    <div class="hero-banner col-12">
        
    </div>
    <section class="container col-12 ">

        <h1 class="text-decoration-underline fw-bolder mt-5 text-center">Nos Formations </h1>

        <div id="carouselExampleCaptions" class="carousel slide mt-5 mb-5 formation " data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>

            <div class="carousel-inner">
              <?php 
                // 1. On définit les arguments pour définir ce que l'on souhaite récupérer
                $args = array(
                    'post_type' => 'post',
                    'category_name' => 'formations',
                    'posts_per_page' => 3,
                );
                
                echo "<pre>";
                echo $args;
                echo "</pre>";

                // 2. On exécute la WP Query
                $my_query = new WP_Query( $args );

                // 3. On lance la boucle !
                if( $my_query->have_posts() ) : while( $my_query->have_posts() ) : $my_query->the_post();?>
                    
                    <div class='carousel-item'>
                      <?php get_the_post_thumbnail();?>
                       <div class='carousel-caption d-md-block'>
                       <?php get_the_title();?>
                       <?php get_the_content();?>
                         <div class='d-flex justify-content-center'>
                            <button class='btn btn-danger '>Nous contacter</button>
                            <button class='btn btn-danger ms-4'>Plus d'information</button>
                        </div>
                    </div>
                   </div>

                <?php
                endwhile;
                endif;

                // 4. On réinitialise à la requête principale (important)
                wp_reset_postdata();
              ?>    
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>

        


        <div class="partenaire col-12">

            <h2>Nos partenaires</h2>
            <span class="logo">
                <img class="w-100" src="https://greta.1.lopia.fr/wp-content/uploads/2024/02/logos-multiple.png" alt="les logo des différents partenaire de la formation">
            </span>

        </div>

        <div class = "d-flex justify-content-between flex-md-row flex-column">
          <div class="col-12 col-md-3 mt-5 ">
          <div class="card w-100">
            <img src="https://greta.1.lopia.fr/wp-content/uploads/2024/02/lozere.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
          </div>
          <div class="col-12 col-md-3 mt-5 ">
            <div class="card w-100 ">
              <img src="https://greta.1.lopia.fr/wp-content/uploads/2024/02/lozere.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-3 mt-5 ">
            <div class="card w-100 ">
              <img src="https://greta.1.lopia.fr/wp-content/uploads/2024/02/lozere.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>

        </div>


        <div class="d-flex flex-column flex-md-row carte">
            <div class="col-md-5 col-11 ">
                <h3 class="mt-3 mb-5">
                    Ou nous retrouver
                </h3>
                
                
                    <div class="mt-4">
                        <img src="https://greta.1.lopia.fr/wp-content/uploads/2024/02/carte-des-greta.png" alt="carte localisationcentres GRETA Occitanie">
                    </div>
                
            </div>
        </div>
        
    </section>
<?php
  include 'footer.php'
?>