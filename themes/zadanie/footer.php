<footer class="page-footer">
        <div class="container row">
            <div class="col-desktop-2 col-tablet-0 col-mobile-0"></div>
            <section class="contact contact-data col-desktop-4 col-tablet-4 col-mobile-10 row">
                <header class="col-desktop-10 col-tablet-10 col-mobile-10">
                    <h2>Kontakt</h2>
                </header>    
                <div class="contact-box col-desktop-6 col-tablet-6 col-mobile-6">
                    <p><?php echo get_field("ulica")?></p>
                    <p><?php echo get_field("kod_pocztowy_i_miasto")?></p>
                    <p>tel. <?php echo get_field("telefon")?></p>
                </div>
                <div class="contact-box col-desktop-6 col-tablet-6 col-mobile-6">
                    <p>e-mail: <?php echo get_field("adres_email")?> </p>
                    <p>Godziny otwarcia</p>
                    <p><?php echo get_field("godziny_otwarcia")?></p>
                </div>
            </section>
            <section class="contact contact-form col-desktop-4 col-tablet-4 col-mobile-10">
                <?php echo do_shortcode('[contact-form-7 id="8" title="Formularz kontaktowy"]');?>
            </section>
            <div class="col-desktop-2 col-tablet-0 col-mobile-0"></div>
        </div>
</footer>
<?php wp_footer(); ?> 
</body>
</html>