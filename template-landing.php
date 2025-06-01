<?php 
/**
 * Template Name: Landing Page Template
 *
 * @package CustomTheme
 */

get_header();
?>

<?php
// Display hero image from options with proper escaping
$hero = get_option('landing_hero_image');
if ($hero) : ?>
    <div class="landing-hero">
        <div class="landing-hero__image" style="background-image: url('<?php echo esc_url($hero); ?>');"></div>
    </div>
<?php endif; ?>

<div class="breadcrumbs">
    <?php
    if (function_exists('custom_breadcrumbs')) {
        custom_breadcrumbs();
    }
    ?>
</div>

<main role="main" class="site-content">
    <div class="page-container">

        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>

                <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('large', ['class' => 'featured-image', 'alt' => the_title_attribute(['echo' => false])]); ?>
                <?php endif; ?>

                <div class="entry-content">
                    <?php the_content(); ?>
                </div>

            <?php endwhile; ?>
        <?php else : ?>
            <p><?php esc_html_e('No content found.', 'customtheme'); ?></p>
        <?php endif; ?>

       

    </div>
</main>

<?php get_footer(); ?>
