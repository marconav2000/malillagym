<!-- carga contenido de archivo header.php -->
<?php get_header(); ?>

    <main class="contenedor pagina seccion no-sidebar">
        <div class=" text-center">
            
            <!-- carga contenido de pagina.php -->
            <?php get_template_part('template-parts/paginas'); ?>   
            
            <?php gymmalilla_lista_clases(); ?> 
          
        </div>   
    </main>    

<!-- carga contenido de archivo footert.php -->
<?php get_footer(); ?>