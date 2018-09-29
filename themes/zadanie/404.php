<?php
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
        <article class="col-desktop-12 col-tablet-12 col-mobile-12">
            <h1 class="page-title"> 404 - <?php _e( 'Oops! That page can&rsquo;t be found.', 'zadanie' ); ?></h1>
        </article>
    </div>
</section>


<?php //get_footer();
