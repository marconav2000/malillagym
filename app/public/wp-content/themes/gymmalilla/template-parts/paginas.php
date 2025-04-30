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
        <!-- Carga cuerpo (contenido) de publicacion  -->
        <?php the_content(); ?>    

<?php endwhile; ?>