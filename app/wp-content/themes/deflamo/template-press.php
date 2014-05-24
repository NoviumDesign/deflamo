<?php
/*
Template Name: Press
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

			<div class="hero" style="<?php echo $hero_image; ?>">
				<div class="hero-container">
					<div class="hero-tagline">
						<h1><?php the_field('image_text'); ?></h1>
					</div>
					<div class="hero-icon">
						<object type="image/svg+xml" data="<?php bloginfo('template_directory'); ?>/icons/flamskyddande.svg">Your browser does not support SVG</object>
					</div>
				</div>
			</div>

			<div class="content-container">
				<div class="main-content">

					<iframe src="http://www.mynewsdesk.com/se/deflamo"></iframe>

				</div>

				<div class="sidebar">
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
