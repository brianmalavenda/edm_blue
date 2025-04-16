<?php
/* Template Name: Grid Diarios */
get_header(); 
global $href;
?>

<main class="contenedor">
    <div class="container">
        <?php
        // Consulta personalizada para obtener los custom post types
        $query = new WP_Query(array(
            'post_type' => 'post_type_diarios',
            'orderby' => 'post_date',
            'order' => 'DESC',
            'posts_per_page' => -1, // Ajusta esto si quieres limitar el número total de posts.
        ));

        if ($query->have_posts()) :
            $post_count = 0; // Inicializa el contador de posts

            while ($query->have_posts()) : $query->the_post();
                if ($post_count % 4 === 0): // Comienza una nueva fila cada 4 posts
        ?>
            <div class="row">
                <?php endif; ?>

                <div class="col-md-3 mb-4">
                    <div class="card" style="width: 100%;">
                        <?php 
                        $post_content = get_the_content();
                        $pattern = '/href="([^"]+)"/';
                        
                        if (preg_match($pattern, $post_content, $matches)) {
                            $link = $matches[1];
                        }
                        
                        if(preg_match('LN',$link,$matches)){
                            $nombre_logo = $matches;
                            $link_logo = "https://hne.ctp.mybluehost.me/website_850e55e5/wp-content/uploads/2024/12/241223LN.docx" //. $matches[1];
                        }
                        ?>
                        <img src="<?php echo esc_url($link_logo); ?>" class="card-img-top" alt="logo">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?php the_title(); ?>
                            </h5>
                            <a class="btn btn-primary" href="<?php echo esc_url($link); ?>" role="button">Descargar</a>
                        </div>
                    </div>
                </div>

                <?php
                $post_count++; // Incrementa el contador de posts
                if ($post_count % 4 === 0): // Cierra la fila después de 4 posts
                ?>
                    </div>
                <?php endif; ?>
            <?php
            endwhile;

            // Si la última fila no se cerró, ciérrala
            if ($post_count % 4 !== 0): 
            ?>
                </div>
            <?php
            endif;

            wp_reset_postdata();
        else :
            echo '<p>No hay diarios disponibles.</p>';
        endif;
        ?>
    </div>
</main>


<?php get_footer(); ?>
