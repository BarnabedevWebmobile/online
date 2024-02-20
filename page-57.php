  <!--  Page nos formations  -->
<?php get_header(); ?>

<!-- mise en forme de la page -->
<section class="container">

  <!-- sous le header -->
  <div class='w-25 vide'></div>
  <!-- sous le header -->

  <div class="text-center fw-bold fs-1">

    <!-- titre du champs formation -->
    <h1 class="offset-md-3 col-md-6 mt-5 py-5 text-center nos_partenaires"><?php the_title(); ?></h1>
    <!-- titre du champs formation -->

      <div class="d-flex w-100 flex-column justify-content-center">

      <!-- boucle de toutes les formations -->
      <?php 
        // 1. On définit les arguments pour définir ce que l'on souhaite récupérer
        $args = array(
            'post_type' => 'formation',
            'posts_per_page' => 15,
        );

        // 2. On exécute la WP Query
        $my_query = new WP_Query( $args );

        // 3. On lance la boucle !
        if( $my_query->have_posts() ) : while( $my_query->have_posts() ) : $my_query->the_post();
        ?>
        
          <!-- champs acf a récupérer -->
          <?php
            $title = get_field('titre');
            $descr = get_field('description');
            $posted = get_field('poster');
            $liens = get_field('lien')
          ?>
          <!-- champs acf a récupérer -->

          <!-- génére la card -->
          <div class="d-flex flex-md-row flex-column flex-md-row align-items-center  m-3 p-4 partenaires formetoi">
            <img src="<?php echo $posted?>">
            <div class="d-flex w-100 justify-content-start me-2 ms-4 flex-column">
              <h3 class="text-md-start text-center"><?php echo $title;?></h3><hr>
              <p class="text-md-start text-center "><?php echo $descr;?></p>
            </div>
            <div class="d-flex flex-md-column flex-row justify-content-around ">
            <a href="<?php echo $liens?>" target="_blank" rel="noopener noreferrer"><i class="fa-solid fa-link"></i></a>

            <!-- lien  vers la page single -->
            <a href="<?php echo the_permalink()?>"><i class="fa-solid fa-file"></i></a>
            <!-- lien  vers la page single -->

            </div>
          </div>
          <!-- génére la card -->

        <!-- fin de la boucle -->
        <?php
        endwhile;
        endif;
        ?>
        <!-- fin de la boucle -->

      <?php
        // 4. On réinitialise à la requête principale (important)
        wp_reset_postdata();
      ?>
      <!-- boucle de toutes les formations -->

    </div>
  </div>
</section>
<!-- mise en forme de la page -->

<?php get_footer(); ?>
<?php wp_link_pages(); ?>