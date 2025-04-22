<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
    
    <header class="site-header">
        <h1>Site Header y Menu</h1>
        <div class="contenedor">
            <div class="barra-navegacion">
                <div class="logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="">
                </div>

                <?php 
                    $argc = array(
                        'theme_location' => 'menu-principal',
                        'container'      => 'nav',
                        'container_class'=> 'menu-principal',                   
                    );
                    wp_nav_menu( $argc );
                ?>
                
            </div>           
        </div>        
    </header>