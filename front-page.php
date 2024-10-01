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
<?php $leistungen_title = get_field('leistungen_title'); ?>

<h1>
    <?php if( $leistungen_title ): 
        echo esc_html($leistungen_title);  
        endif; 
    ?>
</h1>
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