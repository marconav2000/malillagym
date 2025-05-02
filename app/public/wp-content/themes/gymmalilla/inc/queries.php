<?php

function gymmalilla_lista_clases() { ?>

    <!-- listas de clases -->
    <ul class="lista-clases">
        <?php
            // Consulta personalizada para obtener las clases
            $args = array(
                'post_type' => 'malillagym_clases',
                'posts_per_page' => 10, //cuando ponemos -1 se trae todos los post
                'orderby' => 'title',
                'order' => 'ASC'
            );
            
            $clases = new WP_Query($args);       
       
                while ($clases->have_posts()): $clases->the_post(); ?>
                   
                <li class="clase_card">
                    <?php the_post_thumbnail('mediana'); ?>
                    <div class="contenido">
                        <a href="<?php the_permalink(); ?>">
                            <h3><?php the_title(); ?></h3>                       
                        </a>
                        
                        <?php 
                            $hora_inicio = get_field('hora_inicio');
                            $hora_fin = get_field('hora_fin');
                        ?>
                        <p><?php the_field('dias_de_clases'); ?> - <?php echo $hora_inicio . " a " . $hora_fin; ?></p>

                    </div>
                </li>

                
                <?php endwhile;wp_reset_postdata(); ?>
    </ul>

<?php
    // Consulta personalizada para obtener las clases
    
    
}