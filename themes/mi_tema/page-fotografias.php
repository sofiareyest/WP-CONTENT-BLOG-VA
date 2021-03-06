<?php get_header() ?>

<section class="main">
        <div class="main__container">
       
            <div class="row">
            
              <div class="section__images_page col-12">
              <h2 class="text-center mb-5 mt-5"><?php the_title() ?></h2>
              <?php $arg = array(
                    'post_type'     => 'slider',
                     'posts_per_page' => -1
                      );

                 $get_arg = new WP_Query( $arg );

                 while ( $get_arg->have_posts() ) {
                  $get_arg->the_post();
                 ?>

                    <article class="row text-left my-4 mb-4">

                        <div class="col-12  ">
                        <?php the_post_thumbnail('detail', array('class' => 'w-80 h-auto')); ?>
                        </div>
                        <div class="text-center col-12 mt-4">

                        <h2><?php the_title() ?></h2>
                        <h4><?php the_category(' '); ?></h4>
                        <p><?php the_tags( '<span class="text-orange">#</span>', ' <span class="text-orange">#</span>', '' ); ?></p>
                        <h3>Tomada con: <?php the_field('camara'); ?></h3>
                        </div>
                    </article>
                    <?php } wp_reset_postdata(); ?>

                </div>
              
            </div>
            <a href="<?php echo get_home_url()?>" class="btn-secundario btn btn-lg mt-5">Volver al inicio</a>
        </div>

    </section>

<?php get_footer() ?>