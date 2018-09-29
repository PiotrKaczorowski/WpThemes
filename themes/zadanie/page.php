<?php get_header(); ?>
    <section class="page-section baner-section">
        <a href="<?php echo esc_url(home_url('/')); ?>" id="site-logo" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
            <img src="<?php echo get_theme_mod('zadanie_baner'); ?>" alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" class="baner">
        </a>
    </section>
    <article class="page-articles row">
        <div class="container col-desktop-12 col-tablet-12 col-mobile-12">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <header>
                    <h1> <?php the_title(); ?></h1>
            </header>        
                    <p><?php the_content('read on'); ?></p>
                <?php endwhile;
            else : ?>
                <p><?php _e('Sorry, no post matched your criteria'); ?></p>
    <?php endif; ?>
        </div>
    </article>
<?php get_footer(); ?>