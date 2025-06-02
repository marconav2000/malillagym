<?php get_header('front'); ?>

<section class="bienvenida text-center seccion">
    <h2 class="texto-primario"><?php the_field('encabezado_bienvenida'); ?></h2>
    <p><?php the_field('texto_bienbenida'); ?></p>
</section>

<div class="seccion-areas">
    <ul class="contenedor-areas">
        <li class="area">
            <?php 
                $area1 = get_field('area_1');
                $imagen = wp_get_attachment_image_src($area1['area_imagen'], 'mediana') [0];
            ?>
            <img src="<?php echo esc_attr($imagen); ?>" />
            <p><?php echo esc_html( $area1['area_texto'] ); ?></p>

        </li>

        <li class="area">
            <?php 
                $area2 = get_field('area_2');
                $imagen = wp_get_attachment_image_src($area2['area_imagen'], 'mediana') [0];
            ?>
            <img src="<?php echo esc_attr($imagen); ?>" />
            <p><?php echo esc_html( $area2['area_texto'] ); ?></p>

        </li>

        <li class="area">
            <?php 
                $area3 = get_field('area_3');
                $imagen = wp_get_attachment_image_src($area3['area_imagen'], 'mediana') [0];
            ?>
            <img src="<?php echo esc_attr($imagen); ?>" />
            <p><?php echo esc_html( $area3['area_texto'] ); ?></p>

        </li>

        <li class="area">
            <?php 
                $area4 = get_field('area_4');
                $imagen = wp_get_attachment_image_src($area4['area_imagen'], 'mediana') [0];
            ?>
            <img src="<?php echo esc_attr($imagen); ?>" />
            <p><?php echo esc_html( $area4['area_texto'] ); ?></p>

        </li>
    </ul>

</div>

<section class="clases">
    <div class="contenedor seccion">
        <h2 class="texto-primario text-center">Nuestras Clases</h2>
        <p class="text-center"><?php the_field('contenido_clases'); ?></p>

        <?php gymmalilla_lista_clases(4); ?>

        <div class="contenedor-boton">
            <!-- insetar aqui link para redirección a Clases -->
            <a href="<?php echo esc_url( get_permalink() ) ; ?>"  
                class="boton boton-primario">
                Ver Todas las Clases
            </a>
        </div>
    </div>
</section>

<section class="Instructores">
    <div class="contenedor seccion">
        <h2 class="text-center texto-primario">Nuestros Instructores</h2>
        <p class="text-center">Instructores profesionales que te ayudaran a logar tus objetivos</p>

        <ul class="listado-instructores">
            <?php
                $args = array(
                    'post_type' => 'instructores',
                    'posts_per_page' => 30,
                );
                $instructores = new WP_Query($args);
                while ($instructores->have_posts()) : $instructores->the_post();
                    // $imagen = wp_get_attachment_image_src(get_post_thumbnail_id(), 'mediana') [0];
            ?>
            <li class="instructor">
                <?php the_post_thumbnail('mediana'); ?>
                <div class="contenido text-center">
                    <h3><?php the_title(); ?></h3>
                    <?php the_content(); ?>
                    <div class="especielidad">
                        <?php 
                            $esp = get_field('especialidad');
                            foreach ($esp as $e): ?>
                                <span class="etiqueta"><?php echo esc_html($e); ?></span>
                            
                        <?php endforeach; ?>
                    </div>
                </div>
            </li>
            <?php endwhile; wp_reset_postdata(); ?>

        </ul>
    </div>
</section>

<?php get_footer(); ?>