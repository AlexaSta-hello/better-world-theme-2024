<?php
get_template_part( 'template-parts/header' );
?>

<main id="leistungen-page" class="my-page">

    <div class="p-container">
        
        <div class="projects-wp-all">
            
            <div class="mytitle">
                <h1><?php the_title(); ?></h1>
            </div>
            <?php the_content(); ?>
        </div>
        
    </div>
    
    
</main>

<?php 
    get_template_part( 'template-parts/contact' );
    get_template_part( 'template-parts/footer' ); ?>



