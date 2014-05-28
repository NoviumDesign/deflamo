<?php
/*
Template Name: Hem
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
							<img src="<?php bloginfo('template_directory'); ?>/icons/flamskyddande.svg">
						</div>
					</div>
				</div>
			</div>

			<div class="content-container">

				<div class="main-content">

					<div class="image-carousel clearfix">
						<div class="image active">
							<div class="text">1</div>
							<img class="orbit-image" src="<?php the_field('img1'); ?>" alt="" />
						</div>

						<div class="image">
							<div class="text">2</div>
							<img class="orbit-image" src="<?php the_field('img2'); ?>" alt="" />
						</div>

						<div class="image">
							<div class="text">3</div>
							<img class="orbit-image" src="<?php the_field('img3'); ?>" alt="" />
						</div>

						<div class="orbit-item trigger active">
							<h2><?php the_field('headline1'); ?></h2>
							<?php the_field('text1'); ?>
						</div>

						<div class="orbit-item trigger">
							<h2><?php the_field('headline2'); ?></h2>
							<?php the_field('text2'); ?>
						</div>

						<div class="orbit-item trigger">
							<h2><?php the_field('headline3'); ?></h2>
							<?php the_field('text3'); ?>
						</div>

						<!-- becouse of :last-child specific width -->
						<div class="orbit-item hide"></div>
					</div>

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
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-hem') ) : ?>
					<?php endif; ?>
					<ul class="latest-news">
					  <?php $the_query = new WP_Query( 'showposts=4' ); ?>
					  <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
						  <li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a><br><?php echo substr(strip_tags($post->post_content), 0, 70 );?>...</li>
					  <?php endwhile;?>
					</ul>
					<ul class="contact">
						<li><object type="image/svg+xml" data="<?php bloginfo('template_directory'); ?>/icons/phone.svg">Your browser does not support SVG</object><span class="phone">08-631 91 80</span></li>
						<li class="email"><object type="image/svg+xml" data="<?php bloginfo('template_directory'); ?>/icons/mail.svg">Your browser does not support SVG</object><a href="mailto:info@deflamo.se">info@deflamo.se</a></li>
					</ul>
				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
