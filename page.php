<?php
/**
 * The template for displaying all pages
 *
 * This template displays the page content along with optional breadcrumbs.
 *
 * @package CustomTheme
 */

get_header();
?>

<main role="main" class="site-content">
    <div class="page-container">

        <?php
        // Optional breadcrumbs - check if function exists
        if (function_exists('custom_breadcrumbs')) {
            custom_breadcrumbs();
        }
        ?>

        <?php
        // Start the Loop
        if (have_posts()) :
            while (have_posts()) : the_post();
        ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
                        <h1 class="entry-title"><?php the_title(); ?></h1>
                    </header>

                    <div class="entry-content">
                        <?php
                        // Output the page content safely
                        the_content();
                        ?>
                    </div>
                </article>
        <?php
            endwhile;
        else :
            // No content fallback
        ?>
            <p><?php esc_html_e('Sorry, no content available.', 'customtheme'); ?></p>
        <?php endif; ?>

    </div>
</main>

<?php get_footer(); ?>
