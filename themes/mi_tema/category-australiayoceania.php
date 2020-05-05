<?php get_header() ?>


    <section class="my-5 container mt-5">s
    <?php if (have_posts()) { ?>
      <h2 class="text-center mb-5 mt-5">Elige tu destino en: <?php single_term_title(); ?></h2>
        <?php while ( have_posts() ) { the_post(); ?>
            <article class="my-5">
                <div class="text-center my-3">
                    <p><i class="fas fa-calendar-alt"></i> <time datetime="<?php the_time('Y-m-d') ?>"><?php the_time('d \d\e F \d\e Y') ?></time></p>
                    <h2><?php the_title() ?></h2>
                    <h4><?php the_category(' '); ?></h4>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <?php the_post_thumbnail('detail', array('class'=> 'w-100 h-auto')); ?>
                    </div>
                    <div class="col-md-8 text-left">
                        <?php the_excerpt() ?>
                        <p><?php the_tags( '<span class="text-dark">#</span>', ' <span class="text-dark">#</span>', '' ); ?></p>
                        <p class="text-right"><a href="<?php the_permalink() ?>" class="btn btn-tercero">Ver entrada</a></p>
                    </div>
                </div>
            </article>
        <?php }; ?>
    <?php } else { ?>
        <!-- Content -->
        <h2 class="text-center mb-5">No hay elementos</h2>
	<?php } wp_reset_query(); ?>
	
	</section>
	<?php get_footer() ?>