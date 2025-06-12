<?php get_header(); ?>

<div class="shohin wrapper">
    <h2 class="shohin-title">AI製品</h2>
</div>

<div class="shohin-grid">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <a href="<?php the_permalink(); ?>" class="item-link">
        <div class="item">
            <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('medium'); ?>
            <?php endif; ?>
            <h3><?php the_title(); ?></h3>
            <p><?php echo wp_trim_words(get_the_content(), 20, '…'); ?></p>
        </div>
    </a>
<?php endwhile; endif; ?>
</div>


<?php get_footer(); ?>
