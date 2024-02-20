<!-- Contact -->

<?php get_header(); ?>

    <!-- sous le header -->
    <div class='w-25 vide'></div>
    <!-- sous le header -->

    <!-- mise en forme du contenu -->
    <section class="container">
    <h1 class="offset-md-3 col-md-6 mt-5 py-5 text-center nos_partenaires">Formulaire de contact</h1>

        <!-- mise en forme du formulaire de contact -->
        <div class="col-12 d-flex justify-content-center">
            <div class="col-12 col-md-6 d-flex justify-content-center">

                <!-- récupère le contentue de la page contact -->
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <div class="form w-100 rounded-2 d-flex justify-content-center">
                        
                    <!-- code court de contact form 7 -->
                        <?php the_content(); ?>
                    <!-- code court de contact form 7 -->

                    </div>
                <?php endwhile; ?>
                <?php endif; ?>
                <!-- récupère le contentue de la page contact -->

            </div>
        </div> 
        <!-- mise en forme du formulaire de contact -->

    </section>
    <!-- mise en forme du contenu -->

<?php get_footer(); ?>
<?php wp_link_pages(); ?>
<!-- Contact -->