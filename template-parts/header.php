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
    


    <header>

        <div class="container my-header">

            <div class="my-header-content">

                <div class="bloginfo">
                    <?php 
                        if ( function_exists( 'the_custom_logo' ) ) {
                            the_custom_logo();  
                        } else {
                            bloginfo('title');  
                        }
                    ?>
                </div>
                
               

                <div class="nav-bar burger-menu">☰</div>
                 
                <nav> 
                    <div class="nav-bar">
                        <?php wp_nav_menu( array(
                            'theme_location' => 'header-menu',
                            'container_class' => 'my-header-menu') ); 
                            ?>
                    </div>           
                </nav> 

            </div>
        </div>
    </header>

    <script>
    document.querySelector('.burger-menu').addEventListener('click', function() {
    var menu = document.querySelector('.my-header-menu');
    menu.classList.toggle('active');
    document.querySelector('.my-header').classList.toggle('active');
    });
    </script>

<div class="main-wrapper">
    