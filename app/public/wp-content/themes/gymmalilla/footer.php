
<footer class="site-footer contenedor">
    <hr>

        <div class="contenido-footer">
            <?php 
                $argc = array(
                    'theme_location' => 'menu-principal',
                    'container'      => 'nav',
                    'container_class'=> 'menu-principal',                   
                );
                wp_nav_menu( $argc );
            ?>
            <p class="copyright">Todos los derechos reservados &copy; <?php echo get_bloginfo('name') . " " . date('Y') ?></p>

        </div>    
</footer>   

<?php wp_footer(); ?>
 <!-- Fin del contenedor principal -->


    </body>
</html>