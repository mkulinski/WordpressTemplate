<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MK_Blog
 */

?>

</div><!-- #content -->
</div>
</div>

<div class="footer-area full">
    <div class="main-page">
        <footer id="colophon" class="site-footer inner" role="contentinfo">
            <div class="site-info">
                <a href="<?php echo esc_url(__('https://wordpress.org/', 'mk_blog')); ?>"><?php printf(esc_html__('Proudly powered by %s', 'mk_blog'), 'WordPress'); ?></a>
                <span class="sep"> | </span>
                <?php printf(esc_html__('Theme: %1$s by %2$s.', 'mk_blog'), 'mk_blog', '<a href="http://michaelkulinski.com" rel="designer">Michael Kulinski</a>'); ?>
            </div><!-- .site-info -->
        </footer><!-- #colophon -->
    </div>
</div>

<?php wp_footer(); ?>

</body>
</html>
