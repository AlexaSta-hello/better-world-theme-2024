<?php
// Header einbinden aus dem template-parts-Ordner
get_template_part( 'template-parts/header' );
?>


<main>

<!-- Studio Section -->
<section id="studio" class="studio-section">
    <div class="container">
        <?php
        // Hole die Bild-URL mit ACF
        $studio_image = get_field('studio_image'); 

        // Hole den Button-Text und Button-Link
        $studio_button_text = get_field('studio_button_text');
        $studio_button_link = get_field('studio-button_link');

        // Prüfe, ob die Bild-URL gefüllt ist
        if( $studio_image ): 
        ?>
            <div class="studio-image-wrapper">
                <img src="<?php echo esc_url($studio_image); ?>" alt="Keramikwerkstatt Bild" class="studio-image"/>
            </div>
        <?php endif; ?>

        <!-- Prüfe, ob der Button-Text und der Button-Link gefüllt sind -->
        <?php if ( $studio_button_text && $studio_button_link ): ?>
            <div class="studio-button-wrapper">
                <a href="<?php echo esc_url($studio_button_link); ?>" class="studio-cta-button">
                    <?php echo esc_html($studio_button_text); ?>
                </a>
            </div>
        <?php endif; ?>
        
    </div>
</section>


<!-- About Section -->
<section id="about">
    <h2>Das sind wir!</h2>
</section>

<!-- Events Section -->
<section id="events">
  
</section>

<!-- Kurse Section -->
<section id="kurse">
  
</section>

</main>





<?php
// Footer einbinden
get_template_part( 'template-parts/footer' );
?>