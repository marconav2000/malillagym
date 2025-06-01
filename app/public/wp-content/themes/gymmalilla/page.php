<!-- carga contenido de archivo header.php -->
<?php get_header(); ?>

    <main class="contenedor pagina seccion con-sidebar">
        <div class="contenido-principal">
            
            <!-- carga contenido de pagina.php -->
            <?php get_template_part('template-parts/paginas'); ?>
                 
        </div>
        <!-- Carga sidebar -->            
       <?php get_sidebar(); ?>

    </main>    



<!-- carga contenido de archivo footert.php -->
<?php get_footer(); ?>