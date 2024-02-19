
      
      <!--  Page nos formations  -->


<?php get_header(); ?>


<!-- Element de séparation vide -->
<div class='w-25 vide'></div>


<!-- Section des formations -->
<div class="text-center fw-bold fs-1">
    <?php the_title(); ?>

    <div class="d-flex w-100 flex-column justify-content-center">

        <!-- Récupération des formations dans Wordpress -->
      <?php 
        $args = array(
            'post_type' => 'formation',
            'posts_per_page' => 15,
        );

        $my_query = new WP_Query( $args );

        if( $my_query->have_posts() ) : while( $my_query->have_posts() ) : $my_query->the_post();
        ?>
        
          <?php
            $title = get_field('titre');
            $descr = get_field('description');
            $posted = get_field('poster');
          ?>
          
          <div class="d-flex flex-md-row border flex-column flex-md-row border-dark border-3 m-3 p-3 formetoi">
            <img src="<?php echo $posted ;?>">
            <div class="d-flex w-100 justify-content-start ms-2 flex-column">
              <p class=""><?php echo $title;?></p>
              <p class=""><?php echo $descr;?></p>
            </div>                 
          </div>

        <?php
        endwhile;
        endif;

        wp_reset_postdata();
      ?>    
  </div>
</div>



<?php get_footer(); ?>
<?php wp_link_pages(); ?>