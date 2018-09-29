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
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
               <header>
                    <h1><?php the_title(); ?></h1>
                </header>
                <p>
                    <?php the_content(); ?> 
                </p>
                <?php wp_reset_postdata();
            endwhile;
            else:
                _e( 'Sorry, no posts matched your criteria.' );
            endif;
            ?>
        </article>
    </div>
</section>
<?php get_footer(); ?>
