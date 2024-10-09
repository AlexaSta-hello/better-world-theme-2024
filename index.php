<?php
// Header einbinden aus dem template-parts-Ordner
get_template_part( 'template-parts/header' );
?>

<section id="banner">

    <div class="banner-wrapper">
    
        <?php the_content();?>

    </div>

</section>

<?php
// Footer einbinden
get_template_part( 'template-parts/footer' );
?>