
      
      <!--  Page nos formations  -->


<?php get_header(); ?>



<div class='w-25 vide'></div>

<div class="d-flex flex-column">
    <h1 class="text-center fw-bold fs-1"><?php the_title(); ?></h1>

    <div>

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
                  ?>
                  
                  <div class="d-flex flex-md-row border border-dark border-3 m-5 p-5">
                    <img src="<?php echo $posted ;?>" class="img-fluid w-25">
                    <div class="d-flex flex-column w-100">
                      <p class="text-center fs-2"><?php echo $title;?></p>
                      <p class="text-center fs-3"><?php echo $descr;?></p>
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