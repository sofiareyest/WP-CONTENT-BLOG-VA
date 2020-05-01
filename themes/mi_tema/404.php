<?php get_header() ?>
<section class="main">
        <div class="main__container">
            <div class="row">
              <div class="col-12 mb-5 mt-5">
	<h2>Error 404:</h2>
	<h4>Página no encontrada</h4>
	<?php get_template_part('_includes/header', 'principal') ?>
	<a href="<?php echo get_home_url()?>" class="btn-secundario btn mt-5">Volver al inicio</a>
</div>
</div>
</section>
<?php get_footer() ?>