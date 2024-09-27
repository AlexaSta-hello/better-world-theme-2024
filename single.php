<?php
get_template_part( 'template-parts/header' );
?>

<main>

<div class="container">

    <article class="my-post-content" id="post-<?php the_ID() ?>">

        <?php if ( have_posts() ) :
            while ( have_posts() ) : the_post();
        ?>
        <header class="post-header">
            <h1 class="post-title"><?php the_title() ?></h1>
        </header>

        <div class="post-content">
            <!-- Beitragsbild -->
            <?php if (has_post_thumbnail()) : ?>
                <div class="post-thumbnail">
                 <?php the_post_thumbnail(); ?>   
                </div>
            <?php endif; ?>
            <!-- Veranstaltungtext -->
             <div class="post-description">
                <?php the_content(); ?>
             </div>
             <!-- Zusätzliche Felder für die Veranstaltung -->
            <div class="event-details">
                <p><strong>Datum:</strong> <?php the_field('event_date'); ?></p> <!-- Beispiel für ein Custom Field -->
                <p><strong>Ort:</strong> <?php the_field('event_ort'); ?></p> <!-- Beispiel für ein Custom Field -->
            </div>

            <!-- Call-to-Action Button oder Links -->
            <a href="<?php the_permalink(); ?>" class="cta-button">Mehr Informationen</a>
        </div>

    </article>
        <?php endwhile; endif; ?>
    

    <aside class="my-post-sidebar">
        <?php dynamic_sidebar( 'side-bar' ); ?>
    </aside>

</div>


</main>