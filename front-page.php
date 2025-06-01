 <?php 
 /**
 * Template Name: Front page Template
 */
get_header(); ?>
<main class="site-content">
<div class="page-container">

    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();

            if ( has_post_thumbnail() ) {
                the_post_thumbnail('large', ['class' => 'featured-image']);
            }
            the_content();

        endwhile;
    else :
        echo '<p>No content found.</p>';
    endif;
    ?>
   </div>
   <!-- Close .page-container -->
</main>

<?php get_footer(); ?>

