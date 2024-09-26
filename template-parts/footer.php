
    <footer>
        <div class="container main-footer">

            <aside class="footer-sidebar">
                <?php dynamic_sidebar( 'footer-widgets' ); ?>
            </aside>

            <nav class="nav-bar footer-nav">
                <?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
            </nav>
            <p>© 2024 Alexandra Staszewski</p>
        </div>
    </footer>

</div>
<?php wp_footer() ?>
</body>

</html>