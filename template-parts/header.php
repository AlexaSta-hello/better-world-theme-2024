<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Modern Pop Site Template">
    <meta name="author" content="https://#">
    <title><?php bloginfo('title'); ?></title>
    <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>
    
<div class="main-wrapper">

    <header>

        <div class="container my-header">


            <nav class="nav-bar main-nav">
                <?php wp_nav_menu( array(
                    'theme_location' => 'header-menu',
                    'container_class' => 'my-header-menu') ); ?>    
            </nav>

            

            <!-- Header-Widgets (für Social Media Icons) -->
            <div class="my-header-widgets">
                <?php dynamic_sidebar('header-social'); ?>
            </div> 
        </div>
    </header>
    