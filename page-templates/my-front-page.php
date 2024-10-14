<?php
/* Template Name: My Front Page */
get_template_part( 'template-parts/header' );
?>


<main>
<div class="startseite">

    



            
                
                <?php the_content();?>
                

           





<!-- About Section -->
    <section>

    <div id="about">

        <div class="font font-about">
            <h2>ABOUT</h2>
        </div>

        <div class="about-container">
            <!-- Hole den Titel aus dem ACF -->
            <?php $about_title = get_field('about_title');
            
            // Hole die Bild-URL aus ACF
            $about_image = get_field('about_image'); 

            // Hole About Text
            $about_text = get_field ('about_text');

            // Hole den Button-Text und Button-Link
            $about_button_text = get_field('about_button_text');
            $about_button_link = get_field('about_button_link');
            ?>

            <div class="about-text-wrapper">

                <h2>
                    <?php if( $about_title ): 
                        echo esc_html($about_title);  
                        endif; 
                    ?>
                </h2>

                <h3>
                    <?php if($about_text) : 
                        echo esc_html($about_text); 
                        endif; 
                    ?>
                </h3>

            </div>

            <div class="cta-button about-button">
                    <!-- Prüfe, ob der Button-Text und der Button-Link gefüllt sind -->
                    <?php if ( $about_button_text && $about_button_link ): ?>
                        <a href="<?php echo esc_url($about_button_link); ?>">
                            <?php echo esc_html($about_button_text); ?>
                        </a>
                    <?php endif; ?>
                </div>

            <div class="about-image-wrapper">
                <!-- Prüfe, ob die Bild-URL gefüllt ist -->
                <?php if( $about_image ): ?>
                    
                    <img src="<?php echo esc_url($about_image); ?>" alt="Webdesignerin Webentwicklerin" class="studio-image"/>
                
                <?php endif; ?>
            </div>
            
             
            
        </div> 
    </div>        
    </section>


</div>

</main>





<?php
get_template_part( 'template-parts/contact' );
get_template_part( 'template-parts/footer' );
?>

<script>
    // Wähle das Element aus, das du animieren möchtest
    const target = document.querySelector('.slogan');

    // Erstelle den IntersectionObserver
    const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
        // Füge die Klasse hinzu, die die Animation startet
        entry.target.classList.add('.femme');
        
        // Wenn du willst, dass die Animation nur einmal passiert:
        observer.unobserve(entry.target);
        }
    });
    }, {
    threshold: 0.5 // Die Animation startet, wenn 50% des Elements im Viewport sind
    });

    // Überwache das Ziel-Element
    observer.observe(target);
</script>

