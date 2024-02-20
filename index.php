<!-- accueuil -->
  <?php
    include 'header.php';
  ?>
    <div class="hero-banner col-12">
        
    </div>
    <section class="container col-12 ">

      <!-- présentation home -->
      <div class="container flex-wrap mt-4">
        <h1 class="text-center nosform text-uppercase text-decoration-underline">Découvrir nos formations</h1>
        <p class="text-center mt-5">Parcourez notre sélection de programmes adaptés à différents secteurs d’activité et niveaux de compétence. Que vous cherchiez à acquérir de nouvelles compétences, à vous spécialiser ou à vous perfectionner, nos formations vous offrent les clés pour réussir dans votre domaine. Explorez notre catalogue et lancez-vous vers l’excellence professionnelle.</p>
      </div>
      <!-- présentation home -->

        <!-- carousel des formations -->
        <div id="carouselExampleCaptions" class="carousel slide mt-5 mb-5 formation " data-bs-ride="carousel">

            <!-- boutons des pages du carousels -->
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
            </div>
            <!-- boutons des pages du carousels -->

            <!-- contenu du carousel -->
            <div class="carousel-inner">
              
            <!-- index pour le carousel actif -->
              <?php
              $index=1
              ?>
            <!-- index pour le carousel actif -->

              <!-- boucle d'insertion des formations -->
              <?php 
                // 1. On définit les arguments pour définir ce que l'on souhaite récupérer
                $args = array(
                    'post_type' => 'formation',
                    'posts_per_page' => 12,
                );
                // 1. On définit les arguments pour définir ce que l'on souhaite récupérer

                // 2. On exécute la WP Query
                $my_query = new WP_Query( $args );
                // 2. On exécute la WP Query

                // 3. On lance la boucle !
                if( $my_query->have_posts() ) : while( $my_query->have_posts() ) : $my_query->the_post();?>
                  
                  <!-- champs acf a récupérer -->
                  <?php
                    $title = get_field('titre');
                    $descr = get_field('description');
                    $posted = get_field('poster');
                    $liens = get_field('lien')
                  ?>
                  <!-- champs acf a récupérer -->

                  <!-- vérifie le numéro du carousel -->
                  <?php
                  if($index==1){?>
                    <div class='carousel-item active'>
                  <?php }else{ ?>
                    <div class='carousel-item'><?php
                  }
                  ?>
                  <!-- vérifie le numéro du carousel -->

                  <!-- image de fond du carousel -->
                  <img src="<?php echo $posted ?>" class="d-block w-100" alt="">
                  <!-- image de fond du carousel -->

                      <!-- contenu textuel et bouton -->
                      <div class='carousel-caption'>
                        <h3><?php echo $title?></h3>
                        <p class = " d-none d-md-block"><?php echo $descr?></p>
                        <div class='d-flex justify-content-center'><a href="<?php echo $liens?>" target="_blank" rel="noopener noreferrer"><button class='btn btn-danger ms-4'>Plus d'information</button></a></div>
                    </div>
                    <!-- contenu textuel et bouton -->

                  </div>
                <!-- incrément de l'index -->
                <?php
                $index++
                ?>
                <!-- incrément de l'index -->

                <!-- fin de la boucle -->
                <?php
                endwhile;
                endif;?>
                <!-- fin de la boucle -->

              <?php
                // 4. On réinitialise à la requête principale (important)
                 wp_reset_postdata();
              ?>
              <!-- boucle d'insertion des formations -->

            </div>

            <!-- bouton de défilement -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
            <!-- bouton de défilement -->

          </div>
          <!-- carousel des formations -->

        <!-- le greta : arguments -->
        <div class="d-flex justify-content-center align-items-center flex-column mb-3">
          <div class="container col-md-8 flex-wrap justify-content-center d-flex py-3 my-5">
            <h4 class="mt-3">Pourquoi se former en numérique avec le GRETA ?</h2>
            <p class=" mt-3">Le GRETA-CFA Gard lozère propose de se former dans le numérique dans les villes de Mende et de Nîmes, pour acquérir des connaissances permettant une meilleur intégration dans le monde professionnel. Les formations sont ouvertes à tous sans prérequis d'études, le seul prérequis est la motivation !</p>
            <p class="text-center mb-3 mt-2">Ces formations répondent au cahier des charges des Écoles régionales numériques (ERN) de la région Occitanie.</p>
          </div> 
        </div>
        <!-- le greta : arguments -->

        <!-- bandeau des partenaires -->
        <div class="partenaire col-12 mb-5">

            <h2 class="text-uppercase fw-bold">Nos partenaires</h2>
            <span class=" d-flex flex-md-row flex-column justify-content-center align-items-center">
              <img class = "logo col-12 col-md-2 d-flex justify-content-center " src="https://greta.1.lopia.fr/wp-content/uploads/2024/02/greta.png" alt="le logo du greta">
              <img class = "logo col-12 col-md-2 d-flex justify-content-center" src="https://greta.1.lopia.fr/wp-content/uploads/2024/02/lozere-development.png" alt="le logo de lozere developpement">
              <img class ="logospe col-12 col-md-2 d-flex justify-content-center" src="https://greta.1.lopia.fr/wp-content/uploads/2024/02/ecole-numerique.png" alt="le logo de l'ecole regionale du numerique">
              <img class = "logo col-12 col-md-2 d-flex justify-content-center" src="https://greta.1.lopia.fr/wp-content/uploads/2024/02/lozere.png" alt="le logo de la lozère">
              <img class = "logo col-12 col-md-2 d-flex justify-content-center" src="https://greta.1.lopia.fr/wp-content/uploads/2024/02/polen.png" alt="logo de polen">

            </span>

        </div>
        <!-- bandeau des partenaires -->

        <!-- zone des actualités -->
        <h2 class ="mt-4 text-uppercase fw-bold">Nos actualités </h2>
        <div class = "d-flex justify-content-between flex-md-row flex-column mb-4">

          <!-- boucle d'insertion des actualités -->
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
                
              <!-- champs acf a récupérer -->
              <?php
              $urlimg = get_field('image_url');
              $intitule = get_field('intitule');
              $content = get_field('texte');
              ?>
              <!-- champs acf a récupérer -->

            <!-- génére card -->
            <div class="col-12 col-md-3 mt-5 ">
              <div class="card w-100">

                <!-- image de la card -->
                <img src="<?php echo $urlimg;?>" class="card-img-top" alt="...">
                <!-- image de la card -->

                <!-- contenu textuel et bouton -->
                <div class="card-body">
                  <h5 class="card-title"><?php echo $intitule;?></h5>
                  <p class="card-text"><?php echo $content ;?></p>
                </div>
                <!-- contenu textuel et bouton -->

              </div>
            </div>
            <!-- génére card -->
            
            <!-- fin de la boucle -->
            <?php
            endwhile;
            endif;
            ?>
            <!-- fin de la boucle -->

            <?php
            // 4. On réinitialise à la requête principale (important)
            wp_reset_postdata();?>
        <!-- boucle d'insertion des actualités -->

        </div>
        <!-- zone des actualités -->

      <!-- carte des greta d'occitanie -->
      <h2 class="mt-5 text-uppercase fw-bold">
        Où nous retrouver
      </h2>
        <div class="col-12 carte text-center">
          <img src="https://greta.1.lopia.fr/wp-content/uploads/2024/02/carte-des-greta.png" alt="">
        </div>
      <!-- carte des greta d'occitanie -->
              
    </section>
  <?php
    include 'footer.php'
  ?>
<!-- accueuil -->