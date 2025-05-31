<?php 

/** Consultas reutilizables **/

require get_template_directory() . '/inc/queries.php';
require get_template_directory() . '/inc/shortcodes.php';

//Se ejecuta cuando el Tema se habilita
function gymmalilla_setup() {

    // Habilita imagen destacada
    add_theme_support('post-thumbnails');

    // Soporte para el logo del tema
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ));
    
    // Soporte para el título SEO
    add_theme_support('title-tag');   


    // Soporte para el tamaño de imagengenes personalizado
    add_image_size('cuadrada', 350, 350, true); // recorta la imagen a 350x350px
    add_image_size('regtangular', 350, 724, true); // recorta la imagen a 350x724px
    add_image_size('cajas', 400, 375, true); // recorta la imagen a 400x375px
    add_image_size('mediana', 700, 400, true); // recorta la imagen a 700x400px
    add_image_size('blog', 966, 644, true); // recorta la imagen a 966x644px
    
}

add_action('after_setup_theme', 'gymmalilla_setup');

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

   //hoja de estilo plugin lightbox
    if (is_page('galeria')):
       wp_enqueue_style('lightboxCSS', get_template_directory_uri() . '/css/lightbox.min.css' , array(), '2.11.5');
    endif;
    //hoja de estilo plugin leaflet
    if(is_page('contacto')):
        wp_enqueue_style('leaftletCSS', 'https://unpkg.com/leaflet@1.5.1/dist/leaflet.css', array(), '1.5.1');
    endif;

    // Hoja de esilo principal
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize', 'googleFont'), '1.0.0');

    /** Scripts **/

    // Hoja de estilo script del plugin lightbox
    if (is_page('galeria')):
        wp_enqueue_script('lightboxJS', get_template_directory_uri() . '/js/lightbox.min.js', array('jquery'), '2.11.5', true);
    endif;

     if(is_page('contacto')):
        wp_enqueue_script('leafletJS', 'https://unpkg.com/leaflet@1.5.1/dist/leaflet.js', array(), '1.5.1', true);
    endif;

    // Hoja de estilo script del plugin slicknav
    wp_enqueue_script('slicknavJS', get_template_directory_uri() . '/js/jquery.slicknav.min.js', array('jquery'), '1.0.10', true);

    wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery', 'slicknavJS' ), '1.0.10', true);

}

add_action('wp_enqueue_scripts', 'gymmalilla_scripts_styles');


//Definir zona de widgets

function gymmalilla_widgets() {
    register_sidebar(array(
        'name'          => 'Sidebar 1',
        'id'            => 'sidebar_1',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="text-center texto-primario">',
        'after_title'   => '</h3>',

    ));
    register_sidebar(array(
        'name'          => 'Sidebar 2',
        'id'            => 'sidebar_2',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="text-center texto-principal">',
        'after_title'   => '</h3>',

    ));
}
add_action('widgets_init', 'gymmalilla_widgets');


/** Imagen Hero  **/

function gymmalilla_hero_image() {
    // obterner ID pagina principal
    $front_page_id = get_option('page_on_front');
    // obtener Id dde imagen
    $id_imagen = get_field('imagen_hero', $front_page_id);
    //obtener imagen
    $imagen = wp_get_attachment_image_src($id_imagen, 'full') [0];


    // Style CSS para la imagen hero
    wp_register_style('custom', false);
    wp_enqueue_style('custom');

    $imagen_destacada_css = "
        body.home .site-header {
            background-image: linear-gradient(rgba(0, 0, 0, 0.70), rgba(0, 0, 0, 0.70)), url($imagen);
             
        }
    ";

    wp_add_inline_style('custom', $imagen_destacada_css);


    // if (is_front_page()) {
    //     $image = get_field('imagen_hero', 'option');
    //     if ($image) {
    //         echo '<div class="hero-image" style="background-image: url(' . esc_url($image['url']) . ');"></div>';
    //     }
    // }
}
add_action('init', 'gymmalilla_hero_image');