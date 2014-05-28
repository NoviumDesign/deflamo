<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package _s
 */

get_header(); ?>

<?php
	// page image
	$thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'page_image');
	$page_image_url = $thumb['0'];
	$hero_image = $page_image_url ? 'background-image: url(' . $page_image_url . ')' : '';

	// side navbar  
	$parent_page = $post->post_parent ? $post->post_parent : $post->ID;
	$subpages = wp_list_pages('title_li=&child_of=' . $parent_page . '&echo=0');
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="hero" style="background-color:<?php the_field('hero_background_color'); ?>;<?php echo $hero_image; ?>">
				<div class="heropatternholder">
					<div class="hero-container">
						<div class="hero-tagline">
							<h1><?php the_field('image_text'); ?></h1>
						</div>
						<div class="hero-icon">
							<img src="<?php bloginfo('template_directory'); ?>/icons/flamskyddande.svg">
						</div>
					</div>
				</div>
			</div>

			<div class="content-container">
				<div class="main-content">

					<h1 class="entry-title"><?php //the_title(); ?></h1>

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'content', 'page' ); ?>

						<?php
							// If comments are open or we have at least one comment, load up the comment template
							if ( comments_open() || '0' != get_comments_number() ) :
								comments_template();
							endif;
						?>

					<?php endwhile; // end of the loop. ?>
				</div>

				<div class="sidebar">

					<?php if ($subpages) { ?>
						<div id="secondary">
							<aside>
								<h1><?php echo get_the_title($parent_page) ?></h1>
								<ul>
									<?php echo $subpages; ?>
								</ul>
							</aside>
						</div>
					<?php } ?>

					<?php get_sidebar(); ?>
					<ul class="contact">
						<li><object type="image/svg+xml" data="<?php bloginfo('template_directory'); ?>/icons/phone.svg">Your browser does not support SVG</object><span class="phone">08-631 91 80</span></li>
						<li class="email"><object type="image/svg+xml" data="<?php bloginfo('template_directory'); ?>/icons/mail.svg">Your browser does not support SVG</object><a href="mailto:info@deflamo.se">info@deflamo.se</a></li>
					</ul>
				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
