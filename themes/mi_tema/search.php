<?php get_header() ?>

    <section class="main">
		<div class="main__container">
    <?php if (have_posts()) { ?>
      <h2 class="text-center mb-5">Buscando : <?php echo esc_html(get_search_query(false)); ?></h2>
        <?php while ( have_posts() ) { the_post(); ?>
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
 		<p class="text-center text-md-left"><a href="<?php the_permalink(); ?>" class="btn-tercero my-3">Ver entrada</a></p>
 		</div>


		</div>


</article>
        <?php }; ?>
    <?php } else { ?>
        <!-- Content -->
        <h2 class="text-center mb-5">No hay elementos</h2>
    <?php } wp_reset_query(); ?>
	</div>
	</section>
<?php get_footer() ?>