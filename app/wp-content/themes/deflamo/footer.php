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
      <!-- Not sure if to remove or not yet <div class="company-links">
        <h2>Adress</h2>
        <ul>
          <li>Deflamo</li>
          <li>Fakturavägen 4</li>
          <li>SE-175 62 Järfalla</li>
          <li>Sweden</li>
          <li>+46-8-631 91 80</li>
        </ul>
      </div> -->
      <span class="bottomnav">
        <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
      </span>
      <div class="company-brand">
        <object type="image/svg+xml" data="<?php bloginfo('template_directory'); ?>/images/deflamo-logo-green.svg">Your browser does not support SVG</object>
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
