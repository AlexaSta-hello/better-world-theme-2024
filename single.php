<?php
get_template_part( 'template-parts/header' );
?>

<main id="my-post">

<div class="p-container">

    <?php if ( have_posts() ) :
                while ( have_posts() ) : the_post();
        ?>

        <div id="post-<?php the_ID() ?>">

            <header class="post-header">
                <h1 class="post-title"><?php the_title() ?></h1>
            </header>

            <div class="s-container">
                <div class="my-post-content">
                    
                    <!-- WP-Content -->
                    <div class="post-description">
                        <?php the_content(); ?>

                    </div> 
                </div>


                <aside class="my-post-sidebar">
                    <?php dynamic_sidebar( 'side-widgets' ); ?>
                </aside>
            </div>   

        </div>

    <?php endwhile; endif; ?>


</div> 

</main>


<?php 
    get_template_part( 'template-parts/contact' );
    get_template_part( 'template-parts/footer' ); 
    ?>