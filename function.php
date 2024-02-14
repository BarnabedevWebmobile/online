<?php
function montheme_supports()
{
    register_nav_menu('menu-head', 'En tête du menu');
    register_nav_menu('footer', 'Pied de page');
}

add_action('after_setup_theme', 'montheme_supports');
?>