<aside class="sidebar  col-3 d-none d-xl-block">

     
         <?php if ( is_active_sidebar( 'sidebar-widget' ) ) { ?>
    <?php dynamic_sidebar( 'sidebar-widget' ); ?>
    <?php }; ?>
       
    <?php get_template_part('_includes/sidebar', 'nosotros') ?>
   
        </aside>