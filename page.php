<?php
get_template_part( 'template-parts/header' );
?>

<main id="leistungen-page">

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
    
    
</main>

<?php get_template_part( 'template-parts/footer' ); ?>



