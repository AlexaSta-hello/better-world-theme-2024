<?php
// Header einbinden aus dem template-parts-Ordner
get_template_part( 'template-parts/header' );
?>


<main>
<div class="startseite">

    

<!-- Banner Section -->
    <section id="banner">

            

            <div class="banner-wrapper">
                
                <?php the_content();?>
                <div class="cta-button banner-button">
                   
                </div>

            </div>
    
    </section>


<!-- Slogan Section -->
    <section class="slogan">
        <!-- Hole den Titel aus ACF -->
        <div class="slogan-container">
            
        </div>
    </section>



<!-- Leistungen Section -->   
    
    <section id="leistungen">
    
    <div class="font font-leistungen">
        <h2>LEISTUNGEN</h2>
    </div>
    

        <div class="leistungen-container fp-container">
           

            <div class="text-field">
                
            </div>

            <div class="leistungen-image">
               
            </div>

            <div class="cta-button">
               
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
           
            <div class="about-text-wrapper">


            </div>

            <div class="cta-button about-button">
                    
            </div>

            <div class="about-image-wrapper">
                
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

