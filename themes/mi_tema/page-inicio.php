<?php get_header() ?>


    <?php get_template_part('_includes/header', 'principal') ?>

    <main class="main">
        <div class="main__container">

            <div class="row">

            <?php get_template_part('_includes/main', 'lista') ?>
              
                <?php $arg = array(
                'post_type'     => 'post',
                 'posts_per_page' => 3,
                'orderby' => 'rand'
                 );

                $get_arg = new WP_Query( $arg );
                 while ( $get_arg->have_posts() ) {
                  $get_arg->the_post();
               ?>
              
                <div class="main__fotos  col-md-3 col-sm-12">

                    <div class=" main__fotos_item">
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('entradas-inicio', array('class' => 'w-100 h-auto')); ?></a>        
                    </div>
                  
                </div>
             
                
                <?php } wp_reset_postdata(); ?>
            </div>
        </div>
    </main>
    <section class="section">
        <div class="section__container">
            <div class="row">
            <div class="section__tips col-9  col-xl-9 col-md-12 col-sm-12">
                    <h2 class="mb-5">Tips para tus viajes</h2>
                    <div class="row">

            <div class="section__imagestips">

                <?php $arg = array(
                 'post_type'     => 'tips',
                 'posts_per_page' => 6,
                 'orderby' => 'rand'
                 );

                 $get_arg = new WP_Query( $arg );
                   while ( $get_arg->have_posts() ) {
                 $get_arg->the_post();
                  ?>

             <figure class="col-lg-4 col-xl-4 col-sm-6 section__tips_img">
              <?php the_post_thumbnail('entradas-inicio', array('class' => 'image w-100 h-auto')); ?>
      
               <figcaption class="overlay">
              <a href="<?php the_permalink(); ?>"><h4 class="text"><?php the_title(); ?></h4></a>
          
             </figcaption>
             </figure>
      
      <?php } wp_reset_postdata(); ?>
               
         <a href="tips" class="btn-secundario btn section__images_boton mb-3">VER TODOS LOS TIPS</a>    
         </div>
        <div class="section__images">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
           <div class="carousel-inner">

             <?php $arg = array(
             'post_type'     => 'slider',
            'posts_per_page' => -1,
            'orderby' => 'rand'

                 );
                $get_arg = new WP_Query( $arg );
                while ( $get_arg->have_posts() ) {
               $get_arg->the_post();
                ?>
              <div class="carousel-item <?php if ( $get_arg->current_post == 0 ) : ?>active<?php endif; ?>">
             <?php the_post_thumbnail('carousel-img', array('class' => 'd-block w-100 h-auto')); ?>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
             <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
                 </a>
                 <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                  </a>
             <?php } wp_reset_postdata(); ?>
               </div>

            
                                
          </div>
         
          </div>
          <a href="fotografias" class="btn-secundario btn mb-3 section__images_boton">MIRA MÁS FOTOGRAFÍAS</a>
        </div>
            </div>
            <?php get_sidebar() ?>
        </div>
    </section>

<?php get_footer() ?>
