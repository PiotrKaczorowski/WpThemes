<!DOCTYPE html>
<html <?php language_attributes(); ?> dir="<?php bloginfo('text_direction'); ?>">
    <head>
        <title><?php wp_title(); ?> <?php bloginfo('name'); ?></title>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta name="author" content="Piotr Kaczorowski">
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/assets/images/favicon.png" type="image/png" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <?php if (is_singular() && get_option('thread_comments')) wp_enqueue_script('comment-reply'); ?>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
        <script>
            for (var e, l = 'footer header nav article section aside figure'.split(' '); e = l.pop(); document.createElement(e))
                ;
        </script>
        <?php wp_head(); ?> 
    </head>
    <body <?php echo body_class(); ?>>
        
        <header class="page-header">
            <div class="container row">
                <?php if (get_theme_mod('zadanie_logo')) : ?>
                    <a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home" class="brand col-desktop-3 col-tablet-12 col-mobile-12">
                        <img src="<?php echo get_theme_mod('zadanie_logo'); ?>" alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
                    </a>
                <?php else : ?>
                    <hgroup>
                        <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
                        <p class="site-description"><?php bloginfo('description'); ?></p>
                    </hgroup>
                <?php endif; ?>
                
                <nav class="col-desktop-9 col-tablet-12 col-mobile-12">
                    <?php wp_nav_menu(array('theme_location' => 'menu-main', 'menu_class' => 'menu menu-main menu-items')); ?>
                </nav>
            </div>
        </header>

        <?php 
   