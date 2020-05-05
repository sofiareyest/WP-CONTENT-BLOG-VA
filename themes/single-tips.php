<?php get_header() ?>

<section class="main">
        <div class="main__container">
            <div class="row">


              <div class="col-12">
			  <h2 class="mb-5 mt-5"> <?php the_title() ?></h2>
			  
			<article class="my-5 container my-5 py-5 single">
			<div class="my-3">
				<p><i class="fas fa-calendar-alt"></i> <time datetime="<?php the_time('Y-m-d') ?>"><?php the_time('d \d\e F \d\e Y') ?></time></p>
				<h2><?php the_title() ?></h2>
				<?php the_post_thumbnail('entradas', array('class' => 'w-100 h-auto my-4')); ?>
				<h4><?php the_category(' '); ?></h4>
				<p><?php the_tags( '<span class="text-orange">#</span>', ' <span class="text-orange">#</span>', '' ); ?></p>
			</div>

			<div class="text-left">
				<?php the_content() ?>
			</div>
	  
				 </article>

				 </div>

				 <a href="traveltips" class="btn-tercero btn btn-lg mt-5">Volver a todos los Tips</a>
				 </div>
				 </div>
</section>
<?php get_footer() ?>
