<?php 
/*
Plugin Name: Malilla Gym - Post Types
Plugin URI:
Description: Plugin para crear los tipos de post de Malilla Gym
Version: 1.0.0
Author: Marco Navarrete
Author URI: 
Text Domain: malillagym

*/

if(!defined('ABSPATH')) die();

// Registrar Custom Post Type
function malillagym_clases_post_type() {

	$labels = array(
		'name'                  => _x( 'Clases', 'Post Type General Name', 'malillagym' ),
		'singular_name'         => _x( 'Clase', 'Post Type Singular Name', 'malillagym' ),
		'menu_name'             => __( 'Clases', 'malillagym' ),
		'name_admin_bar'        => __( 'Clase', 'malillagym' ),
		'archives'              => __( 'Archivo', 'malillagym' ),
		'attributes'            => __( 'Atributos', 'malillagym' ),
		'parent_item_colon'     => __( 'Clase Padre', 'malillagym' ),
		'all_items'             => __( 'Todas Las Clases', 'malillagym' ),
		'add_new_item'          => __( 'Agregar Clase', 'malillagym' ),
		'add_new'               => __( 'Agregar Clase', 'malillagym' ),
		'new_item'              => __( 'Nueva Clase', 'malillagym' ),
		'edit_item'             => __( 'Editar Clase', 'malillagym' ),
		'update_item'           => __( 'Actualizar Clase', 'malillagym' ),
		'view_item'             => __( 'Ver Clase', 'malillagym' ),
		'view_items'            => __( 'Ver Clases', 'malillagym' ),
		'search_items'          => __( 'Buscar Clase', 'malillagym' ),
		'not_found'             => __( 'No Encontrado', 'malillagym' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'malillagym' ),
		'featured_image'        => __( 'Imagen Destacada', 'malillagym' ),
		'set_featured_image'    => __( 'Guardar Imagen destacada', 'malillagym' ),
		'remove_featured_image' => __( 'Eliminar Imagen destacada', 'malillagym' ),
		'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'malillagym' ),
		'insert_into_item'      => __( 'Insertar en Clase', 'malillagym' ),
		'uploaded_to_this_item' => __( 'Agregado en Clase', 'malillagym' ),
		'items_list'            => __( 'Lista de Clases', 'gymfitness' ),
		'items_list_navigation' => __( 'Navegación de Clases', 'gymfitness' ),
		'filter_items_list'     => __( 'Filtrar Clases', 'gymfitness' ),
	);
	$args = array(
		'label'                 => __( 'Clase', 'malillagym' ),
		'description'           => __( 'Clases para el Sitio Web', 'malillagym' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => true, // true = posts , false = paginas
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 6,
        'menu_icon'             => 'dashicons-welcome-learn-more',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'malillagym_clases', $args );

}
add_action( 'init', 'malillagym_clases_post_type', 0 );


// // Register Custom Post Type
// function malillagym_instructores() {

// 	$labels = array(
// 		'name'                  => _x( 'Instructores', 'Post Type General Name', 'malillagym' ),
// 		'singular_name'         => _x( 'Instructor', 'Post Type Singular Name', 'malillagym' ),
// 		'menu_name'             => __( 'Instructores', 'malillagym' ),
// 		'name_admin_bar'        => __( 'Instructor', 'malillagym' ),
// 		'archives'              => __( 'Archivo', 'malillagym' ),
// 		'attributes'            => __( 'Atributos', 'malillagym' ),
// 		'parent_item_colon'     => __( 'Instructor Padre', 'malillagym' ),
// 		'all_items'             => __( 'Todas Las Instructores', 'malillagym' ),
// 		'add_new_item'          => __( 'Agregar Instructor', 'malillagym' ),
// 		'add_new'               => __( 'Agregar Instructor', 'malillagym' ),
// 		'new_item'              => __( 'Nueva Instructor', 'malillagym' ),
// 		'edit_item'             => __( 'Editar Instructor', 'malillagym' ),
// 		'update_item'           => __( 'Actualizar Instructor', 'malillagym' ),
// 		'view_item'             => __( 'Ver Instructor', 'malillagym' ),
// 		'view_items'            => __( 'Ver Instructores', 'malillagym' ),
// 		'search_items'          => __( 'Buscar Instructor', 'malillagym' ),
// 		'not_found'             => __( 'No Encontrado', 'malillagym' ),
// 		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'malillagym' ),
// 		'featured_image'        => __( 'Imagen Destacada', 'malillagym' ),
// 		'set_featured_image'    => __( 'Guardar Imagen destacada', 'malillagym' ),
// 		'remove_featured_image' => __( 'Eliminar Imagen destacada', 'malillagym' ),
// 		'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'malillagym' ),
// 		'insert_into_item'      => __( 'Insertar en Instructor', 'malillagym' ),
// 		'uploaded_to_this_item' => __( 'Agregado en Instructor', 'malillagym' ),
// 		'items_list'            => __( 'Lista de Instructores', 'malillagym' ),
// 		'items_list_navigation' => __( 'Navegación de Instructores', 'malillagym' ),
// 		'filter_items_list'     => __( 'Filtrar Instructores', 'malillagym' ),
// 	);
// 	$args = array(
// 		'label'                 => __( 'Instructores', 'malillagym' ),
// 		'description'           => __( 'Instructores para el Sitio Web', 'malillagym' ),
// 		'labels'                => $labels,
// 		'supports'              => array( 'title', 'editor', 'thumbnail' ),
// 		'hierarchical'          => false,
// 		'public'                => true,
// 		'show_ui'               => true,
// 		'show_in_menu'          => true,
//         'menu_position'         => 7,
//         'menu_icon'             => 'dashicons-admin-users',
// 		'show_in_admin_bar'     => true,
// 		'show_in_nav_menus'     => true,
// 		'can_export'            => true,
// 		'has_archive'           => false,
// 		'exclude_from_search'   => false,
// 		'publicly_queryable'    => true,
// 		'capability_type'       => 'page',
// 	);
// 	register_post_type( 'instructores', $args );

// }
// add_action( 'init', 'malillagym_instructores', 0 );



// function malillagym_testimoniales() {

// 	$labels = array(
// 		'name'                  => _x( 'Testimoniales', 'Post Type General Name', 'malillagym' ),
// 		'singular_name'         => _x( 'Testimonial', 'Post Type Singular Name', 'malillagym' ),
// 		'menu_name'             => __( 'Testimoniales', 'malillagym' ),
// 		'name_admin_bar'        => __( 'Testimonial', 'malillagym' ),
// 		'archives'              => __( 'Archivo', 'malillagym' ),
// 		'attributes'            => __( 'Atributos', 'malillagym' ),
// 		'parent_item_colon'     => __( 'Testimonial Padre', 'malillagym' ),
// 		'all_items'             => __( 'Todas Las Testimoniales', 'malillagym' ),
// 		'add_new_item'          => __( 'Agregar Testimonial', 'malillagym' ),
// 		'add_new'               => __( 'Agregar Testimonial', 'malillagym' ),
// 		'new_item'              => __( 'Nueva Testimonial', 'malillagym' ),
// 		'edit_item'             => __( 'Editar Testimonial', 'malillagym' ),
// 		'update_item'           => __( 'Actualizar Testimonial', 'malillagym' ),
// 		'view_item'             => __( 'Ver Testimonial', 'malillagym' ),
// 		'view_items'            => __( 'Ver Testimoniales', 'malillagym' ),
// 		'search_items'          => __( 'Buscar Testimonial', 'malillagym' ),
// 		'not_found'             => __( 'No Encontrado', 'malillagym' ),
// 		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'malillagym' ),
// 		'featured_image'        => __( 'Imagen Destacada', 'malillagym' ),
// 		'set_featured_image'    => __( 'Guardar Imagen destacada', 'malillagym' ),
// 		'remove_featured_image' => __( 'Eliminar Imagen destacada', 'malillagym' ),
// 		'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'malillagym' ),
// 		'insert_into_item'      => __( 'Insertar en Testimonial', 'malillagym' ),
// 		'uploaded_to_this_item' => __( 'Agregado en Testimonial', 'malillagym' ),
// 		'items_list'            => __( 'Lista de Testimoniales', 'malillagym' ),
// 		'items_list_navigation' => __( 'Navegación de Testimoniales', 'malillagym' ),
// 		'filter_items_list'     => __( 'Filtrar Testimoniales', 'malillagym' ),
// 	);
// 	$args = array(
// 		'label'                 => __( 'Testimoniales', 'malillagym' ),
// 		'description'           => __( 'Testimoniales para el Sitio Web', 'malillagym' ),
// 		'labels'                => $labels,
// 		'supports'              => array( 'title', 'editor', 'thumbnail' ),
// 		'hierarchical'          => true,// true = posts , false = paginas
// 		'public'                => true,
// 		'show_ui'               => true,
// 		'show_in_menu'          => true,
//         'menu_position'         => 8,
//         'menu_icon'             => 'dashicons-editor-quote',
// 		'show_in_admin_bar'     => true,
// 		'show_in_nav_menus'     => true,
// 		'can_export'            => true,
// 		'has_archive'           => false,
// 		'exclude_from_search'   => false,
// 		'publicly_queryable'    => true,
// 		'capability_type'       => 'page',
// 	);
// 	register_post_type( 'testimoniales', $args );

// }
// add_action( 'init', 'malillagym_testimoniales', 0 );