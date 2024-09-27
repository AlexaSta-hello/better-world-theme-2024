<?php
/* Template Name: Events Page */
get_template_part( 'template-parts/header' );
?>

<!-- Hier werden alle Events aus Beiträgen mit Kategorie event geladen -->

<main>

<section id="events">
  <div class="container">
    <h1>Unsere Veranstaltungen</h1>

    <?php
    // WP Query für alle Veranstaltungs-Posts
    $args = array(
      'post_type' => 'post', 
      'posts_per_page' => 10, 
      'category_name' => 'events' // Kategorie in WP-Backend vergeben
    );

    $events_query = new WP_Query($args);

    if($events_query->have_posts()) :
      while($events_query->have_posts()) : $events_query->the_post();
    ?>

    <div class="event-item">
        <h2 class="event-title"><?php the_title(); ?></h2>
        <div class="event-content">
            <div class="event-thumbnail">
                <?php the_post_thumbnail() ?>
            </div>
            <p><?php the_excerpt(); ?></p>
            <a href="<?php the_permalink(); ?>" class="cta-button">Mehr erfahren</a>
        </div>
    </div>
      

    <?php
      endwhile;
      wp_reset_postdata(); else : ?>
        <p>Keine Veranstaltungen gefunden.</p>
    <?php endif; ?>

  </div>
</section>

</main>

<?php get_template_part( 'template-parts/footer' ); ?>
