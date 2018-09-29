<?php
/* Template Name: Template home page */
get_header();?>

<section class="page-section slider-section">
    <?php echo do_shortcode('[metaslider id="9"]'); ?>
</section>
    
<section class="page-section gallery-section">
    <div class="container row">
        <?php for($i = 1; $i <= 8; $i ++): $image = get_field("obrazek_{$i}");?>
        <a href="#" class="col-desktop-3 col-tablet-4 col-mobile-6">
             <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
        </a>
        <?php endfor; ?>
    </div>
</section>

<?php get_footer(); ?>