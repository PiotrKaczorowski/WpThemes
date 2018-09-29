<?php
/* Template Name: Template products page */
get_header(); 
?>

<section class="page-section baner-section">
    <?php if (get_theme_mod('zadanie_baner')) : ?>
        <a href="<?php echo esc_url(home_url('/')); ?>" id="site-logo" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
            <img src="<?php echo get_theme_mod('zadanie_baner'); ?>" alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" class="baner">
        </a>
        <?php else : ?>
            <hgroup>
                <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
                    <p class="site-description"><?php bloginfo('description'); ?></p>
            </hgroup>
        <?php endif; ?>
</section>

<section class="page-section products-section">
    <div class="container row">
        <aside class="col-desktop-3 col-tablet-12 col-mobile-12">
            <nav>
                <?php wp_nav_menu(array('theme_location' => 'menu-prod', 'menu_class' => 'menu menu-prod'));?>
            </nav>
        </aside>
        <article class="col-desktop-9 col-tablet-12 col-mobile-12">
        <?php 
        $args = array('post_type' => 'products', 'posts_per_page' => 1, 'order' => 'ASC');
        $query = new WP_Query( $args );
        if($query->have_posts()) :
            while ( $query->have_posts() ) : $query->the_post();?>
               <header>
                    <h1><?php the_title(); ?></h1>
                </header>
                <p>
                    <?php the_content(); ?> 
                </p>
                <?php wp_reset_postdata();
             endwhile;
            else : ?>
                <p><?php _e('Sorry, no post matched your criteria'); ?></p>
        <?php endif; ?>
        </article>
    </div>
</section>
<?php get_footer(); ?>