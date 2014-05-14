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

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="hero">
				<div class="hero-container">
					<div class="hero-tagline">
						<h1>Välkommen till den nya generationens flamskyddsmedel</h1>
					</div>
					<div class="hero-icon">
						<img src="<?php bloginfo('template_directory'); ?>/images/flamskydd.png">
					</div>
				</div>
			</div>

			<div class="content-container">
				<div class="main-content">

					<div class="image-carousel">

						<div class="image active">
							<div class="text">1</div>
							<img class="orbit-image" src="http://placehold.it/1200x300">
						</div>
						<div class="image">
							<div class="text">2</div>
							<img class="orbit-image" src="http://placehold.it/1199x300">
						</div>
						<div class="image">
							<div class="text">3</div>
							<img class="orbit-image" src="http://placehold.it/1198x300">
						</div>

						<div class="orbit-item trigger active">
							<h2>Hög Prestanda</h2>
							<p>Du vet väl att du får rabbat om du tecknar elavtal på webben.Du vet väl att du får rabbat om du tecknar elavtal på webben</p>
						</div>
						<div class="orbit-item trigger">
							<h2>Förnya ditt elavtal</h2>
							<p>Du vet väl att du får rabbat om du tecknar elavtal på webben.Du vet väl att du får rabbat om du tecknar elavtal på webben</p>
						</div>
						<div class="orbit-item trigger">
							<h2>Ska du flytta?</h2>
							<p>Du vet väl att du får rabbat om du tecknar elavtal på webben.Du vet väl att du får rabbat om du tecknar elavtal på webben</p>
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
