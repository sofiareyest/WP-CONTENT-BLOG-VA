<?php get_header() ?>

<?php if ( have_posts() ) { ?>
	<?php while ( have_posts() ) { ?>
		<?php the_post(); ?>

<section class="main">
	<div class="main__container">
		<div class="row">


			<div class="col-12">
				

			<article class="row entrada text-left my-4 mb-4">
				<div class="col-md-5  ">
				<?php the_post_thumbnail('entradas', array('class' => 'w-100 h-auto')); ?>
  				</div>
				<div class="text-center col-md-7  mt-5">
				<p class="text-muted my-3"><i class="fas fa-calendar-alt"></i> <time datetime="<?php the_time('Y-m-d') ?>"><?php the_time('d \d\e F \d\e Y') ?></time></p>
 				<h2><?php the_title() ?></h2>
				<h4><?php the_category(' '); ?></h4>
  				<p><?php the_tags( '<span class="text-orange">#</span>', ' <span class="text-orange">#</span>', '' ); ?></p>
 				</div>
				<div>
				<p class="text-center mb-5"><?php the_content() ?></p>
				</div>
				</article>
				<a href="traveltips" class="btn-tercero btn btn-lg  mb-3">Volver a todos los Tips</a>
			</div>

			
		</div>
	</div>
</section>

<?php } ?>
<?php } else { ?>
	<!-- Content -->
<?php } wp_reset_query(); ?>
<?php get_footer() ?>