<?php
/**
 * The main template file
 *
 * This file is the fallback template that WordPress uses to display pages when
 * no more specific template matches a query.
 *
 * @package CustomTheme
 */
get_header(); ?>

<main role="main" class="site-main">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <article <?php post_class(); ?>>
                <h2>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h2>
                <div class="entry-summary">
                    <?php the_excerpt(); ?>
                </div>
            </article>
        <?php endwhile; ?>

        <div class="pagination">
            <?php the_posts_pagination(); ?>
        </div>

    <?php else : ?>
        <p><?php esc_html_e('No content found.', 'yourtheme'); ?></p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
