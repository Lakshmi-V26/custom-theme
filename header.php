<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="site-header">
  <div class="site-header-container">

    <!-- Logo Left -->
    <div class="header-left">
      <?php if (has_custom_logo()) : ?>
        <?php the_custom_logo(); ?>
      <?php else : ?>
        <a href="<?php echo esc_url(home_url('/')); ?>" class="site-title">
          <?php echo esc_html(get_bloginfo('name')); ?>
        </a>
      <?php endif; ?>
    </div>

    <!-- Menu Center -->
    <nav class="header-center" role="navigation" aria-label="Primary Menu">
      <ul class="main-menu">
        <?php
        wp_nav_menu([
          'theme_location' => 'primary',
          'items_wrap' => '%3$s', // Output only <li> elements
          'container' => false,
          'fallback_cb' => false,
        ]);
        ?>
        <!-- Mobile-only Register Button inside dropdown -->
        <li class="mobile-register">
          <a href="/register" class="register-button">Register</a>
        </li>
      </ul>
    </nav>

    <!-- Right: Desktop Register + Hamburger -->
    <div class="header-right">
      <!-- Desktop Register Button -->
      <a href="/register" class="register-button">Register</a>

      <!-- Hamburger Toggle (mobile only) -->
      <button class="menu-toggle" aria-label="Toggle Menu" aria-expanded="false" aria-controls="primary-menu">
        <span class="hamburger"></span>
      </button>
    </div>

  </div>
</header>
