  <!-- look de pagina -->
  
  <!-- Carga contenido de la pagina a publicar -->
   <?php while ( have_posts() ) : the_post(); ?>
    
        <!-- Carga titulo  de la pagina a publicar -->
        <h1 class="text-center texto-primario"><?php the_title(); ?></h1>

        <!-- Carga imagen despuesd e titulo -->
        <?php 
            if( has_post_thumbnail() ) :
                    the_post_thumbnail('blog', array('class' => 'imagen-destacada'));
                
            // else:   

            //     echo '<img src="' . get_template_directory_uri() . '/img/imagen-default.jpg" alt="Imagen por defecto">';
            endif;     
        ?>

        <?php // revisa si el custom post type es igual a malillagym_clases 
                if (get_post_type() === 'malillagym_clases'){
                
                        $hora_inicio = get_field('hora_inicio');
                        $hora_fin = get_field('hora_fin');
        ?>
                        <p class="informacion-clases"><?php the_field('dias_de_clases'); ?> - <?php echo $hora_inicio . " a " . $hora_fin; ?></p>

        <?php } ?>







        <!-- Carga cuerpo (contenido) de publicacion  -->
        <?php the_content(); ?>    

<?php endwhile; ?>