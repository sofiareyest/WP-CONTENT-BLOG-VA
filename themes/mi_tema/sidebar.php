<aside class="sidebar  col-3 d-none d-xl-block">

     
         <?php if ( is_active_sidebar( 'sidebar-widget' ) ) { ?>
    <?php dynamic_sidebar( 'sidebar-widget' ); ?>
    <?php }; ?>
       
        <div class="sidebar__nosotros">
  
           <h4>hola!</h4>
             <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi perferendis iste reprehenderit veniam porro? Quidem vero, officia corrupti magnam illum.</p>
             <img src="<?php echo get_theme_file_uri(); ?>/assets/images/nosotros.jpeg" alt="nosotros" class="sidebar__nosotros_img">
             <a href="nosotros" class="btn-secundario btn mb-3 sidebar__nosotros_boton">+ SOBRE NOSOTROS</a>
            </div>
   
        </aside>