  <!--  Page nos formations  -->
<?php get_header(); ?>



<div class='w-25 vide'></div>

<div class="text-center fw-bold fs-1">
    <?php the_title(); ?>

    <div class="d-flex w-100 flex-column justify-content-center">
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
      
        <?php
          $title = get_field('titre');
          $descr = get_field('description');
          $posted = get_field('poster');
          $liens = get_field('lien')
        ?>
        
        <div class="d-flex flex-md-row border flex-column flex-md-row border-dark border-3 m-3 p-3 formetoi">
          <img src="<?php echo $posted?>">
          <div class="d-flex w-100 justify-content-start ms-2 flex-column">
            <p class="text-decoration-underline text-md-start text-center"><?php echo $title;?></p>
            <p class="text-md-start text-center "><?php echo $descr;?></p>
          </div>
          <div class="d-flex flex-md-column flex-row justify-content-around ">
          <a href="<?php echo $liens?>" target="_blank" rel="noopener noreferrer"><i class="fa-solid fa-link"></i></a>
          <a href="<?php echo the_permalink()?>"><i class="fa-solid fa-file"></i></a>
          </div>
        </div>

      <?php
      endwhile;
      endif;

      // 4. On réinitialise à la requête principale (important)
      wp_reset_postdata();
    ?>    
  </div>
</div>



<?php get_footer(); ?>
<?php wp_link_pages(); ?>