
<!-- Contact -->

<?php get_header(); ?>

<div class='w-25 vide'></div>
<h1 class="text-center">Formulaire de contact</h1>
    <div class="col-12 d-flex justify-content-center">
        <div class="col-12 col-md-6 d-flex justify-content-center">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="form w-100 rounded-2 d-flex justify-content-center">
                    <?php the_content(); ?>
                </div>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>

<?php get_footer(); ?>
<?php wp_link_pages(); ?>