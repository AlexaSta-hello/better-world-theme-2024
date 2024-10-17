
    <footer class="my-footer">
        
            <div class="footer-container">


                <div class="footer-widgets">
                    <?php dynamic_sidebar( 'footer-widgets' ); ?>
                </div>
         
                
            </div>

                
            <div class="footer-nav-content">
                    

                    <nav class="nav-bar footer-nav">
                        <?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
                    </nav>

                    <p class="copy">&copy; <?php echo date('Y'); ?>  BETTER WORLD</p>

                </div>
        
        
    </footer>

</div>
<?php wp_footer() ?>
</body>

</html>