<?php get_header(); ?>

<div class="jisseki-single wrapper">
    <h2 class="jisseki-title"><?php the_title(); ?></h2>

    <?php if (has_post_thumbnail()) : ?>
        <div class="jisseki-media">
            <?php the_post_thumbnail('large'); ?>
        </div>
    <?php endif; ?>

    <div class="jisseki-content">
        <?php the_content(); ?>
    </div>
</div>

<?php get_footer(); ?>
