<?php if ( has_nav_menu( 'footer-menu' ) ) { ?>
	<?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container_class' => 'footer-menu' ) ); ?>
<?php } ?>

<footer class="footer">
        <div class="footer__container row">
            <div class="col-12">
                <div class="footer__logo">
                    <span class="navbar-brand" href="#">Viajólicos Anónimos</span>
                </div>

                <div class="footer__icono">
                    <a class="footer__icono_item" href="#"><i class="fab fa-2x fa-instagram "></i></a>
                </div>
                <p>@2020 / Todos los derechos reservados.</p>


            </div>
        </div>
    </footer>

<?php wp_footer() ?>
</body>
</html>