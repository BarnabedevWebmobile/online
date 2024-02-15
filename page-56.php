
<!-- Contact -->

<?php get_header(); ?>

<div class='w-25 vide'></div>
<h1 class="text-center">Formulaire de contact</h1>
<div class="row">
    <div class="col-xl-4">
    </div>
            <div class="col-12 col-xl-4 bg-secondary">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <div class="form d-flex justify-content-center">
                            <?php the_content(); ?>
                        </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
            </div>
    <div class="col-xl-4">
    </div>
</div>

<?php get_footer(); ?>
<?php wp_link_pages(); ?>