<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="page-header">
    <div class="header-content">
        <a href="<?php echo home_url(); ?>"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/header_logo.jpg" alt="Diveto"></a>
        <nav>
            <?php
                wp_nav_menu([
                    'theme_location' => 'main-menu',
                    'menu_class' => 'main-nav',
                ]);
            ?>
            <div id="hamburger" class="hamburger"></div>
        </nav>
    </div>
</header>
