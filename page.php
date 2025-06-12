<?php
/*
Template Name: カスタムページ
*/
get_header(); ?>

<div class="wrapper">
    <h1><?php the_title(); ?></h1>
    <div class="page-content">
        <?php the_content(); ?>
    </div>
</div>

<?php get_footer(); ?>
