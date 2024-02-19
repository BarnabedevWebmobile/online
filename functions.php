
<!-- Récupération du menu dynamique Wordpress et des images mises en avant -->
<?php 
register_nav_menus( array(
	'main' => 'Menu Principal',
	'footer' => 'Bas de page',
) );

add_theme_support( 'post-thumbnails' );
?>