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

			<div class="hero" style="background-color:<?php the_field('hero_background_color'); ?>;<?php echo $hero_image; ?>">
				<div class="heropatternholder">
					<div class="hero-container">
						<div class="hero-tagline">
							<h1><?php the_field('image_text'); ?></h1>
						</div>
						<div class="hero-icon">
							<img src="<?php the_field('hero_icon'); ?>">
						</div>
					</div>
				</div>
			</div>

			<div class="content-container">
				<div class="main-content">

					<script type="text/javascript" charset="utf-8" id="mnd-script"> document.domain = /([a-z0-9-]+\.((co|org|gov|com)\.\w{2}|\w+))$/i.exec(location.hostname)[0];
            (function(){var s=document.createElement("script");s.type="text/javascript";s.async=true;s.src="//deflamo.mynewsdesk.com/hosted_newsroom.js";var i=document.getElementsByTagName('script')[0];i.parentNode.insertBefore(s,i);})();
          </script>

				</div>

				<div class="sidebar">
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-kontakt') ) : ?>
					<?php endif; ?>
					<ul class="latest-news">
					  <?php $the_query = new WP_Query( 'showposts=4' ); ?>
					  <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
						  <li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a><br><?php echo substr(strip_tags($post->post_content), 0, 70 );?> [...]</li>
					  <?php endwhile;?>
					</ul>
					<ul class="contact">
						<li><img src="<?php bloginfo('template_directory'); ?>/icons/phone.svg"><span class="phone">08-631 91 80</span></li>
						<li class="email"><img src="<?php bloginfo('template_directory'); ?>/icons/mail.svg"><a href="mailto:info@deflamo.se">info@deflamo.se</a></li>
					</ul>
				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
