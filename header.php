<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WORST WEBSITE EVER</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/aa422d9bdc.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">
</head>
<body>

    <header class="d-flex col-12 justify-content-around fixed-top bg-white ">
        <a href="https://greta.1.lopia.fr/" class="col-8 col-md-2 ps-3 "><img  src="https://greta.1.lopia.fr/wp-content/uploads/2024/02/logo.png" alt="logo du greta et de la france"></a>
        <div class="col-2"></div>
        <div class="col-1 d-md-none d-flex align-items-center">
            <div class=" d-flex">
                <i class="fa-solid fa-bars"></i>
            </div>
            
        </div>
        <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'Menu-principal',
                    'menu_id'     => 'primary-menu',
                )
            );
            ?>

    </header>