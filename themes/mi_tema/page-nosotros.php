<?php get_header() ?>
<?php the_post() ?>

<section class="section">
<h2 class="text-center mb-5 mt-5"><?php the_title() ?></h2>
        <div class="section__container">
      
            <div class="row">
           
                <div class="row col-12  my-4 mb-4">
            
                    <div class="col-md-5  ">
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/nosotros.jpeg" alt="nosotros" class="">
                    </div>
                    <div class=" col-md-7 mt-4">

                        <h4>hola!</h4>

                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi perferendis iste reprehenderit veniam porro? Quidem vero, officia corrupti magnam illum.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi perferendis iste reprehenderit veniam porro? Quidem vero, officia corrupti magnam illum.</p>
                    </div>


                </div>
                <div class="nosotros__form col-12 mb-4">
                <div class="my-5 container">
                <h2 class="text-center mb-5 mt-5">Contáctanos</h2>
      
        <?php the_content(); ?>
        <?php if ( is_active_sidebar( 'contact-widget' ) ) { ?>
            <?php dynamic_sidebar( 'contact-widget' ); ?>
        <?php }; ?>
      </div>
                </div>

            </div>
    </section>

<?php get_footer() ?>