<?php get_header() ?>

<?php if ( have_posts() ) { ?>
	<?php while ( have_posts() ) { ?>
		<?php the_post(); ?>

		<article class="my-5 container my-5 py-5 single">
			<div class="my-3">
				<p><i class="fas fa-calendar-alt"></i> <time datetime="<?php the_time('Y-m-d') ?>"><?php the_time('d \d\e F \d\e Y') ?></time></p>
				<h2><?php the_title() ?></h2>
				<?php the_post_thumbnail('detail', array('class' => 'w-100 h-auto my-4')); ?>
				<h4><?php the_category(' '); ?></h4>
				<p><?php the_tags( '<span class="text-orange">#</span>', ' <span class="text-orange">#</span>', '' ); ?></p>
			</div>

			<div class="text-left">
				<?php the_content() ?>
			</div>

			<div>
        <a href="destinos" class="btn-tercero btn btn-lg mt-5">Volver a todos los Destinos</a>
      </div>

		</article>

	<?php } ?>
<?php } else { ?>
	<!-- Content -->
<?php } wp_reset_query(); ?>

<?php get_footer() ?>
