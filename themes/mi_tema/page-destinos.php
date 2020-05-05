<?php get_header() ?>


    <main class="main">
        <div class="main__container">

            <div class="row">

            <?php get_template_part('_includes/pagedestinos', 'lista') ?>

                <?php $arg = array(
                    'post_type'     => 'post',
                     'posts_per_page' => 4,
                     'paged'             => $paged
                      );

                 $get_arg = new WP_Query( $arg );

                 while ( $get_arg->have_posts() ) {
                  $get_arg->the_post();
                 ?>
                <article class="row entrada text-left my-4 mb-4">

                    <div class="col-md-5  ">
                    <?php the_post_thumbnail('entradas', array('class' => 'w-100 h-auto')); ?>
                      
                    </div>
                    <div class=" col-md-7 mt-4">
                    <p class="text-muted my-3"><i class="fas fa-calendar-alt"></i> <time datetime="<?php the_time('Y-m-d') ?>"><?php the_time('d \d\e F \d\e Y') ?></time></p>
                     <h2><?php the_title() ?></h2>
                    <h4><?php the_category(' '); ?></h4>
                    <p><?php the_excerpt(); ?></p>
                      <p><?php the_tags( '<span class="text-orange">#</span>', ' <span class="text-orange">#</span>', '' ); ?></p>
                     <p class="text-center text-md-left"><a href="<?php the_permalink(); ?>" class="btn-tercero btn my-3">Ver entrada</a></p>
                     </div>
                     
                
                    </div>
                    

                </article>
             
                <?php } wp_reset_postdata(); ?>
                <?php the_pagination( $get_arg ); ?>
                <div>
     <a href="<?php echo get_home_url()?>" class="btn-secundario btn btn-lg mt-5">Volver al inicio</a>
   </div>

    
    </main>


<?php get_footer() ?>