<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
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

			<div class="hero hero-news">
			</div>

			<div class="content-container">
				<div class="main-content news">

				<?php if ( have_posts() ) : ?>

					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php
							/* Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							get_template_part( 'content', get_post_format() );
						?>

					<?php endwhile; ?>

					<?php _s_paging_nav(); ?>

				<?php else : ?>

					<?php get_template_part( 'content', 'none' ); ?>

				<?php endif; ?>
				</div>


				<div class="sidebar">
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-nyheter') ) : ?>
					<?php endif; ?>
					<ul class="contact">
						<li><img src="<?php bloginfo('template_directory'); ?>/icons/phone.svg"><span class="phone">08-631 91 80</span></li>
						<li class="email"><img src="<?php bloginfo('template_directory'); ?>/icons/mail.svg"><a href="mailto:info@deflamo.se">info@deflamo.se</a></li>
					</ul>
				</div>

			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
