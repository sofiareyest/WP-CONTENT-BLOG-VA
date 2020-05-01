<?php if ( has_nav_menu( 'footer-menu' ) ) { ?>
	<?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container_class' => 'footer-menu' ) ); ?>
<?php } ?>

<?php get_template_part('_includes/footer', 'principal') ?>

<?php wp_footer() ?>
</body>
</html>