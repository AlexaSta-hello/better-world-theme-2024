<?php
/* Template Name: Project Page */
get_template_part( 'template-parts/header' );
?>

<main id="projects-page">

  <div class="p-container">
  
    <div class="projects-wp-all">
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>
    </div>
  </div>


      <!-- Slogan Section -->
  <section id="slogan-projects">
      <!-- Hole den Titel aus ACF -->
      <div class="slogan-container-projects">
          <div class="schau" id="schau">
              <?php $slogan1_projects_text = get_field('slogan1_projects_text', get_the_ID()); ?>
              <h2><?php if( $slogan1_projects_text ): echo esc_html($slogan1_projects_text); endif; ?></h2>
          </div>
          <div class="inspiration" id="inspiration">
              <?php $slogan2_projects_text = get_field('slogan2_projects_text', get_the_ID()); ?>
              <h2><?php if( $slogan2_projects_text ): echo esc_html($slogan2_projects_text); endif; ?></h2>
          </div>
      </div>
  </section>
        
  
  <!-- Hier werden alle Events aus Beiträgen mit Kategorie projects geladen -->
   
  <div class="p-container">
      <?php
      // WP Query für alle Projekt-Posts
      $args = array(
        'post_type' => 'post', 
        'posts_per_page' => 10, 
        'category_name' => 'projects' // Kategorie in WP-Backend vergeben
      );

      $projects_query = new WP_Query($args);
        ?>

      <div class="projects-loop-container">
        <?php if($projects_query->have_posts()) :
          while($projects_query->have_posts()) : $projects_query->the_post();
        ?>

          <div>
            <div class="project-text-box">
              <a href="<?php the_permalink(); ?>">
                <div>
                  <h2><?php the_title(); ?></h2>
                  <?php the_excerpt(); ?>
                </div>
                
              </a>
              </div>

              <div class="project-thumbnail-box">
                <?php 
                if (has_post_thumbnail()) {
                    the_post_thumbnail('medium'); // Anzeige des Vorschaubildes
                  } 
                ?>
              </div>
          </div>
            
          
        <?php
          endwhile; ?>
      </div>

        <?php  wp_reset_postdata(); else : ?>
            <p>Keine Projekte gefunden.</p>
        <?php endif; ?>
    </div>  
   

  </div>
    
    
</main>

<?php get_template_part( 'template-parts/footer' ); ?>