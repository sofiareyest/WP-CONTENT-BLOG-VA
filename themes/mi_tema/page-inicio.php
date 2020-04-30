<?php get_header() ?>


    <?php get_template_part('_includes/header', 'principal') ?>

    <main class="main">
        <div class="main__container">

            <div class="row">

                <div class="main__destinos col-md-3 col-lg-3 col-sm-12">
                    <ul class="main__lista">
                        <h2>Elige tu destino</h2>

                        <button class="btn-principal main__lista-item " href="#">Africa</button>


                        <button class="btn-principal main__lista-item " href="#">Asia</button>


                        <button class="btn-principal main__lista-item " href="#">Australia & Oceania</button>


                        <button class="btn-principal main__lista-item " href="#">Europa</button>


                        <button class="btn-principal main__lista-item " href="#">America del norte</button>


                        <button class="btn-principal main__lista-item " href="#">America del sur</button>

                    
               
                    </ul>
                    <a href="destinos" class="btn-secundario mb-3 ml-5 mt-5">TODOS LOS DESTINOS</a>
                </div>
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
                        <figure class=" col-lg-4 col-xl-4 col-sm-6 section__tips_img">
                            <img class="rounded w-100 h-auto" src="assets/img/tips1.jpeg" alt="Card image cap" class="">
                            <figcaption class="overlay">
                                <h4 class="text">Tips 1</h4>
                                <p class="text1">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                            </figcaption>
                        </figure>
                        <figure class=" col-lg-4 col-xl-4 col-sm-6 section__tips_img">
                            <img class="rounded w-100 h-auto" src="assets/img/tips2.jpg" alt="Card image cap">
                            <figcaption class="overlay">
                                <h4 class="text">Tips 2</h4>
                                <p class="text1">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                            </figcaption>
                        </figure>
                        <figure class="col-lg-4 col-xl-4 col-sm-6 section__tips_img">
                            <img class="rounded w-100 h-auto" src="assets/img/tips3.jpeg" alt="Card image cap">
                            <figcaption class="overlay">
                                <h4 class="text">Tips 3</h4>
                                <p class="text1">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                            </figcaption>
                        </figure>


                        <figure class="col-lg-4 col-xl-4 col-sm-6 d-none d-sm-block section__tips_img">
                            <img class="rounded w-100 h-auto" src="assets/img/tips4.jpeg" alt="Card image cap">
                            <figcaption class="overlay">
                                <h4 class="text">Tips 4</h4>
                                <p class="text1">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                            </figcaption>
                        </figure>
                        <figure class="col-lg-4 col-xl-4 col-sm-6 d-none d-sm-block section__tips_img">
                            <img class="rounded w-100 h-auto" src="assets/img/tips5.jpeg" alt="Card image cap">
                            <figcaption class="overlay">
                                <h4 class="text">Tips 5</h4>
                                <p class="text1">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                            </figcaption>
                        </figure>
                        <figure class="col-lg-4 col-xl-4 col-sm-6 d-none d-sm-block section__tips_img">
                            <img class="rounded w-100 h-auto" src="assets/img/tips6.jpg" alt="Card image cap">
                            <figcaption class="overlay">
                                <h4 class="text">Tips 6</h4>
                                <p class="text1">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                            </figcaption>
                        </figure>

                        <button class="btn-secundario section__tips_boton " href="page-tips.html">VER TODOS LOS TIPS</button>

                        <div class="section__images">
                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="assets/img/foto1.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="assets/img/foto2.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="assets/img/foto3.jpg" class="d-block w-100" alt="...">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                                <button class="btn-secundario section__images_boton " href="page-fotografias.html">MIRA MÁS FOTOGRAFÍAS</button>

                            </div>
                        </div>
                    </div>



                </div>

                <?php get_sidebar() ?>


            </div>
        </div>
    </section>
<?php get_footer() ?>
