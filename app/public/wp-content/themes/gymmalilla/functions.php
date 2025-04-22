<?php 

//Menu de navegacion
// Se registran los menus de navegacion del tema, si quieres agregar mas menus

function gymmalilla_menus() {
    register_nav_menus(array(
        'menu-principal' => __('Menu Principal', 'gymmalilla'),
        'menu-footer' => __('Menu Footer', 'gymmalilla'),
    ));   
}

add_action('init', 'gymmalilla_menus');

//Scripts y estilos
function gymmalilla_scripts_styles() {
    //la hoja de estilos principal
   wp_enqueue_style($handle, $src, $deps, $ver, $media);
}
add_action('wp_enqueue_scripts', 'gymmalilla_scripts_styles');