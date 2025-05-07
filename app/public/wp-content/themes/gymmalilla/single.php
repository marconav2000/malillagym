
<?php get_header(); ?>


  <!-- look de pagina -->
  
  <!-- Carga contenido de la pagina a publicar -->
  <?php while ( have_posts() ) : the_post(); ?>
    
        <!-- Carga titulo  de la pagina a publicar -->
        <h1 class="text-center texto-primario"><?php the_title(); ?></h1>

        <?php the_content(); ?>    

    <?php endwhile; ?>

<?php get_footer(); ?>