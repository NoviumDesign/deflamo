<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package _s
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="footer-container">
      <div class="bottomnav">
        <?php wp_nav_menu( array( 'theme_location' => 'secondary' ) ); ?>
        <div class="company-links">
          <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-sidfot') ) : ?>
          <?php endif; ?>
        </div>
      </div>
      <div class="company-brand">
        <img src="<?php bloginfo('template_directory'); ?>/images/deflamo-logo-green.svg">
      </div>
      <div class="copyright">
        <p>Copyright © 2014 Deflamo. Alla rättigheter förbehålls.</p>
      </div>
    </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
