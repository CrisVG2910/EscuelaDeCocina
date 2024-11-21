<?php $html = edc_imagen_destacada(get_the_ID()); 
            // HTML en posicion 0 retorna HTML
            // HTML en posicion 1 retorna la imagen existente

            echo $html[0];
        ?>

        <main class="container">
            <div class="row justify-content-center entrada">
                <div class="py-3 px-5 contenedor-principal bg-light <?php echo $html[1] ? 'col-md-8 destacada' : 'col-md-12 no-destacada'; ?>">

                <h1 class="text-center my-5 separador"><?php the_title(); ?></h1>
                        
                    <?php get_template_part('template-parts/meta', 'post'); ?>
                    
                    <?php the_content(); ?>
                </div>
            </div>
        </main>