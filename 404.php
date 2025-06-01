<?php get_header(); ?>

<div class="container">
  <div class="error-404">
    <h1>Page Not Found</h1>
    <p>Sorry, the page you’re looking for doesn’t exist or has been moved.</p>

    <h3>Try searching the site:</h3>
    <?php get_search_form(); ?>

    <p>Or go back to the <a href="<?php echo home_url(); ?>">homepage</a>.</p>
  </div>
</div>

<?php get_footer(); ?>
