<?php get_header(); ?>

<div class="shohin-single wrapper">
    <h2 class="shohin-title"><?php the_title(); ?></h2>

    <?php if (has_post_thumbnail()) : ?>
        <div class="shohin-media">
            <?php the_post_thumbnail('large'); ?>
        </div>
    <?php endif; ?>

    <div class="shohin-content">
        <?php the_content(); ?>
    </div>
</div>

<?php get_footer(); ?>