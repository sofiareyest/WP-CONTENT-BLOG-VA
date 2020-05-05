<?php get_header() ?>

<section class="main">
        <div class="main__container">
            <div class="row">

            

              <div class="section__images_page col-12">
              <h2 class="mb-5 mt-5">Descubre <?php the_title() ?> para tus viajes</h2>
              <?php $arg = array(
                    'post_type'     => 'tips',
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
 <p class="text-center text-md-left"><a href="<?php bloginfo('url') ?>/single/tips" class="btn-tercero btn my-3">Ver entrada</a></p>
 </div>


</div>


</article>
                    <?php } wp_reset_postdata(); ?>
                    <?php the_pagination( $get_arg ); ?>
                </div>
              
            </div>
            <a href="<?php echo get_home_url()?>" class="btn-secundario btn mt-5 mb-5">Volver al inicio</a>
        </div>

    </section>

<?php get_footer() ?>