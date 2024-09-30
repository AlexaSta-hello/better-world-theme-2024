<?php
/* Template Name: Project Page */
get_template_part( 'template-parts/header' );
?>

<!-- Hier werden alle Events aus Beiträgen mit Kategorie event geladen -->

<main>

<section id="projects">
  <div class="container">
    <h1>Meine Projekt</h1>

    <?php
    // WP Query für alle Projekt-Posts
    $args = array(
      'post_type' => 'post', 
      'posts_per_page' => 10, 
      'category_name' => 'projects' // Kategorie in WP-Backend vergeben
    );

    $projects_query = new WP_Query($args);

    if($projects_query->have_posts()) :
      while($projects_query->have_posts()) : $projects_query->the_post();
    ?>

    <div class="project-item">
        <h2 class="project-title"><?php the_title(); ?></h2>
        <div class="project-content">
            <div class="project-thumbnail">
                <?php the_post_thumbnail() ?>
            </div>
            <p><?php the_excerpt(); ?></p>
            <a href="<?php the_permalink(); ?>" class="cta-button">Mehr erfahren</a>
        </div>
    </div>
      

    <?php
      endwhile;
      wp_reset_postdata(); else : ?>
        <p>Keine Projekte gefunden.</p>
    <?php endif; ?>

  </div>
</section>

</main>

<?php get_template_part( 'template-parts/footer' ); ?>
