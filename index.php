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
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
            </div>
            
            <div class="carousel-inner">
              <?php
              $index=1
              ?>
              <?php 
                // 1. On définit les arguments pour définir ce que l'on souhaite récupérer
                $args = array(
<<<<<<< Updated upstream
                    'post_type' => 'formations',
                    'posts_per_page' => 3,
=======
                    'post_type' => 'formation',
                    'posts_per_page' => 15,
>>>>>>> Stashed changes
                );
                
                echo "<pre>";
                var_dump($args);
                echo "</pre>";

                // 2. On exécute la WP Query
                $my_query = new WP_Query( $args );

                // 3. On lance la boucle !
                if( $my_query->have_posts() ) : while( $my_query->have_posts() ) : $my_query->the_post();?>
<<<<<<< Updated upstream
                    
                    <div class='carousel-item'>
                      <?php the_post_thumbnail();?>
                       <div class='carousel-caption d-md-block'>
                       <?php the_title();?>
                       <?php the_content();?>
                         <div class='d-flex justify-content-center'>
                            <button class='btn btn-danger '>Nous contacter</button>
                            <button class='btn btn-danger ms-4'>Plus d'information</button>
                        </div>
=======
                  
                  <?php
                    $title = get_field('titre');
                    $descr = get_field('description');
                    $posted = get_field('poster');
                  ?>
                  <?php
                  if($index==1){?>
                    <div class='carousel-item active'>
                  <?php }else{ ?>
                    <div class='carousel-item'><?php
                  }
                  ?>
                  
                  <img src="<?php echo $posted ?>" class="d-block w-100" alt="">
                       <div class='carousel-caption'>
                        <h2><?php echo $title?></h2>
                        <p class = "d-none d-md-block"><?php echo $descr?></p>
                         <div class='d-flex justify-content-center'><button class='btn btn-danger'>Nous contacter</button><button class='btn btn-danger ms-4'>Plus d'information</button></div>
>>>>>>> Stashed changes
                    </div>
                   </div>
                <?php
                $index++
                ?>

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
            <span class="logo d-flex flex-md-row flex-column justify-content-center ">
              <img src="https://greta.1.lopia.fr/wp-content/uploads/2024/02/greta.png" alt="le logo du greta">
              <img src="https://greta.1.lopia.fr/wp-content/uploads/2024/02/lozere-development.png" alt="le logo de lozere developpement">
              <img class ="edunum" src="https://greta.1.lopia.fr/wp-content/uploads/2024/02/ecole-numerique.png" alt="le logo de l'ecole regionale du numerique">
              <img src="https://greta.1.lopia.fr/wp-content/uploads/2024/02/lozere.png" alt="le logo de la lozère">
              <img src="https://greta.1.lopia.fr/wp-content/uploads/2024/02/polen.png" alt="logo de polen">

            </span>

        </div>

        <div class = "d-flex justify-content-between flex-md-row flex-column">

          

          <?php 
            // 1. On définit les arguments pour définir ce que l'on souhaite récupérer
            $args = array(
                'post_type' => 'actualite',
                'posts_per_page' => 3,
                'orderby' => 'date',
            );

            // 2. On exécute la WP Query
            $my_query = new WP_Query( $args );

            // 3. On lance la boucle !
            if( $my_query->have_posts() ) : while( $my_query->have_posts() ) : $my_query->the_post();?>
                
               <?php
                $urlimg = get_field('image_url');
                $intitule = get_field('intitule');
                $content = get_field('texte');
               ?>
            <div class="col-12 col-md-3 mt-5 ">
              <div class="card w-100">
                <img src="<?php echo $urlimg;?>" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $intitule;?></h5>
                  <p class="card-text"><?php echo $content ;?></p>
                </div>
              </div>
            </div>
            
            <?php
            endwhile;
            endif;

            // 4. On réinitialise à la requête principale (important)
            wp_reset_postdata();?>

        </div>


        <div class="d-flex flex-column flex-md-row carte">
            <div class="col-md-5 col-11 ">
                <h3 class="mt-3 mb-5">
                    Ou nous retrouver
                </h3>
                
                
                    <div class="mt-4">
                        <img src="https://greta.1.lopia.fr/wp-content/uploads/2024/02/carte-des-greta.png" alt="">
                    </div>
                
            </div>
        </div>
        
    </section>
<?php
  include 'footer.php'
?>