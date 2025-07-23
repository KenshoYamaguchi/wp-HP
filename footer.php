<footer>
    <div class="footer">
        <p><small>&copy;株式会社Diveto</small></p>
        <?php
            wp_nav_menu( array(
            'theme_location' => 'footer-menu',
            'container' => 'nav',
            'container_class' => 'footer-nav',
            ) );
        ?>


    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
