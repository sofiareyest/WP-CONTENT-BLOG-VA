<?php get_header() ?>

<section class="main">
        <div class="main__container">
            <div class="row">
              <div class="col-12">

           <?php the_post() ?>

                    <article class="row text-left my-4 mb-4">

                        <div class="col-md-5  ">
                        <?php the_post_thumbnail('detail', array('class' => 'w-100 h-auto')); ?>
                        </div>
                        <div class=" col-md-7 mt-4">

                        <h2><?php the_title() ?></h2>
                        <p><?php the_tags( '<span class="text-orange">#</span>', ' <span class="text-orange">#</span>', '' ); ?></p>

                        </div>
                    </article>
                  

                </div>
              
            </div>
            <a href="<?php echo get_home_url()?>" class="btn-secundario btn btn-lg mt-5">Volver al inicio</a>
        </div>

    </section>

<?php get_footer() ?>