<?php
/**
 * The template for displaying the site footer
 *
 * Contains the closing of the #content div and all footer elements.
 *
 * @package customTheme
 * @since 1.0.0
 */
?>
<footer class="site-footer" role="contentinfo">
    <div class="footer-container">

        <!-- Footer Logo -->
        <?php if ($logo = get_theme_mod('footer_logo')) : ?>
            <div class="footer-logo">
                <img 
                    src="<?php echo esc_url($logo); ?>" 
                    alt="<?php echo esc_attr(get_bloginfo('name') . ' logo'); ?>"
                >
            </div>
        <?php endif; ?>

        <!-- Social Media Icons -->
        <div class="footer-social">
            <?php
            $icons = [
                'facebook' => 'fab fa-facebook-f',
                'instagram' => 'fab fa-instagram',
                'x' => 'fa-brands fa-x-twitter'
            ];

            foreach ($icons as $platform => $icon_class) :
                $url = get_theme_mod("footer_{$platform}_link");
                if ($url) :
            ?>
                <a 
                    href="<?php echo esc_url($url); ?>" 
                    target="_blank" 
                    rel="noopener noreferrer" 
                    class="footer-icon"
                    aria-label="<?php echo esc_attr(ucfirst($platform)); ?>"
                >
                    <i class="<?php echo esc_attr($icon_class); ?>"></i>
                </a>
            <?php 
                endif;
            endforeach;
            ?>
        </div>

        <!-- Footer Text -->
        <div class="footer-text">
            <?php if ($line1 = get_theme_mod('footer_text_line_1')) : ?>
                <div><?php echo esc_html($line1); ?></div>
            <?php endif; ?>
            <?php if ($line2 = get_theme_mod('footer_text_line_2')) : ?>
                <div><?php echo esc_html($line2); ?></div>
            <?php endif; ?>
        </div>

    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
