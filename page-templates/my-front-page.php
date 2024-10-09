<?php
/* Template Name: My Front Page */
get_template_part( 'template-parts/header' );
?>


<main>
<div class="startseite">

    

<!-- Banner Section -->
    <section id="banner">

            <?php
            // Hole den Button-Text und Button-Link
            $banner_button_text = get_field('banner_button_text');
            $banner_button_link = get_field('banner-button_link');
            ?>

            <div class="banner-wrapper">
                
                <?php the_content();?>
                <div class="cta-button banner-button">
                    <!-- Prüfe, ob der Button-Text und der Button-Link gefüllt sind -->
                    <?php if ( $banner_button_text && $banner_button_link ): ?>
                        <a href="<?php echo esc_url($banner_button_link); ?>">
                            <?php echo esc_html($banner_button_text); ?>
                        </a>
                    <?php endif; ?>
                </div>

            </div>
    
    </section>


<!-- Slogan Section -->
    <section id="slogan">
        <!-- Hole den Titel aus ACF -->
        <div class="slogan-container">
            <div class="femme" id="femme">
                <?php $slogan1_title = get_field('slogan1_title'); ?>
                <h1><?php if( $slogan1_title ): echo esc_html($slogan1_title); endif; ?></h1>
            </div>
            <div class="web" id="web">
                <?php $slogan2_title = get_field('slogan2_title'); ?>
                <h1><?php if( $slogan2_title ): echo esc_html($slogan2_title); endif; ?></h1>
            </div>
        </div>
    </section>



<!-- Leistungen Section -->   
    
    <section id="leistungen">
    
    <div class="font font-leistungen">
        <h2>LEISTUNGEN</h2>
    </div>
    

        <div class="leistungen-container fp-container">
            <?php 
            $leistungen_title = get_field('leistungen_title');
            $leistungen_text = get_field('leistungen_text');
            $leistung1 = get_field ('leistung1');
            $leistung2 = get_field ('leistung2');
            $leistung2_text = get_field ('leistung2_text');
            $leistung3 = get_field ('leistung3');
            $leistung3_text = get_field ('leistung3_text');
            $leistung4 = get_field ('leistung4');
            $leistung5 = get_field ('leistung5');
            $leistungen_button_link = get_field('leistungen_button_link');
            $leistungen_button_text = get_field('leistungen_button_text');
            $leistungen_image = get_field('leistungen_image'); 
            ?>

            <div class="text-field">
                <h2><?php if( $leistungen_title ): echo esc_html($leistungen_title); endif; ?></h2>

                <p class="text"><?php if ( $leistungen_text ) : echo esc_html($leistungen_text); endif; ?></p>
                
                <h3><?php if ( $leistung1 ) : echo esc_html($leistung1); endif; ?> </h3>
            
                <h3><?php if ( $leistung2 ) : echo esc_html($leistung2); endif; ?> </h3>
            
                <p><?php if ( $leistung2_text ) : echo esc_html($leistung2_text); endif; ?> </p>
            
                <h3><?php if ( $leistung3 ) : echo esc_html($leistung3); endif; ?> </h3>
            
                <p><?php if ( $leistung3_text ) : echo esc_html($leistung3_text); endif; ?> </p>

                <h3><?php if ( $leistung4 ) : echo esc_html($leistung4); endif; ?> </h3>

                <h3><?php if ( $leistung5 ) : echo esc_html($leistung5); endif; ?> </h3>    
                
            </div>

            <div class="leistungen-image">
                <?php if ( $leistungen_image ) : ?>
                    <img src="<?php echo esc_url($leistungen_image);?>" alt="Webentwicklerin: Beratung & Website">
                <?php endif; ?>      
            </div>

            <div class="cta-button">
                <!-- Prüfe, ob der Button-Text und der Button-Link gefüllt sind -->
                <?php if ( $leistungen_button_text && $leistungen_button_link ): ?>
                    <a href="<?php echo esc_url($leistungen_button_link); ?>" class="leistungen-button-text">
                        <?php echo esc_html($leistungen_button_text); ?>
                    </a>
                <?php endif; ?>
            </div>

        </div>
    </section>

<!-- Projekte Section -->
    <section>
        
    <div id="projects">

    <div class="font font-projekte">
        <h2>PROJEKTE</h2>
    </div>
        <div class="fp-container">
        <h2>projekte</h2>

        <?php
        // WP Query für die letzten 2 Projekte aus der Kategorie "projects"
        $args = array(
        'post_type' => 'post', 
        'posts_per_page' => 2, // Zeige die letzten 3 Projekte
        'category_name' => 'projects' // Achte darauf, dass die Kategorie "projects" korrekt vergeben ist
        );

        $projects_query = new WP_Query($args); ?>

        <div class="projects-loop-container">
            <?php 
            if($projects_query->have_posts()) :
                $counter = 0; // Zähler erstellen für styling

                while($projects_query->have_posts()) : $projects_query->the_post();
                    $counter++; // Zähler erhöhen
            ?>

            
                <div class="project-text-box">  
                    <div>
                        <h3><?php the_title(); ?></h3>
                        <?php the_excerpt(); ?>
                    </div>  
                </div>

                <div class="project-thumbnail-box <?php echo ($counter == 1) ? 'first-project' : ''; ?>">
                    <?php 
                    if (has_post_thumbnail()) {
                        the_post_thumbnail('medium'); // Anzeige des Vorschaubildes
                        } 
                    ?>
                </div>
            

            <?php 
                endwhile;
                wp_reset_postdata();
            else : ?>
            <p>Keine Projekte gefunden.</p>
            <?php endif; ?>
        </div>

        <div class="cta-button project-button-wrapper">
            <?php $fp_project_button_link = get_field('fp_project_button_link');
                  $fp_project_button_text = get_field('fp_project_button_text'); ?>
                <!-- Prüfe, ob der Button-Text und der Button-Link gefüllt sind -->
                <?php if ( $fp_project_button_text && $fp_project_button_link ): ?>
                    <a href="<?php echo esc_url($fp_project_button_link); ?>">
                        <?php echo esc_html($fp_project_button_text); ?>
                    </a>
            <?php endif; ?>
        </div>

        </div>
    </div>  
    
    </section>





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
// Footer einbinden
get_template_part( 'template-parts/footer' );
?>

<script>
    // Wähle das Element aus, das du animieren möchtest
    const target = document.querySelector('#slogan');

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

