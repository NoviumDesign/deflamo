<?php
/**
 * The Template for displaying all single posts.
 *
 * @package _s
 */

get_header(); ?>

<?php
	// page image
	$thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'page_image');
	$page_image_url = $thumb['0'];
	$hero_image = $page_image_url ? 'background-image: url(' . $page_image_url . ')' : '';
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="hero" style="<?php echo $hero_image; ?>"></div>

			<div class="content-container">
				<div class="main-content">

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'content', 'single' ); ?>

						<?php _s_post_nav(); ?>

						<?php
							// If comments are open or we have at least one comment, load up the comment template
							if ( comments_open() || '0' != get_comments_number() ) :
								comments_template();
							endif;
						?>

					<?php endwhile; // end of the loop. ?>

				</div>

				<div class="sidebar">
					<section class="multiple-widget-container">
						<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-nyheter') ) : ?>
						<?php endif; ?>
					</section>
					<ul class="contact">
						<li><object type="image/svg+xml" data="<?php bloginfo('template_directory'); ?>/icons/phone.svg">Your browser does not support SVG</object><span class="phone">08-631 91 80</span></li>
						<li class="email"><object type="image/svg+xml" data="<?php bloginfo('template_directory'); ?>/icons/mail.svg">Your browser does not support SVG</object><a href="mailto:info@deflamo.se">info@deflamo.se</a></li>
					</ul>
				</div>

			</div>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>