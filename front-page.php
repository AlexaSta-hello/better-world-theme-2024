<?php
// Header einbinden aus dem template-parts-Ordner
get_template_part( 'template-parts/header' );
?>


<main>

<!-- Studio Section -->
<section id="studio">

    <div class="studio-container">

        <!-- Hole den Titel aus ACF -->
        <?php 
        $studio_title = get_field('studio_title');
        // Hole die Bild-URL aus ACF
        $studio_image = get_field('studio_image'); 
        // Hole den Button-Text und Button-Link
        $studio_button_text = get_field('studio_button_text');
        $studio_button_link = get_field('studio-button_link');
        ?>


        <h1><?php if( $studio_title ): 
                echo esc_html($studio_title);  
                endif; ?>
        </h1>


        <div class="studio-image-wrapper">
        <!-- Prüfe, ob die Bild-URL gefüllt ist -->
            <?php if( $studio_image ): ?>
                <video autoplay muted playsinline>
                    <source src="<?php echo esc_url($studio_image); ?>" type=video/webm class="studio-image"/>
                </video>
            <?php endif; ?>
        </div>

 
        <div class="studio-button-wrapper">
            <!-- Prüfe, ob der Button-Text und der Button-Link gefüllt sind -->
            <?php if ( $studio_button_text && $studio_button_link ): ?>
                <a href="<?php echo esc_url($studio_button_link); ?>" class="studio-cta-button">
                    <?php echo esc_html($studio_button_text); ?>
                </a>
            <?php endif; ?>
        </div>
        
    </div>
</section>

<!-- Leistungen Section -->    
<section id="leistungen">

    <div class="leistungen-container">
        <?php 
        $leistungen_title = get_field('leistungen_title');
        $leistungen_text = get_field('leistungen_text');
        $leistung1 = get_field ('leistung1');
        $leistung2 = get_field ('leistung2');
        $leistung3 = get_field ('leistung3');
        $leistung4 = get_field ('leistung4');
        $leistung5 = get_field ('leistung5');
        $leistung6 = get_field ('leistung6');
        $leistungen_button_link = get_field('leistungen_button_link');
        $leistungen_button_text = get_field('leistungen_button_text');
        $leistungen_image = get_field('leistungen_image'); 
        ?>

        <div class="text-field">
            <h2>
                <?php if( $leistungen_title ): 
                    echo esc_html($leistungen_title);  
                endif; ?>
            </h2>

            <p class="text">
                <?php if ( $leistungen_text ) :
                    echo esc_html($leistungen_text);
                endif; ?>
            </p>
            
            
            <h3>
                <?php if ( $leistung1 ) :
                        echo esc_html($leistung1);
                endif; ?> 
            </h3>
        
            <h3>
                <?php if ( $leistung2 ) :
                        echo esc_html($leistung2);
                endif; ?> 
            </h3>
        
            <h3>
                <?php if ( $leistung3 ) :
                        echo esc_html($leistung3);
                endif; ?> 
            </h3>
        
            <h3>
                <?php if ( $leistung4 ) :
                        echo esc_html($leistung4);
                endif; ?> 
            </h3>
        
            <h3>
                <?php if ( $leistung5 ) :
                        echo esc_html($leistung5);
                endif; ?> 
            </h3>

            <div class="leistungen-button-wrapper">
            <!-- Prüfe, ob der Button-Text und der Button-Link gefüllt sind -->
            <?php if ( $leistungen_button_text && $leistungen_button_link ): ?>
                <a href="<?php echo esc_url($leistungen_button_link); ?>" class="leistungen-button-text">
                    <?php echo esc_html($leistungen_button_text); ?>
                </a>
            <?php endif; ?>
        </div>
                
            
        </div>

        <div class="leistungen-image">
            <?php if ( $leistungen_image ) : ?>
                <img src="<?php echo esc_url($leistungen_image);?>" alt="Webentwicklerin: Beratung & Website">
            <?php endif; ?>      
        </div>
    </div>
</section>






<!-- About Section -->
<section id="about">
<!-- Hole den Titel aus dem ACF -->
<?php $about_title = get_field('about_title'); ?>

<h1>
    <?php if( $about_title ): 
        echo esc_html($about_title);  
        endif; 
    ?>
</h1>

<div class="about-container">

    <?php
    // Hole die Bild-URL aus ACF
    $about_image = get_field('about_image'); 

    // Hole About Text
    $about_text = get_field ('about_text');

    // Hole den Button-Text und Button-Link
    $about_button_text = get_field('about_button_text');
    $about_button_link = get_field('about-button_link');
    ?>

    <div class="about-text-wrapper">
        <?php if($about_text) : 
            echo esc_html($about_button_text); 
            endif; 
        ?>

        <div class="about-button-wrapper">
            <!-- Prüfe, ob der Button-Text und der Button-Link gefüllt sind -->
            <?php if ( $about_button_text && $about_button_link ): ?>
                <a href="<?php echo esc_url($about_button_link); ?>" class="about-cta-button">
                    <?php echo esc_html($about_button_text); ?>
                </a>
            <?php endif; ?>
    </div>

    </div>

    <div class="about-image-wrapper">
    <!-- Prüfe, ob die Bild-URL gefüllt ist -->
        <?php if( $about_image ): ?>
            
            <img src="<?php echo esc_url($about_image); ?>" alt="Weibliche Webdesignerin Webentwicklerin" class="studio-image"/>
        
        <?php endif; ?>
    </div>  
    
</div>
    
</section>

<!-- Projekte Section -->
<section id="projects">
  
</section>


</main>





<?php
// Footer einbinden
get_template_part( 'template-parts/footer' );
?>