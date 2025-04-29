<?php 

//Menu de navegacion
// Se registran los menus de navegacion del tema, si quieres agregar mas menus

function gymmalilla_menus() {
    register_nav_menus(array(
        'menu-principal' => __('Menu Principal', 'gymmalilla'),
        // 'menu-footer' => __('Menu Footer', 'gymmalilla')
    ));   
}

//Hook para registrar los menus y habilitar el uso de wp_nav_menu()
add_action('init', 'gymmalilla_menus');


//Scripts y estilos
function gymmalilla_scripts_styles() {
    
    // Hoja de estilo Normalize
   wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css' , array(), '8.0.1');

   //hoja de estilo plugin slicknav
   wp_enqueue_style('slicknavCSS', get_template_directory_uri() . '/css/slicknav.min.css' , array(), '1.0.10');
   
    // Hoja de estilo Google Fonts
   wp_enqueue_style('googleFont', 'https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Raleway:ital,wght@0,100..900;1,100..900&family=Staatliches&display=swap', array(), '1.0.0');

    
    // Hoja de esilo principal
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize', 'googleFont'), '1.0.0');

    // Hoja de estilo script del plugin slicknav
    wp_enqueue_script('slicknavJS', get_template_directory_uri() . '/js/jquery.slicknav.min.js', array('jquery'), '1.0.10', true);

    wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery', 'slicknavJS' ), '1.0.10', true);


}

add_action('wp_enqueue_scripts', 'gymmalilla_scripts_styles');