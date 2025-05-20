<?php get_header(); ?>

    <main class="pagina seccion no-sidebar contenedor">
        <ul class="listado-blog">
            <?php while ( have_posts() ) : the_post(); ?>
                <li class="card gradient">
                   <?php the_post_thumbnail('mediana'); ?>
                   <div class="contenido">                       
                        <!-- <a href="<?php the_permalink(); ?>" class="boton">Leer más</a> --> <!-- esta linea crea un enlace permenebte y agrega boton leer mas -->
                        <a href="<?php the_permalink(); ?>">
                            <h3><?php the_title(); ?></h3>
                        </a>

                        <p class="meta">
                            <!-- esta es un manera de imprimir en pantall el contenido de un post -->
                           <!-- <span class="fecha"><i class="fa-solid fa-calendar-days"></i> <?php the_time('d/m/Y'); ?></span>
                            <span class="autor"><i class="fa-solid fa-user"></i> <?php the_author(); ?></span>
                            <span class="comentarios"><i class="fa-solid fa-comment"></i> <?php comments_number( '0', '1', '%' ); ?></span> -->

                            <!-- esta es otra manera de imprimir en pantalla el contenido de un post -->
                            <span>Por: </span>

                            <a href="<?php echo get_author_posts_url( get_the_author_meta('ID')) ?>">
                                <?php echo get_the_author_meta('display_name'); ?> 
                            </a>

                            <?php the_time( get_option('date_format')); ?>

                        </p>
                        
                           

                    </div>    
                    
                </li>
            <?php endwhile; ?>
        </ul>
    </main>


<?php get_footer(); ?>